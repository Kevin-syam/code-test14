@extends('app/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todo List</div>
                <div class="panel-body">
                    <a href="{{ url('todos/create') }}" class="btn btn-primary">Add todo</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </th>

                            @if(! count($todos))
                                <tr>
                                    <td colspan="3">No todo</td>
                                </tr>
                            @endif
                            @foreach($todos as $todo)
                                <tr>
                                    <td>{{ $todo->nama }}</td>
                                    <td>{{ $todo->keterangan ? 'Sudah' : 'Belum' }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('todos/'.$todo->id.'/edit') }}">Edit</a>
                                        <form method="POST" action="{{ route('todos.delete', ['todo' => $todo->id]) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection