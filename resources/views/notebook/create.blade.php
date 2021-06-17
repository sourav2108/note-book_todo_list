@extends('layouts.todolayout')
@section('title','Create Todo')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4 border-bottom border-primary">
               <div style="display: flex; justify-content:space-between;">
                <div><h1>Create Note</h1></div>
               <div> <a href="{{ route('notebook.index') }}"><i class="fas fa-arrow-circle-left mt-3"></i></a></div>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4 mt-3">
                <x-message/>
               <form action="{{ route('notebook.store') }}" method="post">
                    @csrf
                    <label for="data"><h4>Add Note</h4></label>
                    <textarea type="text" name="data" id="data" autofocus autocomplete="off" class="form-control"></textarea>
                    <div class="text-center mt-3"><input type="submit" value="Save" class="btn btn-success"></div>
                </form>
            </div>
        </div>
    </div>
@endsection  