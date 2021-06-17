@extends('layouts.todolayout')
@section('title', 'Todos')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2 border-bottom border-primary">
                <div style="display: flex; justify-content:space-between;">
                    <div><a href="/home"><i class="fas fa-home text-primary mt-3"></i></a></div>
                    <div>
                        <h1>All Todos</h1>
                    </div>
                    <div> <a href="{{ route('todo.create') }}"><i class="fas fa-plus-circle text-success mt-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2 mt-3">
                <x-message />
                <?php if (count($data) == 0) { ?>
                <h4>No Todo for you. create new.</h4>
                <?php } else { ?>
                @foreach ($data as list('id' => $i, 'event' => $e, 'completed' => $c))
                    <ul style="text-transform: capitalize;" class="list-unstyled">
                        <li style="display: flex; justify-content:space-between;">
                            <div>
                                @if ($c)
                                    <a style="text-decoration: none;" href="/todo/done/{{ $i }}"><i
                                            class="fas fa-check mr-3 text-success cc"></i><span
                                            style="font-weight: bold; font-size:20px; text-decoration-line: line-through;"
                                            class="text-dark">{{ $e }}</span></a>
                                @else
                                    <a style="text-decoration: none;" href="/todo/done/{{ $i }}"><i
                                            class="fas fa-check mr-3" style="color: lightgray"></i><span
                                            style="font-weight: bold; font-size:20px;"
                                            class="text-dark">{{ $e }}</span></a>
                                @endif
                            </div>
                            <div>
                                @if ($c)
                                    <span class="text-success">Completed</span>
                                @else
                                    <a href="{{ route('todo.edit', $i) }}"><i
                                            class="fas fa-edit text-warning mx-3"></i></a>
                                    <span class="fas fa-trash-alt text-danger" style="cursor: pointer"
                                        onclick=" event.preventDefault();
                                            if(confirm('Do You Really Want To Delete?')){document.getElementById('form-delete-{{ $i }}').submit()}"></span>
                                    <form action="{{ route('todo.destroy', $i) }}" style="display: none"
                                        id="{{ 'form-delete-' . $i }}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                @endif
                            </div>
                        </li>
                    </ul>
                @endforeach
                <?php } ?>
            </div>
        </div>
        <?php if (count($data) != 0) { ?>
        <div class="row">
            <div class="col-8 offset-2 mt-3">
                <div class="alert alert-warning text-center" role="alert">
                    <h6>You Have {{ $count }} Pending Task</h6>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
@endsection
