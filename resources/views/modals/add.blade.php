<form action="{{route('store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Task</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Title" name="title" id="title">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Description" name="description" id="description">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
        </div>
    </div>
    </div>
</form>