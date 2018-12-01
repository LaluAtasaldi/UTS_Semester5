<!-- Main content -->
<section class='content'>
    <div class='box'>
        <div class='box-body'>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
           
                <table class='table'>
                    <tr>
                        <td>Nama Ruang <?php echo form_error('ruang') ?></td>
                        <td>
                            <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" placeholder="Nama Ruang" value="<?php echo $nama_ruang; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Fungsi Ruangan <?php echo form_error('fungsi_ruang') ?></td>
                        <td>
                            <input type="text" class="form-control"  id="fungsi_ruang" name="fungsi_ruang" placeholder="Fungsi Ruang" value="<?php echo $fungsi_ruang; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Luas Ruangan <?php echo form_error('luas') ?></td>
                        <td>
                            <input type="text" class="form-control"  id="luas" name="luas" placeholder="Luas Ruang" value="<?php echo $luas; ?>" />
                        </td>
                    </tr>
                    
                    <tr> 
                        <td>Gambar Ruangan <?php echo form_error('gambar_ruang') ?></td>
                        <td>
                            <input type="file" class="form-control"  id="gambar_ruang" name="gambar_ruang" size="20"  placeholder="Gambar Ruang" value="<?php echo $gambar_ruang; ?>" />
                        </td>
                    </tr>
                    <input type="hidden" name="id_ruang" value="<?php echo $id_ruang; ?>" />
                    <tr>
                        <td colspan='2' class='text-center'>
                            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-check'></i> <?php echo $button ?></button>
                            <a href="<?php echo site_url('ruang') ?>" class="btn btn-sm btn-default"><i class='fa fa-remove'></i> Batal</a>
                        </td>
                    </tr>
                    <?php echo form_close()?>
                </table>
            </form>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->