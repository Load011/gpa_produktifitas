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
                                        <select name="supir_id" id="supir_id" class="form-control">
                                            @foreach($pengemudis as $pengemudi)
                                                <option value="{{ $pengemudi->id }}">{{ $pengemudi->nama_supir }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobil_id">Mobil</label>
                                        <select name="mobil_id" id="mobil_id" class="form-control">
                                            @foreach($mobils as $mobil)
                                                <option value="{{ $mobil->id }}">{{ $mobil->jenis_mobil }} - {{$mobil->plat_bk}} - {{$mobil->no_lambung}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga_satuan">Harga Satuan</label>
                                        <input type="text" name="harga_satuan" id="harga_satuan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bbm_ltr">BBM Liter</label>
                                        <div class="input-group">
                                            <input type="text" name="bbm_ltr" id="bbm_ltr" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Liter</span>
                                            </div>
                                        </div>
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


@endsection