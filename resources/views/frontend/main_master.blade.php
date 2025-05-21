<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <meta name="robots" content="none">
    <meta name="googlebot" content="none"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <!-- Required meta tags -->
    <meta charset="utf-8">
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

    <title> @yield('title') </title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/SpinKit/spinkit.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('frontend.body.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->



    <!-- ########## START: HEAD PANEL ########## -->
    @include('frontend.body.header')
    <!-- ########## END: HEAD PANEL ########## -->



    <!-- ########## START: MAIN PANEL ########## -->
    @yield('content')
    <!-- ########## END: MAIN PANEL ########## -->

    @php
      $prefix = Request::route()->getPrefix();
      $route = Route::current()->getName();
    @endphp

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
    <script src="{{ asset('backend/js/starlight.js') }}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>

    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>



    <!-- BASIC MODAL -->
    {{-- <div id="modaldemo1" class="modal fade">
      <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้งานเบื้องต้น</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">เงื่อนไขการใช้บริการ</h4>
            <p class="mg-b-5">1. ผู้ใช้บริการที่ส่งคำขอยืมหนังสือ เวลา 7.30 - 12.00 น. สามารถรับหนังสือได้ในช่วงบ่ายในวันนั้นๆ</p>
            <p class="mg-b-5">2 .ผู้ใช้บริการที่ส่งคำขอยืมหนังสือ หลังเวลา 12.00 น. สามารถมารับหนังสือได้ในวันถัดไป</p>
          </div>
          <hr>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">ขั้นตอนการใช้บริการ</h4>
            <p class="mg-b-5">1. ผู้ใช้บริการสืบค้นข้อมูลทรัพยากรสารสนเทศของหอสมุดกลางจากระบบสืบค้น OPAC ที่ : <a href="https://opac.sru.ac.th" target="_blank" class="tx-inverse hover-primary">>> OPAC <<</a></p>
            <p class="mg-b-5">2. ผู้ใช้บริการกรอกรายละเอียดในแบบฟอร์มการยืมให้ครบถ้วน</p>
            <p class="mg-b-5">3. เจ้าหน้าที่ตรวจสอบและติดต่อกลับทางโทรศัพท์เพื่อยืนยันคำขอยืม</p>
            <p class="mg-b-5">4.ผู้ใช้บริการรับหนังสือตามวันเวลาที่นัดหมายบริเวณหน้าหอสมุดกลาง</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i class="icon ion-close"> </i> ปิดหน้าต่างนี้</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal --> --}}



    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      })
    </script>

    @if ($route == 'order.view')

    @else
      <script type="text/javascript">
        $(window).load(function() {
            $('#modaldemo1').modal('show');
        });
      </script>
    @endif

    <!-- Pusher -->
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Pusher
        const pusher = new Pusher('{{ config("broadcasting.connections.pusher.key") }}', {
            cluster: '{{ config("broadcasting.connections.pusher.options.cluster") }}'
        });

        // Subscribe to channel
        const channel = pusher.subscribe('orders');

        // Keep track of notifications
        let notifications = [];

        // Listen for events
        channel.bind('new-order', function(data) {
            // Add to notifications array
            notifications.push(data.order);
            updateNotificationUI();
        });

        function updateNotificationUI() {
            const badge = document.getElementById('notification-badge');
            const counter = document.getElementById('notification-count');
            const list = document.getElementById('notification-list');

            // Update badge and counter
            if (notifications.length > 0) {
                badge.classList.remove('d-none');
                counter.textContent = `${notifications.length} การแจ้งเตือนใหม่`;
            }

            // Update list
            list.innerHTML = notifications.map(order => `
                <li class="notification-item" data-order-id="${order.id}">
                    <a href="/home/orders/list/${order.id}" class="media-list-link">
                        <div class="media pd-x-20 pd-y-15">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">
                                    <strong class="tx-medium tx-gray-800">
                                        ${order.firstname} ${order.lastname}
                                    </strong>
                                    <span>ได้ส่งรายการยืมใหม่</span>
                                </p>
                                <span class="tx-12">เมื่อสักครู่</span>
                                <p class="tx-12 mg-t-5">คณะ: ${order.faculty.faculty_name_th}</p>
                            </div>
                        </div>
                    </a>
                </li>
            `).join('');
        }

        // Clear notifications when dropdown is closed
        $('.dropdown').on('hidden.bs.dropdown', function() {
            notifications = [];
            updateNotificationUI();
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
    </script>

  </body>
</html>
