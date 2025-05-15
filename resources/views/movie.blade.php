@extends('layouts.main')
@section('title', 'Movie')
@section('content')
<div class="container-fluid pt-4">
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-primary"><i class="bi bi-plus-square"></i></a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>imDB</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>genre</th>
                        <th>poster</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mv as $idx => $m)
                       <tr>
                        <td>{{ $m->idx+1}}</td>
                        <td>{{ $m->imDB}}</td>
                        <td>{{ $m->title}}</td>
                        <td>{{ $m->year}}</td>
                        <td>{{ $m->genre}}</td>
                        <td>{{ $m->poster}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
