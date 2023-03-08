@extends('layout/masterLayout')


@section('content')
    
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manage Users</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="modal-header">
            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal" > <i class="fa fa-user-plus" aria-hidden="true" >add user</i></button>
        </div>

         {{-- ADD USER MODAL --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="" method="post">
                        @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Space</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                  
                         <div class="card card-warning">
                        
                            <div class="card-body">
                           
                                    <div class="row">
                                        <div class="col-sm-6">
    
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter ..." name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Spaces</label>
                                                <input type="number" class="form-control" placeholder="Enter ..." name="spaces">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" class="form-control" placeholder="Enter ..." name="price">
                                            </div>
                                        </div>
                                     
                                    </div>
                             
                            </div>
                     
                         </div>
                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-body p-0">
                <table class="table" id="mytable">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>email</th>
                            {{-- <th>Available now</th>
                            <th>Price today</th>
                            <th>Status</th> --}}
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td class="btn-group">

                                <a href="{{ url('edit-issues/' . $item->id) }}" class="btn btn-primary">Edit</a>
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#ModalEdit">
                                edit
                            </button> --}}

                                <a  href="#" class="btn btn-info">Show</a>
                                <a  href="{{route('delete.user', $item->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>



                        @endforeach
                    </tbody>
                </table>         
            </div>
        </div>
    </div>
</section>
@endsection