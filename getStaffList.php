<?php

$staff = array("Donna", "Mandy", "Saskia");

$response = (object) array(
	'staff' => $staff
);

echo json_encode($response);