@extends('layouts.empBase')

@section('elencoTask')
<h1>Tasks: {{ $tasks -> count() }}</h1>
<ul>
  @foreach ($tasks as $task)
  <li>
    ( {{ $task -> id }} ) {{ $task -> name }} => {{ $task->employee->name }} {{ $task->employee-> lastname }}

  </li>
  @endforeach
</ul>
@endsection