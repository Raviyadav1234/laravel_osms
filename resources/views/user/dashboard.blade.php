

@php
define('page','User Dashboard');
define('title','User Dashboard');
@endphp


@extends('layouts.user')

@section('content')
<div class="col-sm-6 mt-5">
 
                   @if(session()->has('success'))
                    <div class="alert alert-success" id="success">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                     </div>
                      @endif

@foreach($user_data as $item)

  <form class="mx-5" method="POST" action="{{ route('user_profile_update') }}">
    @csrf
    <div class="form-group">
      <input type="hidden" class="form-control" name="id" value="{{$item->id}}" readonly>
      <label for="inputEmail">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail" value="{{$item->email}}" readonly>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="name" value="{{$item->name}}">
    </div>
    <button type="submit" class="btn btn-outline-success" name="name_update">Update</button>
  </form>
  @endforeach
</div>
</div>
</div>
@endsection
