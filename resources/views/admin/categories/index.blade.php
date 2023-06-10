@include('admin.header')
<div class="container">
    <div class="row" style="margin-top: 2em;">
        <div class="col-md-12">
            <h1>Categories list</h1>
            @if(count($categories))
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
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <form
                                    action="{{ route('categories.destroy', ['category' => $category->id]) }}"
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
                <div>Categories not found...</div>
            @endif
            <div><a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add new category</a></div>
            <nav>
                {{$categories->links()}}
            </nav>
        </div>
    </div>
</div>
@include('admin.footer')

