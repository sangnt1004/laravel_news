@extends('layout')
@section('content')
<center><h1>Trang Quản Lý</h1></center>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="50px">ID</th>
                <th width="150px">Video Clip</th>
                <th>Tên Video</th>
                <th width="200px">Người Đăng</th>
                <th width="50px">Ẩn</th>
                <th width="50px">Sửa</th>
                <th width="50px">Xóa</th>
            </tr>
        </thead>
        <tbody>
        @foreach($news as $item)
            <tr valign="middle">
                <td>{{$loop->iteration }}</td>
                <td>
                    <iframe width="150" height="100" src='{{ $item["links"] }}' frameborder="0" allowfullscreen></iframe>
                </td>
                <td>{{ $item["titles"] }}</td>
                <td>{{ $item["created_by"] }}</td>
                <td><a href="">Ẩn</a></td>
                <td><a href="{{route('edit',['id' => $item["id"]]) }}">Sửa</a></td>
                <td><a href="{{route('delete',['id' => $item["id"]]) }}">Xóa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection