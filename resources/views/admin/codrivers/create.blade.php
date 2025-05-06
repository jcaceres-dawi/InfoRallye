@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Copiloto</h2>
    <form method="POST" action="{{ route('admin.codrivers.store') }}">
        @include('admin.codrivers.form')
    </form>
</div>
@endsection