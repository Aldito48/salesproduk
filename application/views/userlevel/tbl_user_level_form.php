<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA LEVEL USER </h3>
            </div>
			
            <form action="<?php echo $action; ?>" method="post" id="popup-validation">
            
<table class='table table-bordered'>        

	    <tr>
		<td width='200'>Nama Level </td>
		<td><input type="text" class="form-control validate[required]" name="nama_level"  placeholder="Nama Level" value="<?php echo $nama_level; ?>" /></td>
		</tr>
	    <tr>
		<td></td>
		<td><input type="hidden" name="id_user_level" value="<?php echo $id_user_level; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('userlevel') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>