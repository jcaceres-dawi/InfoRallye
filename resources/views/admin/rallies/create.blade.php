@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Rally</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('admin.rallies.store') }}">
        @include('admin.rallies.form')
    </form>
</div>
@endsection