<section class="content-header">
      <h1>
        Users
        <small>Pengguna</small>
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
              <h3 class="box-title">Add User</h3>
              <div class="pull-right">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back 
                </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    
                        <form action="" method="post">
                            <div class="form-group <?=form_error('fullname')?'has-error':null?>">
                                <label for="">Name *</label>
                                <input type="text" name="fullname" class="form-control" value="<?=set_value('fullname')?>">
                                <span class="help-block"><?=form_error('fullname')?></span>
                            </div>
                            <div class="form-group <?=form_error('username')?'has-error':null?>">
                                <label for="">Username *</label>
                                <input type="text" name="username" class="form-control" value="<?=set_value('username')?>">
                                <span class="help-block"><?=form_error('username')?></span>
                            </div>  
                            <div class="form-group <?=form_error('password')?'has-error':null?>">
                                <label for="">Password *</label>
                                <input type="password" name="password" class="form-control" >
                                <span class="help-block"><?=form_error('password')?></span>
                            </div>  
                            <div class="form-group <?=form_error('passconf')?'has-error':null?>">
                                <label for="">Password Confirmation *</label>
                                <input type="password" name="passconf" class="form-control">
                                <span class="help-block"><?=form_error('passconf')?></span>
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea name="address" id="" class="form-control"><?=set_value('address')?></textarea>
                            </div>
                            <div class="form-group <?=form_error('level')?'has-error':null?>">
                                <label for="">Level *</label>
                                <select name="level" id="" class="form-control">
                                    <option value="">Pilih Level</option>
                                    <option value="1" <?=set_value('level')==1?'selected':''?>>Admin</option>
                                    <option value="2" <?=set_value('level')==2?'selected':''?>>Kasir</option>
                                </select>
                                <span class="help-block"><?=form_error('level')?></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
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