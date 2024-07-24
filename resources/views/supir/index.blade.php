@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Manajemen Supir </h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('supir.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Supir</span>
                            </a>
                            @if($supirs->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Supir
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Supir</th>
                                    <th>No KTP</th>
                                    <th>No Telepon</th>
                                    <th>Status Kepegawaian</th>
                                    <th>Aksi Tambahan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($supirs as $index=>$supir)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $supir->nama_supir }}</td>
                                    <td>{{ $supir->no_ktp }}</td>
                                    <td>{{ $supir->no_tlp}}</td>
                                    <td>{{ $supir->aktif == "Yes" ? 'Aktif' : 'Tidak Aktif' }}</td>
                                    <td>
                                        <a href="{{ route('supir.edit', $supir->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('supir.destroy', $supir->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection