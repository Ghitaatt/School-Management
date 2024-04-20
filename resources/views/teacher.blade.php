@extends('layouts.app-master')
@section('content')

<div class="card">
    <div class="card-header">teachers</div>
    <div class="card-body">
        <p>hello : {{Auth::user()->name}} </p>
        <h1>welcome</h1>
    </div>
</div>

@endsection('content')