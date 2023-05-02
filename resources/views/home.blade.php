@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row bg-dark w-100 w-100">
        <div class="col-6">
            <h1 class="text-light text-center ">Diesel</h1>
    <div>
        <div class="card bg-secondary ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-2">
  <div class="container-fluid">
    <a class="navbar-brand ms-10" href="#">Search</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Select county
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Dublin</a></li>
            <li><a class="dropdown-item" href="#">Wicklow</a></li>
            <li><a class="dropdown-item" href="#">Kildare</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<table class="table table-dark table-striped-columns">
<thead>
    <tr>
      
      <th scope="col">Station</th>
      <th scope="col">Price</th>
      <th scope="col">Quality</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($stations as $station)
    <tr>
      <td>{{$station->name_of_petrolstation}}</td>
      <td>12</td>
      <td>1.0</td>
    </tr>
    @endforeach
</table>
<!-- <div class="container"></div>
<div class="row "></div>
<div class="col ">
<div class="card">
  
<div class="card-body" style="height: 4rem;">
    This is some text within a card body.
  </div>
</div>
</div>
<div class="col-3">
<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
</div>
<div class="col-3">
<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
</div> -->
            </div> 
        </div>
    </div>
       
       
       
       
    <div class="col-6">
            <h1 class="text-light text-center">Petrol</h1>
    <div>
        <div class="card bg-secondary ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-2">
  <div class="container-fluid">
    <a class="navbar-brand ms-10" href="#">Search</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Select county
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Dublin</a></li>
            <li><a class="dropdown-item" href="#">Wicklow</a></li>
            <li><a class="dropdown-item" href="#">Kildare</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
            </div> 
        </div>
    </div>
</div>
@endsection
