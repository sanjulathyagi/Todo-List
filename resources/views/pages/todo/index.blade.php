@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">My Todo List</h1>
            </div>
            <div class="col-lg-12 mt-5">
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
                            @foreach ($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $task->title }}</td>
                                <td>
                                    @if ($task->done == 0)
                                        <span class="badge bg-warning">Not Completed</span>

                                    @else
                                        <span class="badge bg-success">Completed</span>

                                    @endif

                                </td>
                                <td>
                                    <a href="{{ route('todo.delete',$task->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    <a href="{{ route('todo.done',$task->id) }}" class="btn btn-success"><i class="far fa-check-circle"></i></a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
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
</style>

@endpush
