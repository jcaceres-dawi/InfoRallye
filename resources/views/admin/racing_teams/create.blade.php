@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Equipo</h2>
    <form method="POST" action="{{ route('admin.racing_teams.store') }}">
        @include('admin.racing_teams.form')
    </form>
</div>
@endsection