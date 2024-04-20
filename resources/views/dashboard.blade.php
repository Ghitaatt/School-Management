@extends('layouts.app-master')
@section('content')

<div class="card">
    <div class="card-header">Dashboard</div>
    <div class="card-body">
        <p>hello : {{Auth::user()->name}} </p>

    </div>
</div>

@endsection('content')