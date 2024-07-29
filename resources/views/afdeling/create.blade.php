@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Tambah Afdeling </h3>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route ('afdeling.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_afd">Nama Afdeling:</label>
                                    <input type="text" class="form-control" id="nama_afd" name="nama_afd" value="{{ old('nama_afd')}}">
                                </div>
                                <div class="form-group">
                                    <label for="no_afd">No Afdeling:</label>
                                    <input type="text" class="form-control" id="no_afd" name="no_afd" value="{{ old('no_afd')}}">
                                </div>
                                <div class="form-group">
                                    <label for="alias_afd">Alias Afdeling:</label>
                                    <input type="text" class="form-control" id="alias_afd" name="alias_afd" value="{{ old('alias_afd')}}">
                                </div>
                                <div class="form-group">
                                    <label for="kebun_id">Kebun Utama:</label>
                                    <select class="form-control" id="kebun_id" name="kebun_id">
                                        <option value="" disabled selected>Pilih Kebun</option>
                                        @foreach($kebuns as $kebun)
                                            <option value="{{ $kebun->id }}" {{ old('kebun_id') == $kebun->id ? 'selected' : '' }}>
                                                {{ $kebun->nama_kebun }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('afdeling.index') }}'">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection