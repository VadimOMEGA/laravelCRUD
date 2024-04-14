@extends('article.layout')
@section('content')

<h2 style="margin-top: 12px;" class="text-center">Edit Article</h2>
<br>

<form action="{{ route('articles.update', $article_info->id) }}" method="POST" name="update_article">
    {{ csrf_field() }}
    @method('PATCH')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $article_info->title }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name="description" class="form-control" placeholder="Enter Description" value="{{ $article_info->description }}">
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Text</strong>
                <input type="text" col="4" name="text" class="form-control" placeholder="Enter Text" value="{{ $article_info->text }}">
                <span class="text-danger">{{ $errors->first('text') }}</span>
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection