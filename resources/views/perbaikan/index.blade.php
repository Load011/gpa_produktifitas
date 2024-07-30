@extends('layout.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title">Transaksi Perbaikan Mobil</h3>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('perbaikan.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Transaksi Perbaikan</span>
                            </a>
                            @if($repairTransactions->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Transaksi Perbaikan
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No Lambung</th>
                                    <th>Tanggal Perbaikan</th>
                                    <th>Harga Sparepart</th>
                                    <th>Harga Perbaikan</th>
                                    <th>Harga Ban</th>
                                    <th>Harga BBM</th>
                                    <th>Total Harga Keseluruhan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($repairTransactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->mobil->no_lambung }}</td>
                                        <td>{{ $transaction->tanggal_perbaikan}}</td>
                                        <td>Rp {{number_format($transaction->harga_sparepart, 0, ',', '.')}}</td>
                                        <td>Rp {{number_format($transaction->harga_perbaikan, 0, ',', '.')}}</td>
                                        <td>Rp {{number_format($transaction->harga_ban, 0, ',', '.')}}</td>
                                        <td>Rp {{number_format($transaction->harga_bbm, 0, ',', '.')}}</td>
                                        <td>Rp {{number_format($transaction->total_harga_keseluruhan, 0, ',', '.')}}</td>
                                        <td>{{ $transaction->keterangan }}</td>
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