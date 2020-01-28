@extends('layouts.index')

@section('content')

<form action=" {{ route('emp.update', $emp -> id) }} " method="post">
   @csrf
   @method('POST')

  <label for="name">NAME</label>
  <input type="text" name="name" value=" {{ $emp -> name }} ">
  
  <label for="">LASTNAME</label>
  <input type="text" name="lastname" value=" {{ $emp -> lastname }} ">

  <br>
  @foreach ($tasks as $task)
      @if ($emp -> tasks() -> find($task -> id))
      <input type="checkbox" name="tasks[]" checked> {{ $task -> title }} <br> 
      @else          
      <input type="checkbox" name="tasks[]"> {{ $task -> title }} <br>
      @endif
  @endforeach
  
  <button type="submit">EDIT</button>
</form>
    
@endsection