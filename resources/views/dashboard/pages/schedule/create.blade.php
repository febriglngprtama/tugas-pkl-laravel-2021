@extends('layouts.dashboard')

@section('content')
    <section id="create-schedule" class="container card">
        <form action="/dashboard/schedule" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row py-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" placeholder="Ex. Agust D day" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}"
                        hidden>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="date_start" class="form-label">date_start</label>
                        <input type="date" class="date form-control @error('date_start') is-invalid @enderror"
                            id="date_start" name="date_start" value="{{ old('date_start') }}" required>
                        @error('date_start')
                            <div class="invalid-feedback">
                                {{ message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="date_end" class="form-label">date_end</label>
                        <input type="date" class="date form-control @error('date_end') is-invalid @enderror"
                            id="date_end" name="date_end" value="{{ old('date_end') }}" required>
                        @error('date_end')
                            <div class="invalid-feedback">
                                {{ message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="place" class="form-label">Place</label>
                    <input type="text" class="form-control @error('place') is-invalid @enderror" id="place"
                        name="place" placeholder="Ex. ICE BSD, Tanggerang" value="{{ old('place') }}" required>
                    @error('place')
                        <div class="invalid-feedback">
                            {{ message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </section>
@endsection
