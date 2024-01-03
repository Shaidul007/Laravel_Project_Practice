@include('layouts.app')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="index-show">
                    <div class="card">
                        <div class="card-body">
                            <div class="head-content d-flex justify-content-between">
                                <h5 class="card-title">View All Details </h5><hr>
                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4>Image</h4>
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/posts/' .$post->image) }}" alt="!">
                                </div>
                                <div class="col-lg-4 mt-5">
                                    <div class="show-content">
                                        <h4 class="border p-4">Name: {{ $post->name }}</h4>
                                    </div>
                                    <div class="show-content">
                                        <h4 class="border p-4">Slug: {{ $post->slug }}</h4>
                                    </div>
                                    <div class="show-content">
                                        <h4 class="border p-4">Title: {{ $post->title }}</h4>
                                    </div>
                                    <div class="show-content">
                                        <h4 class="border p-4">Birthdate: {{ $post->birthdate }}</h4>
                                    </div>
                                    <div class="show-content">
                                        <h4 class="border p-4">Phone: {{ $post->phone }}</h4>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-4 mt-5">
                                    <div class="show-content">
                                      <h4 class="border p-4">Email: {{ $post->email }}</h4>
                                    </div>
                                    <div class="show-content">
                                        <h4 class="border p-4">Address: {{ $post->address }}</h4>
                                      </div>
                                    <div class="show-content">
                                      <h4 class="border p-4">Freelance: {{ $post->freelance }}</h4>
                                    </div>
                                    <div class="show-content">
                                      <h4 class="border p-4">Language: {{ $post->language }}</h4>
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
