@include('Backend.layouts.app')
<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 m-auto offset-lg-1">

           <div class="personal_info-form">
            <div class="index-show">
                <div class="card">
                    <div class="card-body">
                        <div class="head-content d-flex justify-content-between">
                            <h5 class="card-title">View All Details </h5><hr>
                        <a href="{{ route('personal-info') }}" class="btn btn-primary">Back</a>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="text-success">Image: </h4>
                               {{-- <img class="w-100 img-fluid" src="{{ asset('database/assets/img/personal_info/') }}/{{ $data->image }}" alt=""> --}}
                               <img class="img-fluid w-100" src="{{ asset('database/assets/img/personal_info/' .$data->image) }}" alt="!">
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="show-content">
                                    <h4 class="border p-4"><span class="text-success">Name: </span> <br> {{ $data->name }}</h4>
                                </div>
                                <div class="show-content">
                                    <h4 class="border p-4"><span class="text-success">Designation: </span> <br> {{ $data->designation }}</h4>
                                </div>
                                <div class="show-content">
                                    <h4 class="border p-4"><span class="text-success">Title: </span> <br>{{ $data->title }}</h4>
                                </div>
                                <div class="show-content">
                                    <h4 class="border p-4"><span class="text-success">Birthdate: </span> <br>{{ $data->birthday }}</h4>
                                </div>
                                <div class="show-content">
                                    <h4 class="border p-4"><span class="text-success">Phone: </span> <br>{{ $data->phone }}</h4>
                                </div>
                               
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="show-content">
                                  <h4 class="border p-4"><span class="text-success">Email: </span> <br>{{ $data->email }}</h4>
                                </div>
                                <div class="show-content">
                                    <h4 class="border p-4"><span class="text-success">Address: </span> <br>{{ $data->address }}</h4>
                                  </div>
                                <div class="show-content">
                                  <h4 class="border p-4"><span class="text-success">Freelance: </span> <br>{{ $data->freelance }}</h4>
                                </div>
                                <div class="show-content">
                                  <h4 class="border p-4"><span class="text-success">Language: </span> <br>{{ $data->language }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
           
           </div>
        </div>
    </div>

    </div>
</section>


