
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
        @section('content')
        <div class="row">
          
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $val )
                      <li>{{ $val }}</li>
                    @endforeach
                </ul>
              
            </div>
            @endif
            <div class="col-md-12">
             @if (Session::has('msg'))
            <div class="alert alert-success">{{ Session::get('msg')}}</div>
            @endif
              <div class="card">
                <form class="form-horizontal" action="{{ route('cars.update',$data['id']) }}" 
                enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- @method('DELETE') --}}
                    <div class="card-body">
                    <div class="form-group row">
                        <label
                          for="fname"
                          class="col-sm-3 text-end control-label col-form-label"
                          >id car</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="text"
                            class="form-control @error('id') is-invalid @enderror"
                            id="fname"
                            placeholder="First Name Here"
                            name="id"
                            value="{{ $data['id'] }}"
                          />
                          @error('id')
                              <span class="text-danger">the id must be unique and required</span>
                          @enderror
                          
                        </div>
                      </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Name car</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control @error('id') is-invalid @enderror"
                          id="fname"
                          placeholder="First Name Here"
                          name="name"
                          value="{{ $data['name'] }}"
                        />
                        @error('id')
                              <span class="text-danger">the id must be required</span>
                          @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label
                          for="fname"
                          class="col-sm-3 text-end control-label col-form-label"
                          >data course</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="text"
                            class="form-control @error('id') is-invalid @enderror"
                            id="fname"
                            placeholder="First Name Here"
                            name="model"
                            value="{{ $data['model'] }}"
                          />
                          @error('id')
                              <span class="text-danger">the id must be  required</span>
                          @enderror
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label
                          for="fname"
                          class="col-sm-3 text-end control-label col-form-label"
                          >describe course</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="text"
                            class="form-control @error('id') is-invalid @enderror"
                            id="fname"
                            placeholder="First Name Here"
                            name="desc_course"
                            value="{{ $data['desc_course'] }}"
                          />
                          @error('desc_course')
                              <span class="text-danger">the id must be required</span>
                          @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >price</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control @error('id') is-invalid @enderror"
                          id="fname"
                          placeholder="First Name Here"
                          name="price"
                          value="{{ $data['price'] }}"
                        />
                        @error('id')
                              <span class="text-danger">the id must be required</span>
                          @enderror
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
                          class="form-control @error('id') is-invalid @enderror"
                          id="fname"
                          placeholder="First Name Here"
                          name="image"
                          value="{{ $data['image'] }}"
                        />
                        @error('id')
                              <span class="text-danger">the id must be   required</span>
                          @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >category</label
                      >
                      <div class="col-sm-9">
                        <select class="form-control @error('id') is-invalid @enderror" name="id_category">
                            @foreach ($datacategory as $val)
                              <option value="{{ $val['id_category'] }}"
                              @if ($data['id_category']==$val['id_category'])
                                  selected
                              @endif>
                              {{ $val['name_category'] }}</option>
                            @endforeach
                            
                       
                        </select>
                      </div>
                      @error('id')
                              <span class="text-danger">the id must be required</span>
                          @enderror
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body">
                      <button type="submit" class="btn btn-primary">
                        update data of car
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        @endsection