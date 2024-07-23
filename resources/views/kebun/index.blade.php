@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Manajemen Kebun </h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('kebun.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Perkebunan</span>
                            </a>
                            @if($kebuns->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Perkebunan
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kebun</th>
                                    <th>Alias Kebun</th>
                                    <th>Status Kebun</th>
                                    <th>Aksi Tambahan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($kebuns as $index=>$kebun)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $kebun->nama_kebun }}</td>
                                    <td>{{ $kebun->alias }}</td>
                                    <td>{{ $kebun->aktif}}</td>
                                    <td>
                                        <a href="{{ route('kebun.edit', $kebun->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('kebun.destroy', $kebun->id) }}" method="POST"
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