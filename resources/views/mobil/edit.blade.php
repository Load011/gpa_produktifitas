@extends('layout.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"> Edit Kendaraan</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_mobil">Nama Mobil:</label>
                                <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" value="{{ $mobil->jenis_mobil }}" required>
                            </div>
                            <div class="form-group">
                                <label for="plat_bk">Plat Kendaraan:</label>
                                <input type="text" class="form-control" id="plat_bk" name="plat_bk" value="{{ $mobil->plat_bk }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_lambung">No Lambung Kendaraan:</label>
                                <input type="text" class="form-control" id="no_lambung" name="no_lambung" value="{{ $mobil->no_lambung }}" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('mobil.index', $mobil->id) }}'">Batal</button>  
                </form>
            </div>
        </div>
    </div>
</section>

@endsection