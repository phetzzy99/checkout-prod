@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    //dd($prefix);
@endphp

<div class="sl-logo"><a href="{{ route('dashboard') }}"><i class="icon ion-clipboard"></i> ระบบยืมออนไลน์</a></div>
<div class="sl-sideleft">
    {{-- <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group --> --}}

    {{-- <label class="sidebar-label">Navigation</label> --}}
    <div class="sl-sideleft-menu">
        <a href="{{ route('dashboard') }}" class="sl-menu-link {{ $route == 'dashboard' ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="#" class="sl-menu-link {{ ($prefix == '/data') ? 'active show-sub' : '' }} ">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">ข้อมูลพื้นฐาน</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('all.faculty') }}" class="nav-link {{($route == 'all.faculty') ? 'active' : '' }}">หน่วยงาน/คณะ</a></li>
            <li class="nav-item"><a href="{{ route('all.patrontype') }}" class="nav-link {{($route == 'all.patrontype') ? 'active' : '' }}">ประเภทสมาชิก</a></li>
            <li class="nav-item"><a href="{{ route('all.staff') }}" class="nav-link {{($route == 'all.staff') ? 'active' : '' }}">เจ้าหน้าที่</a></li>
        </ul>
        <a href="{{ route('notifications.index') }}" class="sl-menu-link {{ ($route == 'notifications.index') ? 'active' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bell-outline tx-22"></i>
                <span class="menu-item-label">การแจ้งเตือน
                @php
                    $unreadCount = \App\Models\Notification::where('is_read', false)->count();
                @endphp
                @if($unreadCount > 0)
                    <span class="badge badge-danger">{{ $unreadCount }}</span>
                @endif
                </span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="{{ route('all.report') }}"
            class="sl-menu-link {{ $prefix == '/reports' ? 'active show-sub' : '' }} ">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Reports</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
