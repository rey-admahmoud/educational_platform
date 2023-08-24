@extends('front.layout.master')

@section('categories_content')
<section style="padding: 50px 0;background-color: #222">
      
    <div class="container" >
      <div class="head_section">
        <h2>the tracks</h2>
      </div>
      <div class="row row_category">
    
        @foreach ($data as $val)
        <div class="col-md-3  ps-2 div_category">
          <div class="category">
            <a href="#"><img src="{{ URL::asset('assets/images/category')."/".$val['image']}}" alt="img"></a>
          <div class="desc_ctegory">
                 <div class="text_category">
                  <h6>{{ $val['name_category'] }}</h6>
                  <p>{{ $val['desc_category'] }}</p>
                 </div>
                  <span>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  <a href="" class="btn btn-danger">search</a>
          </div>
          </div>
        </div>
        @endforeach
  
        
      </div>
    </div>

    @endsection
   