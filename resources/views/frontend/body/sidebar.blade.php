@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    // dd($route);
@endphp

<div class="sl-logo"><a href="{{ url('home') }}"><i class="icon ion-clipboard"></i> ระบบยืมออนไลน์ </a></div>
    <div class="sl-sideleft">

      <div class="sl-sideleft-menu mg-t-6">

        <a href="{{ url('home') }}" class="sl-menu-link {{ ($route == 'home.index') ? 'active' : '' }} ">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">แบบฟอร์มการยืมออนไลน์</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="https://opac.sru.ac.th/member/Login.aspx/" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">บริการยืมต่อหนังสือ</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('order.view') }}" class="sl-menu-link {{ ($route == 'order.view') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">ตรวจสอบรายการ</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="https://opac.sru.ac.th" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-laptop tx-22"></i>
            <span class="menu-item-label">สืบค้นข้อมูลทรัพยากร</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="" data-toggle="modal" data-target="#modaldemo1" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-information-circled tx-22"></i>
            <span class="menu-item-label">เงื่อนไขการใช้บริการ</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="https://sru.ac.th/privacy-policy/" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-locked-outline tx-22"></i>
            <span class="menu-item-label">นโยบายความเป็นส่วนตัว</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->