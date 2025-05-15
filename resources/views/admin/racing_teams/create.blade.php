@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Equipo</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="POST" action="{{ route('admin.racing_teams.store') }}">
        @include('admin.racing_teams.form')
    </form>
</div>
@endsection