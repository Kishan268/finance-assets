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
        <a href="{{route('assets.create')}}" class="btn btn-info btn-lg" >Add Assets</a>
        <!-- Modal -->
        
    {{-- ================================ --}}
        <br>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Name</th>
                          <th>Quantity</th>
                          <th>Serial No</th>
                          <th>Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $i=1; @endphp
                        {{-- Foreach Loop start --}}
                          @foreach($data as $datas)
                        <tr>
                          <td>{{ $i++}}</td>
                          <td>{{ $datas->name}}</td>
                          <td>{{ $datas->quantity}}</td>
                          <td>{{ $datas->serial_no}}</td>
                          <td>{{ $datas->type}}</td>
                          <td>
                          {{-- Delete form --}}
                            <form method="post" action="{{ route('assets.destroy',$datas->id) }}">
                                @csrf
                                @method('DELETE')
                                {{-- Edit Button with model box call --}}
                          
                              <a href="{{ route('assets.edit',$datas->id) }}"  class="fa fa-pencil-square-o btn btn-primary">
                                {{-- <i  aria-hidden="true" ></i> --}}
                              </a>

                                {{-- Delete button --}}
                              <button class="fa fa-trash btn btn-danger" onclick="return confirm(' you want to delete?');">
                                {{-- <i  aria-hidden="true"></i> --}}
                              </button>
                            </form>
                          </td>
                        </tr>
                    {{-- Edit Model Box start ,this model box popup on edit button click --}}
                       
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
@endsection('content')


