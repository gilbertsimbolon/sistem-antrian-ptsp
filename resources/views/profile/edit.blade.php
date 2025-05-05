<x-app-layout>
    <div class="card">
        <div class="card-header">Edit Profil</div>

        <div class="card-body">
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                </div>

                <div class="form-group mt-2">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                </div>

                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>