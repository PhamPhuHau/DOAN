@extends('ADMIN/index')
@section('content')
<html>


<form method="POST" action="{{route('SIZE.xl-them')}}">
	@csrf
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header border-bottom">
					<h4 class="mb-0">Thêm mới</h4>
				</div>
				<div class="card-body p-0 create-project-main">
					<div class="row p-5 border-bottom">
						<div class="col-sm-12 col-md-12 col-xl-3">
							<div class="form-group">
								<label for="size-name" class="form-label text-muted">Tên size:</label>
								<div class="input-group">
									<input id="size-name" name="ten" type="text" class="form-control text-dark" placeholder="Enter ">
								</div>
							</div>
						</div>



					<div class="row p-5">
						<div class="btn-list text-end">
							<button class="btn btn-outline-danger">
								<i class="fe fe-x-circle"></i>
								Cancel
							</button>

                            <button class="btn btn-outline-safe">
								<i class="fe fe-check-circle"></i>
								Save
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</html>
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
                    <a href="{{ Route('SIZE.danh-sach') }}" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>SIZE</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>NHẬP HÀNG</a>
                    <a href="#" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>HÓA ĐƠN</a>
@endsection
