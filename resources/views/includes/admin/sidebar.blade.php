 
 <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">Admin</a> 
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" >
                            <li>
                                <a href="{{url('/dashboard')}}" class="<?php if(page=='dashboard'){echo 'active';}?>">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                              <li>
                                <a href="">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Work Order</span>
                                </a>
                            </li>
                              <li>
                                <a href="{{ route('assign_request') }}" class="<?php if(page=='Assign-Request') echo"active";?>" >
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Requests </span>
                                </a>
                            </li>
                              <li>
                                <a href="">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Assets</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Technician</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Requester</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Sell Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Work Report</span>
                                </a>
                            </li>
                            

                        
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->