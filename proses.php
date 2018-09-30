<form method="POST" Action="">
	<tr>
		<h2><center><td> Genre Film : </td></center></h2>
		<td><center><input type="checkbox" name="Genre[]" value="Horor"> Horor </center></td>
		<br>
		<td><center><input type="checkbox" name="Genre[]" value="Action"> Action </center></td>
		<br>
		<td><center><input type="checkbox" name="Genre[]" value="Anime"> Anime </center></td>
		<br>
		<td><center><input type="checkbox" name="Genre[]" value="Thriller"> Thriller </center></td>
		<br>
		<td><center><input type="checkbox" name="Genre[]" value="Animasi"> Animasi </center></td>
		<br>
	</tr>
	<center><b>==================================================================================================</b></center>

	<tr>
		<h2><center><td> Tempat Tujuan Travelling : </td></center></h2>
		<td><center><input type="checkbox" name="Destinasi[]" value="Bali"> Bali </center></td>
		<br>
		<td><center><input type="checkbox" name="Destinasi[]" value="Raja Ampat"> Raja Ampat </center></td>
		<br>
		<td><center><input type="checkbox" name="Destinasi[]" value="Pulau Derawan"> Pulau Derawan </center></td>
		<br>
		<td><center><input type="checkbox" name="Destinasi[]" value="Bangka Belitung"> Bangka Belitung </center></td>
		<br>
		<td><center><input type="checkbox" name="Destinasi[]" value="Labuan Baju"> Labuan Baju </center></td>
		<br>
		<center><input type="submit" name="submit2" value="Save">
    	<input type="reset" name="reset" value="Reset"></center>
	</tr>
</form>

 <?php 
 if (isset($_POST['submit2'])) {
     $data =$_POST['Genre'];
     echo "<br> Film Anda : ";
 foreach ($data as $film) {
    echo $film."<br>";
 }
    echo "<br>";
 $travel =$_POST['Destinasi'];
 	echo  "Destinasi Anda : ";
 foreach ($travel as $travelling) {
    echo $travelling."<br>";
 }
 }
?>
