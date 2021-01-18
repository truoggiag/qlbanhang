@extends('admin.admin-layout')
@section('content')

<div class="card">
    <h5 class="card-header">Sửa bài viết</h5>
    <div class="card-body">
      <form method="post" action="{{route('admin.handle.edit.post',['id' => $posts->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title" class="col-form-label">Tiêu đề <span class="text-danger">*</span></label>
          <input id="title" type="text" name="title" placeholder="Enter title"  value="{{ $posts->title }}" class="form-control">
          @error('title')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="catePost" class="col-form-label">Tên danh mục</label>
          <select name="catePost" class="form-control">
            <option value="">--Select any category--</option>
            @foreach($catePosts as $key=>$data)
            <option value="{{$data->title}}"
              {{$data->title == $posts->post_cat_id ? 'selected' : ''}}>{{$data->title}}</option>
            @endforeach
            </select>
        </div>
        @error('catePost')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        
        <div class="form-group">
          <label for="quote" class="col-form-label">Trích dẫn</label>
          <textarea class="form-control" id="quote" name="quote">{{$posts->quote}}</textarea>
          @error('quote')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="tagPost" class="col-form-label">Tag</label>
          <select name="tagPost" class="form-control">
            <option>
              @foreach($tags  as $key=>$data)
              <option value="{{$data->title}}"
                {{$data->title ==$posts->post_tag_id ? 'selected' : ''}}>{{$data->title}}</option>
              @endforeach </option>
            </select>
        </div>
        @error('tagPost')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="summary" class="col-form-label">Mô tả tóm tắt</label>
            <textarea class="form-control" id="summary" name="summary">
              {!!$posts->summary!!}
            </textarea>
          </div>
          @error('summary')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="description" class="col-form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description">
              {!!$posts->description!!}
            </textarea>
        </div>
          @error('description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="row border p-2">
          <div class="col">
              <div class="input-field">
                  <label for="imagePost">Ảnh sản phẩm<span class="text-danger">*</span></label>
                  <div class="input-images"
                  type="file"
                  name="imagePost"
                  id="imagePost"></div>
              </div>
              <img src="{{asset('uploads/images/posts')}}/{{$posts->image}}" class="img-fluid img-thumbnail">
          </div>
        
        </div>
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="1" {{$posts->status == 1 ? 'selected' : ''}}>Hoạt động</option>
            <option value="0" {{$posts->status == 0 ? 'selected' : ''}}>Không hoạt động</option>
          </select>
          @error('status')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Quay lại</button>
           <button class="btn btn-success" type="submit">Cập nhập </button>
        </div>
      </form>
    </div>
</div>
@endsection
@push('stylesheets')
<link rel="stylesheet" href="{{asset('backend/summernote-0.8.18-dist/summernote.min.css')}}">
@endpush
@push('javascripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote-0.8.18-dist/summernote.min.js')}}"></script>
<script>
    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 120
      });
    });
    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detail description.....",
          tabsize: 2,
          height: 150
      });
    });
    $('.input-images').imageUploader();
</script>


@endpush