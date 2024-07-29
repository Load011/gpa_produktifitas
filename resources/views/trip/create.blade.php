@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Tambah Trip </h3>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ route('trip.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="asal_trip">Asal Kebun:</label>
                                        <select class="form-control" id="asal_trip" name="asal_trip" required>
                                            <option value="" disabled selected>Pilih Asal Kebun</option>
                                            @foreach($kebuns as $kebun)
                                                <option value="{{ $kebun->id }}">{{ $kebun->nama_kebun }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="afdeling">Afdeling:</label>
                                        <select class="form-control" id="afdeling" name="afdeling" required>
                                            <option value="" disabled selected>Pilih Afdeling</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tujuan_trip">Tujuan Kebun:</label>
                                        <select class="form-control" id="tujuan_trip" name="tujuan_trip" required>
                                            <option value="" disabled selected>Pilih Tujuan Kebun</option>
                                            @foreach($kebuns as $kebun)
                                                <option value="{{ $kebun->id }}">{{ $kebun->nama_kebun }}</option>
                                            @endforeach
                                        </select>
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga_trip">Harga Trip:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" name="harga_trip" id="harga_trip" class="form-control currency" onkeyup="formatInput(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jarak_trip">Jarak Trip:</label>
                                        <div class="input-group">
                                            <input type="text" name="jarak_trip" id="jarak_trip" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text">KM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('trip.index') }}'">Batal</button>
                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

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
<script>
    $(document).ready(function() {
        $('#asal_trip').change(function() {
            var kebunId = $(this).val();
            if (kebunId) {
                $.ajax({
                    url: '/get-afdelings/' + kebunId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#afdeling').empty();
                        $('#afdeling').append('<option value="" disabled selected>Pilih Afdeling</option>');
                        $.each(data, function(key, value) {
                            $('#afdeling').append('<option value="'+ value.id +'">'+ value.nama_afd +'</option>');
                        });
                    }
                });
            } else {
                $('#afdeling').empty();
                $('#afdeling').append('<option value="" disabled selected>Pilih Afdeling</option>');
            }
        });
    });
</script>

@endsection