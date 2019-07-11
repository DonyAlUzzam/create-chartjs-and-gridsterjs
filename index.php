<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS - www.malasngoding.com</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="Chartjs/Chart.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script src="./js/data.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
	<center>
		<h2>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS<br/></h2>
	</center> 
	<?php 
	include 'koneksi.php';
	?>


 
	<div style="width: 800px;margin: 0px auto;" id="container_canvas">
		<form name="contact" id="dropdown_data" action="mailer.php" method="POST">
			<select onchange="getData()" id="data_dropdown" name="Subject[]">
			<!-- <option selected value="Products" >All Products</option> -->
			<option  selected value="UGM" >UGM</option>
			<option  value="ITB" >ITB</option>
			<option  value="UNPAD" >UNPAD</option>
			</select>
			<!-- other single input form boxes follow this select  -->
		</form>
		<form name="contact" id="dropdown_data_chart" action="mailer.php" method="POST">
			<select onchange="getData()" id="data_dropdown_chart" name="Subject[]">
			<!-- <option selected value="Products" >All Products</option> -->
			<option  selected value="pie" >PIE</option>
			<option  value="bar" >BAR</option>
			<option  value="radar" >RADAR</option>
			<option  value="doughnut" >DOUGHNUT</option>
			<option  value="line" >LINE</option>
			</select>
			<!-- other single input form boxes follow this select  -->
		</form>
		<canvas id="myChart"></canvas>
		
	</div>
	<br/>
	<br/>
	<form action="addAction.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Form Input Data Mahasiswa</font></td>
        </tr>
         <tr height="46">
            <td> </td>
            <td>Input Mahasiswa</td>
            <td><select name="univ">
                    <option value="-">- Pilih Universitas -
                    <option value="UGM">UGM
                    <option value="ITB">ITB
                    <option value="UNPAD">UNPAD
                </select></td>
        </tr>
         <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="nama" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ID Mahasiswa / NIM</td>
            <td><input type="text" name="nim" size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin" size="50" maxlength="1" /></td>
        </tr>
        <tr>
           <td> </td>
            <td>Fakultas</td>
            <td><select name="fakultas">
                    <option value="-">- Pilih Fakultas -
                    <option value="Ekonomi">Ekonomi
                    <option value="Pertanian">Pertanian
                    <option value="Teknik">Teknik
                    <option value="Fisip">Fisip
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
        </tr>
    </table>
</form>
 <!-- 	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Mahasiswa</th>
				<th>NIM</th>
				<th>Fakultas</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['fakultas']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table> -->
<!--  <form action="addAction.php" method="POST">
            <fieldset>
                <legend><h2>Tambah data</h2></legend>
                <label>Nama  <input type="text" name="nama" /></label> <br>
                <label>Nim <input type="number" name="nim" /> </label><br>
                <label>Jenis Kelamin <input type="text" name="jns_kelamin" /> </label> <br>
                <label>Fakultas <input type="text" name="fakultas" /></label> <br>
                <br>
                <label>
                    <input type="submit" name="btn_simpan" value="Simpan"/>
                    <input type="reset" name="reset" value="Besihkan"/>
                </label>
                <br>
                <p></p>
            </fieldset>
        </form> -->
		
</html>