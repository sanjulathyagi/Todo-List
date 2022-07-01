<form action="{{ route('todo.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <input class="form-control" name="title" type="text" placeholder="Enter Task" >
            </div>
        </div>
        <div class="col-lg-4">
            <button class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
