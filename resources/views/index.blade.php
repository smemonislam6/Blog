@extends('layouts.app')
@section('content')
<!-- Post content-->
@include('partials.content.article', ['posts' => $posts])
<!-- Comments section-->
<section class="mb-5">
    <div class="card bg-light">
        <div class="card-body">
            @include('partials.content.comments')
        </div>
    </div>
</section>
@endsection
