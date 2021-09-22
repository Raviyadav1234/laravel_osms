
@php
define('title', 'Sell Product');
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
                              <h2 class=" mt-0 mb-3">Customer Bill</h2>

                            @if(session()->has('success'))
                            <div class="alert alert-success" id="flash_msg">

                            {{session('success')}}
                            <?php hide_msg('flash_msg'); ?>
                             </div>
                              @endif 
                                <div class="card-box">

                                  

                                    <form action="{{ route('assets_sell_save') }}" data-parsley-validate novalidate method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="customer_name">Customer Name</label>
                                            <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                            <input type="text" name="customer_name" parsley-trigger="change" required
                                                   placeholder="Enter Customer Name" class="form-control" id="customer_name" value="{{old('customer_name')}}">
                                    @error('customer_name')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_address">Customer Address</label>
                                            <input type="text" name="customer_address" parsley-trigger="change" required
                                                   placeholder="Enter Customer Address" class="form-control" id="customer_address" value="{{old('customer_address')}}">
                                    @error('customer_address')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_product_name">Product Name</label>
                                            
                                            <input type="text" name="customer_product_name" parsley-trigger="change" required
                                                   placeholder="Enter Product Name" class="form-control" id="customer_product_name" value="{{$item->product_name}}">
                                    @error('customer_product_name')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                         

                                         <div class="form-group">
                                            <label for="product_available">Available</label>
                                            <input name="product_available" id="product_available" type="text"        required
                                                   class="form-control" value="{{$item->product_available}}" readonly="">
                                    @error('product_available')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_product_quantity">Quantity</label>
                                            <input type="text" name="customer_product_quantity" parsley-trigger="change" required
                                                    class="form-control" id="product_originalcost" value="{{old('customer_product_quantity')}}">
                                    @error('customer_product_quantity')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_product_each">Price Each</label>
                                            <input type="text" name="customer_product_each" parsley-trigger="change" required
                                                    class="form-control" id="customer_product_each" value="{{$item->product_sellingcost}}" readonly="">
                                    @error('customer_product_each')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                         <div class="form-group">
                                            <label for="customer_product_total">Total Price</label>
                                            <input type="text" name="customer_product_total" parsley-trigger="change" required
                                                    class="form-control" id="customer_product_total" value="{{old('customer_product_total')}}">
                                    @error('customer_product_total')
                                    <span class="text-danger hide_msg">{{$message}}</span>
                                    @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_product_date">Date </label>
                                            <input name="customer_product_date" id="customer_product_date" type="date" placeholder="Enter Date" required
                                                   class="form-control" value="{{old('customer_product_date')}}">
                                    @error('customer_product_date')
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