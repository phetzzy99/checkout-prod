<style>
    /* Notification Styles */
    .notification-dropdown {
        min-width: 350px;
        padding: 0;
        border: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
    }

    .notification-header {
        background-color: #0866C6;
        color: white;
        padding: 15px 20px;
        border-radius: 4px 4px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .notification-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        margin-right: 15px;
    }

    .notification-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #dc3545;
        color: white;
        border-radius: 50%;
        min-width: 18px;
        height: 18px;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .notification-item {
        padding: 12px 20px;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .notification-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }

    .notification-item.unread {
        background-color: #f0f8ff;
        border-left: 4px solid #0866C6;
    }

    .notification-content {
        display: flex;
        align-items: center;
    }

    .notification-body {
        flex: 1;
    }

    .notification-title {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .notification-meta {
        font-size: 12px;
        color: #95a5a6;
    }

    .notification-footer {
        padding: 10px 20px;
        text-align: center;
        border-top: 1px solid #f0f0f0;
        background-color: #f8f9fa;
    }

    .view-all-link {
        color: #0866C6;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .view-all-link:hover {
        color: #064785;
    }
</style>

<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->

    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>
                    @php
                        $unreadCount = \App\Models\Notification::where('is_read', false)->count();
                    @endphp
                    @if($unreadCount > 0)
                        <span class="notification-badge" id="notification-count">{{ $unreadCount }}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <!-- Notification Header -->
                    <div class="notification-header">
                        <div class="d-flex align-items-center">
                            <div class="notification-icon">
                                <i class="icon ion-ios-bell-outline tx-18"></i>
                            </div>
                            <div>
                                <h6 class="tx-14 mg-b-0">การแจ้งเตือน</h6>
                                <span class="tx-12" id="unread-count">
                                    @if($unreadCount > 0)
                                        {{ $unreadCount }} การแจ้งเตือนที่ยังไม่ได้ยืนยัน
                                    @else
                                        ไม่มีการแจ้งเตือนที่ยังไม่ได้ยืนยัน
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Notification List -->
                    <div class="notification-list" id="notification-list">
                        @php
                            $notifications = \App\Models\Notification::with(['order' => function($query) {
                                $query->with('faculty');
                            }])
                            ->where('is_read', false)
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();
                        @endphp

                        @if($notifications->count() > 0)
                            @foreach($notifications as $notification)
                                <div class="notification-item unread">
                                    <a href="{{ route('notifications.detail', $notification->id) }}" class="notification-content">
                                        <div class="notification-icon">
                                            <i class="icon ion-document-text tx-primary"></i>
                                        </div>
                                        <div class="notification-body">
                                            <div class="notification-title">
                                                {{ $notification->message }}
                                            </div>
                                            <div class="notification-meta">
                                                <i class="icon ion-clock mg-r-5"></i>
                                                {{ $notification->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="pd-y-30 tx-center">
                                <i class="icon ion-ios-bell-outline tx-48 tx-gray-300 d-block mg-b-15"></i>
                                <p class="tx-gray-500 mg-b-0">ไม่มีการแจ้งเตือนที่ยังไม่ได้ยืนยัน</p>
                            </div>
                        @endif
                    </div>

                    <!-- Notification Footer -->
                    <div class="notification-footer">
                        <a href="{{ route('notifications.index') }}" class="view-all-link">
                            <i class="fa fa-list-ul mg-r-5"></i>
                            ดูรายการทั้งหมด
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{ Auth::user()->name }}</span>
                    <img src="{{ Auth::user()->profile_photo_url }}" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li>
                            <a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a>
                        </li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- sl-header-right -->
</div><!-- sl-header -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const notificationList = document.getElementById('notification-list');
        const notificationCount = document.getElementById('notification-count');
        const unreadCount = document.getElementById('unread-count');

        function updateNotificationUI(notifications) {
            // Update badge and counter
            const unreadNotifications = notifications.filter(n => !n.is_read);

            if (unreadNotifications.length > 0) {
                notificationCount.style.display = 'flex';
                notificationCount.textContent = unreadNotifications.length;
                unreadCount.textContent = `${unreadNotifications.length} การแจ้งเตือนใหม่`;
            } else {
                notificationCount.style.display = 'none';
                unreadCount.textContent = 'ไม่มีการแจ้งเตือนใหม่';
            }

            // Update notification list
            notificationList.innerHTML = notifications.length ?
                notifications.map(notification => `
                <div class="notification-item ${notification.is_read ? '' : 'unread'}">
                    <a href="/notifications/${notification.id}/detail" class="notification-content">
                        <div class="notification-icon">
                            <i class="icon ion-document-text tx-primary"></i>
                        </div>
                        <div class="notification-body">
                            <div class="notification-title">
                                ${notification.message}
                            </div>
                            <div class="notification-meta">
                                <i class="icon ion-clock mg-r-5"></i>
                                ${moment(notification.created_at).fromNow()}
                            </div>
                        </div>
                    </a>
                </div>
            `).join('') :
                `
                <div class="pd-y-30 tx-center">
                    <i class="icon ion-ios-bell-outline tx-48 tx-gray-300 d-block mg-b-15"></i>
                    <p class="tx-gray-500 mg-b-0">ไม่มีการแจ้งเตือน</p>
                </div>
            `;
        }

        // Load initial notifications
        function loadNotifications() {
            fetch('/notifications/unread')
                .then(response => response.json())
                .then(notifications => {
                    updateNotificationUI(notifications);
                });
        }

        // Load notifications on page load
        loadNotifications();

        // Refresh notifications periodically (every 30 seconds)
        setInterval(loadNotifications, 30000);
    });
</script>
