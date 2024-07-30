@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> Karyawan </h3>
                    </div>

                    <div class="card-body">
                        <div>
                            <a href="{{ route('karyawan.create')}}" class="btn btn-success mb-3">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Karyawan</span>
                            </a>
                            @if($karyawans->isEmpty())
                            <div class="alert alert-info">
                                Tidak Ada Karyawan
                            </div>
                            @else
                        </div>
                        <table class="table">
                            <thead class="thead-fixed">
                                <tr>
                                    <th> # </th>
                                    <th> Jenis Mobil </th>
                                    <th> Plat Kendaraan </th>
                                    <th> No Lambung Kendaraan </th>
                                    <th> Tanggal Akhir STNK</th>
                                    <th> Tanggal Terakhir Pajak Dibayar</th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($karyawans as $index=>$karyawan)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$karyawan->nik}}</td>
                                    <td>{{$karyawan->no_kk}}</td>
                                    <td>{{$karyawan->nama}}</td>
                                    <td>{{$karyawan->jk}}</td>
                                    <td>{{$karyawan->tempat_lahir}}</td>
                                    <td>{{$karyawan->tanggal_lahir}}</td>
                                    <td>{{$karyawan->agama}}</td>
                                    <td>{{$karyawan->pendidikan}}</td>
                                    <td>{{$karyawan->jurusan}}</td>
                                    <td>{{$karyawan->status}}</td>
                                    <td>{{$karyawan->unit_kerja}}</td>
                                    <td>{{$karyawan->jabatan_pekerjaan}}</td>
                                    <td>{{$karyawan->no_seri}}</td>
                                    <td>{{$karyawan->tanggal_masuk}}</td>
                                    <td>{{$karyawan->tahun_masuk}}</td>
                                    <td>{{$karyawan->gaji_pokok}}</td>
                                    <td>{{$karyawan->iuran}}</td>
                                    <td>{{$karyawan->alamat}}</td>
                                    <td>{{$karyawan->desa}}</td>
                                    <td>{{$karyawan->kecamatan}}</td>
                                    <td>{{$karyawan->kabupaten}}</td>
                                    <td>{{$karyawan->provinsi}}</td>
                                    <td>{{$karyawan->negara}}</td>
                                    <td>{{$karyawan->kode_pos}}</td>
                                    <td>{{$karyawan->no_hp}}</td>
                                    <td>{{$karyawan->email}}</td>
                                    <td>{{$karyawan->npwp}}</td>
                                    <td>{{$karyawan->nama_ibu_kandung}}</td>
                                    <td>{{$karyawan->suku}}</td>
                                    <td>{{$karyawan->berat_badan}}</td>
                                    <td>{{$karyawan->tinggi_badan}}</td>
                                    <td>{{$karyawan->nama_bank}}</td>
                                    <td>{{$karyawan->nomor_rekening}}</td>
                                    <td>{{$karyawan->total_gaji}}</td>
                                    <td>{{$karyawan->id_afdeling}}</td>
                                    <td>{{$karyawan->id_kebun}}</td>
                                    <td>{{$karyawan->aktif}}</td>
                                    <td>{{$karyawan->masa_kontrak}}</td>
                                    <td>{{$karyawan->surat_kontrak}}</td>
                                    <td>
                                        <a href="{{ route('karyawan.edit', $karyawan->id) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST"
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