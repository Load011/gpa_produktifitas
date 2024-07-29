@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Manajemen Perjalanan / Trip </h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('trip.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Trip</span>
                            </a>
                            @if($kebuns->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Trip Terdaftar
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th>#</th>
                                    <th>Asal Kebun</th>
                                    <th>Afdeling</th>
                                    <th>Tujuan Kebun</th>
                                    <th>Harga Per Trip</th>
                                    <th>Jarak Per Trip</th>
                                    <th>Aksi Tambahan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($trips as $index=>$trip)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $trip->kebun1->nama_kebun }}</td>
                                    <td>{{ $trip->afd->nama_afd }}</td>
                                    <td>{{ $trip->kebun2->nama_kebun}}</td>
                                    <td>Rp {{number_format($trip->harga_trip, 0, ',', '.')}}</td>
                                    <td>{{ $trip->jarak_trip}} KM</td>
                                    <td>
                                        <a href="{{ route('trip.edit', $trip->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('trip.destroy', $trip->id) }}" method="POST"
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