@include('layouts.app')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="index-show">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr class="">
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Freelance</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->phone }}</td>
                                            <td>{{ $post->email }}</td>
                                            <td>{{ $post->address }}</td>
                                            <td>{{ $post->freelance }}</td>
                                            <td>{{ $post->image }}</td>
                                            <td class="d-flex gap-1">
                                                <div class="view-btn">
                                                   {{-- view button --}}
                                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View</a>
                                               </div>

                                               <div class="edit-btn">
                                                 {{-- edit button --}}
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                               </div>

                                              <div class="delete-btn">
                                                {{-- delete button --}}
                                                <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                              </form>

                                              </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                              </table>

                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
