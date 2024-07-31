@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title"> Tambah Mobil </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('phk.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="karyawan">Select Karyawan</label>
                                <select class="form-control" id="karyawan" name="karyawan">
                                    <option value="">Select</option>
                                    @foreach($karyawan as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div class="form-group">
                                <label for="nama_karyawan">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" readonly>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" readonly>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="no_kk">No KK</label>
                                    <input type="text" class="form-control" id="no_kk" name="no_kk" readonly>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" readonly>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="suku">Suku</label>
                                <input type="text" class="form-control" id="suku" name="suku" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan Pemecatan </label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan">
                            </div>
                    
                            <button type="submit" class="btn btn-danger">Fire Karyawan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
<script>
    document.getElementById('karyawan').addEventListener('change', function() {
        var karyawanId = this.value;
        if (karyawanId) {
            fetch(`/phk/getKaryawan/${karyawanId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('nama_karyawan').value = data.nama;
                    document.getElementById('nik').value = data.nik;
                    document.getElementById('no_kk').value = data.no_kk;
                    document.getElementById('jabatan').value = data.jabatan_pekerjaan;
                    document.getElementById('suku').value = data.suku;
                });
        } else {
            document.getElementById('nama_karyawan').value = '';
            document.getElementById('nik').value = '';
            document.getElementById('no_kk').value = '';
            document.getElementById('jabatan').value = '';
            document.getElementById('suku').value = '';
        }
    });
</script>

@endsection