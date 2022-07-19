@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">My sub task List</h1>
                <h5 class="page-task-main">{{ $task->title }}</h5>
            </div>
            <div class="col-lg-12 mt-5">
                <form action="{{ route('todo.store') }}" method="post" entype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" name="title" type="text" placeholder="Enter Task" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 mt-5">
                <div>
                    <table class="table table-striped table-success">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('css')
<style>
    .page-title {
        padding-top:5vh;
        color:rgb(139, 32, 32);
        font-size:5rem;
    }
    .page-task-main{
        font-size:3rem;
        color:rgb(28, 28, 150)

    }

</style>

@endpush

@push('js')
<script>

</script>

@endpush
