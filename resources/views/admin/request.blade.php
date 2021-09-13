
@php
define('title', 'Assign-Request');
define('page', 'Assign-Request');
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

                            <div class="col-xl-6">
                                <div class="card">
                                  @foreach($requester_datas as $requester_data)
                                  <div class="card-header">
                                    
                                    <p>Request ID : {{$requester_data->id}}</p>
                                  </div>
                                  <div class="card-body">
                                    <h3 class="card-title">Request Info : {{$requester_data->request_info}} </h3>
                                    <p class="card-text">{{$requester_data->request_decs}}</p>
                                    <p class="card-text">Request Date :{{$requester_data->request_date}} </p>
                                    
                                    <div class="float-right">
                                      <form action="{{route('requester_view')}}" method="">
                                      @csrf 
                                        <input type="hidden" name="id" value="{{$requester_data->id}}">
                                        <input type="submit" class="btn btn-outline-success" name="view" value="View">
                                        </form>

                                        <form action="{{route('requester_delete')}}" method="">
                                      @csrf 
                                        <input type="hidden" name="id" value="{{$requester_data->id}}">
                                        <input type="submit" class="btn btn-outline-secondary" name="close" value="Close"></form>
                                    </div>
                                   
                                  </div>
                                     @endforeach
                                     
                                </div>
                                <div class="d-flex justify-content-center">
                                      {!! $requester_datas->links() !!}

                                  </div>
                            </div><!-- end col -->

                           <div class="col-xl-6">

                            @if(session()->has('success'))
                            <div class="alert alert-success" id="success">
                            {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                             </div>
                              @endif 
                                <div class="card-box">

                                    <h3 class=" mt-0 mb-3">Assign Work Order Request</h3>


                                        @php
                                        if(isset($item)){
                                            foreach($item as $value){
                                        
                                     
                                     @endphp

                                    <form action="{{ route('assign_request_save') }}" data-parsley-validate novalidate method="POST">
                                    @csrf
                                      <div class="form-group">
                                            <label for="requester_id">Request Id*</label>
                                            <input type="text" name="requester_id" parsley-trigger="change" required
                                                    class="form-control" id="requester_id" value="<?php 
                                                    if(isset($value->id)){
                                                        print($value->id);
                                                    }?>
                                                    ">
                                     @error('requester_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="request_info">Request Info*</label>
                                              <textarea type="text" name="request_info" parsley-trigger="change" required
                                              class="form-control" id="request_info"><?php 
                                                    if(isset($value->request_info)){
                                                        print($value->request_info);
                                                    }?></textarea>
                                     @error('request_info')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>

                                          <div class="form-group">
                                            <label for="request_desc">Description*</label>
                                              <textarea type="text" name="request_desc" parsley-trigger="change" required
                                              class="form-control" id="request_desc"><?php 
                                                    if(isset($value->request_desc)){
                                                        print($value->request_desc);
                                                    }?></textarea>
                                    @error('request_desc')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="requester_name">Name*</label>
                                            <input type="text" name="requester_name" parsley-trigger="change" required
                                                    class="form-control" id="requester_name" value="<?php 
                                                    if(isset($value->requester_name)){
                                                        print($value->requester_name);
                                                    }?>">
                                    @error('requester_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email*</label>
                                            <input type="email" name="requester_email" parsley-trigger="change" required
                                                    class="form-control" id="emailAddress" value="<?php 
                                                    if(isset($value->requester_email)){
                                                        print($value->requester_email);
                                                    }?>">
                                        @error('requester_email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror            
                                        </div>
                                         <div class="form-group">
                                            <label for="requester_mobile">Mobile*</label>
                                            <input type="text" name="requester_mobile" parsley-trigger="change" required
                                                    class="form-control" id="requester_mobile" value="<?php 
                                                    if(isset($value->requester_mobile)){
                                                        print($value->requester_mobile);
                                                    }?>">
                                    @error('requester_mobile')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>


                                <div class="row">
                                      <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="requester_add1">Address Line 1*</label>
                                            <input type="text" name="requester_add1" parsley-trigger="change" required
                                              class="form-control" id="requester_add1" value="<?php 
                                                    if(isset($value->requester_add1)){
                                                        print($value->requester_add1);
                                                    }?>">
                                     @error('requester_add1')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                              </div>
                                      </div>
                                      <div class="col-xl-6">
                                                <div class="form-group">
                                                <label for="requester_add2">Address Line 2*</label>
                                            <input type="text" name="requester_add2" parsley-trigger="change" required
                                                    class="form-control" id="requester_add2" value="<?php 
                                                    if(isset($value->requester_add2)){
                                                        print($value->requester_add2);
                                                    }?>">
                                        @error('requester_add2')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                                </div>
                                      </div>
                                 </div>


                                 <div class="row">
                                      <div class="col-xl-4">
                                            <div class="form-group">
                                            <label for="requester_city">City*</label>
                                            <input type="text" name="requester_city" parsley-trigger="change" required
                                              class="form-control" id="requester_city" value="<?php 
                                                    if(isset($value->requester_city)){
                                                        print($value->requester_city);
                                                    }?>">
                                    @error('requester_city')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                              </div>
                                      </div>
                                      <div class="col-xl-4">
                                                <div class="form-group">
                                                <label for="requester_state">State</label>
                                            <input type="text" name="requester_state" parsley-trigger="change" required
                                                    class="form-control" id="requester_state" value="<?php 
                                                    if(isset($value->requester_state)){
                                                        print($value->requester_state);
                                                    }?>">
                                    @error('requester_state')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                                </div>
                                      </div>
                                      <div class="col-xl-4">
                                                <div class="form-group">
                                                <label for="requester_pin">Pin</label>
                                            <input type="text" name="requester_pin" parsley-trigger="change" required
                                                    class="form-control" id="requester_pin" value="<?php 
                                                    if(isset($value->requester_pin)){
                                                        print($value->requester_pin);
                                                    }?>">
                                    @error('requester_pin')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                                </div>
                                      </div>
                                 </div>


                                  <div class="row">
                                      <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="assign_technician">Assign to Technician*</label>
                                            <input type="text" name="assign_technician" parsley-trigger="change" required
                                              class="form-control" id="assign_technician">
                                        @error('assign_technician')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                              </div>
                                      </div>
                                      <div class="col-xl-6">
                                                <div class="form-group">
                                                <label for="requester_add2">Date</label>
                                            <input type="date" name="assign_date" parsley-trigger="change" required
                                                    class="form-control" id="assign_date">
                                    @error('assign_date')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror   
                                                </div>
                                      </div>
                                 </div>




                                       
                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Assign
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                                Reset
                                            </button>
                                        </div>

                                    </form>  
                                     @php
                                       
                                           }
                                        }
                                     
                                     @endphp
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->  
            
                    </div> <!-- container -->

                </div> <!-- content -->
                  </div>
                        <!-- content-page -->

@include('includes.admin.footer')