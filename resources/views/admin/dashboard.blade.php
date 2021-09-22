
@php
define('title', 'Admin Dashboard');
define('page', 'dashboard');
@endphp

@include('includes.admin.header')



@include('includes.admin.sidebar')
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-xl-4 col-md-6">
                                <div class="card-box">

                                    <h4 class="header-title mt-0 mb-3">Total Request Recevied</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                                   data-bgColor="#F9B9B9" value="{{$total_requester }}"
                                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                   data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1 text-right mb-4">
                                            <h2 class="font-weight-normal pt-2 mb-1">{{$total_requester }}</h2>
                                            
                                              <a href="{{ route('assign_request') }}">View</a>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->

                            <div class="col-xl-4 col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Assigned Work</h4>

                                   <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                                   data-bgColor="#F9B9B9" value="{{$total_assignwork }}"
                                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                   data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1 text-right mb-4">
                                            <h2 class="font-weight-normal pt-2 mb-1"> {{$total_assignwork }}</h2>
                                            
                                              <a href="{{ route('assign_work_view') }}">View</a>
                                            
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-4 col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Assigned Work</h4>

                                   <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                                    data-bgColor="#FFE6BA" value="{{$total_technician }}"
                                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                    data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1 text-right mb-4">
                                            <h2 class="font-weight-normal pt-2 mb-1">{{$total_technician }}</h2>
                                            
                                              <a href="{{ route('technician_view') }}   ">View</a>
                                            
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

             <!-- start table for requester -->
             <h2>List of All Requester</h2>

             
              
                    <table class="table table-hover table-bordered" id="myTable">
                        <thead>

                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Requester Id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Name</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php $i=1;?>
                         @foreach($requester_data as $list)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$list->requester_name}}</td>
                                <td>{{$list->requester_name}}</td>
                                <td>{{$list->requester_email}}</td>
                            </tr>
                             @endforeach
                        </tbody>
                       
                    </table>
                       
                    </div> <!-- container -->

                </div> <!-- content -->


@include('includes.admin.footer')