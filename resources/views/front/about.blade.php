@extends('front.layout.master')



@section('about_content')

<div class="container">
    <div class="header_about">
        <h2>ABOUT US</h2>
    </div>
    <div class="row div-about">
        <div class="col-md-7">
            <div class="text_about">
                <h1>teaching</h1>
                <p>teaching is platform is a digital platform that provides access to educational 
                    resources and tools. It can be used by students, teachers, and educational institutions 
                    to facilitate learning and teaching. Educational platforms can include online courses, 
                    video lectures, interactive quizzes, discussion forums, and other resources that help 
                    learners acquire knowledge and skills. They can be designed for specific subjects, levels of 
                    education, or learning styles. Educational platforms can also provide analytics and tracking 
                    features that allow teachers and administrators to monitor 
                    student progress and performance. Some examples of popular educational platforms include Coursera, 
                    Udemy, and Khan Academy.</p>
            </div>
        </div>
        <div class="col-md-5 img_about">
            <img src="{{ URL::asset('my_assets/images/photo-1605711285791-0219e80e43a3.avif') }}" alt="">
        </div>
    </div>
</div>


@endsection