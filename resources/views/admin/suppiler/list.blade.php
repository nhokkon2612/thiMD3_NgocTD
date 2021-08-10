@extends('admin.suppiler.main')
@section('title','Danh sach cac dai ly')

@section('content')
    <h3 class="text-center">Danh sach Dai Ly</h3>

    <a class="btn btn-success" href="{{route('suppiler.add')}}">Them Moi Dai Ly</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">MaSoDaiLy</th>
            <th scope="col">TenDaiLy</th>
            <th scope="col">SoDienThoai</th>
            <th scope="col">Email</th>
            <th scope="col">DiaChi</th>
            <th scope="col">TenNguoiQuanLy</th>
            <th scope="col">TrangThai</th>
            <th scope="col">ChucNang</th>
        </tr>
        </thead>
        <tbody>
        @foreach($suppilers as $key=>$suppiler)
        <tr>
            <th scope="row">10{{$suppiler->id}}</th>
            <td>{{$suppiler->name}}</td>
            <td>{{$suppiler->phone}}</td>
            <td>{{$suppiler->email}}</td>
            <td>{{$suppiler->address}}</td>
            <td>{{$suppiler->manager}}</td>
            <td> @if($suppiler->manager == 0) Hoat Dong @else Khong Hoat Dong @endif </td>
            <td><a class="btn btn-warning" href="{{route('suppiler.edit',$suppiler->id)}}">Sua</a>
                <a  class="btn btn-danger" href="{{route('suppiler.delete',$suppiler->id)}}"  onclick="return confirm('ban co chac xoa no di khong')" >Xoa</a>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
