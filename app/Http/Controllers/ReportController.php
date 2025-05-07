<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Models\Order;
use App\Models\Staff;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReportController extends Controller
{
    public function ReportView(){

        $staffs = Staff::where('status', 'active')->get();
        return view('backend.report.report_view', compact('staffs'));

    } // end method

    public function ReportByFilter(Request $request){

        $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'month' => 'nullable|numeric|min:1|max:12',
            'year' => 'nullable|numeric|min:2000|max:2100',
            'staff_id' => 'nullable|exists:staff,id',
        ], [
            'start_date.date' => 'กรุณาเลือกวันที่เริ่มต้นให้ถูกต้อง',
            'end_date.date' => 'กรุณาเลือกวันที่สิ้นสุดให้ถูกต้อง',
            'end_date.after_or_equal' => 'วันที่สิ้นสุดต้องมากกว่าหรือเท่ากับวันที่เริ่มต้น',
            'month.numeric' => 'กรุณาเลือกเดือนให้ถูกต้อง',
            'year.numeric' => 'กรุณาเลือกปีให้ถูกต้อง',
            'staff_id.exists' => 'เจ้าหน้าที่ที่เลือกไม่มีในระบบ',
        ]);

        $query = Order::with(['faculty', 'patrontype', 'orderItems', 'notifications' => function($q) {
            $q->with('staff');
        }]);

        //กรองตามวันที่
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // กรองตามเดือน
        if ($request->filled('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // กรองตามปี
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // กรองตามเจ้าหน้าที่ผู้ยืนยัน
        if ($request->filled('staff_id')) {
            $query->whereHas('notifications', function ($q) use ($request) {
                $q->where('confirmed_by', $request->staff_id);
            });
        }

        $orders = $query->orderBy('created_at', 'DESC')->get();

        // สร้างข้อมูลสรุป
        $summary = [
            'total_orders' => $orders->count(),
            'total_items' => $orders->sum(function ($order) {
                return $order->orderItems->count();
            }),
            'by_faculty' => $orders->groupBy('faculty.faculty_name_th')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_patron_type' => $orders->groupBy('patrontype.patron_type_name')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_status' => $orders->groupBy('status')
                ->map(function ($items) {
                    return $items->count();
                }),
        ];

        $staffs = Staff::where('status', 'active')->get();
        $startDate = $request->filled('start_date') ? Carbon::parse($request->start_date) : null;
        $endDate = $request->filled('end_date') ? Carbon::parse($request->end_date) : null;
        $selectedMonth = $request->month;
        $selectedYear = $request->year;
        $selectedStaffId = $request->staff_id;

        return view('backend.report.report_show', compact(
            'orders',
            'summary',
            'staffs',
            'startDate',
            'endDate',
            'selectedMonth',
            'selectedYear',
            'selectedStaffId'
        ));
    }

    public function DownloadReportPDF(Request $request)
    {
        $query = Order::with(['faculty', 'patrontype', 'orderItems', 'notifications' => function($q) {
            $q->with('staff');
        }]);

        // กรองตามวันที่
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // กรองตามเดือน
        if ($request->filled('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // กรองตามปี
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // กรองตามเจ้าหน้าที่ผู้ยืนยัน
        if ($request->filled('staff_id')) {
            $query->whereHas('notifications', function ($q) use ($request) {
                $q->where('confirmed_by', $request->staff_id);
            });
        }

        $orders = $query->orderBy('created_at', 'DESC')->get();

        // สร้างข้อมูลสรุป
        $summary = [
            'total_orders' => $orders->count(),
            'total_items' => $orders->sum(function ($order) {
                return $order->orderItems->count();
            }),
            'by_faculty' => $orders->groupBy('faculty.faculty_name_th')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_patron_type' => $orders->groupBy('patrontype.patron_type_name')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_status' => $orders->groupBy('status')
                ->map(function ($items) {
                    return $items->count();
                }),
        ];

        $startDate = $request->filled('start_date') ? Carbon::parse($request->start_date) : null;
        $endDate = $request->filled('end_date') ? Carbon::parse($request->end_date) : null;
        $selectedMonth = $request->month;
        $selectedYear = $request->year;
        $selectedStaffId = $request->staff_id;

        $pdf = PDF::loadView('backend.report.report_pdf', compact(
            'orders',
            'summary',
            'startDate',
            'endDate',
            'selectedMonth',
            'selectedYear',
            'selectedStaffId'
        ))->setPaper('a4', 'landscape');

        // สร้างชื่อไฟล์
        $filename = 'รายงานการยืม_';
        if ($startDate && $endDate) {
            $filename .= $startDate->format('d-m-Y') . '_ถึง_' . $endDate->format('d-m-Y');
        } elseif ($selectedMonth && $selectedYear) {
            $filename .= 'เดือน_' . $selectedMonth . '_ปี_' . $selectedYear;
        } elseif ($selectedYear) {
            $filename .= 'ปี_' . $selectedYear;
        } else {
            $filename .= date('d-m-Y');
        }
        $filename .= '.pdf';

        return $pdf->download($filename);
    }

    public function DownloadReportExcel(Request $request)
    {
        $query = Order::with(['faculty', 'patrontype', 'orderItems', 'notifications' => function($q) {
            $q->with('staff');
        }]);

        // กรองตามวันที่
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // กรองตามเดือน
        if ($request->filled('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // กรองตามปี
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // กรองตามเจ้าหน้าที่ผู้ยืนยัน
        if ($request->filled('staff_id')) {
            $query->whereHas('notifications', function ($q) use ($request) {
                $q->where('confirmed_by', $request->staff_id);
            });
        }

        $orders = $query->orderBy('created_at', 'DESC')->get();

        // สร้างชื่อไฟล์
        $filename = 'รายงานการยืม_';
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);
            $filename .= $startDate->format('d-m-Y') . '_ถึง_' . $endDate->format('d-m-Y');
        } elseif ($request->filled('month') && $request->filled('year')) {
            $filename .= 'เดือน_' . $request->month . '_ปี_' . $request->year;
        } elseif ($request->filled('year')) {
            $filename .= 'ปี_' . $request->year;
        } else {
            $filename .= date('d-m-Y');
        }
        $filename .= '.xlsx';

        return Excel::download(new OrdersExport($orders), $filename);
    }
}
