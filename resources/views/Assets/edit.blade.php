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
      
     

  
                    {{-- Edit Model Box start ,this model box popup on edit button click --}}
                        <div class="container">
                         {{--  <div class="modal fade" id="companyEdit{{ $datas->id }}" role="dialog">
                            <div class="modal-dialog"> --}}
                              <!-- Modal content-->
                              <div class="row">
                                <div style="width: 131%;" class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"></h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="clearix"></div>
                                    <div class="col-md-12">
                                      <div class="tile">
                                        <h3 class="tile-title">Update Company</h3>
                                        <div class="tile-body">
                                        {{-- Update FORM --}}
                                          <form class="row" action="{{route('assets.update',$data->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group col-md-6">
                                             
                                        <label class="control-label">Asset Name</label>
                                          <input id="grd" name="name" class="form-control" type="text" placeholder="Enter Assets" value="{{ $data->name}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="control-label">quantity</label>
                                          <input id="quantity" name="quantity" class="form-control" type="text" placeholder="Enter quantity" value="{{ $data->quantity}}">
                                        </div>
                                         <div class="form-group col-md-6">
                                          <label class="control-label">Serial No</label>
                                          <input id="serial_no" name="serial_no" class="form-control" type="text" placeholder="Enter Serial No " value="{{ $data->serial_no}}">
                                        </div>
                                         <div class="form-group col-md-6">
                                          <label class="control-label">Asset Type</label>
                                          <input id="type" name="type" class="form-control" type="text" placeholder="Enter type" value="{{ $data->type}}">
                                        </div>
                                              <div class="form-group col-md-4 align-self-end">
                                              <button type="submit" class="btn btn-primary">
                                                  <i class="fa fa-fw fa-lg fa-check-circle"></i>Update
                                              </button>
                                              </div>
                                            </form>
                                            {{-- END Update FORM --}}
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" id="closeEdit" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        {{-- Edit Model/Update Box End --}}
                         {{-- @endforeach --}}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
@endsection('content')


