@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')
    <h1>Teacher's Page</h1>

    <div class="my-5">
        <a href="" class="btn btn-primary">Add Data</a>
    </div>


    <h3>Teachers List</h3>
    <table class = "table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td><a href="teacher-detail/{{$data->id}}">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
