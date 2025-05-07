<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        /* CSS ที่มีอยู่เดิม */
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }

        /* เพิ่ม CSS ใหม่ */
        body {
            background-color: #f8fafc;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #4a5568;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #718096;
        }

        /* สไตล์สำหรับปุ่ม */
        .button {
            display: inline-block;
            background-color: #3490dc;
            color: #ffffff !important;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .button:hover {
            background-color: #2779bd;
        }

        /* สไตล์สำหรับรายการยืม */
        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .order-table th, .order-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .order-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .order-info {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #3490dc;
        }

        .order-info p {
            margin: 5px 0;
        }

        .highlight {
            color: #3490dc;
            font-weight: bold;
        }
    </style>
</head>

<body
    style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -webkit-text-size-adjust: none; background-color: #f8fafc; color: #718096; height: 100%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;">
    <div class="container">
        <div class="header">
            <h1>หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี</h1>
        </div>
        <div class="content">
            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation"
                style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; background-color: #ffffff; border-color: #e8e5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 auto; padding: 0; width: 570px;">
                <tr>
                    <td class="content-cell"
                        style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; max-width: 100vw; padding: 32px;">
                        <h2>รายการยืมออนไลน์</h2>
                        <p>เรียน คุณ<span class="highlight">{{ $order[0]['order']['firstname'] ?? '' }} {{ $order[0]['order']['lastname'] ?? '' }}</span></p>
                        <p>
                            ขอบคุณสำหรับการใช้บริการยืมออนไลน์ของหอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี
                            ระบบได้รับรายการยืมของท่านเรียบร้อยแล้ว ท่านสามารถตรวจสอบรายละเอียดการยืมได้ตามด้านล่างนี้
                        </p>

                        <div class="order-info">
                            <p><strong>เลขที่รายการ:</strong> {{ $order[0]['order']['invoice_no'] ?? '-' }}</p>
                            <p><strong>วันที่ทำรายการ:</strong> {{ \Carbon\Carbon::parse($order[0]['order']['created_at'] ?? now())->format('d/m/Y H:i') }}</p>
                            <p><strong>สถานะ:</strong> รอเจ้าหน้าที่ยืนยัน</p>
                        </div>

                        <!-- เพิ่มปุ่มเชื่อมโยงไปยังรายละเอียดการยืม -->
                        <div style="text-align: center;">
                            <a href="{{ $order_url ?? '#' }}" class="button" target="_blank">
                                ตรวจสอบรายละเอียดการยืม
                            </a>
                        </div>

                        <h3>รายการหนังสือที่ยืม</h3>
                        <table class="order-table">
                            <tr>
                                <th style="width: 5%;">ลำดับ</th>
                                <th style="width: 40%;">ชื่อเรื่อง</th>
                                <th style="width: 30%;">ผู้แต่ง</th>
                                <th style="width: 25%;">เลขเรียกหนังสือ</th>
                            </tr>
                            @php $i = 1; @endphp
                            @foreach ($order as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->callnum }}</td>
                                </tr>
                            @endforeach
                        </table>

                        <div style="margin-top: 30px; border-top: 1px solid #e8e5ef; padding-top: 20px;">
                            <p><strong>หมายเหตุ:</strong></p>
                            <ol>
                                <li>เจ้าหน้าที่จะตรวจสอบและจัดเตรียมหนังสือตามรายการที่ท่านยืม</li>
                                <li>ท่านสามารถตรวจสอบสถานะการดำเนินการได้ที่ลิงก์ด้านบน</li>
                                <li>หากมีคำถามหรือต้องการความช่วยเหลือเพิ่มเติม สามารถติดต่อได้ที่หอสมุดกลาง โทร. 0-7791-3333</li>
                            </ol>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>© {{ date('Y') }} SRU Central Library. All rights reserved.</p>
            <p>หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี</p>
        </div>
    </div>
</body>

</html>
