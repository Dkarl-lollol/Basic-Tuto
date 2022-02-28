@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{  __('Post Show') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{  $post->title }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="body" class="form-control" readonly>{{  $post->body }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection