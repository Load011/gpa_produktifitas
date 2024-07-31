@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title"> Tambah Pengawas </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route ('pengawas.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_pengawas">Nama Pengawas:</label>
                                    <input type="text" class="form-control" id="nama_pengawas" name="nama_pengawas" value="{{ old('nama_pengawas')}}">
                                </div>

                                <div class="form-group">
                                    <label for="id_kebun">Kebun Pengawasan:</label>
                                    <select class="form-control" id="id_kebun" name="id_kebun">
                                        <option value="" disabled selected>Pilih Kebun</option>
                                        @foreach($kebuns as $kebun)
                                            <option value="{{ $kebun->id }}" {{ old('id_kebun') == $kebun->id ? 'selected' : '' }}>
                                                {{ $kebun->nama_kebun }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="no_tlp">No Telepon:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" data-inputmask="'mask': '+62 999-9999-9999'" data-mask value="{{ old('no_tlp') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('pengawas.index') }}'">Batal</button>
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