@extends('front.layout.master')






{{-- section slide  ....................................................... --}}


@section('section_slide')

<section class="sectionslide">
  <div class="main_slide">
    <div id="header"></div>
    <img src="assets/images/pexels-photo-3802510.webp" alt="">
    <img src="assets/images/pexels-photo-1402787.jpeg" alt="" class="active">
    <img src="assets/images/pexels-photo-3422964.webp" alt="">
    <img src="assets/images/pexels-photo-5086489.webp" alt="">
    <img src="assets/images/carheader.webp" alt="">
    <img src="assets/images/pexels-photo-1402787.jpeg" alt="" class="active">
    <img src="assets/images/pexels-photo-3422964.webp" alt="">
    <img src="assets/images/pexels-photo-3802510.webp" alt="">
    <img src="assets/images/pexels-photo-5086489.webp" alt="">
    <img src="assets/images/carheader.webp" alt="">
    <div class="controle">
        <button id="back" class="back">previous</button>
        <button id="next" class="next">next</button>
    </div>
    <script src="main.js"></script>
   </div>
</section>

@endsection


{{-- end section slid --}}




{{-- start section category --}}
 <!-- ...................... section category...................... -->
 @section('section_category')
 <section style="padding: 50px 0;background-color: #222">
      
  <div class="container" >
    <div class="head_section">
      <h2>the tracks</h2>
    </div>
    <div class="row row_category">

      @forelse ($datacategory as $val)
      <div class="col-md-3  ps-2 div_category">
        <div class="category">
          <a href="#"><img src="{{ URL::asset('assets/images/category')."/".$val['image'] }}" alt="img"></a>
        <div class="desc_ctegory">
               <div class="text_category">
                <h5>{{ $val['name_category'] }}</h5>
                <p>{{ $val['id_category'] }}</p>
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
      
      @empty
        <h1>NO CATEGORY</h1>
      @endforelse
      
      


      

    


    </div>
  </div>
  @endsection
<!-- ///////////////////////////////////////////end section ctegory''''''''''''''''''''''''''''' -->




<!-- ''''''''''''''''''''''''''''''''''''''''''''''''''''section all courses''''''''''''''''''''''' -->

@section('section_course')


<section style="padding: 50px 0;background-color: #222">
      
  <div class="container" >
    <div class="head_section">
      <h2>the courses</h2>
    </div>
    <div class="row row_category">

      @forelse ( $datacourses as $val)
      <div class="col-md-3  ps-2 div_category">
        <div class="category ">
          <a href="#"><img src="{{ URL::asset('assets/images/cars')."/".$val['image'] }}" alt="img"></a>
        <div class="desc_ctegory">
               <div class="text_category">
                <p> price: <sup>EGP</sup>{{ $val['price'] }} <sup>00</sup></p>
                <h4>course: {{ $val['name'] }}</h4>
                <p>date course:{{ $val['model'] }}</p>
                <p> describe: {{ $val['desc_course'] }}</p>
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
      @empty
        <h1 style="color: white">NO COURSES</h1>
      @endforelse
     


    </div>
  </div>
  @endsection
<!-- ////////////////////////////////////// end section courses/////////////////////////// -->


