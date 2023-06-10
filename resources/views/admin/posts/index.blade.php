@include('admin.header')
<div class="container">
    <div class="row" style="margin-top: 2em;">
        <div class="col-md-12">
            <h1>Posts list</h1>
            @if (count($posts))
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px">#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->title }}</td>
                            <td>{{ $post->tags->pluck('title')->join(', ') }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <form
                                    action="{{ route('posts.destroy', ['post' => $post->id]) }}"
                                    method="post" class="float-left">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Confirm delete')">
                                        <i
                                            class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Posts not found...</p>
            @endif
            <div><a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add new post</a></div>
            <nav>
                {{$posts->links()}}
            </nav>
        </div>
    </div>
</div>
@include('admin.footer')

