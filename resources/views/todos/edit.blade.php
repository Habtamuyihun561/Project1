@extends('layouts.header')
@section('content')


<div class="container">
    <h1 class="text-center my-5"> Edit Task</h1>
    <form action="{{ route('update', $todo->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card card-default">
                    <div class="card-header">
                        Edit
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Error!</strong> <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $todo->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Task Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $todo->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end">Save Todo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection