<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tbpengguna List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Depan</th>
		<th>Nama Belakang</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Photo</th>
		
            </tr><?php
            foreach ($tbpengguna_data as $tbpengguna)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbpengguna->Nama_Depan ?></td>
		      <td><?php echo $tbpengguna->Nama_Belakang ?></td>
		      <td><?php echo $tbpengguna->Email ?></td>
		      <td><?php echo $tbpengguna->Username ?></td>
		      <td><?php echo $tbpengguna->Password ?></td>
		      <td><?php echo $tbpengguna->Level ?></td>
		      <td><?php echo $tbpengguna->Photo ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>