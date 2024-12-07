@extends('backend.admin.v_layouts.app')
@section('laporan')
<!-- template -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('backend.laporan.beranda') }}" method="post" target="_blank">
                @csrf
                <div class="card-body">
                    <h4 class="card-title"> {{$judul}} </h4>
                    <div class="form-group mb-3">
                        <label>Tanggal Awal</label>
                        <input type="date" name="tanggal_awal" onkeypress="return hanyaAngka(event)" 
                            value="{{ old('tanggal_awal') }}" 
                            class="form-control @error('tanggal_awal') is-invalid @enderror" 
                            placeholder="Masukkan Jumlah Pinjam">
                        @error('tanggal_awal')
                            <span class="invalid-feedback alert-danger" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Akhir</label>
                        <input type="date" name="tanggal_akhir" onkeypress="return hanyaAngka(event)" 
                            value="{{ old('tanggal_akhir') }}" 
                            class="form-control @error('tanggal_akhir') is-invalid @enderror" 
                            placeholder="Masukkan Jumlah Pinjam">
                        @error('tanggal_akhir')
                            <span class="invalid-feedback alert-danger" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Cetak</button>
                </div> <!-- Close card-body -->
            </form> <!-- Close form -->
        </div> <!-- Close card -->
    </div> <!-- Close col-12 -->
</div> <!-- Close row -->
<!-- end template-->
@endsection
