<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pengguna <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nm Depan <?php echo form_error('nm_depan') ?></label>
            <input type="text" class="form-control" name="nm_depan" id="nm_depan" placeholder="Nm Depan" value="<?php echo $nm_depan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Belakang <?php echo form_error('nm_belakang') ?></label>
            <input type="text" class="form-control" name="nm_belakang" id="nm_belakang" placeholder="Nm Belakang" value="<?php echo $nm_belakang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Level <?php echo form_error('level') ?></label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
	    <div class="form-group">
            <tr>
                <td>photo <?php echo form_error('photo') ?></td>
                <td>
                    <input type="file" id="photo" name="photo" size="20" required value="<?php echo $photo; ?>" />
                </td>
            </tr>
        </div>
	    <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengguna') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>