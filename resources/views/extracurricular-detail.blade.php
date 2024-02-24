@extends('layouts.mainlayout')


@section('title', 'Extracurricular detail')

@section('content')

    <h2>Anda sedang melihat data detail extracurricular {{ $ekskul->name }}</h2>

    <div class="mt-5 mb-5">
        <h3>List Peserta :</h3>
        <ol>
            @foreach ($ekskul->students as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ol>
    </div>

@endsection
