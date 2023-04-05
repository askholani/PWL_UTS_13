@extends('customer.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('customer.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-striped" id="table">
        <thead>
            <tr>
                <th>no_rekening</th>
                <th>nama</th>
                <th>alamat</th>
                <th>jenis_tabungan</th>
                <th>saldo</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $Mahasiswa)
                <tr>
                    <td>{{ $Mahasiswa->no_rek }}</td>
                    <td>{{ $Mahasiswa->nama }}</td>
                    <td>{{ $Mahasiswa->alamat }}</td>
                    <td>{{ $Mahasiswa->jenis_tabungan }}</td>
                    <td>{{ $Mahasiswa->saldo }}</td>
                    <td>
                        <form action="{{ route('customer.destroy', $Mahasiswa->no_rek) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('customer.show', $Mahasiswa->no_rek) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('customer.edit', $Mahasiswa->no_rek) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{-- <p>{{ $customer }}</p> --}}
        </tbody>
    </table>
@endsection
