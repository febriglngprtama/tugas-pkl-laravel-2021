@extends('layouts.dashboard')

@section('content')
    <section id="edit-member">
        <div class="container card py-3">
            <form action="/dashboard/member/{{ $member->id }}" enctype="multipart/form-data" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid
                    @enderror"
                        id="name" name="name" placeholder="Ex. RM" required
                        value="{{ old('name', $member->name) }}">
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
                        <option value="Vokal utama" @if (old('role', $member->role) === 'Vokal utama') selected @endif>Vokal utama
                        </option>
                        <option value="Vokal" @if (old('role', $member->role) === 'Vokal') selected @endif>Vokal</option>
                        <option value="Lead vokal" @if (old('role', $member->role) === 'Lead vokal') selected @endif>Lead vokal
                        </option>
                        <option value="Rapper" @if (old('role', $member->role) === 'Rapper') selected @endif>Rapper</option>
                        <option value="Rapper utama" @if (old('role', $member->role) === 'Rapper utama') selected @endif>Rapper Utama
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date_birth" class="form-label">Date birth</label>
                    <input type="date" class="form-control date @error('date_birth') is-invalid @enderror"
                        id="date_birth" name="date_birth" value="{{ old('date_birth', $member->date_birth) }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="place_birth" class="form-label">Place birth</label>
                    <input type="text" class="form-control @error('place_birth') is-invalid @enderror" id="place_birth"
                        name="place_birth" placeholder="Ex. Busan, South Korea"
                        value="{{ old('place_birth', $member->place_birth) }}" required>
                    @error('place_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" value="{{ old('image', $member->image) }}" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    @if ($member->image)
                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->image }}"
                            class="d-flex justify-content-center img-preview rounded  mt-3" id="uploadedAvatar"
                            style="width: 100px; height: 100px">
                    @else
                        <img src="/img/1.jpg" alt="user-avatar"
                            class="mt-3 d-flex justify-content-center rounded img-preview  " id="uploadedAvatar">
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
    </section>
@endsection
