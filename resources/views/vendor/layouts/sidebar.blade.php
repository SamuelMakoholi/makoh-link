<div class="dashboard_sidebar">
    <span class="close_icon">
      <i class="far fa-bars dash_bar"></i>
      <i class="far fa-times dash_close"></i>
    </span>
    <a href="{{ route('vendor.dashboard') }}" class="dash_logo" style="font-size: 35px; color: #fff; font-weight:900; margin-left: 0">
        TaskLink
    </a>
    <ul class="dashboard_link">
      <li><a class="active" href=""><i class="fas fa-tachometer"></i>Dashboard</a></li>
      <li><a href="{{ route('vendor.services.index')}}"><i class="far fa-user"></i> My Services</a></li>

      <li><a href="{{ route('vendor.profile')}}"><i class="far fa-user"></i> My Profile</a></li>
      <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{route('logout')}}" onclick="event.preventDefault();
        this.closest('form').submit();"><i class="far fa-sign-out-alt"></i> Log out</a>
        </form>
    </li>
    </ul>
  </div>
