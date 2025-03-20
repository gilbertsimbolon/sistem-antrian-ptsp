<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Meja Pidana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Tambahkan action ke route yang sesuai -->
                <form action="{{ route('meja-pidana.store') }}" method="POST">
                    @csrf
                    <!-- Token keamanan wajib di Laravel -->
                    <div class="form-group">
                        <label for="nomor_perkara">Nomor Perkara</label>
                        <input type="text" class="form-control" name="nomor_perkara" placeholder="Nomor Perkara"
                            required>

                        <label for="nama_penggugat" class="mt-1">Nama Penggugat</label>
                        <input type="text" class="form-control" name="nama_penggugat" placeholder="Nama Penggugat"
                            required>

                        <label for="nama_tergugat" class="mt-1">Nama Tergugat</label>
                        <input type="text" class="form-control" name="nama_tergugat" placeholder="Nama Tergugat">

                        <label for="kuasa_hukum_penggugat" class="mt-1">Kuasa Hukum Penggugat</label>
                        <input type="text" class="form-control" name="kuasa_hukum_penggugat"
                            placeholder="Kuasa Hukum Penggugat">

                        <label for="kuasa_hukum_tergugat" class="mt-1">Kuasa Hukum Tergugat</label>
                        <input type="text" class="form-control" name="kuasa_hukum_tergugat"
                            placeholder="Kuasa Hukum Tergugat">

                        <label for="ruang_sidang" class="mt-1">Ruang Sidang</label>
                        <input type="text" class="form-control" name="ruang_sidang" placeholder="Ruang Sidang" required>

                        <label for="hakim" class="mt-1">Nama Hakim</label>
                        <input type="text" class="form-control" name="hakim" placeholder="Nama Hakim">

                        <label for="nama_panitera" class="mt-1">Nama Panitera</label>
                        <input type="text" class="form-control" name="panitera" placeholder="Nama Panitera">

                        <label for="tanggal_sidang" class="mt-1">Tanggal Sidang</label>
                        <input type="date" class="form-control" name="tanggal_sidang" required>

                        <label for="sidang_mulai" class="mt-1">Sidang di Mulai</label>
                        <input type="time" class="form-control" name="sidang_mulai">

                        <label for="sidang_akhir" class="mt-1">Sidang Selesai</label>
                        <input type="time" class="form-control" name="sidang_akhir">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>