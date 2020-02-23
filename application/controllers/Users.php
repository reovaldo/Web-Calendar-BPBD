<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
  }else{
    $val['username']="";
    $val['password']="";
    $val['level']="";
  }
?>
 <section class="content-header">
    <h1>
        Form User
        <small>User</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">User</li>
    </ol>
</section>
<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <!-- form start -->
                                <?php echo form_open($open);?>
                                <div role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" value="<?php echo $val['username'];?>" placeholder="Username">
                                             <input type="hidden" class="form-control" name="id_user" value="<?php echo $val['id_user'];?>" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password" value="<?php echo $val['password'];?>" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level">
                                                <option>Pilih</option>
                                                <option <?php if($val['level']=="ADMIN"){echo "selected";}?>>ADMIN</option>
                                                <option <?php if($val['level']=="UMPEG"){echo "selected";}?>>UMPEG</option>
                                            </select>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary"><?php echo $value;?></button>
                                    </div>
                                    <?php echo form_close();?>
                                </div>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
</section><!-- /.content -->