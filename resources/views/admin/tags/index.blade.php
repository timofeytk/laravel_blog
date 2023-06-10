@include('admin.header')
<div class="container">
    <div class="row" style="margin-top: 2em;">
        <div class="col-md-12">
            <h1>Tags list</h1>
            @if(count($tags))
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->title}}</td>
                            <td>{{$tag->slug}}</td>
                            <td>
                                <a href="{{ route('tags.edit', ['tag' => $tag->id]) }}"
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <form
                                    action="{{ route('tags.destroy', ['tag' => $tag->id]) }}"
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
                <div>Tags not found...</div>
            @endif
            <div><a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">Add new tag</a></div>
            <nav>
                {{$tags->links()}}
            </nav>
        </div>
    </div>
</div>
@include('admin.footer')

