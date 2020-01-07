@extends('layouts.dashboard')

@section('content')

      <div class="page-content">

        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bidang Ilmu</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">List Bidang Ilmu</h6>
                <a href="{{ url('add_new_bidang_ilmu') }}"><button type="button" class="btn btn-primary mb-1 mb-md-0">Add New Bidang Ilmu</button></a><br><br>                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Bidang Ilmu</th>
                        <th>Created By</th>                             
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=0; foreach ($bidang_ilmu as $key => $value) { $no++; ?>
                          <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $value->bidang_ilmu }}</td>                          
                            <td>{{ $value->created_by }}</td>                          
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