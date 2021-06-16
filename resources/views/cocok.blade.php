@extends('layouts2.appadmin')
@section('maincontent')

<form action="{{url('cocok')}}" method="post">
@csrf
<div class="row">
    <div class="col-md-6" style="padding-top:50px;">
    <label for=""><h3>List Barang Hilang</h3></label>
        <select name="id_kehilangan" id="" class="form-control">
        @foreach($data as $row)
            <option value="{{$row->id}}">{{$row->nama}} (A/N. {{ $row->pelapor->name }})</option>
        @endforeach
        </select>
    </div>
    <div class="col-md-6" style="padding-top:50px;">
    <label for=""><h3>List Barang Temuan</h3></label>
        <select name="id_ketemu" id="" class="form-control">
        @foreach($data2 as $row)
            <option value="{{$row->id}}">{{$row->nama}} (A/N. {{ $row->pelapor->name }})</option>
        @endforeach
        </select>
    </div>
    </div>
    <br>
    <input type="submit" value="submit" class="btn btn-primary">
    </form>

@endsection