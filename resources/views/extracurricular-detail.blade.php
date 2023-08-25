@extends('layouts.mainlayout')

@section('title', 'Extracurricular Detail')
    
@section('content')

<h2>
    Anda sedang melihat data detail dari Ekskul {{$ekskul->name}}
</h2>

<div class="mt-5">
    <h4>List Peserta</h4>
    <ol>
        @foreach ($ekskul->students as $item)
            <li>{{$item->name}}</li>
        @endforeach
    </ol>
</div>

@endsection