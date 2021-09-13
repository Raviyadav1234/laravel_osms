


<!-- Side Bar -->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(page=='User Dashboard')echo "active";?> " href="{{url('/dashboard')}}">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only"></span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(page=='Submit Request')echo "active";?> " href="{{ route('submit_request') }}">
        <i class="fab fa-accessible-icon"></i>
        Submit Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(page=='Check Status')echo "active";?> " href="{{ route('check_status') }}">
        <i class="fas fa-align-center"></i>
        Service Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(page=='Change Password')echo "active";?> " href="{{ route('change_password') }}">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      
     </ul>
    </div>
   </nav>