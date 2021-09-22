
@php
define('title', 'Assign Work');
define('page', 'Assign Work');
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
             <h2>List of Assign Work</h2>
             
              
                    <table class="table table-hover table-bordered" id="myTable">
                        <thead>

                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Req Id</th>
                            <th scope="col">Request Info</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Technician</th>
                            <th scope="col">Assign Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php $i=1;?>
                            @foreach($item as $value)
                            
                           <tr>
                            <td>{{$i++}}</td>
                            <td>{{$value->request_id}}</td>
                            <td>{{$value->request_info}}</td>
                            <td>{{$value->requester_name}}</td>
                            <td>{{$value->requester_add2}}</td>
                            <td>{{$value->requester_city}}</td>
                            <td>{{$value->requester_mobile}}</td>
                            <td>{{$value->assign_technician}}</td>
                            <td>{{$value->assign_date}}</td>
                               <td><a href="{{ route('assign_work_print',$value->request_id)}}" class="btn btn-success mr-3"><i class="fas fa-eye"></i></a>
                               <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
                           </tr>
                           @endforeach
                        </tbody>
                       
                    </table>
                       
                    </div> <!-- container -->

                </div> <!-- content -->

 

@include('includes.admin.footer')