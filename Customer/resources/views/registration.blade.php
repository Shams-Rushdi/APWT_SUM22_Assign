@extends('layouts.main')
@section('content')
    <form method="post" action="">
        {{@csrf_field()}}
        
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        
        
        Password:: <input type="text" name="password:" value="{{old('password:')}}" placeholder="password:"><br>
        @error('password:')
            {{$message}}<br>
        @enderror


        Email: <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}}<br>
        @enderror

        Type: <input type="radio" id="admin" name="fav_language" value="admin">
        <label for="admin">Admin</label><br>
        <input type="radio" id="user" name="fav_language" value="user">
        <label for="user">User</label><br>

        <input type="submit" value="Create">
    </form>
@endsection