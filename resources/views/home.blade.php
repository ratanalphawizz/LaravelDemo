@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                        <a class="btn btn-success float-right" href="{{ route('students.create') }}"> Add Student</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
