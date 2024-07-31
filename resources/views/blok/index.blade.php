@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> Blok Kebun - Afdeling </h3>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('blok.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Blok Kebun</span>
                            </a>
                            @if($bloks->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Blok Kebun
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th> # </th>
                                    <th> Nama Kebun </th>
                                    <th> Nama Afdeling </th>
                                    <th> No Blok </th>
                                    <th> Tahun Tanam </th>
                                    <th> Berat Normal (Kg/Buah) </th>
                                    <th> Luas Blok </th>
                                    <th> Jumlah Pokok Pohon </th>
                                    <th> Jumlah Baris Jalan </th>
                                    <th> Jumlah Baris Pohon </th>
                                    <th> Panjang Jalan </th>
                                    <th> Status Blok </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($bloks as $index=>$blok)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$blok->kebun->nama_kebun}}</td>
                                    <td>{{$blok->afdeling->nama_afd}}</td>
                                    <td>{{$blok->blok}}</td>
                                    <td>{{$blok->tahun_tanam}}</td>
                                    <td>{{$blok->komidel}}</td>
                                    <td>{{$blok->luas}}</td>
                                    <td>{{$blok->jmlh_pokok}}</td>
                                    <td>{{$blok->jmlh_tph}}</td>
                                    <td>{{$blok->jmlh_baris}}</td>
                                    <td>{{$blok->pjg_jalan}}</td>
                                    <td>{{$blok->aktif}}</td>
                                    <td>
                                        <a href="{{ route('blok.edit', $blok->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('blok.destroy', $blok->id) }}" method="POST"
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