@extends('layouts.app')

@section('content')
    <div class="container mx-5">
        <div class="row justify-content-center">
        <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-light  " href="#">Comparison.ie!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-4">
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">E-fueling ports</a>
              </li>
            </ul>
        <button type="button" class="btn btn-light "
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Add/View receipts
        </button>
        <button type="button" class="btn btn-light"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Search for stations
        </button>
            </form>
          </div>
        </div>
      </nav>

     
    </div>
              
    
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
<div class="container"></div>
<div class="row row align-items-start"></div>
<div class="col-6 ">
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
</div>
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