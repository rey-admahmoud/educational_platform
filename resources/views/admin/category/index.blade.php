
@extends('admin.layout.master')
        <!-- Bread crumb -->
        @section('bread_crumb')
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="#">Add New</a></li>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        <!-- End Bread crumb -->
        @endsection
        <!-- Container fluid -->
          <!-- Start Page Content -->
          @section('content')
          <div class="row">
            @if (Session::has('msg'))
              <div class="alert alert-success">{{ Session::get('msg') }}</div>
            @endif
            <div class="col-12">
            <div class="card">
             
                <div class="card-body">
                  <h5 class="card-title">Basic Datatable</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>id category</th>
                          <th>name car</th>
                          <th>description category</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $data as $val)
                          
                       
                        <tr>
                          <td>{{ $val['id_category'] }}</td>
                          <td>{{ $val['name_category'] }}</td>
                          <td>{{ $val['desc_category'] }}</td>
                          <td>

                            <a href="{{ route('category.edit',$val['id_category']) }}" class="btn btn-primary">Edit</a>
                            <form action="{{route('category.destroy',$val['id_category'])}}" method="POST" style="display: inline-block">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="btn btn-danger" value="delete">
                            </form>
                          </td>
                        </tr>
                        @endforeach 
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Page Content -->
          @endsection
        <!-- End Container fluid -->

