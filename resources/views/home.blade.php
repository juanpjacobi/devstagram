@extends('layouts.app')
@section('title')
    Homepage
@endsection
@section('content')
   <x-list-post :posts="$posts" />
@endsection