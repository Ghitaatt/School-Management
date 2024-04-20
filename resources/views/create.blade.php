@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    <h1>Add file</h1>

    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @include('layouts.partials.messages')
        @csrf
        <div class="form-group mt-4">
            <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
        </div>

        <div class="form-group mb-4">
            <select class="form-select" name="niveau">
                <option selected>niveau</option>
                <option value="5eme">5eme</option>
                <option value="6eme">6eme</option>
                <option value="bac">bac</option>
            </select>
        </div>

        <div class="form-group mb-4">
            <select class="form-select" name="type">
                <option selected>type</option>
                <option value="examen">examen</option>
                <option value="emplois de temp">emplois de temp</option>
                <option value="autre">autre</option>
            </select>
        </div>

        <button class="w-100 btn btn-lg  mt-4" style="background-color: #BE52C1;" type="submit">Save</button>
    </form>

</div>
@endsection