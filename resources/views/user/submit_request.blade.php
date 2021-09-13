@php
define('page','Submit Request');
define('title','Submit Request');
@endphp

@extends('layouts.user')

@section('content')
<div class="col-sm-9 col-md-10 mt-5">

                 @if(session()->has('success'))
                    <div class="alert alert-success" id="success">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                     </div>
                      @endif 

  <form class="mx-5" action="{{ route('store_submit_request') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="inputRequestInfo">Request Info</label>
      <textarea type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="request_info" value="{{old('request_info')}}"></textarea>
              @error('request_info')
                <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
      <label for="inputRequestDescription">Description</label>
      <textarea type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="request_desc" value="{{old('request_desc')}}"></textarea>
             @error('request_desc')
                <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" placeholder="Rahul" name="requester_name" value="{{old('requester_name')}}">
              @error('requester_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Address Line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requester_add1" value="{{old('requester_add1')}}">
        @error('requester_add1')
                <span class="text-danger">{{$message}}</span>
                @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Address Line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="requester_add2" value="{{old('requester_add2')}}">
        @error('requester_add2')
                <span class="text-danger">{{$message}}</span>
                @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="requester_city" value="{{old('requester_city')}}">
              @error('requester_city')
                <span class="text-danger">{{$message}}</span>
                @enderror
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="requester_state" value="{{old('requester_state')}}">
        @error('requester_state')
                <span class="text-danger">{{$message}}</span>
                @enderror
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Pin</label>
        <input type="text" class="form-control" id="inputZip" name="requester_pin" onkeypress="isInputNumber(event)" value="{{old('requester_pin')}}">
        @error('requester_pin')
                <span class="text-danger">{{$message}}</span>
                @enderror
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="requester_email" value="{{old('requester_email')}}">
        @error('requester_email')
                <span class="text-danger">{{$message}}</span>
                @enderror
      </div>
      <div class="form-group col-md-2">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="requester_mobile" onkeypress="isInputNumber(event)" value="{{old('requester_mobile')}}">
        @error('requester_mobile')
                <span class="text-danger">{{$message}}</span>
                @enderror
      </div>
      <div class="form-group col-md-2">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="request_date" value="{{old('request_date')}}">
              @error('request_date')
              <span class="text-danger">{{$message}}</span>
              @enderror
      </div>
    </div>

    <button type="submit" class="btn btn-outline-success" name="submit_request">Submit</button>
    <button type="reset" class="btn btn-outline-secondary">Reset</button>
  </form>
  
</div>
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
