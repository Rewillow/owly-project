@extends('layout')

@section('courses')


<div class="owly--main--div">
    <div class="owly--container">
    <a href="/">
        <img src="{{asset('images/OwlyLogo.png')}}" alt="owly_logo" class="owly--logo" />
    </a>
    <div class="owly--container--text">
        <h1 class="owly--name--title">OWLY</h1>
        <div class="owly--name--description">
        <p>Owly is an innovative company that is dedicated to creating integrated learning paths that involve multiple 
            subjects to stimulate curiosity and interest in children. </p>
        <p>Our goal is to provide a comprehensive and engaging educational experience through the use 
            of cross-functional courses and cutting-edge teaching tools. We aim to offer children the opportunity to discover new worlds and develop their skills in a creative and enjoyable manner.</p>
        <p>Thanks to our passion for innovation and our constant commitment to researching new learning pathways, 
            we are able to offer a one-of-a-kind educational experience.</p>
        </div>
        <div class="owly--main--button--container">
        <a href='/courses'><button class="owly--main--button">Our courses</button></a>
        <a href="/subjects"><button class="owly--main--button">Available subjects</button></a>
        </div>
    </div>  
   </div>
</div>

@endsection

 

