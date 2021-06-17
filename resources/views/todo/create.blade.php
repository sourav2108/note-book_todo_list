@extends('layouts.todolayout')
@section('title','Create Todo')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4 border-bottom border-primary">
               <div style="display: flex; justify-content:space-between;">
                <div><h1>Create Todo</h1></div>
               <div> <a href="{{ route('todo.index') }}"><i class="fas fa-arrow-circle-left mt-3"></i></a></div>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4 mt-3">
                <x-message/>
               <form action="{{ route('todo.store') }}" method="post">
                    @csrf
                    <label for="event"><h4>Create Task</h4></label>
                    <input type="text" name="event" id="event" autofocus autocomplete="off" class="form-control">
                    <div class="text-center mt-3"><input type="submit" value="Create" class="btn btn-success"></div>
                </form>
            </div>
        </div>
    </div>
@endsection  