@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Registro</h2>
    <form method="POST" action="{{ route('admin.team_rally.store') }}">
        @include('admin.team_rally.form')
    </form>
</div>
@endsection