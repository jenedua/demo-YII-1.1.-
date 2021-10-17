<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<h1>User File</h1>

<?php
foreach($teste as $user){
	 echo "$user->username";
	 echo "$user->password";
	 echo "<br>";
}

?>

