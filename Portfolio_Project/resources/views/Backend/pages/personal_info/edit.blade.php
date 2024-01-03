@include('Backend.layouts.app')
<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-auto offset-lg-3">
          {{-- Error Message Start --}}
            @if (Session::has('fail'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('fail') }}
                </div>
            @endif

          {{-- Success Message Start --}}
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
           <div class="personal_info-form">

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                 <h4>Update Personal Information</h4>
                 <a class="btn btn-primary" href="{{ route('personal-info') }}">All Information</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update', $data->id) }}" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="image" class="form-label">Hero Image</label>
                            <input name="image" type="file" class="form-control" id="image">
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                          </div>
                        <div class="col-md-6">
                          <label for="name" class="form-label">Name</label>
                          <input value="{{ $data->name }}" name="name" type="text" class="form-control" id="name">
                          @error('name')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label for="designation" class="form-label">Designation</label>
                          <input value="{{ $data->designation }}" name="designation" type="text" class="form-control" id="designation">
                          @error('designation')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        
                        <div class="col-md-6">
                          <label for="birthday" class="form-label">Birthday</label>
                          <input value="{{ $data->birthday }}" name="birthday" type="text" class="form-control" id="birthday">
                          @error('birthday')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input value="{{ $data->title }}" name="title" type="text" class="form-control" id="title">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                          </div>
                        <div class="col-md-6">
                          <label for="phone" class="form-label">Phone</label>
                          <input value="{{ $data->phone }}" name="phone" type="number" class="form-control" id="phone">
                          @error('phone')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label for="email" class="form-label">Email</label>
                          <input value="{{ $data->email }}" name="email" type="email" class="form-control" id="email">
                          @error('email')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="col-12">
                          <label for="address" class="form-label">Address</label>
                          <input value="{{ $data->address }}" name="address" type="text" class="form-control" id="address" placeholder="1234 Main St">
                          @error('address')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>

                        <div class="col-md-6">
                          <label for="language" class="form-label">Language</label>
                          <input value="{{ $data->language }}" name="language" type="text" class="form-control" id="language">
                          @error('language')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label for="freelance" class="form-label">Freelance</label>
                          <input value="{{ $data->freelance }}" name="freelance" type="text" class="form-control" id="freelance">
                          @error('freelance')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </form>
                </div>
              </div>
           </div>
        </div>
    </div>

    </div>
</section>