
@php
define('title', 'Assets');
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

                       
                        <!-- end row -->

             <!-- start table for requester -->
             <h2>List of Product Details</h2>
                         @if(session()->has('danger'))
                            <div class="alert alert-danger" id="flash_msg">

                            {{session('danger')}}
                            <?php hide_msg('flash_msg'); ?>
                             </div>
                              @endif 
          <a href="{{ route('assets_index') }}" class="btn btn-primary">Add Product</a><br><br>
             
              
                    <table class="table table-hover table-bordered" id="myTable">
                        <thead>

                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">DOP</th>
                            <th scope="col">Available</th>
                            <th scope="col">Total</th>
                            <th scope="col">Original Cost Each</th>
                            <th scope="col">Selling Price Each</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php $i=1;?>
                            @foreach($item as $value)
                            
                           <tr>
                            <td>{{$i++}}</td>
                            <td>{{$value->product_id}}</td>
                            <td>{{$value->product_name}}</td>
                            <td>{{$value->product_dop}}</td>
                            <td>{{$value->product_available}}</td>
                            <td>{{$value->product_total}}</td>
                            <td>{{$value->product_originalcost}}</td>
                            <td>{{$value->product_sellingcost}}</td>
                               <td>
                                <a href="{{route('assets_edit',Crypt::encrypt($value->product_id))}}" class="btn btn-success "><i class="fas fa-pen"></i></a>
                               <a href="{{route('assets_delete',Crypt::encrypt($value->product_id))}}" class="btn btn-danger " onclick="return confirm('Are you sure you want to Delete?');"><i class="far fa-trash-alt"></i></a>
                               <a href="{{route('assets_sell',Crypt::encrypt($value->product_id))}}" class="btn btn-secondary"><i class="fas fa-handshake"></i></a>
                           </td>
                           </tr>
                           @endforeach
                        </tbody>
                       
                    </table>
                       
                    </div> <!-- container -->

                </div> <!-- content -->



@include('includes.admin.footer')