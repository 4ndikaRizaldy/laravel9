@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mahasiswa') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="/mahasiswa/create">Add Mahasiswa</a>

                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($mahasiswa as $m)
                        <tr>
                            <td>{{$m->id}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->nim}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                                    <form action="/mahasiswa/{{$m->id}}" method="POST">
                                        @csrf
                                        @method("delete")
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection