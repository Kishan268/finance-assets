@extends('layouts.main')

@section('title', '| Add Role')

@section('content')
 <main class="app-content">
    <div class="app-title"> 

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="tile">
                    <div class="tile-body">
                            <div class='col-lg-12 col-lg-offset-12'>

                            <h1><i class='fa fa-key'></i> Add Role</h1>
                            <hr>

                            {{ Form::open(array('url' => 'roles')) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>

                            <h5><b>Assign Permissions</b></h5>

                            <div class='form-group'>
                                @foreach ($permissions as $permission)
                                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                @endforeach
                            </div>

                            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                            {{ Form::close() }}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection