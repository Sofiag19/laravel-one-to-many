@extends('layouts.empBase')

@section('elencoList')
<h1>Tasks: {{ $tasks -> count() }}</h1>
<ul>
  @foreach ($tasks as $task)
  <li>
    {{ $task -> name }}
    /* {{ $task -> employees() -> count() }} */ 
  </li>
  @endforeach
</ul>
@endsection