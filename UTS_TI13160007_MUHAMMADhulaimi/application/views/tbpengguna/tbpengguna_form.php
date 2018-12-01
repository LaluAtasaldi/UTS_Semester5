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
        <h2 style="margin-top:0px">Tbpengguna <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Depan <?php echo form_error('Nama_Depan') ?></label>
            <input type="text" class="form-control" name="Nama_Depan" id="Nama_Depan" placeholder="Nama Depan" value="<?php echo $Nama_Depan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Belakang <?php echo form_error('Nama_Belakang') ?></label>
            <input type="text" class="form-control" name="Nama_Belakang" id="Nama_Belakang" placeholder="Nama Belakang" value="<?php echo $Nama_Belakang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('Email') ?></label>
            <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('Username') ?></label>
            <input type="text" class="form-control" name="Username" id="Username" placeholder="Username" value="<?php echo $Username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('Password') ?></label>
            <input type="text" class="form-control" name="Password" id="Password" placeholder="Password" value="<?php echo $Password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Level <?php echo form_error('Level') ?></label>
            <input type="text" class="form-control" name="Level" id="Level" placeholder="Level" value="<?php echo $Level; ?>" />
        </div>
	    <div class="form-group">
            <tr>
                <td>Photo <?php echo form_error('Photo') ?></td>
                <td>
                    <input type="file" id="Photo" name="Photo" size="20" required value="<?php echo $Photo; ?>"
                    />
                </td>
            </tr>
        </div>
	    <input type="hidden" name="No" value="<?php echo $No; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbpengguna') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>