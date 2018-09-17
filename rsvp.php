<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $attending = $_POST['attending'];
  $vegetarian = $_POST['vegetarian'];
  $vegan = $_POST['vegan'];
  $gluten_free = $_POST['gluten_free'];
  $other_reqs = $_POST['other_reqs'];

?>