@extends('layouts.mainlayout')


@section('title', 'Teachers')

@section('content')
    <h1>ini halaman teacher</h1>

    <div class="my-5">
        <a href="" class="btn btn-primary">Add Data</a>
    </div>
    
    <h3>Teacher List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td><a href="teacher-detail/{{$item->id}}">detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
