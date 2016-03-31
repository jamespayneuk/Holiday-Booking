<?php

  $dates = (object) array(
    '2016-4-1' => 'Donna',
    '2016-4-3' => 'Mandy',
    '2016-4-5' => 'Saskia'
  );

  $response = (object) array(
  	'dates' => $dates
  );

  echo json_encode($response);

?>