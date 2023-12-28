<div class="content-wrapper">

    <section class="content">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">HAPUS DATA</h3>
            </div>
            <form action="<?php echo base_url(); ?>user/hapus" id="popup-validation" method="post" enctype="multipart/form-data">
			
            
            <!-- /.box-header -->
            <!-- form start -->
           <div class="row">
        
			<input type="hidden" class="form-control" value="<?php echo $edit['id_users']; ?>" name="id">
             
			  <div class="col-md-8">
			   <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="validate[required] form-control" readonly value="<?php echo $edit['full_name']; ?>" name="full_name" placeholder="Nama Lengkap">
                </div>
				 <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="validate[required] form-control" readonly value="<?php echo $edit['username']; ?>" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="validate[required] form-control" readonly value="<?php echo $edit['username']; ?>" name="password" placeholder="Password">
                </div>
				<div class="form-group">
					<label>Level User</label>
					<select class="validate[required] form-control select2" disabled name="level_user" style="width: 100%;">
					<?php foreach($join as $j){  ?>
					  <option value="<?php echo $j->id_user_level; ?>"><?php echo $j->nama_level; ?></option>
					<?php } ?>
					  <?php foreach($level as $l){  ?>
					  <option value="<?php echo $l->id_user_level; ?>"><?php echo $l->nama_level; ?></option>
					  <?php } ?>
					  
					</select>
				</div>
				<div class="form-group">
					<label>Status Aktif</label>
					<select disabled class="validate[required] form-control select2" name="is_aktif" style="width: 100%;">
					  <option><?php echo $edit['is_aktif']; ?></option>
					  <option value="y">Ya</option>
					  <option value="n">Tidak</option>
					  
					</select>
				</div>
				<button class="btn btn-danger hapus"><i class="fa fa-close"></i> Hapus</button>
				<a href="<?php echo base_url() ?>User" class="btn btn-danger"><i class="fa fa-sign-in"></i> Batal</a>
				</div>
				</div>
				<div class="col-md-4">	
				<div class="box-body">	
                <div class="form-group">
				
                 <label class="col-sm-4 control-label">Foto</label>
                  
				  
									
						<div class="btn btn-default btn-file" >
						 <input type="file" disabled  name="images" onchange="readURLUser(this);" /> 
						 <?php
									$fotouser=$edit['images'];
									if(empty($fotouser)){
										?>
										<img id="preview_gambarUser" style="width: 125px; height: 125px" src="<?php echo base_url(); ?>assets/foto_profil/kosong.jpg"  />
									<?php	
									} else {	
									?>
									 <img src="<?php echo base_url() . 'assets/foto_profil/', $edit['images'] ?>" style="width: 125px; height: 125px">
									 <?php } ?>
						 </div>
                  
                </div>
				</div>
				</div>
                
             
			  
			 
              <!-- /.box-body -->
			
	
			
              
           
          
            </div>    
		 </form>		
		</div>
	</section>
</div>
<link href="<?php echo base_url() ?>assets/js/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/bootstrap-notify.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/sweetalert.min.js"></script>

    
	<script type="text/javascript">
      $('.kirim').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan Di Kirim dan Tidak Bisa Diedit Kembali!",
				type: "success",
				showCancelButton: true,
				confirmButtonColor: "#4CAF50",
				confirmButtonText: "Ya, Kirim",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
		$('.terima').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan Diterima!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#4CAF50",
				confirmButtonText: "Ya, Terima",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
		$('.hapus').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan Dihapus!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Ya, Hapus",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
		$('.batalkan').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan dibatalkan!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Ya, Batalkan",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
	 
      $('batal_kan').click(function(e){
			var href = $(this).attr('href');
        	swal({
        		title: "Apakah Anda Yakin?",
        		text: "Akan Menghapus Data Ini",
        		type: "warning",
        		showCancelButton: true,
        		confirmButtonColor: '#DD6B55',
        		confirmButtonText: 'Ya Hapus',
        		cancelButtonText: "Tidak",
        		closeOnConfirm: true,
        		closeOnCancel: true
        	},
        	function(isConfirm){
            if (isConfirm){
              window.location.href = href;
			  }
			  swal("");
        	});
			return false;
        });
    </script>
<script>
			//gambar plank
			function readURLUser(input) { // Mulai membaca inputan gambar
			if (input.files && input.files[0]) {
			var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
			 
			reader.onload = function (e) { // Mulai pembacaan file
			$('#preview_gambarUser') // Tampilkan gambar yang dibaca ke area id #preview_gambar
			.attr('src', e.target.result)
			.width(125); // Menentukan lebar gambar preview (dalam pixel)
			//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
			};
			 
			reader.readAsDataURL(input.files[0]);
			}
			}
</script>			
