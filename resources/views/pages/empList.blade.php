@extends('layouts.empBase')

@section('elencoEmp')
<h1>Employee: {{ $emps -> count() }}</h1>
<ul>
  @foreach ($emps as $emp)
  <li>
    {{ $emp -> name }} {{ $emp -> lastname}}
    {{ $emp -> tasks() -> count() }}
    
    @if($emp -> tasks() -> count() > 0)(
      @foreach( $emp -> tasks() as $task)

      {{ $task -> name}}

      @endforeach
    )
    @endif

  </li>
  @endforeach
</ul>
@endsection