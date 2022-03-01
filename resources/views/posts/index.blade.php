@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <a onclick="return confirm('You want to show?')" href="{{  route('post.show', $post) }}" class="btn btn-success">Show</a>
                                        <a onclick="return confirm('You want to edit?')" href="{{  route('post.edit', $post) }}" class="btn btn-primary">Edit</a>
                                        <a onclick="return confirm('Are you sure?')" href="{{ route('post.delete', $post) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection