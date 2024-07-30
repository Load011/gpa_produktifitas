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
                        <form action="{{ route('kendaraan.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supir_id">Supir</label>
                                        <select class="form-control" id="supir_id" name="supir_id">
                                            <option value="" disabled selected>Pilih Supir</option>
                                            @foreach($pengemudis as $pengemudi)
                                                <option value="{{ $pengemudi->id }}">{{ $pengemudi->nama_supir }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobil_id">Mobil</label>
                                        <select name="mobil_id" id="mobil_id" class="form-control">
                                            <option value="" disabled selected>Pilih Mobil</option>
                                            @foreach($mobils as $mobil)
                                                <option value="{{ $mobil->id }}">{{ $mobil->jenis_mobil }} - {{$mobil->plat_bk}} - {{$mobil->no_lambung}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('kendaraan.index') }}'">Batal</button>

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