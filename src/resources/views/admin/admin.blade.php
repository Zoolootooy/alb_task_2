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

        <ul class="list-group list-group-horizontal">
            <li class="list-group-item">
                <a href="/">Register form</a>
            </li>
            <li class="list-group-item">
                <a href="/members_list">Members list</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('members_list_admin') }}">Admin members list</a>
            </li>
        </ul>
    </div>


</div>

@endsection
