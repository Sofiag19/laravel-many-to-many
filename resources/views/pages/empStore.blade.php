@extends('layouts.index')

@section('content')

<form action=" {{ route('emp.store') }} " method="post">
   @csrf
   @method('POST')

  <label for="name">NAME</label>
  <input type="text" name="name" placeholder="add name">
  
  <label for="">LASTNAME</label>
  <input type="text" name="lastname" placeholder="add lastname">
  
  <br>

  @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value=" {{ $task -> id }} " > 
      {{ $task -> title }} 
      <br> 

  @endforeach

  <button type="submit">CREATE</button>
</form>
    
@endsection