@extends('layouts2.appadmin')
@section('maincontent')
<div class="col-md-12" style="padding-top:50px;">
    <label for=""><h3>List Barang Hilang</h3></label>
    <table class="table table-hover" style="background-color:white;">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama barang</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Lokasi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($data as $row)
                <td>{{$loop->iteration}}</td>
                <td>{{$row->nama}}</td>
                <td><img src="{{asset('storage/'.$row->foto)}}" alt="" style="width:100px;height: 100px; border-radius:5px;object-fit: cover;"></td>
                <td>{{$row->deskripsi}}</td>
                <td>{{$row->lokasi}}</td>
            @endforeach
        </tr>
        </tbody>
    </table>
    </div>
    @endsection