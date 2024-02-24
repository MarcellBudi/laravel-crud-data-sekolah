@extends('layouts.mainlayout')


@section('title', 'Delete')

@section('content')

    <div class="mt-5">
        <h2>Are you sure to delete data : {{ $student->name }} ({{ $student->nis }})</h2>

        <form style="display: inline-block" action="/student-destroy/{{ $student->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>

@endsection
