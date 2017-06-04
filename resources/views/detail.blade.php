@extends('layout')
@section('content')
<div class="col-lg-8">

    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{ $data["titles"] }}</h1>

    <!-- Author -->
    <p class="lead">
        Đăng bởi : <a href="">{{ $data["created_by"] }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Đăng bài lúc : {{ $data["created_at"] }}</p>

    <hr>

    <!-- Preview Image -->
    <div class="video-container">
        <iframe width="100%" height="400" src="{{ $data['links'] }}" frameborder="0" allowfullscreen></iframe>
    </div>

    <hr>

    <!-- Post Content -->
    <p class="lead">{!! $data["contents"] !!}</p>
    

    <hr>

    <!-- Comment Facebook -->

    <!-- Comment Facebook -->
    

</div>
@endsection