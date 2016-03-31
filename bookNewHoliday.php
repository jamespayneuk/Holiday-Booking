<?php

// I will send the users id, name, and the requested dates in an array, in the post data
// e.g. firstname=Donna&dates=2016-1-4,2016-1-5,2016-1-6

 $no_errors = array();
 $with_errors = array("First error description", "Second error description"); 
  //Potential errors:
    //This date has already been booked by another member of staff
    //You have booked more than your holiday allowance
    //Booking this will mean you take off more than 5 Fridays this year
    //etc

 $response = (object) array(
  'errors' => $no_errors
 );

echo json_encode($response);

?>