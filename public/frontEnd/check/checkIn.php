<?php
if(isset($_POST['submit']))
{
   $datein = $_POST['hello'];
   echo $datein. '<br>';
}
if(isset($_POST['submit']))
{
   $dateout = $_POST['dateout'];
   echo $dateout. '<br>';
}
if(isset($_POST['submit']))
{
  $adults = $_POST['adult'];
  echo "You have selected :" .$adults;
  echo '<br>';
}
if(isset($_POST['submit']))
{
  $children = $_POST['children'];
  echo "You have selected :" .$children;
  echo '<br>';
}
?>
