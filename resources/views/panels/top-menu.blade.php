<div class="header header-one">
   <div class="header-left header-left-one">
      <a href="/home" class="logo">
         <img src="/website-assets/web/logo.png" alt="Logo">
      </a>
      <a href="/" class="white-logo">
         <img src="/website-assets/web/logo.png" alt="Logo">
      </a>
      <a href="/" class="logo logo-small">
         <img src="/website-assets/web/logo.png" alt="Logo" width="30" height="30">
      </a>
   </div>
   <a href="javascript:void(0);" id="toggle_btn">
      <i class="fas fa-bars"></i>
   </a>
   <a class="mobile_btn" id="mobile_btn">
      <i class="fas fa-bars"></i>
   </a>
   <ul class="nav nav-tabs user-menu">
      <li class="nav-item dropdown has-arrow main-drop">
         <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
            <span class="user-img">
               <img src="assets/img/profiles/avatar-01.jpg" alt="">
               <span class="status online"></span>
            </span>
            <span>Jamia Urdu Aligarh</span>
         </a>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i data-feather="log-out" class="me-1"></i> Logout</a>
         </div>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>
      </li>
   </ul>
</div>
