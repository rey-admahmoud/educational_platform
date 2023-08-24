@extends('admin.layout.master')

@section('bread_crumb')
<div class="page-wrapper">
    <!-- Bread crumb -->
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
    @section('content')
      <!-- Start Page Content -->
      <div class="row">
      
        <div class="col-md-12">
            @if (Session::has('msg'))
            <div class="alert alert-success">{{ Session::get('msg') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $val)
                            <li>{{ $val }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="card">
            <form class="form-horizontal" action="{{ route('category.store') }}" enctype="multipart/form-data" method="post">
                @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label
                    for="fname"
                    class="col-sm-3 text-end control-label col-form-label"
                    >id track</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      placeholder="First Name Here"
                      name="id_category"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label
                    for="fname"
                    class="col-sm-3 text-end control-label col-form-label"
                    >name track</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      placeholder="First Name Here"
                      name="name_category"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label
                    for="fname"
                    class="col-sm-3 text-end control-label col-form-label"
                    >descripe track</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      placeholder="First Name Here"
                      name="desc_category"
                    />
                  </div>
                </div>
             

                <div class="form-group row">
                    <label
                      for="fname"
                      class="col-sm-3 text-end control-label col-form-label"
                      >image</label
                    >
                    <div class="col-sm-9">
                      <input
                        type="file"
                        class="form-control"
                        id="fname"
                        placeholder="First Name Here"
                        name="image"
                      />
                    </div>
                  </div>


              </div>
              <div class="border-top">
                <div class="card-body">
                  <button type="submit" class="btn btn-primary">
                    Add Track
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Page Content -->

    <!-- End Container fluid -->
@endsection