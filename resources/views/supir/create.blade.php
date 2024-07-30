@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title"> Tambah Supir </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route ('supir.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_supir">Nama Supir:</label>
                                    <input type="text" class="form-control" id="nama_supir" name="nama_supir" value="{{ old('nama_supir')}}">
                                </div>
                                <div class="form-group">
                                    <label for="no_tlp">No Telepon Supir:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" data-inputmask="'mask': '+62 999-9999-9999'" data-mask value="{{ old('no_tlp') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No KTP Supir:</label>
                                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ old('no_ktp')}}" pattern="\d{16}" maxlength="16" minlength="16" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_sim">No SIM Supir:</label>
                                    <input type="text" class="form-control" id="no_sim" name="no_sim" value="{{ old('no_sim')}}" pattern="\d{20}" maxlength="20" minlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="aktif">Status Kepegawaian:</label>
                                    <select name="aktif" id="aktif" class="form-control">
                                        <option value="Yes">Aktif</option>
                                        <option value="No">Tidak Aktif</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('supir.index') }}'">Batal</button>
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
@endsection