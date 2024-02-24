@extends('layouts.mainlayout')


@section('title', 'Students')

@section('content')
    <h1>ini halaman student</h1>

    <div class="my-5 d-flex justify-content-between">
        <a href="student-add" class="btn btn-primary">Add Data</a>
        <a href="student-deleted" class="btn btn-info">Show Deleted Data</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <h3>Student List</h3>

    <div class="my-3 col-12 col-sm-8 col-md-5">
        <form action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="keyword">
                <button class="input-group-text btn btn-primary">Search</button>
            </div>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->class->name }}</td>
                    <td>
                        @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                            -
                        @else
                            <a href="student-detail/{{ $data->id }}">detail</a>
                            <a href="student-edit/{{ $data->id }}">edit</a>
                        @endif

                        @if (Auth::user()->role_id == 1)
                            <a href="student-delete/{{ $data->id }}">delete</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $studentList->withQueryString()->links() }}
    </div>
@endsection
