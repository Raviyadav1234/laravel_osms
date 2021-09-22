
@php
define('title', 'Edit Product');
define('page', 'Assets');
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
                              <h2 class=" mt-0 mb-3">Update Product Details</h2>

                            @if(session()->has('success'))
                            <div class="alert alert-success" id="flash_msg">

                            {{session('success')}}
                            <?php hide_msg('flash_msg'); ?>
                             </div>
                              @endif 
                                <div class="card-box">

                                  

                                    <form action="{{ route('assets_update') }}" data-parsley-validate novalidate method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="product_name">Product Name</label>
                                            <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                            <input type="text" name="product_name" parsley-trigger="change" required
                                                   placeholder="Enter Product Name" class="form-control" id="product_name" value="{{$item->product_name}}">
                                    @error('product_name')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                         <div class="form-group">
                                            <label for="product_dop">Date of Purchase</label>
                                            <input name="product_dop" id="product_dop" type="date" placeholder="Enter Date" required
                                                   class="form-control" value="{{$item->product_dop}}">
                                    @error('product_dop')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                         <div class="form-group">
                                            <label for="product_available">Available</label>
                                            <input name="product_available" id="product_available" type="text"        required
                                                   class="form-control" value="{{$item->product_available}}">
                                    @error('product_available')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="product_total">Total</label>
                                            <input type="text" name="product_total" parsley-trigger="change" required
                                                    class="form-control" id="product_total" value="{{$item->product_total}}">
                                    @error('product_total')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="product_originalcost">Original Cost Each</label>
                                            <input type="text" name="product_originalcost" parsley-trigger="change" required
                                                    class="form-control" id="product_originalcost" value="{{$item->product_originalcost}}">
                                    @error('product_originalcost')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="product_sellingcost">Selling Cost Each</label>
                                            <input type="text" name="product_sellingcost" parsley-trigger="change" required
                                                    class="form-control" id="product_sellingcost" value="{{$item->product_sellingcost}}">
                                    @error('product_sellingcost')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>
                                       
                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                Add
                                            </button>
                                            
                                            <a href="{{ route('assets_view') }}" class="btn btn-secondary waves-effect waves-light">Cancel</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
    
                         </div>
                       
                        <!-- end row -->

          
                       
                    </div> <!-- container -->

                </div> <!-- content -->

 

@include('includes.admin.footer')