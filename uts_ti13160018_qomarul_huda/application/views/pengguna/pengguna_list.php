<!doctype html>
<html>
    <head>
        <title>list pengguna</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">List Pengguna</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pengguna/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pengguna/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pengguna'); ?>" class="btn btn-default">Reset</a>
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
		<th>Foto</th>
		<th>Action</th>
            </tr><?php
            foreach ($pengguna_data as $pengguna)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pengguna->nama_depan ?></td>
			<td><?php echo $pengguna->nama_belakang ?></td>
			<td><?php echo $pengguna->email ?></td>
			<td><?php echo $pengguna->username ?></td>
			<td><?php echo $pengguna->password ?></td>
			<td><?php echo $pengguna->level ?></td>
			<td><img src="<?php echo base_url().'assets/img/'.$pengguna->foto ?>" width="50px" height="50px" ></td>
            
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pengguna/read/'.$pengguna->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pengguna/update/'.$pengguna->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pengguna/delete/'.$pengguna->id),'Delete','onclick="javasciprt: return confirm(\'pacuan ke ?\')"'); 
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
		<?php echo anchor(site_url('pengguna/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('pengguna/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>