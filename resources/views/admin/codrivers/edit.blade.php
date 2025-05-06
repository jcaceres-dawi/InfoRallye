@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Copiloto</h2>
    <form method="POST" action="{{ route('admin.codrivers.update', $codriver) }}">
        @method('PUT')
        @include('admin.codrivers.form', ['codriver' => $codriver])
    </form>
</div>
@endsection
