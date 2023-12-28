<div class="contentpanel">

      <div class="row">
	  
	  <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Mstcustomer/hapus_data" class="form-horizontal">
        <div class="col-md-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Hapus Data Customer</h4>
              </div>
              <div class="panel-body">
                <hr>

				<input type="hidden" name="id" value="<?php echo $hapus['id']; ?>" class="form-control"  />
				
        <div class="form-group">
                    <label class="col-sm-3 control-label">Tahun <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="number" name="tahun" value="<?php echo $hapus['tahun']; ?>" class="form-control" placeholder="Tahun" title="Tahun Harus Diisi" readonly />
                    </div>
                  </div>
				  
            <div class="form-group">
                    <label class="col-sm-3 control-label">Tgl.Kembali<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="date" name="tglkembali" value="<?php echo $hapus['tglkembali']; ?>" class="form-control" placeholder="Tanggal Kembali" title="Tanggal Kembali Harus Diisi" readonly />
                    </div>
                  </div>
				  
            <div class="form-group">
                    <label class="col-sm-3 control-label">Type Vespa<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="typevesva" value="<?php echo $hapus['typevespa']; ?>" class="form-control" placeholder="Type Vespa" title="Type Vespa Harus Diisi" readonly />
                    </div>
                  </div>
				  
            <div class="form-group">
                    <label class="col-sm-3 control-label">No. VIN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="novin" value="<?php echo $hapus['novin']; ?>" class="form-control" placeholder="Nomor VIN" title="Nomor VIN Harus Diisi" readonly />
                    </div>
                  </div>

            <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Customer<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" value="<?php echo $hapus['nama']; ?>" class="form-control" placeholder="Nama Customer" title="Nama Customer Harus Diisi" readonly />
                    </div>
                   </div>
				
            <div class="form-group">
                    <label class="col-sm-3 control-label">Gender<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="gender" value="<?php echo $hapus['gender']; ?>" class="form-control" placeholder="Gender" title="Gender Harus Diisi"  readonly />
                    </div>
                   </div>
				
                  <hr>

                  <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                    <?php 
                    $level=$this->session->userdata('id_user_level');
                    if($level==1){ ?>
                                <button type="submit"  class="btn btn-danger btn-quirk btn-wide mr5 hapus"><i class="fa fa-trash"></i> Hapus</button>
                    <?php } ?>  
                      <a href="<?php echo base_url() ?>Mstcustomer" class="btn btn-quirk btn-wide btn-warning"><i class="fa fa-close"></i> Kembali</a>
                    </div>
                  </div>
				  
              </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
		
		<div class="col-sm-6">
          <div class="panel">
            <div class="panel-body">
			
				    <div class="form-group">
                    <label class="col-sm-3 control-label">Tgl.Lahir<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="date" name="tgllahir" value="<?php echo $hapus['tgllahir']; ?>" class="form-control" placeholder="Tanggal Lahir" title="Tanggal Lahir Harus Diisi" readonly />
                    </div>
                   </div>
			
          <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="alamat" value="<?php echo $hapus['alamat']; ?>" class="form-control" placeholder="Alamat" title="Alamat Harus Diisi" readonly />
                    </div>
                   </div>
				  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kelurahan<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kelurahan" value="<?php echo $hapus['kelurahan']; ?>" class="form-control" placeholder="Kelurahan" title="Kelurahan Harus Diisi" readonly />
                    </div>
                   </div>
				  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kecamatan<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kecamatan" value="<?php echo $hapus['kecamatan']; ?>" class="form-control" placeholder="Kecamatan" title="Kecamatan Harus Diisi" readonly />
                    </div>
                   </div>
				  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kab/Kota<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kota" value="<?php echo $hapus['kota']; ?>" class="form-control" placeholder="Kabupaten atau Kota" title="Kabupaten atau Kota Harus Diisi" readonly />
                    </div>
                   </div>
				  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Provinsi<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="provinsi" value="<?php echo $hapus['provinsi']; ?>" class="form-control" placeholder="Provinsi" title="Provinsi Harus Diisi" readonly />
                    </div>
                   </div>
				  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Pos<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kodepos" value="<?php echo $hapus['kodepos']; ?>" class="form-control" placeholder="Kode Pos" title="Kode Pos Harus Diisi" readonly />
                    </div>
                   </div>
				  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Email<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="email" name="email" value="<?php echo $hapus['email']; ?>" class="form-control" placeholder="Email" title="Email Harus Diisi" readonly />
                    </div>
                   </div>
			
		   </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
		 </form>
      </div><!--row -->
    </div><!-- contentpanel -->



	

	

