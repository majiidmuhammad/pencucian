@extends('backend.admin.v_layouts.app')
@section(section: 'transaksi')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tambah Service</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="card-body">
                            <form>
                                <div class="container">
                                    <div class="form-group mb-3">
                                        <label>Tipe Service</label>
                                        <select name="role" class="form-control @error('role') is-invalid @enderror">
                                            <option value="" {{ old('role') == '' ? 'selected' : '' }}> - Pilih Tipe Service
                                                -
                                            </option>
                                            <option value="1" {{ old('role') == '1' ? 'selected' : '' }}>
                                                Super Admin
                                            </option>
                                            <option value="2" {{ old('role') == '2' ? 'selected' : '' }}>
                                                Admin
                                            </option>
                                            <option value="3" {{ old('role') == '3' ? 'selected' : '' }}>
                                                Customer
                                            </option>
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback alert-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Pelanggan</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">No Plat</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">No Telp</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('backend.service.beranda') }}">
                                        <butaton type="submit" class="btn btn-danger">Back </butaton>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection