@extends('layouts.dashboard')

@section('content')
    <section id="create-album">
        <div class="container card py-3">
            <form action="/dashboard/album" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid
                    @enderror"
                        id="name" name="name" placeholder="Ex. MOr 7" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="realese_date" class="form-label">Realese Date</label>
                    <input type="date" class="form-control date @error('realese_date') is-invalid @enderror"
                        id="realese_date" name="realese_date" value="{{ old('realese_date') }}" required>
                    @error('realese_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" value="{{ old('image') }}" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <img src="/img/album/jk.jpg" alt="user-avatar"
                        class="mt-3 d-flex justify-content-center rounded img-preview  " id="uploadedAvatar">
                </div>


                <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
    </section>
@endsection
