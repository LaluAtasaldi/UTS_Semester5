<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/AdminLTE.min.css">
  <!-- warna style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/skins/skin-blue.min.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
    <section class="content">
    
    <div class='table-responsive'> 
                <table class="table table-striped table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
					<tbody>
                        <?php $start = 0; foreach ($pengguna_data as $pengguna) { ?>
                        <tr>
                            <td><?php echo ++$start ?></td>
                            <td><?php echo $pengguna->nama_depan ?></td>
                            <td><?php echo $pengguna->nama_belakang ?></td>
                            <td><?php echo $pengguna->email ?></td>
                            <td><?php echo $pengguna->username ?></td>
                            <td><?php echo $pengguna->password ?></td>
                            <td><?php echo $pengguna->level ?></td>
                            <td><img src="<?php echo base_url().'upload/pengguna/'.$pengguna->photo ?>" width="50px" height="50px" ></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                   
                    </table>
                </div><!-- /.table-responsive -->
            </div>
    
    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
