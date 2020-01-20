@extends('layouts.empBase')

@section('elencoEmp')
<h1>Employee: {{ $emps -> count() }}</h1>
<ul>
  @foreach ($emps as $emp)
  <li>
    ({{ $emp -> id }}) {{ $emp -> name }} {{ $emp -> lastname}}

    @if($emp -> tasks() -> count() > 0)
    ({{ $emp -> tasks() -> count() }} task):
    <ul>
      @foreach( $emp -> tasks as $task)

      <li>{{ $task -> name}};</li>

      @endforeach
    </ul>
    @endif

  </li>
  @endforeach
</ul>
@endsection