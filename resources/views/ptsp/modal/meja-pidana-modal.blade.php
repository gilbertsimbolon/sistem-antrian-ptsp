<!-- Modal -->
<div class="modal fade" id="modal-pidana" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('antrian.pidana.store') }}" method="POST">
            @csrf
            <!-- Ganti dengan route sesuai kebutuhan -->
            <div class="modal-content" style="width: 550px">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Meja Pidana</h5>
                </div>
                <div class="modal-body text-left">
                    <!-- Input Field -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon" class="form-label">No. Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="no_telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                        <textarea class="form-control" id="keperluan" name="keperluan" rows="5" style="resize: none;"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                value="Laki-laki" required>
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
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

@if(session('modalCetak'))
<div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                @include('ptsp.cetak.cetak-pidana', [
                'data' => session('data'),
                'nomor' => session('nomor'),
                'qrCode' => session('qrCode'),
                ])
            </div>
            <div class="modal-footer">
                {{-- <button onclick="window.print()" class="btn btn-primary">Cetak</button> --}}
                <a href="{{ route('antrian.pidana.show', session('data')->id) }}" class="btn btn-success">Cetak</a>
                <a href="{{ route('antrian.index') }}" class="btn btn-secondary">Tutup</a>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif
