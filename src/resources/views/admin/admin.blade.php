@extends('home')

@section('adminContent')
<div class="card">
    <div class="card-header">{{ __('Admin panel') }}</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            <div class="col-12 col-lg mb-2">
                <a class="btn btn-primary btn-lg btn-block" href="/">Register form</a>
            </div>

            <div class="col-12 col-lg mb-2">
                <a class="btn btn-primary btn-lg btn-block" href="/members_list">Members list</a>
            </div>

            <div class="col-12 col-lg mb-2">
                <a class="btn btn-primary btn-lg btn-block" href="{{ route('members_list_admin') }}">Admin members list</a>
            </div>
    </div>


</div>

@endsection
