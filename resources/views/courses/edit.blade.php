@extends('layout')

@section('create')


<form method="POST" action="/courses/{{$course->id}}" class="create--course--form" >
    <div class="form--create--box">
    <h1>Edit Course</h1>
    <p>Edit: {{$course->title}}</p>
    <div class="form--create--container">
    @csrf
    @method('PUT')
    <div class="form--create--group--input">
    <label for="title"><strong>Title</strong></label>
    <input name="title" class="form--create--input" type="text" autocomplete="off" placeholder="Example: Traveling among the stars..." value="{{$course->title}}">
    @error('title')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <div class="form--create--group--input">
    <label for="subject[]"><strong>Subject</strong></label>
    <input name="subject[]" class="form--create--input" type="text" autocomplete="off" 
           placeholder="Example: Math, Science..." value="{{ implode(', ', $course->subject) }}">
    @error('subject')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <div class="form--create--group--input">
    <label for="spots"><strong>Spots</strong></label>
    <input name="spots" class="form--create--input" type="number" min="1" max="300" placeholder="Example: 15" value="{{$course->spots}}"> 
    @error('spots')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <button class="create--course--button"><strong>EDIT COURSE</strong></button>
</div>
</div>
</form>
@endsection