@extends('adminpanel')
@section('admin')
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Role List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>Id No.</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Create Date</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @forelse($roles as $row)
                                <tr class="{{ (!empty(Session::get('role_id')) && Session::get('role_id')==$row->id)?'table-primary':'' }}">
                                    <td><strong>{{ $row->id }}</strong></td>
                                    <td>{{ $row->name }}	</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        @if($row->status==0)
                                            <span class="badge light badge-success">Activate</span>
                                        @else
                                        <span class="badge light badge-danger">Deactivate</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            @if($row->status==0)
                                            <a href="javascript:void(0)" onclick="if(confirm('Are you sure to Deactivate this Role?')) location.href='{{ URL::to('role/deactivate/'.$row->id) }}'; return false;" title="Deactivate" href="#" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fas fa-duotone fa-toggle-off"></i></a>
                                            @else
                                            <a href="javascript:void(0)" onclick="if(confirm('Are you sure to Activate this Role?')) location.href='{{ URL::to('role/activate/'.$row->id) }}'; return false;" title="Activate" href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-toggle-on"></i></a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <p class="bg-danger text-white p-1">No Item Found</p>
                                @endforelse
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop