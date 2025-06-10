<div class="modal fade" id="edit-modal{{ $item->id }}" tabindex="-1" aria-labelledby="formModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('user.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Menggunakan method PUT untuk update data -->
            <div class="modal-content" style="width: 550px">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Edit Data Pengguna</h5>
                </div>
                <div class="modal-body text-left">
                    <!-- Input Fields -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $item->email }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="{{ $item->password }}"
                            required>
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