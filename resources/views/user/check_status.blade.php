
@php
define('page','Check Status');
define('title','Check Status');
@endphp

@extends('layouts.user')

@section('content')
<div class="col-sm-6 mt-5  mx-3">
  <form action="" class="mt-3 form-inline d-print-none">
    <div class="form-group mr-3">
      <label for="checkid">Enter Request ID: </label>
      <input type="text" class="form-control ml-3" id="checkid" name="checkid" onkeypress="isInputNumber(event)">
    </div>
    <button type="submit" class="btn btn-outline-success">Search</button>
  </form>

  <h3 class="text-center mt-5">Assigned Work Details</h3>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <td>Request ID</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Request Info</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Request Description</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Name</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Address Line 1</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Address Line 2</td>
        <td>
         
        </td>
      </tr>
      <tr>
        <td>City</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>State</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Pin Code</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Assigned Date</td>
        <td>
         
        </td>
      </tr>
      <tr>
        <td>Technician Name</td>
        <td>
          
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
    <form class="d-print-none d-inline mr-3"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form>
    <form class="d-print-none d-inline" action="work.php"><input class="btn btn-secondary" type="submit" value="Close"></form>
  </div>
 

</div>
@endsection

@push('script')
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
@endpush
