@extends('backend.admin.v_layouts.app')
@section(section: 'user')

<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Karyawan Table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <a type="button" class="btn btn-info ms-3" href="{{ route('backend.user.create') }}">Tambah</a>
                    <div class="table-responsive p-0">
                    <table class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-uppercase text-secondary text-xxs  opacity-7">
                                        Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Username</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No Telp</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Role</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Employed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <p>1</p>
                                    </td>
                                    <td>
                                        <p>Arief</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p>Arief@gmail.com</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p>08889992222</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p>Admin</p>
                                    </td>
                                    <td class="align-middle">
                                        <a type="button" class="btn btn-warning" href="{{ route('backend.user.edit') }}">Edit</a>
                                        <a type="button" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection