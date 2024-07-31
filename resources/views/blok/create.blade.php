@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title"> Tambah Blok </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route ('blok.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_kebun">Nama Kebun:</label>
                                    <select class="form-control" id="id_kebun" name="id_kebun">
                                        <option value="" disabled selected>Pilih Kebun</option>
                                        @foreach($kebuns as $kebun)
                                            <option value="{{ $kebun->id }}" {{ old('id_kebun') == $kebun->id ? 'selected' : '' }}>
                                                {{ $kebun->blok }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_afdeling">Nama Afdeling:</label>
                                    <select class="form-control" id="id_afdeling" name="id_afdeling" required>
                                        <option value="" disabled selected>Pilih Afdeling</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="blok">Nama Blok:</label>
                                    <input type="text" class="form-control" id="blok" name="blok" value="{{ old('blok')}}">
                                </div>
                                <div class="form-group">
                                    <label for="tahun_tanam">Tahun Tanam:</label>
                                    <input type="number" class="form-control" id="tahun_tanam" name="tahun_tanam" value="{{ old('tahun_tanam')}}">
                                </div>
                                <div class="form-group">
                                    <label for="komidel">Berat rerata:</label>
                                    <input type="number" class="form-control" id="komidel" name="komidel" value="{{ old('komidel')}}">
                                </div>
                                <div class="form-group">
                                    <label for="luas">Luas Blok:</label>
                                    <input type="number" class="form-control" id="luas" name="luas" value="{{ old('luas')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jmlh_pokok">Banyak Pohon:</label>
                                    <input type="number" class="form-control" id="jmlh_pokok" name="jmlh_pokok" value="{{ old('jmlh_pokok')}}">
                                </div>
                                <div class="form-group">
                                    <label for="jmlh_tph">Banyak Baris Jalan:</label>
                                    <input type="number" class="form-control" id="jmlh_tph" name="jmlh_tph" value="{{ old('jmlh_tph')}}">
                                </div>
                                <div class="form-group">
                                    <label for="jmlh_baris">Banyak Baris Pohon:</label>
                                    <input type="number" class="form-control" id="jmlh_baris" name="jmlh_baris" value="{{ old('jmlh_baris')}}">
                                </div>
                                <div class="form-group">
                                    <label for="pjg_jalan">Panjang Jalan:</label>
                                    <input type="number" class="form-control" id="pjg_jalan" name="pjg_jalan" value="{{ old('pjg_jalan')}}">
                                </div>
                                <div class="form-group">
                                    <label for="aktif">Status Blok:</label>
                                    <select class="form-control" id="aktif" name="aktif">
                                        <option value="Yes">Aktif</option>
                                        <option value="No">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('blok.index') }}'">Batal</button>
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