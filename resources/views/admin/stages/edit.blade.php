@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Tramo</h2>
    <form method="POST" action="{{ route('admin.stages.update', $stage) }}">
        @method('PUT')
        @include('admin.stages.form', ['stage' => $stage])
    </form>
</div>
@endsection
