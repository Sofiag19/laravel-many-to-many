@extends('layouts.index')

@section('content')

<h1>LISTA DIPENDENTI</h1>
[ <a href=" {{ route('emp.create') }} ">INSERISCI NUOVO DIPENDENTE</a> ]
<ul>
  @foreach ($emps as $emp)
    <li> 
      {{ $emp-> name }} 
      {{ $emp -> lastname }} : 
      (<a href=" {{ route('emp.show', $emp -> id) }} ">DETTAGLI</a>)
      (<a href=" {{ route('emp.delete', $emp -> id) }} ">LICENZIA</a>)
      ( <a href="{{ route('emp.edit', $emp -> id) }}">MODIFICA</a> )
      <ul>
        <br>
        @foreach ($emp -> tasks as $task)
            <li>
              {{ $task -> title }} 
              ( <a href=" {{ route('emp.task.destroy', [$emp -> id, $task ->id] ) }} ">ELIMINA</a> )
            </li>
            <br>
        @endforeach
      </ul>
      Added by {{ $emp -> user -> name }}
    </li>  
    <br> <br>
  @endforeach
</ul>
    
@endsection