@extends('layout/masterLayout')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Booking History</h1>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body p-0">
                    
                        <table class="table" id="mytable">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Date time from/to</th>
                                    <th>Space</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="btn-group">
    
                                        {{-- <a href="{{ url('edit-issues/' . $item->id) }}" class="btn btn-primary">Edit</a> --}}
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#ModalEdit">
                                        edit
                                    </button>
    
                                        <a  href="#" class="btn btn-info">Show</a>
                                      
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#ModalDelete">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                    
                    </div>
    
                </div>
            </div>
        </section>


 @endsection