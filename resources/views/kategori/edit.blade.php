@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card h-50">
        <div class="col-lg-12">
            <form action="{{ route('page.update', $news->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="title">News Title:</label><br>
                <input type="text" id="title" name="title" value="{{ $news->title }}"><br>
                <label for="content">News Content:</label><br>
                <textarea id="content" name="content" rows="4" cols="50">{{ $news->content }}</textarea><br>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
