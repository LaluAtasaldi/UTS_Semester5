<!doctype html>
<html>
    <head>
        <title>form pengguna</title>
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
            <label for="varchar">Nama Depan <?php echo form_error('nama_depan') ?></label>
            <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Nama Depan" value="<?php echo $nama_depan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Belakang <?php echo form_error('nama_belakang') ?></label>
            <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" value="<?php echo $nama_belakang; ?>" />
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
            <label for="varchar">Level <?php echo form_error('level') ?></label>
            <input type="Number" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
	    <div class="form-group">
            <tr>
                <td>foto <?php echo form_error('foto') ?></td>
                <td>
                    <input type="file" id="foto" name="foto" size="20" required value="<?php echo $foto; ?>" />
                </td>
            </tr>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengguna') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>