@extends('layouts.todolayout')
@section('title', 'Edit Todo')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4 border-bottom border-primary">
                <div style="display: flex; justify-content:space-between;">
                    <div>
                        <h1>Edit Todo</h1>
                    </div>
                    <div> 
                        <a href="{{ route('todo.index') }}">
                            <i class="fas fa-arrow-circle-left mt-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4 mt-3">
                <x-message />
                <form action="{{ route('todo.update',$data[0]['id']) }}" method="post">
                    @method('patch')
                    @csrf
                    <label for="event">
                        <h4>Event</h4>
                    </label>
                    <input type="text" name="event" id="event" value="{{ $data[0]['event'] }}" autocomplete="off" class="form-control">
                    <div class="text-center mt-3"><input type="submit" value="Update" class="btn btn-success"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
