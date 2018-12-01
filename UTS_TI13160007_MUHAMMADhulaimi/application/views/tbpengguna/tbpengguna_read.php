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
        <h2 style="margin-top:0px">Tbpengguna Read</h2>
        <table class="table">
	    <tr><td>Nama Depan</td><td><?php echo $Nama_Depan; ?></td></tr>
	    <tr><td>Nama Belakang</td><td><?php echo $Nama_Belakang; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $Email; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $Username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $Password; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $Level; ?></td></tr>
	    <tr><td>Photo</td><td><?php echo $Photo; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbpengguna') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>