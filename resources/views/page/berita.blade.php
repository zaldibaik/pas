@extends('layouts.app')

@section('content')
<main class="container">
  <div class="row my-5">
      <div class="col-ig-12">
          <div class="card shadow">
              <div class="card-header d-flex justify-content-between align-items-center">
                  <h3>t</h3>
                  <button class="btn btn-light " data-bs-toggle="model" data-bs-target="#addEmployeModel">
                     <i class="bi-plus-cirtle me-2">add</i>
                  </button>
              </div>
              <form>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">title</label>
                    <input type="title" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </form>
          </div>
      </div>
  </div>
  
  </main>


@endsection