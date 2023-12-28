<div class="contentpanel">

      <div class="row">
	  
	  <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Mstproduk/hapus_data" class="form-horizontal">
        <div class="col-md-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Hapus Data Produk</h4>
              </div>
			  
              <div class="panel-body">
               
				<input type="hidden" name="id" value="<?php echo $hapus['id']; ?>" class="form-control"  />
				<hr>
        <div class="form-group">
                    <label class="col-sm-3 control-label">code<span class="text-danger">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="code" value="<?php echo $hapus['code']; ?>" class="form-control" placeholder="code" readonly />
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label class="col-sm-3 control-label">description<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="description" value="<?php echo $hapus['description']; ?>" class="form-control" placeholder="description" readonly />
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">MOQ<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="moq" value="<?php echo $hapus['moq']; ?>" class="form-control" placeholder="Jurusan" title="Jurusan Harus Diisi" readonly />
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label class="col-sm-3 control-label">Category PID<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="categorypid" class="form-control" value="<?php echo $hapus['categorypid']; ?>" placeholder="Category PID" title="Category PID Harus Diisi" readonly />
                    </div>
                  </div>

				   <div class="form-group">
                    <label class="col-sm-3 control-label">Hierarchy<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="hierarchy" value="<?php echo $hapus['hierarchy']; ?>" class="form-control" placeholder="0" title="Hierarchy Harus Diisi" readonly />
                    </div>
                   </div>
				   
				    <div class="form-group">
                    <label class="col-sm-3 control-label">Material Group<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="materialgroup" value="<?php echo $hapus['materialgroup']; ?>" class="form-control" placeholder="0" title="Material Group"  readonly />
                    </div>
                   </div>
				   
				    <div class="row mb20">
                    <label class="col-sm-3 control-label">DIV<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" value="<?php echo $hapus['datadiv']; ?>" name="datadiv" class="form-control" placeholder="0" title="DIV" readonly />
                    </div>
                   </div>
			
					<div class="row mb20">
                    <label class="col-sm-3 control-label">Type PID<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" value="<?php echo $hapus['typepid']; ?>" name="typepid" class="form-control" placeholder="0" title="Type PID" readonly />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">Last Price (sales) Before PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" name="lastpricebfppn" value="<?php echo $hapus['lastpricebfppn']; ?>" class="form-control" placeholder="0" title="Last Price (sales) Before PPN" readonly />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">New Price (sales) Before PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" name="newpricebfppn" value="<?php echo $hapus['newpricebfppn']; ?>" class="form-control" placeholder="0" title="New Price (sales) Before PPN" readonly />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">Last Discount (%)<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="lastdiscount" value="<?php echo $hapus['lastdiscount']; ?>" class="form-control" placeholder="0" title="Last Discount" readonly />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">New Discount (%)<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="newdiscount" value="<?php echo $hapus['newdiscount']; ?>" class="form-control" placeholder="0" title="New Discount" readonly />
                    </div>
                   </div>
				   
                  <hr>
				  
				    <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button type="submit" name="hapus" class="btn btn-warning btn-quirk btn-wide mr5"><i class="fa fa-trash"></i> Hapus</button>
                      <a href="<?php echo base_url() ?>Mstproduk" class="btn btn-quirk btn-wide btn-danger"><i class="fa fa-close"></i> Kembali</a>
                    </div>
                  </div>
			 	  
              </div><!-- panel-body -->
          </div><!-- panel -->
      </div><!-- col-md-6 -->
		
		  <div class="col-sm-6">
          <div class="panel">
            <div class="panel-body">
			
					<div class="row mb20">
                    <label class="col-sm-3 control-label">PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="ppn" class="form-control" value="<?php echo $hapus['ppn']; ?>" placeholder="0" title="PPN" readonly />
                    </div>
                   </div>
			
              <div class="row mb20">
			  <label class="col-sm-3 control-label">Buy Price Before PPN<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="buypricebfppn" value="<?php echo $hapus['buypricebfppn']; ?>" placeholder="0"  title="Buy Price Before PPN" readonly>
                </div>     
			  </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Buy Price After PPN<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="buypriceafppn" value="<?php echo $hapus['buypriceafppn']; ?>" placeholder="0" title="Buy Price After PPN" readonly>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Sale Price After PPN<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="salepriceafppn" value="<?php echo $hapus['salepriceafppn']; ?>" placeholder="0" title="Sale Price After PPN" readonly>
                </div>
              </div>
			  
			  <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Sub Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="<?php echo $hapus['subkat']; ?>" name="subkat" placeholder="0" title="Kode Sub Kategori" readonly>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Sub Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="<?php echo $hapus['namasubkat']; ?>" name="namasubkat" placeholder="0" title="Nama Sub Kategori" readonly>
                </div>
              </div>
			  
			    <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="kat" value="<?php echo $hapus['kat']; ?>" placeholder="0" title="Kode Kategori" readonly>
                </div>
              </div>
			  
			  <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namakat" value="<?php echo $hapus['namakat']; ?>" placeholder="0" title="Nama Kategori" readonly>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Departement<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="dept" value="<?php echo $hapus['dept']; ?>" placeholder="0" title="Kode Departement"readonly>
                </div>
              </div>

          <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Departement<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namadept" value="<?php echo $hapus['namadept']; ?>" placeholder="0" title="Nama Departement"readonly>
                </div>
              </div>

          <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Divisi<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="divisi" value="<?php echo $hapus['divisi']; ?>" placeholder="0" title="Kode Divisi"readonly>
                </div>
              </div>

          <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Divisi<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namadivisi" value="<?php echo $hapus['namadivisi']; ?>" placeholder="0" title="Nama Divisi"readonly>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Tax<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="tax" value="<?php echo $hapus['tax']; ?>" placeholder="0" title="Tax" readonly>
                </div>
              </div>
			
		   </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
		 </form>
      </div><!--row -->
    </div><!-- contentpanel -->



	

	

