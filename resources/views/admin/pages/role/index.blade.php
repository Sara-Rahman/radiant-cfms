@extends('admin.master')
@section('content')

<h1>Roles</h1>
<hr>
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
{{-- <a href="{{route('roles.create')}}" class="btn btn-primary">Create Role</a> --}}
      <form action="{{route('roles.store')}}" method="POST" >
        @csrf
                <div class="form-group" style="text-align: center;">
                      
                          <label for="name">Name<span style="color:red">*</span>:</label>
                          <input name="name" required type="text" class="form-control" id="name" placeholder="Enter Role Name">
                        
                </div>
                <br>
        <button type="submit" class="btn btn-success btn-sm">Save</button>
      </form>
<br><br>
</div>
<div>
  <table class="table" style="text-align: center;">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Permissions</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($roles as $key=>$role) 

      <tr>
        <th>{{$key+1}}</th>
          <td>{{$role->name}}</td>
          <td>
            @foreach($role->role_permissions as $data)
                <p class="btn btn-success btn-sm">{{$data->permission->name}}</p>
            @endforeach
          </td>        
          <td>{{$role->status}}</td>  
          <td>
              {{-- <a href="#"><i class="fas fa-eye"></i></a>   --}}
              <a href="{{route('assign.permission',$role->id)}}"><i class="fas fa-eye"></i>Assign Permission</a>
              <a href="{{route('edit.permission',$role->id)}}"><i class="fas fa-edit"></i></a>
          </td> 
    
      </tr>
        
 @endforeach
    </tbody>
  </table>
</div>

@endsection