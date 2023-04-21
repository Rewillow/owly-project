@extends('layout')

@section('create')


<form method="POST" action="/subjects/{{$subject->id}}" class="create--course--form" >
    <div class="form--create--subject--box">
    <h1>Edit Subject</h1>
    <p>Edit: {{$subject->name}}</p>
    <div class="form--create--subject--container">
    @csrf
    @method('PUT')
    <div class="form--create--subject--group--input">
    <label for="name"><strong>Name</strong></label>
    <input name="name" class="form--create--input" type="text" autocomplete="off" placeholder="Example: Traveling among the stars..." value="{{$subject->name}}">
    @error('name')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <button class="create--subject--button"><strong>EDIT SUBJECT</strong></button>
</div>
</div>
</form>
@endsection