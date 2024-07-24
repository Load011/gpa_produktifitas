@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Manajemen Afdeling </h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('afdeling.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Afdeling</span>
                            </a>
                            @if($afds->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Afdeling
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Afdeling</th>
                                    <th>No Afdeling</th>
                                    <th>Alias Afdeling</th>
                                    <th>Kebun Utama</th>
                                    <th>Aksi Tambahan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($afds as $index=>$afd)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $afd->nama_afd }}</td>
                                    <td>{{ \App\Helpers\RomanNumeral::convert($afd->no_afd) }}</td>
                                    <td>{{ $afd->alias_afd}}</td>
                                    <td>{{ $afd->kebun->nama_kebun}}</td>
                                    <td>
                                        <a href="{{ route('afdeling.edit', $afd->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('afdeling.destroy', $afd->id) }}" method="POST"
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