
@extends('layouts.main')

@section('content')
<h4>Hello,{{session('user')}}</h4>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Type</th>
        
        
    </tr>
    @foreach($customers as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->name}}</td>
            <td>{{$st->email}}</td> 
            <td>{{$st->type}}</td>
        </tr>
    @endforeach
</table>
@endsection