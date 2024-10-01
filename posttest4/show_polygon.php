<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">
</head>
<body>
    <h1>Data Pembelian</h1>
    <?php if(isset($_POST['simpan'])){?>
        <div class="form">
       <table>
       <tr>
            <td><h3>Nama</h3</td>
            <td>
                <h3 id="nama" class="jarak-atas"><?php echo $_POST['nama'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Jenis Sepeda</h3></td>
            <td>
                <h3 id="jenis" class="jarak-atas"><?php echo $_POST['jenis'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Harga Sepeda</h3></td>
            <td>
                <h3 id="harga" class="jarak-atas"><?php echo $_POST['harga'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Jumlah Sepeda</h3></td>
            <td>
                <h3 id="jumlah" class="jarak-atas"><?php echo $_POST['jumlah'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Tanggal Beli</h3></td>
            <td>
                <h3 id="tanggal" class="jarak-atas"><?php echo $_POST['tanggal'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Jenis Warna</h3></td>
            <td>
                <h3 id="choose" class="jarak-atas"><?php echo $_POST['choose'] ?></h3>
            </td>
        </tr>
       </table>
       </div>
    <?php } ?>
</body>
<style>

h1{
	text-align: center;
}

.form{
 	width: 1106px;
 	background-color: #fff;
 	position: fixed;
 	margin-left: 142px;
	text-align: center;
	top: 122px;
	color: black;
}

table{
    margin-left: 20px;
    margin-top: 20px;
    font-size: 14px;
    width: 759px;
    margin: 2% auto;

}
table td{
    padding: 5px 5px;
}

th, td {
  border-bottom: 1px solid #DDD;
}

</style>
</html>