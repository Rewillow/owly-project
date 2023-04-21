@extends('layout')

@section('create')


<form method="POST" action="/subjects" class="create--course--form" >
    <div class="form--create--subject--box">
    <h1>Create Subject</h1>
    <p>Fill out the form to create a subject</p>
    <div class="form--create--subject--container">
    @csrf
    <div class="form--create--subject--group--input">
    <label for="name"><strong>Name</strong></label>
    <input name="name" class="form--create--input" type="text" autocomplete="off" placeholder="Example: Science..." value="{{old('name')}}">
    @error('name')
    <p class="message--error">{{$message}}</p>
    @enderror
    </div>
    <button class="create--subject--button"><strong>CREATE SUBJECT</strong></button>
</div>
</div>
</form>

@endsection