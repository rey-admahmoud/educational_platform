@extends('front.layout.master')


@section('contact_content')

<div class="container">
    <div class="header_about">
        <h2>CONTACT US</h2>
    </div>
    <div class="row div-about">
        <div class="contact_form">
            <form action="#">
                <input type="email" placeholder="name">
                <input type="name" placeholder="email">
                <input type="textarea" placeholder="type your message">
                <input type="submit" value="contact" class="btn">
            </form>
        </div>
    </div>
</div>

@endsection