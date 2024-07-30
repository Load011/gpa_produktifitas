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
                        <form action="{{ route('perbaikan.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="mobil_id">Mobil</label>
                                <select name="mobil_id" id="mobil_id" class="form-control">
                                    @foreach($mobils as $mobil)
                                        <option value="{{ $mobil->id }}">{{ $mobil->jenis_mobil }} - {{ $mobil->no_lambung }} - {{$mobil->plat_bk}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="harga_sparepart">Harga Sparepart</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" name="harga_sparepart" id="harga_sparepart" class="form-control currency" onkeyup="formatInput(this)">
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="harga_perbaikan">Harga Perbaikan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" name="harga_perbaikan" id="harga_perbaikan" class="form-control currency" onkeyup="formatInput(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="harga_ban">Harga Ban</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" name="harga_ban" id="harga_ban" class="form-control currency" onkeyup="formatInput(this)">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="harga_bbm">Harga BBM</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" name="harga_bbm" id="harga_bbm" class="form-control currency" onkeyup="formatInput(this)">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tanggal_perbaikan">Tanggal Perbaikan</label>
                                    <input type="date" name="tanggal_perbaikan" id="tanggal_perbaikan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control">
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

@endsection