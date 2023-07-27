<html>
 <form method="POST" name="frmpost" action="">
  <table align="center" border="1" cellpadding="0" cellspacing="0"> 
    <tr align="center"><td><h2> <b>Masukan Biodata Kalian</b></h2></td></tr>
    <tr> 
      <td>
      <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
        <tr>
          <td>Nama</td>
          <td> : </td>
          <td><input name="nama[]" type="text" size="40" /></td>
        </tr>
        <tr>
          <td>Tempat Tgl Lahir</td>
          <td> : </td>
          <td><input name="tgl[]" type="text" size="40" /></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td> : </td>
          <td>
            <input type="radio" name="jk" value="Laki - Laki"><label for="laki">Laki - Laki</label>
            <input type="radio" name="jk" value="Perempuan"><label for="Perempuan">Perempuan</label>
          </td>
        </tr>
        <tr>
          <td>Hobi</td>
          <td> : </td>
          <td><input name="hobi[]" type="text" size="40" /></td>
        </tr>
        <tr>
          <td   colspan="4" align="center"><input type="submit" name="btnOk" value="Simpan" /></td>
        </tr>
      </table>
      </td>
    </tr>
  </table>
</form>
  <center>
<table border="1" cellpadding="2" cellspacing="4">
  <?php
  $nama = $_POST['nama'];
  $tgl = $_POST['tgl'];
  $jk = $_POST['jk'];
  $hobi = $_POST['hobi'];

  foreach($nama as $key => $val){
  ?>
  
  <tr>
    <td align="center" colspan="2">
      <?php 
      echo '<b>Hasil Biodata yang di Inputkan</b><br>';?>   
    </td>
  </tr>
  <tr>
    <td><?php echo 'Nama'?></td>
    <td><?php echo $nama[$key];?></td>
  </tr>
  <tr>
    <td><?php echo 'Tempat Tanggal Lahir';?></td>
    <td><?php echo $tgl[$key];?></td>
  </tr>
  <tr>
    <td><?php echo 'Jenis Kelamin';?></td>
    <td><?php echo $jk;?></td>
  </tr>
  <tr>
    <td><?php echo 'Hobi';?></td>
    <td><?php echo $hobi[$key];?></td>
  </tr>
  <?php 
    }
   ?>
</table>
</center>
</html>
