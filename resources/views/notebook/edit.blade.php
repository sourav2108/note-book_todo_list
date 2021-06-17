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
                        <a href="{{ route('notebook.index') }}">
                            <i class="fas fa-arrow-circle-left mt-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4 mt-3">
                <x-message />
                <form action="{{ route('notebook.update',$data[0]['id']) }}" method="post">
                    @method('patch')
                    @csrf
                    <label for="data">
                        <h4>Note</h4>
                    </label>
                    <textarea type="text" name="data" id="data" autocomplete="off" class="form-control">{{ $data[0]['data'] }}</textarea>
                    <div class="text-center mt-3"><input type="submit" value="Update" class="btn btn-success"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
