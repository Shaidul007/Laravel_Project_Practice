@include('Frontend.layouts.app')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                      <h5>All Albums</h5>
                      <a href="{{ route('album.create') }}" class="btn btn-primary">Create Album</a>
                    </div>
                    <div class="row d-flex align-items-center">
                        @foreach ($album as $album)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem; margin: 30px 10px 30px 10px">
                                <img src="{{ asset($album->cover_image) }}" class="card-img-top" alt="Album Image">
                                <div class="card-body">
                                    <h3 class="card-title mt-3">{{ $album->name }}</h3>
                                    <p class="card-text">{{ $album->description }}</p>
                                </div>
                                <div class="card-body d-flex justify-content-between">
                                    <a href="{{ route('album.show', $album->id) }}" class="card-link btn btn-success">View</a>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
