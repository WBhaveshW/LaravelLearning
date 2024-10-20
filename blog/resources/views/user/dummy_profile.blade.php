@extends('layouts.dummy_app')
@section('content')
@include('user._profile_details', ['user' => $data])
@endsection
@section('title', 'User Dummy Profile')