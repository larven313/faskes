<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Komentar</title>
</head>

<body>
	<form action="<?= base_url('komentar/fungsi_create_komentar') ?>" method="post">
		<ul style="list-style: none;">
			<li>
				<ul>
					<li>Tanggal</li>
					<li><input type="date" name="tanggal" id="tanggal"></li>
				</ul>
			</li>

			<li>
				<ul>
					<li>Komentar</li>
					<li><input type="text" name="isi" id="isi"></li>
				</ul>
			</li>

			<li>
				<ul>
					<li>User</li>
					<li><input type="number" name="users_id" id="users_id"></li>
				</ul>
			</li>

			<li>
				<ul>
					<li>Faskes</li>
					<li>
						<select name="faskes_id" id="faskes_id">
							<?php foreach ($queryAllFaskes as $faskes) {
							?>
								<option value="<?php echo $faskes->id ?>"><?php echo $faskes->nama ?></option>

							<?php } ?>
						</select>
					</li>
				</ul>
			</li>

			<li>
				<ul>
					<li>Rating</li>
					<li><input type="number" name="nilai_rating_id" id="nilai_rating_id" max="5"></li>
				</ul>
			</li>
		</ul>

		<button type="submit">Submit</button>
	</form>
</body>

</html>