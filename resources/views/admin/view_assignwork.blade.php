
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
                          <div class="row">
                          <div class="col-xl-12">
                              <h2 class=" mt-0 mb-3">Assign Work Details</h2>
                             <table class="table table-bordered">
                                <tbody>
                       <tr>
                        <td>Request ID</td>
                        <td>
                        @isset($data->request_id)
                         {{$data->request_id}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Request Info</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->request_info}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Request Description</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->request_desc}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Name</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_name}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Address Line 1</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_add1}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Address Line 2</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_add2}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>City</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_city}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>State</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_city}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Pin Code</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_pin}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Email</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_email}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Mobile</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->requester_mobile}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Assigned Date</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->assign_date}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Technician Name</td>
                        <td>
                         @isset($data->request_id)
                         {{$data->assign_technician}}
                         @endisset
                        </td>
                       </tr>
                       <tr>
                        <td>Customer Sign</td>
                        <td></td>
                       </tr>
                       <tr>
                        <td>Technician Sign</td>
                        <td></td>
                       </tr>
                      </tbody> 
                             </table>
                           <div class="text-center">
  <form class='d-print-none d-inline mr-3'><input class='btn btn-outline-primary' type='submit' value='Print' onClick='window.print()'></form>
  <form class='d-print-none d-inline' action="{{ route('assign_work_view') }}"><input class='btn btn-outline-danger' type='submit' value='Close'></form>
 </div>
                            </div><!-- end col -->
    
                         </div>
                       
                        <!-- end row -->

          
                       
                    </div> <!-- container -->

                </div> <!-- content -->

 

@include('includes.admin.footer')