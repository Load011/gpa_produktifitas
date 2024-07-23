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
                                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ old('no_tlp')}}">
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No KTP Supir:</label>
                                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ old('no_ktp')}}">
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


@endsection