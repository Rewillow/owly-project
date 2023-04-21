@extends('layout')

@section('create')


<form method="POST" action="/courses" class="create--course--form" >
    <div class="form--create--box">
    <h1>Create Course</h1>
    <p>Fill out the form to create a course</p>
    <div class="form--create--container">
    @csrf
    <div class="form--create--group--input">
    <label for="title"><strong>Title</strong></label>
    <input name="title" class="form--create--input" type="text" autocomplete="off" placeholder="Example: Traveling among the stars..." value="{{old('title')}}">
    @error('title')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <div class="form--create--group--input">
    <label for="subject[]"><strong>Subject</strong></label>
    <input name="subject[]" class="form--create--input" type="text" autocomplete="off" placeholder="Example: Math, Science..." value="{{old('subject[]')}}">
    @error('subject[]')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <div class="form--create--group--input">
    <label for="spots"><strong>Spots</strong></label>
    <input name="spots" class="form--create--input" type="number" min="1" max="300" placeholder="Example: 15" value="{{old('spots')}}"> 
    @error('spots')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <button class="create--course--button"><strong>CREATE COURSE</strong></button>
</div>
</div>
</form>

@endsection