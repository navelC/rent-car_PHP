<style type="text/css">
	td{
		padding-top: 10px;
	}
	.center{
		padding-top: 30px;
		margin: auto;
		width: 60%;
	}
</style>
<div id="wllt">
	<p style="border: solid; width: 70%">số dư trong tài khoản: <?php echo $user['coin'] ?> </p>
    <div class="title" style="border-bottom: none">
    	<h2 style="margin-bottom: 30px">Nạp tiền vào tài khoản:</h2>
    </div>
    <div class="row">
	    <table class="col-5" style=" border: solid;text-align: center;">
	    	<tr>
	    		<th>Mệnh giá</th>
	    		<th>Quy đổi</th>
	    	</tr>
	    	<tr>
	    		<td>20.000 vnđ</td>
	    		<td>phí 10%</td>
	    	</tr>
	    	<tr>
	    		<td>50.000 vnđ</td>
	    		<td>phí 10%</td>
	    	</tr>
	    	<tr>
	    		<td>100.000 vnđ</td>
	    		<td>phí 10%</td>
	    	</tr>
	    	<tr>
	    		<td>200.000 vnđ</td>
	    		<td>phí 10%</td>
	    	</tr>
	    </table>
	    <div class="col-1"></div>
	    <form  method="POST" class="col-6" style="padding-top: 0px">
	    	<label>Số seri:</label>
	    	<input type="text" name="seri" placeholder="số seri">
	    	<label>Mã thẻ:</label>
	    	<input type="text" name="code" placeholder="mã thẻ">
	    	<div class="center">
	    		<button>Xác nhận</button>
	    	</div>
	    </form>
    </div>
 </div>