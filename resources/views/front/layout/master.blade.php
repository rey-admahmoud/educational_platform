<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layout.head')
    <title>Document</title>
</head>
<body>

    @include('front.layout.header')
    
    <!-- end section header -->


    {{-- contact content........................................ --}}
    @yield('contact_content')
      {{-- end contact content........................................ --}}

      {{-- content about...................................................... --}}
      @yield('about_content')
      {{-- end content about...................................................... --}}

      {{-- content all courses...................................................... --}}
      @yield('courses_content')
      {{-- end content all courses...................................................... --}}

      {{-- content categories...................................................... --}}
      @yield('categories_content')
      {{-- end content categories...................................................... --}}
      
    <!-- section slide -->
    @yield('section_slide')
    {{-- end section slide --}}

    <!-- ...................... section category...................... -->
    
@yield('section_category')
         
<!-- ///////////////////////////////////////////end section ctegory''''''''''''''''''''''''''''' -->
<!-- ''''''''''''''''''''''''''''''''''''''''''''''''''''section all courses''''''''''''''''''''''' -->



@yield('section_course')
      
<!-- ////////////////////////////////////// end section courses/////////////////////////// -->
     {{-- section footer............................................................... --}}
     @include('front.layout.footer')
     {{-- section footer............................................................... --}}
</body>
</html>