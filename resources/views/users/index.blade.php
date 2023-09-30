 
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4"> All Users</h1>
                <a class="btn btn-success" href="{{route('users.create')}}">create user</a>
</div>
</div>
<div class="row">
    @if($user->count() >0)
   
    <div class="col">
        <table class="table">
            <thead class="thead-dark">
            <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
         
 
</tr>
</thead>
<tbody>
   @foreach($user as $item)
    
   <tr>
    <th scope="row"> #</th>
   
<td>{{$item->name}}</td>
 <td>{{$item->email}}</td>
 

<td>
    
     
    
    <a href="{{route('users.destroy',['id'=> $item->id])}}"><i class="fas fa-trash-alt"></i></a>
</td>
</tr>
@endforeach
</tbody>
</div>
@else
<div class="alert alert-danger" role="alert">
No Posts
</div>
    @endif
</div>
</div> 
 @endsection