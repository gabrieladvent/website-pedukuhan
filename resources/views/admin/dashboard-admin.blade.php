@extends('nav-foot.layout-admin')
@section('isi-content')
@include('nav-foot.sidebar-admin', ['user' => $user])
    <main id="main">
        <h1>Dashboard Admin</h1>
    </main>
@endsection