@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Tramo</h2>
    <form method="POST" action="{{ route('admin.stages.store') }}">
        @include('admin.stages.form')
    </form>
</div>
@endsection
