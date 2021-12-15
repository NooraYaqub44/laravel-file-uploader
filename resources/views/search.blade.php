
    @extends('layouts.app')

    @section('content')
    <div class=" container mt-5">

          <h3 class="text-center mb-5">Search files Here</h3>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <input class="form-control mr-sm-2" name="search" id="search_keyword" type="text" placeholder="Search">
          <button class="btn btn-outline-success " id="search" type="submit">Search</button>
          </div>



    </div>



    @endsection
