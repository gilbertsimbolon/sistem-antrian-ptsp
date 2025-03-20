@extends('dashboard')

@section('content')
<div class="container">
    <h2>Edit Data Sidang</h2>

    <form action="{{ route('meja-pidana.update', $antrian->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nomor Perkara</label>
            <input type="text" name="nomor_perkara" class="form-control" value="{{ $antrian->nomor_perkara }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Penggugat</label>
            <input type="text" name="nama_penggugat" class="form-control" value="{{ $antrian->nama_penggugat }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Tergugat</label>
            <input type="text" name="nama_tergugat" class="form-control" value="{{ $antrian->nama_tergugat }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hakim</label>
            <input type="text" name="hakim" class="form-control" value="{{ $antrian->hakim }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Ruang Sidang</label>
            <input type="text" name="ruang_sidang" class="form-control" value="{{ $antrian->ruang_sidang }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('meja-pidana.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection