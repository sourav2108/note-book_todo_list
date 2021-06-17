@extends('layouts.todolayout')
@section('title', 'Notebook')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col border-bottom border-primary">
                <div style="display: flex; justify-content:space-around;">
                    <div><a href="/home"><i class="fas fa-home text-primary mt-3" style="font-size: 30px"></i></a></div>
                    <div>
                        <h1>All Notes</h1>
                    </div>
                    <div> <a href="{{ route('notebook.create') }}">
                            <i class="fas fa-plus-circle text-success mt-3" style="font-size: 30px"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <x-message />
            </div>
            <?php if (count($data) == 0) { ?>
            <div class="col-4 offset-4 text-center mt-5">
                <h4>Empty Notebook</h4>
            </div>
            <?php } else { ?>
        </div>
        <div class="row d-flex mt-3">
            @foreach ($data as ['id' => $i, 'data' => $d])
                <div class="col-4">
                    <div class="card my-2" style="background-color: lightblue">
                        <div class="card-header d-flex" style="justify-content: space-between;">
                            <div><a href="{{ route('notebook.edit', $i) }}"><i class="fas fa-edit text-success"></i></a>
                            </div>
                            <div>
                                <span class="fas fa-trash-alt text-danger" style="cursor: pointer"
                                    onclick=" event.preventDefault();
                                    if(confirm('Do You Really Want To Delete?')){document.getElementById('form-delete-{{ $i }}').submit()}"></span>
                                <form action="{{ route('notebook.destroy', $i) }}" style="display: none"
                                    id="{{ 'form-delete-' . $i }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <span style="font-weight: bold;">{{ $d }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            <?php } ?>
        </div>
    </div>
@endsection
