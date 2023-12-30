{{-- @include('Frontend.layouts.app')

<div class="card ">
    <div class="card-header d-flex justify-content-end">
      <a href="{{ route('album.index') }}" class="btn btn-primary mx-2">All Albums</a>
      <a href="{{ route('photo.create', ['album_id' => $albumA->id]) }}" class="btn btn-primary">Add Photo</a>
    </div>
    <div class="row d-flex align-items-center">
      @foreach ($album as $photo)
      <div class="col-md-4">
        <div class="card" style="width: 18rem; margin: 30px 10px 30px 10px">
          <div class="card-body">
              <img src="{{asset($photo->photo)}}" class="card-img-top" alt="Album Image">
             
              <h3 class="card-title mt-3">{{ $photo->title }}</h3>
              <p class="card-text">{{ $photo->photo_description }}</p>
            </div>
            <div class="card-body d-flex justify-content-between">
              <form action="{{ route('album.destroy', $albumA->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div> --}}