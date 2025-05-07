<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StaffsExport;
use App\Imports\StaffsImport;

class StaffController extends Controller
{
    public function StaffView()
    {
        $staffs = Staff::withCount(['confirmations' => function ($query) {
            $query->where('is_read', true);
        }])->latest()->get();

        return view('backend.staff.staff_view',compact('staffs'));
    }

    public function StaffStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ],[
            'name.required' => 'กรุณาระบุชื่อเจ้าหน้าที่',
            'status.required' => 'กรุณาระบุสถานะ',
            'status.in' => 'สถานะต้องเป็น active หรือ inactive เท่านั้น',
        ]);

        Staff::create([
            'name' => $request->name,
            'position' => $request->position,
            'department' => $request->department,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'เพิ่มข้อมูลเจ้าหน้าที่สำเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function StaffEdit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('backend.staff.staff_edit',compact('staff'));
    }

    public function StaffUpdate(Request $request)
    {
        $staff_id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ],[
            'name.required' => 'กรุณาระบุชื่อเจ้าหน้าที่',
            'status.required' => 'กรุณาระบุสถานะ',
            'status.in' => 'สถานะต้องเป็น active หรือ inactive เท่านั้น',
        ]);

        Staff::findOrFail($staff_id)->update([
            'name' => $request->name,
            'position' => $request->position,
            'department' => $request->department,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'แก้ไขข้อมูลเจ้าหน้าที่สำเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->route('all.staff')->with($notification);
    }

    public function StaffDelete($id)
    {
        // ตรวจสอบว่าเจ้าหน้าที่มีการใช้งานในการยืนยันแจ้งเตือนหรือไม่
        $usedInNotifications = Notification::where('confirmed_by', $id)->exists();

        if ($usedInNotifications) {
            $notification = array(
                'message' => 'ไม่สามารถลบข้อมูลได้ เนื่องจากมีการใช้งานในระบบแจ้งเตือน',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }

        Staff::findOrfail($id)->delete();

        $notification = array(
            'message' => 'ลบข้อมูลเจ้าหน้าที่สำเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function exportStaff()
    {
        return Excel::download(new StaffsExport, 'staffs.xlsx');
    }

    public function importForm()
    {
        return view('backend.staff.staff_import');
    }

    public function importStaff(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);

        Excel::import(new StaffsImport, $request->file('file'));

        $notification = array(
            'message' => 'นําเข้าข้อมูลเจ้าหน้าที่สําเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->route('all.staff')->with($notification);
    }
}
