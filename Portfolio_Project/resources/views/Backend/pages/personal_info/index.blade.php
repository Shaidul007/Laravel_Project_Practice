@include('Backend.layouts.app')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto offset-lg-3">
               <div class="personal_info-form">
                <div class="card">
                    <div class="card-header">
                      Personal Info
                    </div>
                    <div class="card-body">
                      @foreach ($data as $data)
                          
                      
                        <form class="row g-3" method="POST" action="{{ route('personal-info.store') }}" enctype="multipart/form-data">
                            <div class="col-md-6">
                              <label for="main_name" class="form-label" >Name</label>
                              <input value="{{ $data->name }}" type="text" class="form-control" id="main_name">
                            </div>
                            <div class="col-md-6">
                              <label for="designation" class="form-label">Designation</label>
                              <input value="{{ $data->designation }}" type="text" class="form-control" id="designation">
                            </div>
                            <div class="col-md-6">
                              <label for="hero_img" class="form-label">Hero Image</label>
                              <input value="{{ $data->hero_img }}" type="file" class="form-control" id="hero_img">
                            </div>
                            <div class="col-md-6">
                              <label for="birthday" class="form-label">Birthday</label>
                              <input value="{{ $data->birthday }}" type="text" class="form-control" id="birthday">
                            </div>
                            <div class="col-md-6">
                              <label for="phone" class="form-label">Phone</label>
                              <input value="{{ $data->phone }}" type="number" class="form-control" id="phone">
                            </div>
                            <div class="col-md-6">
                              <label for="email" class="form-label">Email</label>
                              <input value="{{ $data->email }}" type="email" class="form-control" id="email">
                            </div>
                            <div class="col-12">
                              <label for="inputAddress" class="form-label">Address</label>
                              <input value="{{ $data->address }}" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-md-6">
                              <label for="language" class="form-label">Language</label>
                              <input value="{{ $data->language }}" type="text" class="form-control" id="language">
                            </div>
                            <div class="col-md-6">
                              <label for="freelance" class="form-label">Freelance</label>
                              <input value="{{ $data->freelance }}" type="text" class="form-control" id="freelance">
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                          @endforeach
                    </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</section>