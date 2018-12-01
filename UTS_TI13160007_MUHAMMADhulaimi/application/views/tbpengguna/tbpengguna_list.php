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
        <h2 style="margin-top:0px">Tbpengguna List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tbpengguna/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tbpengguna/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tbpengguna'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Depan</th>
		<th>Nama Belakang</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Photo</th>
		<th>Action</th>
            </tr><?php
            foreach ($tbpengguna_data as $tbpengguna)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tbpengguna->Nama_Depan ?></td>
			<td><?php echo $tbpengguna->Nama_Belakang ?></td>
			<td><?php echo $tbpengguna->Email ?></td>
			<td><?php echo $tbpengguna->Username ?></td>
			<td><?php echo $tbpengguna->Password ?></td>
			<td><?php echo $tbpengguna->Level ?></td>
            <td><img src="<?php echo base_url().'assets/img/'.$tbpengguna->Photo ?>" width="60px" height="50px">
            </td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tbpengguna/read/'.$tbpengguna->No),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tbpengguna/update/'.$tbpengguna->No),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tbpengguna/delete/'.$tbpengguna->No),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('tbpengguna/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('tbpengguna/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>