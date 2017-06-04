@extends('layout')
@section('content')


<div class="col-md-8">
    <div id="contentUpdate"></div>
    {{-- @foreach($news as $item)
    <div class="item">
     <h2>
        <a href="#">{{ $item["titles"] }}</a>
    </h2>
    <p class="lead">
        Đăng bởi : <a href="index.php">{{ $item["created_by"] }}</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> {{ $item["created_at"] }}</p>
    <hr>
    <div class="video-container">
        <iframe width="100%" height="400" src="{{ $item["links"] }}" frameborder="0" allowfullscreen></iframe>
    </div>
    <hr>
    <p>{!! $item["contents"] !!}</p>
    <a class="btn btn-primary" href="{{route('detail',['id' => $item["id"]]) }}">Xem Chi Tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr>
</div>
@endforeach --}}

<!-- Pager -->
<ul class="pager">
    <div><img src="{{ asset('access/images/progress.gif')}}" alt="Loading" width="150px" /></div>
</ul>

</div>

@endsection