@extends('admin.master')
@section('content')
<h1>Cause</h1>
<hr>
<a href="{{route('create.cause')}}"><button class="btn btn-primary">Create Cause</button></a>
<h1>Cause List</h1><br>
@if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p>
  @endif
  <div> 
<table class="table table-bordered">
    <thead>
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Target Amount</th>
      <th scope="col">Image</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach($causelist as $key=>$causes)
          {{-- @dd($causelist) --}}
        <th scope="row">{{$key+1}}</th>
        <td>{{$causes->name}}</td>
        <td>{{$causes->details}}</td>
        <td>{{$causes->category}}</td>
        <td>{{$causes->location}}</td>
        <td>{{$causes->contact}}</td>
        <td>{{$causes->target_amount}}</td>
        <td><img src="{{url('/uploads/causes/'.$causes->image)}}" style="border-radius:4px" width="100px" alt="cause image"></td>
      <td>{{$causes->created_at->diffforhumans()}}</td>
        <td>
          <a href="{{route('view.cause',$causes->id)}}"><i class="fa-solid fa-eye"></i></a>
          <a href="{{route('edit.cause',$causes->id)}}"><i class="fas fa-edit"></i></a>
          <a href="{{route('delete.cause',$causes->id)}}"><i class="fas fa-trash"></i></a>
      </td>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div> 

@endsection