@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <a href="{{--route('categori.create')--}}"><button class="btn btn-info text-center" >Create</button></a>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">text</th>
                <th scope="col">Img</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <button class="btn btn-primary shadow">Update</button>
                    <button class="btn btn-danger shadow">delete</button>
                    <button class="btn btn-success shadow">info</button>
                </td>
            </tr>
        </tbody>
    </table>

    @include('layouts.footer')
    
    @endsection
