@extends('layout')

@section('title',"Home")
@section('content')
    <h1>Home Page</h1>
    
    @if (request()->isMethod('get'))

        {{$message}}
        @foreach($names as $name)
            <li>{{$name}}</li>
        @endforeach

        @if(1==1)
            <div>
                yes
            </div>
        @else
            <div>
                No
            </div>
        @endif
    @endif
    <form action = "/" method="POST">
          @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <button type="submit"> Submit </button>
        </form> 
    @if (request()->isMethod('post'))
    <h1> Name is {{$name}}</h1>
    <h1> email is {{$email}}</h1>   
    @endif
    
@endsection
