@extends('customer.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Customer
                </div>
                <div class="card-body">
                    {{-- <p>{{ $customer }}</p> --}}
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>no_rekening: </b>{{ $customer->no_rek }}</li>
                        <li class="list-group-item"><b>nama: </b>{{ $customer->nama }}</li>
                        <li class="list-group-item"><b>alamat: </b>{{ $customer->alamat }}</li>
                        <li class="list-group-item"><b>jenis_tabungan: </b>{{ $customer->jenis_tabungan }}</li>
                        <li class="list-group-item"><b>saldo: </b>{{ $customer->saldo }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('customer.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
