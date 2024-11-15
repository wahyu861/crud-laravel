@extends('component.layout')
@section('konten')

<div class="container">
    <h4 class="text-center">To Do List</h4>

    <form action="{{ route('todolist.tambah') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-9 mt-5">
                <div class="row">
                    <div class="col-2">
                        <input name="start_time" class="form-control" placeholder="start time">
                    </div>
                    <div class="col-2">
                        <input name="end_time" class="form-control" placeholder="end time">
                    </div>
                    <div class="col-6">
                        <input name="activity" class="form-control" placeholder="new activity">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary form-control">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    

    <div class="row justify-content-center">
        <div class="col-7 mt-5">
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <input type="checkbox">
                            <span class="ms-3">{{ $item->start_time }}&nbsp&nbsp - &nbsp&nbsp{{ $item->end_time }}&nbsp&nbsp | &nbsp&nbsp{{ $item->activity }}</span>
                        </div>
                        <form action="{{ route('todolist.delete', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </li>
                @endforeach
            @else
                <div class="alert alert-indo text-center">tidak ada data</div>
            @endif
        </div>
      </div>
</div>

@endsection