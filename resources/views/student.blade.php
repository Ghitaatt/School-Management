@extends('main')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="card">
    <div class="card-header">students</div>
    <div class="card-body">
        <p>hello : {{Auth::user()->name}} </p>



        <table class="table table-striped">
            <thead>
                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    type
                </th>
                <th scope="col">
                    Niveau
                </th>
                <th scope="col">
                    Size
                </th>
                <th scope="col">
                    Action
                </th>
            </thead>
            <tbody>
                @foreach ($data as $file)
                <tr>
                    <td width="10%">{{$file->name}}</td>
                    <td width="10%">{{ $file->type }}</td>
                    <td width="10%">{{$file->niveau}}</td>
                    <td width="10%">{{$file->size}}</td>
                    <td width="5%"><a href="{{ url('/view',$file->id)}}">view</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection('content')