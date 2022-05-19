@extends('layouts.header')
@section('content')


<div class="container">
    <h1 class="text-center my-5">Your Task Here</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
             @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif 
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
        
                <div class="card-body">
                    <ul class="list-group">
        
                        @foreach ($todos as $todo)
                            <li class="list-group-item"> {{ $todo->name }}
                                <a href="{{ route('delete' , $todo->id)}}" class="btn btn-danger btn-sm float-end">Delete</a>
                                @if (!$todo->completed)
                                <a href="{{ route('complete' , $todo->id)}}" class="btn btn-success btn-sm float-end me-2">Complete</a>    
                                @endif
                                <a href="{{ route('show' , $todo->id)}}" class="btn btn-primary btn-sm float-end me-2">View</a>
                            </li>
                            
                        @endforeach
        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

