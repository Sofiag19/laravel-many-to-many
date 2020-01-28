@extends('layouts.index')

@section('content')

<h1>LISTA DIPENDENTI</h1>
<ul>
  @foreach ($emps as $emp)
    <li> 
      {{ $emp-> name }} 
      {{ $emp -> lastname }} :
      <ul>
        @foreach ($emp -> tasks as $task)
            <li>
              {{ $task -> title }}
            </li>
        @endforeach
      </ul>
    </li>  
  @endforeach

</ul>
    
@endsection