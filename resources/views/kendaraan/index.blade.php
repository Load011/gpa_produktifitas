@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Transaksi Bahan Bakar Kendaraan </h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('kendaraan.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Transaksi</span>
                            </a>
                            @if($drivers->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Transaksi
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Supir</th>
                                    <th>Mobil Yang Digunakan</th>
                                    <th>Harga Per Liter</th>
                                    <th>Jumlah Pengisian</th>
                                    <th>Total Pembayaran</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($drivers as $index=>$driver)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $driver->pengemudi->nama_supir }}</td>
                                    <td>{{ $driver->mobil->jenis_mobil }}</td>
                                    <td>Rp {{ number_format($driver->harga_satuan, 0, ',', '.') }}</td>
                                    <td>{{ $driver->bbm_ltr}} Liter</td> 
                                    <td>Rp {{ number_format($driver->jumlah_total, 0, ',', '.')}}</td>

                                    <td>
                                        <a href="{{ route('kendaraan.edit', $driver->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('kendaraan.destroy', $driver->id) }}" method="POST"
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