@extends('layouts.index')

@section('content')

<h1>LISTA DIPENDENTI</h1>
[ <a href=" {{ route('emp.create') }} ">INSERISCI NUOVO DIPENDENTE</a> ]
<ul>
  @foreach ($emps as $emp)
    <li> 
      {{ $emp-> name }} 
      {{ $emp -> lastname }} : 
      (<a href=" {{ route('emp.delete', $emp -> id) }} ">LICENZIA</a>)
      ( <a href="">MODIFICA</a> )
      <ul>
        <br>
        @foreach ($emp -> tasks as $task)
            <li>
              {{ $task -> title }} 
              ( <a href="">ELIMINA</a> )
              ( <a href="">MODIFICA</a> )
            </li>
            <br>
        @endforeach
      </ul>
    </li>  
    <br> <br>
  @endforeach
</ul>
    
@endsection