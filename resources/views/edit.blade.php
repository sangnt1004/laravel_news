@extends('layout')
@section('content')
<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
    <form role="form" method="POST" action="">
    {{ csrf_field() }}
        <h2>Đăng Bài</h2>
        <hr class="colorgraph">

        <div class="row">
            <div class="col-xs-12 col-sm-1 col-md-12">
                <div class="form-group">
                    <input type="text" name="txtFullName" id="txtFullName" class="form-control input-lg" value="{{ old('txtFullName', $data['created_by']) }}" tabindex="1" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="txtNameYoutube" id="txtVideoName" class="form-control input-lg" value="{{ old('txtNameYoutube', $data['titles']) }}" tabindex="2" required>
        </div>
        <div class="form-group">
            <input type="text" name="txtLink" id="txtLink" class="form-control input-lg" value="{{ old('txtLink', $data['links']) }}" tabindex="2" required>
        </div>
        <div class="form-group">
            <input type="email" name="txtEmail" id="email" class="form-control input-lg" value="{{ old('txtEmail', $data['emails']) }}" tabindex="3" required>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea name="txtContent" class="form-control input-lg tinymce" rows="4" tabindex="4">{{ old('txtContent', $data['contents']) }}</textarea>
                </div>
            </div>
        </div>

        <hr class="colorgraph">
        <div class="row">
            <div class="col-xs-12 col-md-12"><input type="submit" value="Sửa" class="btn btn-primary btn-block btn-lg"></div>
        </div>
    </form>
</div>
@endsection