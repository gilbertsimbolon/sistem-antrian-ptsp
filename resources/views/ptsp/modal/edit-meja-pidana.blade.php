<div class="modal fade" id="edit-modal{{ $item->id }}" tabindex="-1" aria-labelledby="formModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('pidana.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Menggunakan method PUT untuk update data -->
            <div class="modal-content" style="width: 550px">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Edit Data Meja Pidana</h5>
                </div>
                <div class="modal-body text-left">
                    <!-- Input Fields -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                            value="{{ $item->no_telepon }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                        <textarea class="form-control" id="keperluan" name="keperluan" rows="5" style="resize: none;"
                            required>{{ $item->keperluan }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                id="laki-laki-{{ $item->id }}" value="Laki-laki" {{ $item->jenis_kelamin == 'Laki-laki'
                            ? 'checked' : '' }} required>
                            <label class="form-check-label" for="laki-laki-{{ $item->id }}">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                id="perempuan-{{ $item->id }}" value="Perempuan" {{ $item->jenis_kelamin == 'Perempuan'
                            ? 'checked' : '' }} required>
                            <label class="form-check-label" for="perempuan-{{ $item->id }}">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>