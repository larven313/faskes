<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Komentar</title>
</head>

<body>
	<a href="<?= base_url("project_faskes/komentar/create_komentar")?>" type="button">Tambah Komentar</a>

	<?php      
    foreach($queryAllKomentar as $komentar){ 
    ?>
	<ul>
		<li><?php echo $komentar->komentar_id ?></li>
		<li><?php echo $komentar->tanggal ?></li>
		<li><?php echo $komentar->isi ?></li>
		<li><?php echo $komentar->username?></li>
		<li><?php echo $komentar->faskes ?></li>
		<li><?php echo $komentar->nilai_rating ?></li>

		<li><a href="<?= base_url("project_faskes/komentar/edit_komentar")?>/<?php echo $komentar->komentar_id?>"
				type="button" class="btn btn-info">Edit</a>
			<a href="" type="button" class="btn btn-primary">View</a>

			<a href="<?php echo base_url('project_faskes/komentar/delete_komentar')?>/<?php echo $komentar->komentar_id?>"
				type="button">Delete</a>

	</ul>
	<?php } ?>
</body>

</html>
