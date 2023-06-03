@extends('layouts.dashboard')

@section('content')
    <section id="schedule">

        <div class="row">

            {{-- Flash Message --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a class="btn btn-success" href="/dashboard/schedule/create"><i
                            class="text-white bi bi-plus-square"></i>
                        Add
                        Schedule</a>
                </div>
                <div class="card-body">
                    @if ($schedule->count())
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">No.</th>
                                        <th class="text-center" scope="col">Name</th>
                                        <th class="text-center" scope="col">Date Start</th>
                                        <th class="text-center" scope="col">Date End</th>
                                        <th class="text-center" scope="col">Place</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedule as $s)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $s->name }}</td>
                                            <td>{{ $s->date_start }}</td>
                                            <td>{{ $s->date_end }}</td>
                                            <td>{{ $s->place }}</td>

                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    {{-- <a href="/dashboard/schedule/{{ $s->id }}"
                                                        class="px-2 p-0 mx-1  btn btn-warning">
                                                        <p class="m-0">view</p>
                                                    </a> --}}
                                                    <a href="/dashboard/schedule/{{ $s->id }}/edit"
                                                        class="px-2 p-0 mx-1  btn btn-primary">
                                                        <p class="m-0">edit</p>
                                                    </a>
                                                    <form action="/dashboard/schedule/{{ $s->id }}" method="post"
                                                        class="d-inline-block p-0">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="px-2 p-0 mx-1 btn btn-danger"
                                                            onclick="return confirm('Are you sure?')">
                                                            <p class="m-0">delete</p>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3 class="text-center mt-4 mb-5">Product not found :)</h3>
                    @endif
                </div>
            </div>
        </div>

    </section>
@endsection
