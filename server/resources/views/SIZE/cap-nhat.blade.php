@extends('ADMIN/index')
@section('content')

@endsection
@section('chon')
                    <a href="#" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!------------------------------ Sản Phẩm ------------------------------------>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>SẢN PHẨM</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Danh Sách</a>
                            <a href="#" class="dropdown-item">Loại</a>
                            <a href="#" class="dropdown-item">Màu</a>
                            <a href="#" class="dropdown-item">Size</a>
                        </div>
                    </div> -->

                    <a href="{{ Route('San_Pham_Danh_Sach') }}" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>SẢN PHẨM</a>
                    <a href="{{ Route('Loai_Danh_Sach') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>LOẠI</a>
                    <a href="{{ Route('Mau_Danh_Sach') }}" class="nav-item nav-link " ><i class="fa fa-table me-2"></i>MÀU</a>
                    <a href="{{ Route('Size_Danh_Sach') }}" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>SIZE</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>NHẬP HÀNG</a>
                    <a href="#" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>HÓA ĐƠN</a>
@endsection
