@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Add Mahasiswa</h1>
    <form action="/mahasiswa/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" placeholder="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="text"placeholder="NIM" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>    
        <input type="submit" name="submit" class="btn btn-info" value="save"><br>
    </form>
</div>

@endsection