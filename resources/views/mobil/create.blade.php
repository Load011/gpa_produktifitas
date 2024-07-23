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
                        <form action="{{route ('mobil.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_mobil">Nama Mobil:</label>
                                    <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" value="{{ old('jenis_mobil')}}">
                                </div>
                                <div class="form-group">
                                    <label for="plat_bk">Plat Kendaraan:</label>
                                    <input type="text" class="form-control" id="plat_bk" name="plat_bk" value="{{ old('plat_bk')}}">
                                </div>
                                <div class="form-group">
                                    <label for="no_lambung">No Lambung Kendaraan:</label>
                                    <input type="text" class="form-control" id="no_lambung" name="no_lambung" value="{{ old('no_lambung')}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('mobil.index') }}'">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection