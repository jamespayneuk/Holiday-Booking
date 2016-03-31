<?php

  $db = mysqli_connect("127.0.0.1","root", "","Holiday booking", 8889);
  $sql = "SELECT firstname FROM staff";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  $staff = array();
  while ($row){
  	  array_push($staff, $row['firstname']);
      $row = mysqli_fetch_array($result);
  }

  $response = (object) array(
  	'staff' => $staff
  );
  echo json_encode($response);
?>