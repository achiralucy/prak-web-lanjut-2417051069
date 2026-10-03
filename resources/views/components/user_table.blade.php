@props(['users'])

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td><span class="badge bg-info text-dark">{{ $user->nama_kelas }}</span></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data Mahasiswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>