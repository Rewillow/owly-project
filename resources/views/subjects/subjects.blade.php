@extends('layout')

@section('content')

<h1 class="subjects--title">{{$heading}}</h1>
@include('partials._addSubject')
<div class="subjects--container">
<div class="subjects--list">
<ol type="1">
@foreach ($subjects as $subject)
<div class="subject--elements">
<li><strong>{{$subject->name}}</strong></li>
<div class="subject--button">
<a href="/subjects/{{$subject->id}}/edit"><button class="modify--button"><x-jam-write-f class="modify--icon--subject"/></button></a>
<form class="form--subjects--modify--delete" method="POST" action="/subjects/{{$subject->id}}">
    @csrf
    @method('DELETE')
    <button class="delete--button"><x-zondicon-trash class="trash--icon--subject"/></button>
</form>
</div>
</div>
@endforeach
</ol>
</div>
<nav class="paginate--controller--subjects">
    <div class="paginate--container--subjects">
    {{$subjects->links()}}
</div>
</nav>
</div>


@endsection