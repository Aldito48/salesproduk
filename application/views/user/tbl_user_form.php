
	<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <form id="RegisterValidation" enctype="multipart/form-data" action="<?php echo base_url() ?>User/simpan" method="POST">
			 
			  
                <div class="card ">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Tambah User Verifikator</h4>
                  </div>
                  <div class="card-body ">
                    
                    <div class="form-group">
                      <label for="" class="bmd-label-floating"> Nama Lengkap<small class="text-danger"> * </small></label>
                      <input type="text"  class="form-control" name="full_name" required="true">
					  
                    </div>
					<div class="form-group">
                      <label for="" class="bmd-label-floating"> Username <small class="text-danger"> * </small></label>
                      <input type="text"  class="form-control" name="username" required="true">
					  
                    </div>
					<div class="form-group">
                      <label for="" class="bmd-label-floating"> Email <small class="text-danger"> * </small></label>
                      <input type="text"  class="form-control" name="email" required="true">
					  
                    </div>
					<div class="form-group">
                      <label for="" class="bmd-label-floating"> Password <small class="text-danger"> * </small></label>
                      <input type="password"  class="form-control" name="password" required="true">
					  
                    </div>
					<div class="form-group">
					<label for="" class="bmd-label-floating"> Level User <small class="text-danger"> * </small></label>
					<select class="form-control select2" name="level_user" required="true">
					  <option></option>
					  <?php foreach($level as $l){  ?>
					  <option value="<?php echo $l->id_user_level; ?>"><?php echo $l->nama_level; ?></option>
					  <?php } ?>
					  
					</select>
					</div>
					<div class="form-group">
					<label for="" class="bmd-label-floating"> Aktif <small class="text-danger"> * </small></label>
					<select class="form-control select2" name="is_aktif" style="width: 100%;">
					  <option></option>
					  <option value="y">Ya</option>
					  <option value="n">Tidak</option>
					  
					</select>
					</div>
					<br>
                    <div class="category form-category text-danger">* Wajib Diisi</div>
					
					 
                  </div>
                  <div class="card-footer text-right">
                    <div class="form-check mr-auto">
                      <a href="<?php echo base_url(); ?>User" class="btn btn-rose"><i class="material-icons">close</i> Kembali</a>
                    </div>
                    <button name="tambah" type="submit" class="btn btn-success"><i class="material-icons">save</i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
            
            
            
          </div>
</div>


