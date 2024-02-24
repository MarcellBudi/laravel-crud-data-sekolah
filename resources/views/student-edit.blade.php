@extends('layouts.mainlayout')


@section('title', 'Edit')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/student/{{$student->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $student->name }}" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender" required>
                    <option value="{{ $student->gender }}">{{ $student->gender }}</option>
                    @if ($student->gender == 'L')
                        <option value="P">P</option>
                    @else
                        <option value="L">L</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="text" name="nis" class="form-control" id="nis" value="{{ $student->nis }}" required>
            </div>
            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" class="form-control" id="class" required>
                    <option value="{{$student->class->id}}">{{$student->class->name}}</option>
                    @foreach ($class as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection
