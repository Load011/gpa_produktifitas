@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title"> Tambah Karyawan </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('karyawan.store') }}" method="POST">
                            @csrf
                    
                            <!-- Personal Information Box -->
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>Informasi Pribadi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-2 col-form-label">Nama Karyawan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                                        </div>
                    
                                        <label for="agama" class="col-md-2 col-form-label">Agama</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="agama" name="agama">
                                                <option value="">Pilih Agama</option>
                                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                                <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                                <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                    
                                    <div class="form-group row">
                                        <label for="no_kk" class="col-md-2 col-form-label">No Kartu Keluarga</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ old('no_kk') }}">
                                        </div>
                    
                                        <label for="pendidikan" class="col-md-2 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="agama" name="agama">
                                                <option value="">Pilih Jenjang Pendidikan</option>
                                                <option value="TK" {{ old('pendidikan') == 'TK' ? 'selected' : '' }}>TK</option>
                                                <option value="SD" {{ old('pendidikan') == 'SD' ? 'selected' : '' }}>SD</option>
                                                <option value="SMP" {{ old('pendidikan') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                <option value="SMA" {{ old('pendidikan') == 'SMA' ? 'selected' : '' }}>SMA</option>
                                                <option value="D3" {{ old('pendidikan') == 'D3' ? 'selected' : '' }}>D3</option>
                                                <option value="S1" {{ old('pendidikan') == 'S1' ? 'selected' : '' }}>S1</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jk" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="jk" name="jk">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki" {{ old('jk') == 'Laki-Laki' ? 'selected' : '' }}>Laki-laki</option>
                                                <option value="Perempuan" {{ old('jk') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                        </div>
                    
                                        <label for="nik" class="col-md-2 col-form-label">NIK Karyawan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tempat_lahir" class="col-md-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                        </div>
                    
                                        <label for="tanggal_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-md-4">
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_hp" class="col-md-2 col-form-label">No HP</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="no_hp" name="no_hp" data-inputmask="'mask': '+62 999-9999-9999'" data-mask value="{{ old('no_hp') }}">
                                            </div>
                                        </div>
                    
                                        <label for="email" class="col-md-2 col-form-label">Email Karyawan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-2 col-form-label">Alamat Karyawan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="alamat" name="lamat" value="{{ old('alamat') }}">
                                        </div>
                    
                                        <label for="provinsi" class="col-md-2 col-form-label">Provinsi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="provinsi" name="provinsi">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province['name'] }}" {{ old('provinsi') == $province['name'] ? 'selected' : '' }}>
                                                        {{ $province['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-md-2 col-form-label">Kecamatan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}">
                                        </div>
                    
                                        <label for="kabupaten" class="col-md-2 col-form-label">Kabupaten</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ old('kabupaten') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kode_pos" class="col-md-2 col-form-label">Kode Pos</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ old('kode_pos') }}">
                                        </div>
                    
                                        <label for="desa" class="col-md-2 col-form-label">Desa</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="desa" name="desa" value="{{ old('desa') }}">
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group row">
                                        <label for="nama_ibu_kandung" class="col-md-2 col-form-label">Nama Ibu Kandung</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung" value="{{ old('nama_ibu_kandung') }}">
                                        </div>
                    
                                        <label for="suku" class="col-md-2 col-form-label">Suku</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="suku" name="suku" value="{{ old('suku') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="berat_badan" class="col-md-2 col-form-label">Berat Badan</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="number" name="berat_badan" id="berat_badan" class="form-control">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">KG</span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <label for="tinggi_badan" class="col-md-2 col-form-label">Tinggi Badan</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-control">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Cm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-md-2 col-form-label">Status Karyawan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="status" name="status">
                                                <option value="">Pilih Status Karyawan</option>
                                                <option value="Belum Menikah" {{ old('status') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                                <option value="Sudah Menikah" {{ old('status') == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                                                <option value="Duda" {{ old('status') == 'Duda' ? 'selected' : '' }}>Duda</option>
                                                <option value="Janda" {{ old('status') == 'Janda' ? 'selected' : '' }}>Janda</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Gaji dan Keuangan Box -->
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>Gaji dan Keuangan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="gaji_pokok" class="col-md-2 col-form-label">Gaji Pokok</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="text" name="gaji_pokok" id="gaji_pokok" class="form-control currency" onkeyup="formatInput(this)">
                                            </div>
                                        </div>

                                        <label for="nama_bank" class="col-md-2 col-form-label">Nama Bank Karyawan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="nama_bank" name="nama_bank" value="{{ old('nama_bank') }}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group row">
                                        <label for="iuran" class="col-md-2 col-form-label">Iuran</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="text" name="iuran" id="iuran" class="form-control currency" onkeyup="formatInput(this)">
                                            </div>
                                        </div>
                    
                                        <label for="nomor_rekening" class="col-md-2 col-form-label">No Rekening</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="nomor_rekening" name="nomor_rekening" value="{{ old('nomor_rekening') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>Penempatan Kerja</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="id_kebun" class="col-md-2 col-form-label">Penempatan Kebun</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="kebun_id" name="kebun_id">
                                                <option value="" disabled selected>Pilih Kebun</option>
                                                @foreach($kebuns as $kebun)
                                                    <option value="{{ $kebun->id }}" {{ old('kebun_id') == $kebun->id ? 'selected' : '' }}>
                                                        {{ $kebun->nama_kebun }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <label for="id_adfeling" class="col-md-2 col-form-label">Penempatan Afdeling</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="id_afdeling" name="id_afdeling" required>
                                                <option value="" disabled selected>Pilih Afdeling</option>
                                            </select>
                                        </div>
                                    </div>
                    
                                    <div class="form-group row">
                                        <label for="masa_kontrak" class="col-md-2 col-form-label">Masa Kontrak</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="number" name="masa_kontrak" id="masa_kontrak" class="form-control">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Bulan</span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <label for="surat_kontrak" class="col-md-2 col-form-label">No Surat Kontrak</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="surat_kontrak" name="surat_kontrak" value="{{ old('surat_kontrak') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Submit</button>
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
    $(document).ready(function(){
        $('[data-mask]').inputmask();
        $('form').on('submit', function() {
            let no_tlp = $('#no_tlp').val();
            no_tlp = no_tlp.replace(/\D/g, '');
            $('#no_tlp').val(no_tlp);
        });
    });
    </script>
<script>
    function formatInput(input) {
        let value = input.value.replace(/[^0-9]/g, '');
        if (value) {
            value = parseInt(value, 10).toLocaleString('en-US').replace(/,/g, '.');
        }
        input.value = value;
    }
    function unformatInput(input) {
        return input.value.replace(/[^0-9.]/g, '').replace(/\./g, '');
    }
    document.getElementById('currencyForm').addEventListener('submit', function(event) {
        let currencyFields = document.querySelectorAll('.currency');
        currencyFields.forEach(function(field) {
            field.value = unformatInput(field);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#kebun_id').change(function() {
            var kebunId = $(this).val();
            if (kebunId) {
                $.ajax({
                    url: '/get-afdelings/' + kebunId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#id_afdeling').empty();
                        $('#id_afdeling').append('<option value="" disabled selected>Pilih Afdeling</option>');
                        $.each(data, function(key, value) {
                            $('#id_afdeling').append('<option value="'+ value.id +'">'+ value.nama_afd +'</option>');
                        });
                    }
                });
            } else {
                $('#id_afdeling').empty();
                $('#id_afdeling').append('<option value="" disabled selected>Pilih Afdeling</option>');
            }
        });
    });
</script>

@endsection