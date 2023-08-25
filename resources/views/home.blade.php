@extends('layouts.mainlayout')

@section('title', 'Home')
    
@section('content')
    <h1>Home Page</h1>
    <h2>Welcome, You're an {{Auth::user()->role->name}}.</h2>
            {{-- {{Auth::user()->name}} --}}

@endsection
