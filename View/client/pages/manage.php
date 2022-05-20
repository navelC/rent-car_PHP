<style type="text/css">
	td{
		padding: 10px;
	}
	.center{
		padding-top: 30px;
		margin: auto;
		width: 60%;
	}
</style>
<div id="wllt">
    <div class="row">
	    <table class="col-12" style=" border: solid;text-align: center;">
	    	<?php foreach ($news as $key ): ?>
	    	<tr>
	    		<td><img style="width: 110px; height: 60px" src="Public/client/img/<?php echo $key['img'] ?>"></td>
	    		<td><?php echo $key['title'] ?></td>
	    		<td><?php echo $key['status'] ?></td>
	    	</tr>
	    	<?php endforeach ?>
	    </table>
    </div>
 </div>