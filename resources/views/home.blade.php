 @extends('layouts.main')
 @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          {{-- <p>A free and open source Bootstrap 4 admin template</p> --}}
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>

        <div class="col-md-12">
          <div class="tile">
          <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                  <div class="card-body">
                    <h1 align='center'>Welcome :  {{ Auth::user()->name }}</h1>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</main>
 @endsection