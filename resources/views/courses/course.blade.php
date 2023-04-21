@extends('layout')

@section('content')

@php
$subjectNameString = implode(', ', $course['subject']);
@endphp 

<div class="details--courses--container">
<div class="details--courses--subcontainer">
<h1> Courses: {{$course['title']}}</h1>
<h2> Subjects Covered: {{$subjectNameString}}</h2>
<h3> Open Spots: {{$course['spots']}}</h3>
<div class="details--courses--button--container">
<a href="/courses"><button class="details--courses--button--one">
    <x-bx-left-arrow-alt class="arrow--left--icon"/></button></a>
<a href="/courses/{{$course->id}}/edit"><button class="details--courses--button--two">
    <x-jam-write-f class="modify--icon"/></button></a>
<form method="POST" action="/courses/{{$course->id}}">
    @csrf
    @method('DELETE')
    <button class="details--courses--button--three"><x-zondicon-trash class="trash--icon"/></button>
</form>
</div>
</div>
</div>

@endsection