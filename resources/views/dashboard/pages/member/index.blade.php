@extends('layouts.dashboard')

@section('content')
    <section id="member">
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
                    <a class="btn btn-success fw-bold" href="/dashboard/member/create"><i
                            class="text-white bi bi-plus-square"></i>
                        Add
                        Member</a>
                </div>
                <div class="card-body">
                    @if ($member->count())
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">No.</th>
                                        <th class="text-center" scope="col">Name</th>
                                        <th class="text-center" scope="col">Role</th>
                                        <th class="text-center" scope="col">Date Birth</th>
                                        <th class="text-center" scope="col">Place Birth</th>
                                        <th class="text-center" scope="col">Image</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($member as $m)
                                        <tr>
                                            <td class="text-center ">{{ $loop->iteration }}</td>
                                            <td>{{ $m->name }}</td>
                                            <td>{{ $m->role }}</td>
                                            <td>{{ $m->date_birth }}</td>
                                            <td>{{ $m->place_birth }}</td>

                                            <td>
                                                @if ($m->image)
                                                    <img src="{{ asset('storage/' . $m->image) }}" alt="{{ $m->image }}"
                                                        class="d-flex justify-content-center img-preview rounded  mt-3"
                                                        id="uploadedAvatar" style="width: 100px; height: 100px">
                                                @else
                                                    <img src="/img/1.jpg" alt="user-avatar"
                                                        class="mt-3 d-flex justify-content-center rounded img-preview  "
                                                        id="uploadedAvatar">
                                                @endif

                                            </td>

                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    {{-- <a href="/dashboard/member/{{ $m->id }}"
                                                        class="px-2 p-0 mx-1  btn btn-warning">
                                                        <p class="m-0">view</p>
                                                    </a> --}}
                                                    <a href="/dashboard/member/{{ $m->id }}/edit"
                                                        class="px-2 p-0 mx-1  btn btn-primary">
                                                        <p class="m-0">edit</p>
                                                    </a>
                                                    <form action="/dashboard/member/{{ $m->id }}" method="post"
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
