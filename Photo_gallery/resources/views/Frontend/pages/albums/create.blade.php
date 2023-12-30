@include('Frontend.layouts.app')

{{-- create --}}
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Create Album</h5>
                        <a href="" class="btn btn-success">All Albums</a>
                    </div>
                    {{-- create album form field name name, description, cover_image, create button --}}
                    <div class="form-create mt-4 mb-4 mx-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('album.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Enter Album Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            aria-describedby="nameHelp">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="description" name="description">
                                        @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="divider2">
                                        <div class="mb-3">
                                            <label for="cover_image" class="form-label">Cover Image</label>
                                            <input type="file" class="form-control" id="cover_image" name="cover_image">
                                            @error('cover_image')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- create --}}
