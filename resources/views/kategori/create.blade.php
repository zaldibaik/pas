@extends('layouts.app')

@section('content')

<h1>Create News</h1>


<form ection="/kategori" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Judul berita</label>
        <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">descripsi</label>
        <textarea name="decripsi" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    @error('decripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection