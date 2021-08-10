@extends('admin.suppiler.main')
@section('title','Them Moi Dai Ly')

@section('content')


    <h2 class="text-center">Them Moi Dai Ly</h2>
    <div class="container">
        <form action=""  method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Ten Dai Ly</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="ABC" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Ten Nguoi quan Ly</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="ABC" name="manager">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Dia Chi</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Email</label>
                    <input type="email" class="form-control" id="inputCity" name="email" placeholder="deptrai@gmail.com">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Trang Thai Hoat Dong</label>
                    <select id="inputState" class="form-control" name="status">
                        <option selected value="0">Hoat Dong</option>
                        <option value="1">Dung Hoat Dong</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">So Dien Thoai</label>
                    <input type="text" class="form-control" id="inputZip" name="phone">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Them Moi</button>
            <a  class="btn btn-primary" onclick="javascript:history.go(-1)">Huy</a>
        </form>
    </div>
@endsection
