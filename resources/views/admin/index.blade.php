@include('admin.header')
<div class="container">
    <div class="row" style="margin-top: 2em;">
        <div class="col-md-4">
            <div class="card">
                <i class="fa-regular fa-folder-open card-img-top"></i>
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('categories.create')}}" class="btn btn-primary">Add new</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <i class="fa-solid fa-cloud card-img-top"></i>
                <div class="card-body">
                    <h5 class="card-title">Tags</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('tags.create')}}" class="btn btn-primary">Add new</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <i class="fa-solid fa-file card-img-top"></i>
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('posts.create')}}" class="btn btn-primary">Add new</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
