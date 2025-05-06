@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Equipo</h2>
    <form method="POST" action="{{ route('admin.racing_teams.update', $racingTeam) }}">
        @method('PUT')
        @include('admin.racing_teams.form', ['racingTeam' => $racingTeam])
    </form>
</div>
@endsection
