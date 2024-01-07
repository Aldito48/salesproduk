<div class="contentpanel">

      <div class="row">
	   <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Detailsalesinvoice/hapus_data" class="form-horizontal">

        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Hapus Entry Sales Invoice</h4>
                </div>

                <div class="panel-body">
                <input type="hidden" name="id" value="<?php echo $hapus['id']; ?>" class="form-control"   />
                <hr>

            <div class="form-group">
                    <label class="col-sm-3 control-label">Item <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="item" value="<?php echo $hapus['item']; ?>" class="form-control"  placeholder="Item" title="Item Harus Diisi" disabled />
                    </div>
                    </div>

            <div class="form-group">
                    <label class="col-sm-3 control-label">Item Description<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="item_description" value="<?php echo $hapus['item_description']; ?>" class="form-control"  placeholder="Item Descripotion" title="Item Descripotion Harus Diisi" disabled />
                    </div>
                    </div>
            
            <div class="form-group">
                    <label class="col-sm-3 control-label">Qty<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="number" name="qty" value="<?php echo $hapus['qty']; ?>" class="form-control"  placeholder="Qty" title="Qty Harus Diisi" disabled />
                    </div>
                    </div>
            
            <div class="form-group">
                    <label class="col-sm-3 control-label">Item Unit<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="item_unit" value="<?php echo $hapus['item_unit']; ?>" class="form-control"  placeholder="Item Unit" title="Item Unit Harus Diisi" disabled />
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
                      <a href="<?php echo base_url() ?>Detailsalesinvoice" class="btn btn-quirk btn-wide btn-warning"><i class="fa fa-close"></i> Kembali</a>
                    </div>
                    </div>
            
                </div><!-- panel-body -->
            </div><!-- panel -->
        </div>
		
        <div class="col-sm-6">
              <div class="panel">
                <div class="panel-body">
          
              <div class="form-group">
                        <label class="col-sm-3 control-label">Unit Price<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" name="unit_price" value="<?php echo $hapus['unit_price']; ?>" class="form-control"  placeholder="Unit Price" title="Unit Price Harus Diisi" disabled />
                        </div>
                      </div>
          
              <div class="form-group">
                        <label class="col-sm-3 control-label">Amount<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" name="amount" value="<?php echo $hapus['amount']; ?>" class="form-control"  placeholder="Amount" title="Amount Harus Diisi" disabled />
                        </div>
                      </div>
          
              <div class="form-group">
                        <label class="col-sm-3 control-label">Discount (%)<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" name="disc_persentage" value="<?php echo $hapus['disc_persentage']; ?>" class="form-control"  placeholder="Discount" disabled />
                        </div>
                      </div>
            
              <div class="form-group">
                        <label class="col-sm-3 control-label">Disc Price<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" name="disc_price" value="<?php echo $hapus['disc_price']; ?>" class="form-control"  placeholder="Disc Price" disabled />
                        </div>
                      </div>
            
              <div class="form-group">
                        <label class="col-sm-3 control-label">Net Price<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" name="net_price" value="<?php echo $hapus['net_price']; ?>" class="form-control"  placeholder="Net Price"  disabled />
                        </div>
                      </div>
            
                </div>
              </div>
        </div>

	</div><!--row -->
	</form>
  </div><!-- contentpanel -->



	

	

