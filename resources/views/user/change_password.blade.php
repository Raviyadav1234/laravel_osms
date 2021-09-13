
@php
define('page','Change Password');
define('title','Change Password');
@endphp

@extends('layouts.user')

@section('content')
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">
                  @if(session()->has('success'))
                    <div class="alert alert-success" id="success">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                     </div>
                      @endif

                    @if(session()->has('msg_error'))
                      <div class="alert alert-danger" id="success">
                    {{session('msg_error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                     </div>
                       @endif

      @foreach($user_data as $item)
      <form class="mt-5 mx-5" method="POST" action="{{ route('change_password_update') }}">
        @csrf
        <div class="form-group">
          <input type="hidden" name="id" class="form-control" id="inputEmail" value="{{$item->id}}" readonly>
          <label for="inputEmail">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail" value="{{$item->email}}" readonly>
               @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
          <label for="inputnewpassword">Old Password</label>
          <input type="password" class="form-control" id="old_password" placeholder="Old Password" name="old_password">
          @error('old_password')
                <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
          <label for="inputnewpassword">New Password</label>
          <input type="password" class="form-control" id="new_password" placeholder="New Password" name="new_password">
          @error('old_password')
                <span class="text-danger">{{$message}}</span>
                @enderror
        </div>

        <div class="form-group">
          <label for="inputnewpassword">Confirm Password</label>
          <input type="password" class="form-control" id="cnf_passwo" placeholder="Confirm Password" name="cnf_password">
          @error('new_password')
                <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <button type="submit" class="btn btn-outline-success mr-4 mt-4" name="pass_update">Update</button>
        <button type="reset" class="btn btn-outline-secondary mt-4">Reset</button>
        
      </form>
@endforeach
    </div>

  </div>
</div>
</div>
</div>
@endsection

