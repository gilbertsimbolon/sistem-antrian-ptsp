<form method="GET" action="{{ route('meja-inzage.index') }}" class="mb-3 d-flex justify-content-end">
    <input type="text" name="search" class="form-control w-25 me-2" placeholder="Cari nama atau keperluan..."
        value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">Cari</button>
</form>