<div class="content-wrapper">
    <div class="p-2 row">
        <div class="col-12">
            <!-- Button Modal -->
            <div class="container-fluid d-flex justify-content-end">
                <button type="button" class="btn btn-success small-box" data-toggle="modal"
                    data-target="#exampleModalCenter" style="width: 330px; height: 45px;">
                    <div class="p-3 inner d-flex align-items-center justify-content-between" style="height: 100%">
                        <a href="/meja-pidana/tambah" class="m-0 text-white">TAMBAH ANTRIAN</a>
                    </div>
                </button>
            </div>

            <!-- Tabel Meja Pidana -->
            <div class="card">
                <div class="card-header">
                    <h3 class="m-0 card-title">Meja Pidana</h3>
                    <div class="d-flex justify-content-end">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="table_search" class="float-right form-control"
                                placeholder="Cari...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="p-0 card-body table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Nomor Perkara</th>
                                <th>Nama Penggugat</th>
                                <th>Nama Tergugat</th>
                                <th>Kuasa Hukum Penggugat</th>
                                <th>Kuasa Hukum Tergugat</th>
                                <th>Ruang Sidang</th>
                                <th>Hakim</th>
                                <th>Panitera</th>
                                <th>Tanggal Sidang</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($antrian_pidana as $antrian)
                            <tr>
                                <td>{{ $antrian->nomor_perkara }}</td>

                                <!-- Nama Penggugat -->
                                <td class="clickable-name" data-id="{{ $antrian->id }}" data-role="penggugat">
                                    {{ $antrian->nama_penggugat }}
                                    <span
                                        class="status-badge badge rounded-circle
                                                {{ $antrian->hadir_penggugat == 'hadir' ? 'bg-success' : 'bg-danger' }}">
                                    </span>
                                </td>

                                <!-- Tergugat -->
                                <td class="clickable-name" data-id="{{ $antrian->id }}" data-role="tergugat">
                                    {{ $antrian->nama_tergugat }}
                                    <span
                                        class="status-badge badge rounded-circle
                                                {{ $antrian->hadir_tergugat == 'hadir' ? 'bg-success' : 'bg-danger' }}">
                                    </span>
                                </td>

                                <td>{{ $antrian->kuasa_hukum_penggugat ?? '-' }}</td>
                                <td>{{ $antrian->kuasa_hukum_tergugat ?? '-' }}</td>
                                <td>{{ $antrian->ruang_sidang }}</td>

                                <!-- Nama Hakim -->
                                <td class="clickable-name" data-id="{{ $antrian->id }}" data-role="hakim">
                                    {{ $antrian->hakim }}
                                    <span
                                        class="status-badge badge rounded-circle
                                                                {{ $antrian->hadir_hakim == 'hadir' ? 'bg-success' : 'bg-danger' }}">
                                    </span>
                                </td>

                                <td>{{ $antrian->panitera }}</td>
                                <td>{{ $antrian->tanggal_sidang }}</td>
                                <td>{{ $antrian->sidang_mulai }}</td>
                                <td>{{ $antrian->sidang_akhir }}</td>
                                <td>
                                    @if ($antrian->status == 'menunggu')
                                    <span class="badge badge-warning">Menunggu</span>
                                    @elseif ($antrian->status == 'diproses')
                                    <span class="badge badge-primary">Diproses</span>
                                    @elseif ($antrian->status == 'selesai')
                                    <span class="badge badge-success">Selesai</span>
                                    @elseif ($antrian->status == 'dibatalkan')
                                    <span class="badge badge-danger">Dibatalkan</span>
                                    @else
                                    <span class="badge badge-secondary">{{ ucfirst($item->status) }}</span>
                                    @endif
                                </td>

                                <!-- Kolom Aksi -->
                                <td>
                                    <a href="{{ route('meja-pidana.edit', $antrian->id) }}"
                                        class="badge bg-warning text-dark">
                                        📝
                                    </a>
                                    <a href="#" class="text-white badge bg-danger delete-btn"
                                        data-id="{{ $antrian->id }}">
                                        ❌
                                    </a>
                                    <a href="#" class="text-white badge bg-primary play-sound"
                                        data-nama="{{ $antrian->hakim }}">
                                        🔊
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="13" class="text-center">Belum ada data antrian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                                    $(".clickable-name").click(function () {
                                        let nameElement = $(this);
                                        let id = nameElement.data("id");
                                        let role = nameElement.data("role");
                                        let badge = nameElement.find(".status-badge");

                                        $.ajax({
                                            url: "{{ route('meja-pidana.update-kehadiran') }}",
                                            type: "POST",
                                            data: {
                                                _token: "{{ csrf_token() }}",
                                                id: id,
                                                role: role
                                            },
                                            success: function (response) {
                                                if (response.success) {
                                                    // Ubah tampilan badge berdasarkan status baru
                                                    badge.removeClass("bg-success bg-danger").addClass(response.badgeClass);
                                                } else {
                                                    alert("Gagal mengubah status.");
                                                }
                                            },
                                            error: function () {
                                                alert("Terjadi kesalahan.");
                                            }
                                        });
                                    });
                                });
                    </script>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>