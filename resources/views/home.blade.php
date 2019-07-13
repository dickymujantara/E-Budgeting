@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('error'))
        <div class=”alert alert-danger”>
            {{\Session::get('error')}}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->isAdmin == 1)
                        <div class="panel-body">
                            <a href="{{url('admin/routes')}}">Admin</a>
                        </div>
                    @else <div class='panel-heading'>Normal User</div>
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
