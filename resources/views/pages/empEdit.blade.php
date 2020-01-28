@extends('layouts.index')

@section('content')

<form action=" {{ route('emp.update', $emp -> id) }} " method="post">
   @csrf
   @method('POST')

  <label for="name">NAME</label>
  <input type="text" name="name" value=" {{ $emp -> name }} ">
  
  <label for="">LASTNAME</label>
  <input type="text" name="lastname" value=" {{ $emp -> lastname }} ">
  
  <button type="submit">EDIT</button>
</form>
    
@endsection