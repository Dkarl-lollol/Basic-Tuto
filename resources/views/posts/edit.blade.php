@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{  __('Post Edit') }}</div>

                <div class="card-body">
                    <form action="{{  route('post.update', $post) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value={{  $post->title }}>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="body" class="form-control">{{  $post->body }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Post</button>
                            <a class="btn btn-link" href="{{  route('post.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection