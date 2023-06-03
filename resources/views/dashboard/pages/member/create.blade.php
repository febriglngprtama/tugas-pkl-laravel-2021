@extends('layouts.dashboard')

@section('content')
    <section id="create-member">
        <div class="container card py-3">
            <form action="/dashboard/member" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid
                    @enderror"
                        id="name" name="name" placeholder="Ex. RM" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" aria-label="Default select example" name="role" required>
                        <option selected>Select Role</option>
                        <option value="Vokal utama">Vokal utama</option>
                        <option value="Vokal">Vokal</option>
                        <option value="Lead vokal">Lead vokal</option>
                        <option value="Rapper">Rapper</option>
                        <option value="Rapper Utama">Rapper Utama</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date_birth" class="form-label">Date birth</label>
                    <input type="date" class="form-control date @error('date_birth') is-invalid @enderror"
                        id="date_birth" name="date_birth" value="{{ old('date_birth') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="place_birth" class="form-label">Place birth</label>
                    <input type="text" class="form-control @error('place_birth') is-invalid @enderror" id="place_birth"
                        name="place_birth" placeholder="Ex. Busan, South Korea" value="{{ old('place_birth') }}" required>
                    @error('place_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" value="{{ old('image') }}" onchange="previewImage()">
                    @error('place-birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <img src="/img/member/jk.jpg" alt="user-avatar"
                        class="mt-3 d-flex justify-content-center rounded img-preview  " id="uploadedAvatar">
                </div>


                <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
    </section>
@endsection
