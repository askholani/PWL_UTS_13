@extends('customer.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Customer
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('customer.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="no_rek">no_rekening</label>
                            <input type="text" name="no_rek" class="form-control" id="no_rek"
                                ariadescribedby="no_rek">
                        </div>
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" ariadescribedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="alamat" name="alamat" class="form-control" id="alamat"
                                ariadescribedby="alamat">
                        </div>
                        <div class="form-group">
                            <label for="jenis_tabungan">jenis_tabungan</label>
                            <input type="jenis_tabungan" name="jenis_tabungan" class="form-control" id="jenis_tabungan"
                                ariadescribedby="jenis_tabungan">
                        </div>
                        <div class="form-group">
                            <label for="saldo">saldo</label>
                            <input type="saldo" name="saldo" class="form-control" id="saldo"
                                ariadescribedby="saldo">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
