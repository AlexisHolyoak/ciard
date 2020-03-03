@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        @include('admin.nav')
    </div>
    <div class="row">
    @yield('admin')       
    </div>
</div>
@endsection
