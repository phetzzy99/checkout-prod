<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SRU Checkout Online">
    <meta name="twitter:description" content="SRU Checkout Online">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="SRU Checkout Online">
    <meta property="og:description" content="SRU Checkout Online">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="SRU Checkout Online">
    <meta name="author" content="ThemePixels">

    <title>@yield('title') </title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('admin.body.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->



    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.body.header')
    <!-- ########## END: HEAD PANEL ########## -->



    <!-- ########## START: MAIN PANEL ########## -->
    @yield('admin')
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('backend/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('backend/js/starlight.js') }}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- เพิ่มใน admin_master.blade.php ก่อนปิด </body> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- เพิ่มใน admin_master.blade.php ก่อนปิด </body> -->
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Pusher
            const pusher = new Pusher('{{ config("broadcasting.connections.pusher.key") }}', {
                cluster: '{{ config("broadcasting.connections.pusher.options.cluster") }}'
            });

            // Subscribe to channel
            const channel = pusher.subscribe('orders');

            // Listen for events
            channel.bind('new-order', function(data) {
                // แสดงการแจ้งเตือนบนเบราว์เซอร์
                requestAndShowNotification(
                    data.notification.title,
                    data.notification.message
                );

                // อัพเดทรายการแจ้งเตือนในเมนู
                loadNotifications();

                // แสดง Toast notification
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'info',
                    title: data.notification.message,
                    showConfirmButton: false,
                    timer: 30000
                });
            });

            // ฟังก์ชันขอสิทธิ์และแสดงการแจ้งเตือน
            function requestAndShowNotification(title, message) {
                // ตรวจสอบว่าเบราว์เซอร์รองรับการแจ้งเตือนหรือไม่
                if (!("Notification" in window)) {
                    alert("เบราว์เซอร์นี้ไม่รองรับการแจ้งเตือน");
                    return;
                }

                // ถ้าได้รับอนุญาตแล้ว แสดงการแจ้งเตือนได้เลย
                if (Notification.permission === "granted") {
                    createNotification(title, message);
                }
                // ถ้ายังไม่เคยขอสิทธิ์
                else if (Notification.permission !== "denied") {
                    Notification.requestPermission().then(function (permission) {
                        if (permission === "granted") {
                            createNotification(title, message);
                        }
                    });
                }
            }

            // ฟังก์ชันสร้างการแจ้งเตือน
            function createNotification(title, message) {
                const notification = new Notification(title, {
                    body: message,
                    icon: '/path/to/icon.png', // เพิ่ม icon ตามต้องการ
                });

                // เมื่อคลิกที่การแจ้งเตือน
                notification.onclick = function(event) {
                    event.preventDefault();
                    window.focus();
                    this.close();
                };

                // ปิดการแจ้งเตือนอัตโนมัติหลัง 5 วินาที
                setTimeout(() => {
                    notification.close();
                }, 50000);
            }
        });
    </script>

    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
      }
      @endif
    </script>


  </body>
</html>
