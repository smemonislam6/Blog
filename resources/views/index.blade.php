@extends('layouts.app')
@section('content')
<!-- Post content-->
@include('partials.content.article', ['posts' => $posts])
@endsection
