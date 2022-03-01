@extends('admin.master')
@section('content')
    

<h1>Volunteer Registration</h1>
@if(session()->has('success'))
<p class="alet alert-success">
    {{session()->get ('success')}}
</p>
@endif <br>
<form action="{{route('update.volunteer',$volunteers->id)}}" method="POST" enctype="multipart/form-data">
    
        @method('PUT')
        @csrf
    <div class="row">
        
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $volunteers->name}}" placeholder="Enter Name">
          </div>
          <div class="form-group col-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ $volunteers->email}}"placeholder="Enter Email">
          </div>
          {{-- <div class="form-group col-6 mt-2">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password"value="{{ $volunteers->password}}" placeholder="Enter Password">
        </div> --}}
        <div class="form-group col-6 mt-2">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender"value="{{ $volunteers->gender}}" placeholder="Enter Gender">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city"value="{{ $volunteers->city}}" placeholder="Enter City">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address"value="{{ $volunteers->address}}" placeholder="Enter Address">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="name">Occupation</label>
            <input type="text" class="form-control" id="name" name="occupation"value="{{ $volunteers->occupation}}" placeholder="Enter Occupation">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="name">Education</label>
            <input type="text" class="form-control" id="name" name="education"value="{{ $volunteers->education}}" placeholder="Enter Education">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="mobile">Mobile</label>
            <input type="number" class="form-control" id="mobile" name="mobile" value="{{ $volunteers->mobile}}"placeholder="Enter Mobile No">
        </div>
        <div class="mt-2">
            <label for="volunteer_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="volunteer_image" name="volunteer_image">
        </div>
    </div>
    
    
    <br>
    <button type="submit" class="btn btn-success">update</button>
  </form>
  @endsection