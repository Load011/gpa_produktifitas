@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> Jabatan </h3>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('jabatan.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Jabatan</span>
                            </a>
                            @if($jabatans->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Jabatan
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th> # </th>
                                    <th> Nama Jabatan </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($jabatans as $index=>$jabatan)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$jabatan->nama_jabatan}}</td>
                                    <td>
                                        <a href="{{ route('jabatan.edit', $jabatan->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST"
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