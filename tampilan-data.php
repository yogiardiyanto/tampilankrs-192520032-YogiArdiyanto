<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>

 <body>
 <?php
  $Nim=$_POST['NIM'];
  $Nama=$_POST['Nama'];
  $Kelas=$_POST['Kls'];
  $Semester=$_POST['Sem'];
  $Matkul=$_POST['Mk'];
  
 ?>
 <table border="1" cellpadding="5" cellspacing="0">
  <tr>
     <td>NIM</td>
     <td> <?php echo $Nim ?> </td>
  </tr>
  <tr>
     <td>Nama Mahaisiwa</td>
     <td> <?php echo $Nama ?> </td>
  </tr>
  <tr>
     <td>Kelas</td>
     <td> <?php echo $Kelas ?> </td>
  </tr>
  <tr>
     <td>Semester</td>
     <td> <?php echo $Semester ?> </td>
  </tr>

  <tr>
     <td>Mata Kuliah</td>
     <td> <?php echo $Matkul ?> </td>
  </tr>

 </table>
 </body>
</html>