@include('admin.header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category create</h3>
                </div>
                <!-- /.card-header -->

                <form role="form" method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="title"
                                   class="form-control @error('title') is-invalid @enderror" id="title"
                                   placeholder="Name">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@include('admin.footer')
