<section class="content-header">
      <h1>
        Suppliers
        <small>Pemasok Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
              <div class="pull-right">
                <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back 
                </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    
                        <form action="<?=site_url('supplier/process')?>" method="post">
                            <div class="form-group">
                                <label for="">Supplier Name *</label>
                                <input type="hidden" name="supplier_id" value="<?=$row->supplier_id?>">
                                <input type="text" name="supplier_name" class="form-control" value="<?=$row->name?>" require>
                            </div>
                            <div class="form-group">
                                <label for="">Phone *</label>
                                <input type="number" name="phone" class="form-control" value="<?=$row->phone?>" require>
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea type="text" name="address" class="form-control" require> <?=$row->address?> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" name="description" class="form-control" require> <?=$row->description?> </textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                            </div>                
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->