<div>
    <div>
    <div class="row">
        <div class="col-12">
    
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
    
            <div class="card">
                <div class="card-header">
                    <h3>Category
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-right">Add Category</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <div class="card-box">
                            <div class="table-responsive">
                                <table class="table m-0 table-colored table-danger">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($category as $categorys)       
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $categorys->name }}</td>
                                        <td>{{ $categorys->status == '1' ? 'hidden':'Visiable' }}</td>

                                        <td>
                                            <a href="{{ url('admin/category/'.$categorys->id.'/edit') }}" class="btn btn-success">Edit</a>
                                            <a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">Delete</a>
                                            {{-- wire:click="deleteCategory({{ $categorys->id }})" --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {{ $category->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>

 <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="destroyCategory">
            <div class="modal-body">
              <h2>Are You Sure ?</h2>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Delete</button>
            </div>
    </form>
      </div>
    </div>
  </div>

</div>
