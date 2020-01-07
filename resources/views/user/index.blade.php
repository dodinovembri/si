@extends('layouts.dashboard')

@section('content')

      <div class="page-content">

        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Account List</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">List User</h6>
                <a href="{{ url('add_new_user') }}"><button type="button" class="btn btn-primary mb-1 mb-md-0">Add New User</button></a><br><br>                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>                             
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=0; foreach ($user as $key => $value) { $no++; ?>
                          <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $value->name }}</td>                          
                            <td>{{ $value->email }}</td>                          
                            <td>
                              <a href=""><i style="height: 50%" data-feather="search"></i></a>
                              <a href=""><i style="height: 50%" data-feather="edit-2"></i></a>
                              <a href=""><i style="height: 50%" data-feather="delete"></i></a>
                            </td>                          
                          </tr>    
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

@endsection      