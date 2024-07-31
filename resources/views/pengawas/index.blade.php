@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> Pengawas Kebun </h3>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('pengawas.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Pengawas</span>
                            </a>
                            @if($pengs->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Pengawas
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th> # </th>
                                    <th> Nama Pengawas </th>
                                    <th> Kebun Pengawas </th>
                                    <th> No Telepon </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($pengs as $index=>$pengawas)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$pengawas->nama_jabatan}}</td>
                                    <td>{{$pengawas->kebun->nama_kebun}}</td>
                                    <td>{{$pengawas->no_tlp}}</td>

                                    <td>
                                        <a href="{{ route('pengawas.edit', $pengawas->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('pengawas.destroy', $pengawas->id) }}" method="POST"
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