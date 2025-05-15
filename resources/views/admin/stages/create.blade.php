@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Tramo</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="POST" action="{{ route('admin.stages.store') }}">
        @include('admin.stages.form')
    </form>
</div>
@endsection
