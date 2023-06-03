@extends('layouts.dashboard')

@section('content')
    <section id="create-albums">
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
                    <a class="btn btn-success fw-bold" href="/dashboard/album/create"><i
                            class="text-white bi bi-plus-square"></i>
                        Add
                        Album</a>
                </div>
                <div class="card-body">
                    @if ($album->count())
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">No.</th>
                                        <th class="text-center" scope="col">Name</th>
                                        <th class="text-center" scope="col">Realese Date</th>
                                        <th class="text-center" scope="col">Image</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($album as $a)
                                        <tr>
                                            <td class="text-center ">{{ $loop->iteration }}</td>
                                            <td>{{ $a->name }}</td>
                                            <td>{{ $a->realese_date }}</td>

                                            <td>
                                                @if ($a->image)
                                                    <img src="{{ asset('storage/' . $a->image) }}" alt="{{ $a->image }}"
                                                        class="d-flex justify-content-center img-preview rounded  mt-3"
                                                        id="uploadedAvatar" style="width: 100px; height: 100px">
                                                @else
                                                    <img src="/img/1.jpg" alt="album-image"
                                                        class="mt-3 d-flex justify-content-center rounded img-preview  "
                                                        id="uploadedAvatar">
                                                @endif

                                            </td>

                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    {{-- <a href="/dashboard/album/{{ $a->id }}"
                                                        class="px-2 p-0 mx-1  btn btn-warning">
                                                        <p class="m-0">view</p>
                                                    </a> --}}
                                                    <a href="/dashboard/album/{{ $a->id }}/edit"
                                                        class="px-2 p-0 mx-1  btn btn-primary">
                                                        <p class="m-0">edit</p>
                                                    </a>
                                                    <form action="/dashboard/album/{{ $a->id }}" method="post"
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
    </section>
@endsection
