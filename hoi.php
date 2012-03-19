<?php
if(isset($_POST['naam'])) {
	echo 'Hoi, '.$_POST['naam'];
}
else {
?>
<form action='' method='POST'>
<input type='text' name='naam'>
<input type='submit' value='Zeg Hoi'>
</form>
<?php }