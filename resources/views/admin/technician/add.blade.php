
@php
define('title', 'Add New Technician');
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
                          <div class="row">
                          <div class="col-xl-12">
                              <h2 class=" mt-0 mb-3">Add Technician</h2>

                            @if(session()->has('success'))
                            <div class="alert alert-success" id="flash_msg">

                            {{session('success')}}
                            <?php hide_msg('flash_msg'); ?>
                             </div>
                              @endif 
                                <div class="card-box">

                                  

                                    <form action="{{ route('technician_save') }}" data-parsley-validate novalidate method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="tech_name">Name</label>
                                            <input type="text" name="tech_name" parsley-trigger="change" required
                                                   placeholder="Enter name" class="form-control" id="tech_name" value="{{old('tech_name')}}">
                                    @error('tech_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>

                                         <div class="form-group">
                                            <label for="tech_city">City</label>
                                            <input name="tech_city" id="tech_city" type="text" placeholder="Enter City" required
                                                   class="form-control" value="{{old('tech_city')}}">
                                    @error('tech_city')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>

                                         <div class="form-group">
                                            <label for="tech_mobile">Mobile</label>
                                            <input name="tech_mobile" id="tech_mobile" type="text"       placeholder="Enter Mobile" required
                                                   class="form-control" value="{{old('tech_mobile')}}">
                                    @error('tech_mobile')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="tech_email">Email</label>
                                            <input type="email" name="tech_email" parsley-trigger="change" required
                                                   placeholder="Enter email" class="form-control" id="tech_email" value="{{old('tech_email')}}">
                                    @error('tech_email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                        </div>
                                       
                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                Add
                                            </button>
                                            
                                            <a href="{{ route('technician_view') }}" class="btn btn-secondary waves-effect waves-light">Cancel</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
    
                         </div>
                       
                        <!-- end row -->

          
                       
                    </div> <!-- container -->

                </div> <!-- content -->

 

@include('includes.admin.footer')