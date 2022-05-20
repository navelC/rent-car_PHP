<div class="container">
	<h1>Đăng tin</h1>
	<form method="POST"  enctype="multipart/form-data" >
		<div class="row">
		<div class="group" style="width: 100%">
			<label>Chọn thông tin</label>
			<div class="row">
				<select class="col-2" name="type" style="margin-right: 20px">
					<?php foreach ($typecar as $key): ?>
						<option value="<?php echo $key['id'] ?>"><?php echo $key['name'] ?></option>
					<?php endforeach ?>
				</select>
				<!-- <select class="col-2" type="" name="" style="margin-right: 20px">
					<option value="car">xe máy</option>
					<option value="car">xe điện</option>
					<option value="car">xe 4 chỗ</option>
					<option value="car">xe 7 chỗ</option>
					<option value="car">xe du lịch</option>
				</select> -->
				<select class="col-2"  name="color" style="margin-right: 20px">
					<?php foreach ($colorcar as $key): ?>
						<option value="<?php echo $key['id'] ?>"><?php echo $key['color'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="group" style="width: 100%">
			<label>Tiêu đề</label>
			<div class="row">
				<input class="col-6" type="" name="title" style="margin-right: 20px">
			</div>
		</div>
		<div class="group" style="width: 100%">
			<label>Giá</label>
			<div class="row">
				<input  class="col-3" type="" name="price" style="margin-right: 20px">
			</div>
		</div>
		<div class="group" style="width: 100%">
			<label>Địa chỉ</label>
			<div class="row">
				<input placeholder="thành phố" class="col-3" type="" name="city" style="margin-right: 20px">
				<input  placeholder="tên đường" class="col-3" type="" name="address">
			</div>
		</div>
		<div class="group" style="width: 100%">
			<label>Mô tả chi tiết</label>
			<div class="row">
				<input class="col-3" type="" name="descript" style="margin-right: 20px">
			</div>
		</div>
		<input style="margin-top: 30px;" class="col-12" type="file" name="img"> <br>
		<p class="col-12">phí tin đăng: 15 000 vnd</p>
		<button>Đăng tin</button>
	</div>
	</form>
</div>
<script type="text/javascript">
	// function option(type) {
	// 	if (type=='car') {
	// 		var a[] = ['']
	// 	}
	// }
</script>