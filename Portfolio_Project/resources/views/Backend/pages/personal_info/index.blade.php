@include('Backend.layouts.app')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto offset-lg-1">
               <div class="displaing-user">
                <div class="card">
                    <div class="card-header">
                      Personal Info
                    </div>
                    <div class="display-info">
                        <table class="table table-bordered table-gray">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Acton</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($data as $data)
                              <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->address }}</td>
                                <td class="d-flex gap-2">
                                    <div class="view-btn">
                                        {{-- view button --}}
                                     <a href="{{ route('show', $data->id) }}" class="btn btn-success btn-sm">View</a>
                                    </div>
     
                                    <div class="edit-btn">
                                      {{-- edit button --}}
                                     <a href="{{ route('edit', $data->id) }}" class="btn btn-success btn-sm">Edit</a>
     
                                    </div>
                                    
                                   <div class="delete-btn">
                                     {{-- delete button --}}
                                     <form action="{{ route('destroy', $data->id) }}" method="POST">
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