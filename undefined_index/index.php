<?php
if (isset($_POST['submitted'])) {
	$something =$_POST['something'];
	$something_else =$_POST['something_else'];
	echo $something, ' ', $something_else;
}
?>
<form action="" method="post">
	Type something:
	<input type="text" name="something" />
	<input type="text" name="something_else" />
	<input type="hidden" name="submitted" value="true">
	<input type="submit" name="Submit" />
</form>
