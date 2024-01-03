@include('layouts.app')
<section class="mt-5">
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
                     <h4>Personal Information</h4>
                     <a href="">All Information</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('posts.store')}}" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                              <label for="name" class="form-label">Name</label>
                              <input name="name" type="text" class="form-control" id="name">
                              @error('name')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-md-6">
                              <label for="slug" class="form-label">Slug</label>
                              <input name="slug" type="text" class="form-control" id="slug">
                              @error('slug')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-md-6">
                              <label for="image" class="form-label">Hero Image</label>
                              <input name="image" type="file" class="form-control" id="image">
                              @error('image')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-md-6">
                              <label for="birthdate" class="form-label">Birthdate</label>
                              <input name="birthdate" type="text" class="form-control" id="birthdate">
                              @error('birthdate')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-12">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" type="text" class="form-control" id="title">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                              </div>
                            <div class="col-md-6">
                              <label for="phone" class="form-label">Phone</label>
                              <input name="phone" type="number" class="form-control" id="phone">
                              @error('phone')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-md-6">
                              <label for="email" class="form-label">Email</label>
                              <input name="email" type="email" class="form-control" id="email">
                              @error('email')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-12">
                              <label for="address" class="form-label">Address</label>
                              <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St">
                              @error('address')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>

                            <div class="col-md-6">
                              <label for="language" class="form-label">Language</label>
                              <input name="language" type="text" class="form-control" id="language">
                              @error('language')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-md-6">
                              <label for="freelance" class="form-label">Freelance</label>
                              <input name="freelance" type="text" class="form-control" id="freelance">
                              @error('freelance')
                              <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                    </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</section>
