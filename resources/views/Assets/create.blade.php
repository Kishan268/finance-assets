@extends('layouts.main')
@section('content')
  
<main class="app-content">
  <div class="app-title">
    <div>
    {{-- Message show --}} 
      <p>
        @if($message = Session::get('success'))  
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
          </p>
        </div>
        <ul class="app-breadcrumb breadcrumb side"> 
        </ul>
      </div>
{{-- =================================== --}}
  {{-- START INSERT MODEL BOX --}}
      
      <div class="container">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addComapny">Add Assets</button>
        <!-- Modal -->
        {{-- <div class="modal fade" id="addComapny" role="dialog"> --}}
          {{-- <div class="modal-dialog"> --}}
            <!-- Modal content-->
            <div class="row mt-2">
              <div style="width: 131%;" class="modal-content">
                <div class="modal-header">
                  {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                  {{-- <h4 class="modal-title"></h4> --}}
                </div>
                <div class="cart-body">
                  <div class="clearix"></div>
                  <div class="col-md-12">
                    <div class="tile">
                      <h3 class="tile-title">Add Assets</h3>
                      <div class="tile-body">
                      {{-- INSERT FORM --}}
                        <form class="row" action="{{route('assets.store')}}" method="post">
                        @csrf
                          <div class="form-group col-md-6">
                            <label class="control-label">Asset Name</label>
                            <input id="grd" name="name" class="form-control" type="text" placeholder="Enter Assets">
                          </div>
                          <div class="form-group col-md-6">
                            <label class="control-label">quantity</label>
                            <input id="quantity" name="quantity" class="form-control" type="text" placeholder="Enter quantity">
                          </div>
                           <div class="form-group col-md-6">
                            <label class="control-label">Serial No</label>
                            <input id="serial_no" name="serial_no" class="form-control" type="text" placeholder="Enter Serial No">
                          </div>
                           <div class="form-group col-md-6">
                            <label class="control-label">Asset Type</label>
                            <input id="type" name="type" class="form-control" type="text" placeholder="Enter type">
                          </div>
                            <div class="form-group col-md-4 align-self-end">
                              <button id="addGrade" class="btn btn-primary" type="submit">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>ADD
                              </button>
                            </div>
                          </form>
                            {{-- END INSERT FORM --}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    {{-- <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                  </div>
                </div>
              </div>
            {{-- </div>
          </div> --}}
        {{-- </div> --}}
     
@endsection('content')


