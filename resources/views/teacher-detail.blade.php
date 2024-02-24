@extends('layouts.mainlayout')


@section('title', 'Teacher detail')

@section('content')

    <h2>Anda sedang melihat data detail teacher yang bernama {{ $teacher->name }}</h2>

    <div class="mt-5">
        <h3>Class :</h3>
        @if ($teacher->class)
            {{ $teacher->class->name }}
        @else
            -
        @endif
    </div>

    <div class="mt-5">
        <h3>List student :</h3>
        @if ($teacher->class)
            <ol>
                @foreach ($teacher->class->students as $item)
                    <li>{{ $item->name }}</li>
                @endforeach
            </ol>
        @endif
    </div>

@endsection
