<html>
<head>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 120px;
			cursor: pointer;
		}
		label {
			width: 120px;
			display: block;
			float: left;
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style>
</head>
<body>
	<h1>Form HTML Pada PHP</h1>
	<form action="" method="post">
		<div class="row">
			<label>Nama</label>
			<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
		</div>
		<div class="row">
			<label>Nim</label>
			<input type="text" name="nim" value="<?=isset($_POST['Nim']) ? $_POST['Nim'] : ''?>"/>
		</div>
		<div class="row">
			<label>Tempat Lahir</label>
			<select name="tempat">
				<?php $options = array('Bali', 'Jawa', 'Kalimantan', 'Sumatra', 'Papua');
				foreach ($options as $area) {
					$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
					echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
				}?>
			</select>
		</div>
		<div class="row">
			<label>Umur</label>
			<input type="text" name="umur" value="<?=isset($_POST['umur']) ? $_POST['umur'] : ''?>"/>
		</div>
		<div class="row">
		<label for="start">Tanggal Lahir</label>
<input type="date" id="start" name="trip-start"
       value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	   </div>

		<div class="row">
			<label>Jenis Kelamin</label>
			<div class="options">
				<?php
				$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
				foreach ($jenis_kelamin as $kode => $detail) {
					$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
					echo '<label class="radio">
							<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
						</label>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<label>Hobby</label>
			<div class="options">
				<?php 
				$program = array('Olahraga', 'Membaca', 'Seni', 'Koleksi', 'Nonton');
				foreach ($program as $hobby) {
					$checked = isset($_POST['hobby_' . $hobby]) ? ' checked="checked"' : '';
					echo '<label class="checkbox">
							<input type="checkbox" name="hobby_' . $hobby . '"' . $checked . '>' . $hobby . 
						'</label>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<label>Keterangan</label>
			<input type="text" name="keterangan" value="<?=isset($_POST['keterangan']) ? $_POST['keterangan'] : ''?>"/>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Simpan"/>
		</div>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		echo '<h1>Hasil Input</h1>';
		echo '<ul>';
		echo '<li>Nama: ' . $_POST['nama'] . '</li>';
		echo '<li>Email: ' . $_POST['nim'] . '</li>';
		echo '<li>Lokasi: ' . $_POST['tempat'] . '</li>';
		echo '<li>Lokasi: ' . $_POST['trip-start'] . '</li>';
		echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
		
		$list_hobby = array();
		foreach ($program as $hobby) {
			if ( isset($_POST['hobby_' . $hobby]) )
			{
				$list_hobby[] = $hobby;
			}
		}

		echo '<li>hobby: ' . ($list_hobby ? join($list_hobby, ', ') : '-') . '</li>';
		
		
		
		$umur=$_POST['umur'];
if ($umur<6)
{
   echo "$umur TAHUN ,USIA ANDA TERGOLONG BALITA "; 
}
else if($umur<17)
{
   echo "$umur TAHUN ,USIA ANDA TERGOLONG ANAK-ANAK"; 
}
else if($umur<51)
{
    echo "$umur TAHUN ,USIA ANDA TERGOLONG DEWASA"; 
}
else 
{
    echo "$umur TAHUN ,USIA ANDA TERGOLONG TUA"; 
}


echo '<li>Keterangan: ' . $_POST['keterangan'] . '</li>';

		echo '</ul>';
	}?>
</body>
</html>