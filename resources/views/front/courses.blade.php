@extends('front.layout.master')


@section('courses_content')

<section style="padding: 50px 0;background-color: #222">
      
    <div class="container" >
      <div class="head_section">
        <h2>the courses</h2>
      </div>
      <div class="row row_category">

      @foreach ($data as $val )
      <div class="col-md-3  ps-2 div_category">
        <div class="category">
          <a href="#"><img src="{{ URL::asset('assets/images/cars')."/".$val['image']}}" alt="img"></a>
        <div class="desc_ctegory">
               <div class="text_category">
                <p> price: <sup>EGP</sup>{{ $val['price'] }} <sup>00</sup></p>
                <h6>course: {{ $val['name'] }}</h6>
                {{-- <p>{{ $val['id_category'] }}</p> --}}
                {{-- <p>{{ $val['price'] }}</p> --}}
                <p>{{ $val['desc_course'] }}</p>
               </div>
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span>
                <a href="" class="btn btn-danger">show</a>
        </div>
        </div>
      </div> 
      @endforeach
      </div>
    </div>
@endsection  
