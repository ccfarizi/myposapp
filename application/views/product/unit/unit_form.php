<section class="content-header">
      <h1>
        Unit
        <small>Unit Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Units</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=ucfirst($page)?> Unit</h3>
              <div class="pull-right">
                <a href="<?=site_url('unit')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back 
                </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    
                        <form action="<?=site_url('unit/process')?>" method="post">
                            <div class="form-group">
                                <label for="">Unit Name *</label>
                                <input type="hidden" name="unit_id" value="<?=$row->unit_id?>">
                                <input type="text" name="unit_name" class="form-control" value="<?=$row->name?>" require>
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