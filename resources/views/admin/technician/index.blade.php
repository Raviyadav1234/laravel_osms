
@php
define('title', 'Technician');
define('page', 'Technician');
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

                       
                        <!-- end row -->

             <!-- start table for requester -->
             <h2>List of All Technician</h2>
                         @if(session()->has('danger'))
                            <div class="alert alert-danger" id="flash_msg">

                            {{session('danger')}}
                            <?php hide_msg('flash_msg'); ?>
                             </div>
                              @endif 
          <a href="{{ route('technician_index') }}" class="btn btn-primary">Add Technician</a><br><br>
             
              
                    <table class="table table-hover table-bordered" id="myTable">
                        <thead>

                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tech Id</th>
                            <th scope="col">Tech Name</th>
                            <th scope="col">Tech City</th>
                            <th scope="col">Tech Mobile</th>
                            <th scope="col">Tech Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php $i=1;?>
                            @foreach($item as $value)
                            
                           <tr>
                            <td>{{$i++}}</td>
                            <td>{{$value->tech_id}}</td>
                            <td>{{$value->tech_name}}</td>
                            <td>{{$value->tech_city}}</td>
                            <td>{{$value->tech_mobile}}</td>
                            <td>{{$value->tech_email}}</td>
                               <td>
                                <a href="{{route('technician_edit',Crypt::encrypt($value->tech_id))}}" class="btn btn-success mr-3"><i class="fas fa-pen"></i></a>
                               <a href="{{route('technician_delete',Crypt::encrypt($value->tech_id))}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?');"><i class="far fa-trash-alt"></i></a></td>
                           </tr>
                           @endforeach
                        </tbody>
                       
                    </table>
                       
                    </div> <!-- container -->

                </div> <!-- content -->



@include('includes.admin.footer')