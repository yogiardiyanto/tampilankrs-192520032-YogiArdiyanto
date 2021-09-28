<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <table border=0>
  <form action="formulirdatadiri.php" method="POST">
   <tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type=text name=NIM></td>
   </tr>
  
   <tr>
    <td>Nama Mahasiswa</td>
    <td>:</td>
    <td><input type=text name=Nama></td>
   </tr>
    
   <tr>
   <td>Kelas</td>
   <td>:</td>
    <td>
    <select name=Kls>
    <option name=Kls>Kelas
    <option name=Kls>A
    <option name=Kls>B
    </select>
    </td>
   </tr>
   

   <tr>
    <td>Semester</td>
    <td>:</td>
    <td>
    <select name=Sem>
    <option name=Sem>Semester
    <option name=Sem>1
    <option name=Sem>3
    <option name=Sem>5
    <option name=Sem>7  
    </select>
    </td>
   </tr>

   <tr>
    <td>Mata Kuliah</td>
    <td>:</td>
    <td>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="PAB">PENGEMBANGAN APLIKASI BERGERAK</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="PPAB">PRAKTIKUM PENGEMBANGAN APLIKASI BERGERAK</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="STATK">STATISTIK</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="SPK">SISTEM PENDUKUNG KEPUTUSAN</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="COMM">E-COMMERCE</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="KWU">KEWIRAUSAHAAN DAN INOVASI</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="PF">PEMROGRAMAN FRAMEWORK</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="PPF">PRAKTIKUM PEMROGRAMAN FRAMEWORK</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="AIK">AL ISLAM DAN KEMUHAMMADIYAHAN V</label><br>
     <label><input type="checkbox" name="Mk[]"  alt="checkbox" value="KJ">KEAMANAN JARINGAN</label><br>
    </td>
   </tr>
 
   <tr>
    <td> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="INPUT DATA">
    <input type="reset" name="reset" value="HAPUS"></td>
   </tr>

   
  </form>
  <?php
        if(isset($_POST['submit'])){
            if(empty($_POST['Mk'])){
                echo"Pilih Mata kuliah";
            }
            else{
                echo "Anda Memilih;<br/><br/>"; 
                foreach($_POST['Mk'] as $Matkul){  
                    echo $Matkul ."<br/>";
                }
            }
        }
    ?>
  </table>
  
 </body>
</html>

