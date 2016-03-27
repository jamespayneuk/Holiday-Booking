<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calendar</title>
    <link rel="stylesheet" href="main style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php
      function staffOff($date){
        $db = mysqli_connect("127.0.0.1:3306","root", "","Holiday booking");

        $sql = "SELECT staff.firstname FROM holidays ";
        $sql .= "INNER JOIN staff ON staff.staffid = holidays.staffid ";
        $sql .= "WHERE holidays.hdate = '{$date}'";

        $result = mysqli_query($db,$sql);

        $r = mysqli_fetch_array($result);
        echo $r['firstname'];
      }
    ?>
    <div class="formBox">
      <form id="form" action="" method="GET">
        <label>Firstname:</label>
        <div class="form-group form-horizontal">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <select class="form-control" name="firstname">
              <?php
                 $db = mysqli_connect("127.0.0.1:3306","root", "","Holiday booking");
                 $sql = "SELECT firstname FROM staff";

                 $result = mysqli_query($db, $sql);

                 $row = mysqli_fetch_array($result);

                 while ($row){
                     echo "<option> {$row['firstname']} </option>";
                     $row = mysqli_fetch_array($result);
                 }
             ?>
           </select>
          </div>
          <p class="help-block">Click the days you want off <i class="fa fa-arrow-right"></i></p>
        </div>
        <button class="btn btn-default submit">Submit</button>
        <input type="hidden" value="check" name="check"></input>
      </form>
    </div>

    <div class="calendar">
      <table class="table table-bordered">
        <thead>
          <th>Mon</th>
          <th>Tue</th>
          <th>Wed</th>
          <th>Thr</th>
          <th>Fri</th>
          <th>Sat</th>
          <th>Sun</th>
        </thead>
        <tbody>
          <tr>
           <td class="not-current" width="128px">28 Dec</td>
           <td class="not-current" width="128px">29 Dec</td>
           <td class="not-current" width="128px">30 Dec</td>
           <td class="not-current" width="128px">31 Dec</td>
           <td id="2016-1-1" class="bh cell" width="128px">1 Jan <i>New Years</i> </td>
           <td id="2016-1-2" class="cell" width="128px">2 Jan <b><?php staffOff('2016-1-2'); ?> </b></td>
           <td id="2016-1-3" class="cell" width="128px">3 Jan <b><?php staffOff('2016-1-3'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-1-4" class="cell">4 Jan <b><?php staffOff('2016-1-4'); ?> </b></td>
           <td id="2016-1-5" class="cell">5 Jan <b><?php staffOff('2016-1-5'); ?> </b></td>
           <td id="2016-1-6" class="cell">6 Jan <b><?php staffOff('2016-1-6'); ?> </b></td>
           <td id="2016-1-7" class="cell">7 Jan <b><?php staffOff('2016-1-7'); ?> </b></td>
           <td id="2016-1-8" class="cell">8 Jan <b><?php staffOff('2016-1-8'); ?> </b></td>
           <td id="2016-1-9" class="cell">9 Jan <b><?php staffOff('2016-1-9'); ?> </b></td>
           <td id="2016-1-10" class="cell">10 Jan <b><?php staffOff('2016-1-10'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-1-11" class="cell">11 Jan <b><?php staffOff('2016-1-11'); ?></b> </td>
           <td id="2016-1-12" class="cell">12 Jan <b><?php staffOff('2016-1-12'); ?></b> </td>
           <td id="2016-1-13" class="cell">13 Jan <b><?php staffOff('2016-1-13'); ?></b> </td>
           <td id="2016-1-14" class="cell">14 Jan <b><?php staffOff('2016-1-14'); ?></b> </td>
           <td id="2016-1-15" class="cell">15 Jan <b><?php staffOff('2016-1-15'); ?></b> </td>
           <td id="2016-1-16" class="cell">16 Jan <b><?php staffOff('2016-1-16'); ?></b> </td>
           <td id="2016-1-17" class="cell">17 Jan <b><?php staffOff('2016-1-17'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-1-18" class="cell" >18 Jan <b><?php staffOff('2016-1-18'); ?></b> </td>
           <td id="2016-1-19" class="cell" >19 Jan <b><?php staffOff('2016-1-19'); ?></b> </td>
           <td id="2016-1-20" class="cell" >20 Jan <b><?php staffOff('2016-1-20'); ?></b> </td>
           <td id="2016-1-21" class="cell" >21 Jan <b><?php staffOff('2016-1-21'); ?></b> </td>
           <td id="2016-1-22" class="cell" >22 Jan <b><?php staffOff('2016-1-22'); ?></b> </td>
           <td id="2016-1-23" class="cell" >23 Jan <b><?php staffOff('2016-1-23'); ?></b> </td>
           <td id="2016-1-24" class="cell" >24 Jan <b><?php staffOff('2016-1-24'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-1-25" class="cell">25 Jan <b><?php staffOff('2016-1-25'); ?></b> </td>
           <td id="2016-1-26" class="cell">26 Jan <b><?php staffOff('2016-1-26'); ?></b> </td>
           <td id="2016-1-27" class="cell">27 Jan <b><?php staffOff('2016-1-27'); ?></b> </td>
           <td id="2016-1-28" class="cell">28 Jan <b><?php staffOff('2016-1-28'); ?></b> </td>
           <td id="2016-1-29" class="cell">29 Jan <b><?php staffOff('2016-1-29'); ?></b> </td>
           <td id="2016-1-30" class="cell">30 Jan <b><?php staffOff('2016-1-30'); ?></b> </td>
           <td id="2016-1-31" class="cell">31 Jan <b><?php staffOff('2016-1-31'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-2-1" class="second-month cell">1 Feb <b><?php staffOff('2016-2-1'); ?> </b></td>
           <td id="2016-2-2" class="second-month cell">2 Feb <b><?php staffOff('2016-2-2'); ?> </b></td>
           <td id="2016-2-3" class="second-month cell">3 Feb <b><?php staffOff('2016-2-3'); ?> </b></td>
           <td id="2016-2-4" class="second-month cell">4 Feb <b><?php staffOff('2016-2-4'); ?> </b></td>
           <td id="2016-2-5" class="second-month cell">5 Feb <b><?php staffOff('2016-2-5'); ?> </b></td>
           <td id="2016-2-6" class="second-month cell">6 Feb <b><?php staffOff('2016-2-6'); ?> </b></td>
           <td id="2016-2-7" class="second-month cell">7 Feb <b><?php staffOff('2016-2-7'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-2-8" class="second-month cell">8 Feb <b><?php staffOff('2016-2-8'); ?> </b></td>
           <td id="2016-2-9" class="second-month cell">9 Feb <b><?php staffOff('2016-2-9'); ?> </b></td>
           <td id="2016-2-10" class="second-month cell">10 Feb <b><?php staffOff('2016-2-10'); ?></b> </td>
           <td id="2016-2-11" class="second-month cell">11 Feb <b><?php staffOff('2016-2-11'); ?></b> </td>
           <td id="2016-2-12" class="second-month cell">12 Feb <b><?php staffOff('2016-2-12'); ?></b> </td>
           <td id="2016-2-13" class="second-month cell">13 Feb <b><?php staffOff('2016-2-13'); ?></b> </td>
           <td id="2016-2-14" class="second-month cell">14 Feb <b><?php staffOff('2016-2-14'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-2-15" class="second-month cell">15 Feb <b><?php staffOff('2016-2-15'); ?></b> </td>
           <td id="2016-2-16" class="second-month cell">16 Feb <b><?php staffOff('2016-2-16'); ?></b> </td>
           <td id="2016-2-17" class="second-month cell">17 Feb <b><?php staffOff('2016-2-17'); ?></b> </td>
           <td id="2016-2-18" class="second-month cell">18 Feb <b><?php staffOff('2016-2-18'); ?></b> </td>
           <td id="2016-2-19" class="second-month cell">19 Feb <b><?php staffOff('2016-2-19'); ?></b> </td>
           <td id="2016-2-20" class="second-month cell">20 Feb <b><?php staffOff('2016-2-20'); ?></b> </td>
           <td id="2016-2-21" class="second-month cell">21 Feb <b><?php staffOff('2016-2-21'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-2-22" class="second-month cell">22 Feb <b><?php staffOff('2016-2-22'); ?></b> </td>
           <td id="2016-2-23" class="second-month cell">23 Feb <b><?php staffOff('2016-2-23'); ?></b> </td>
           <td id="2016-2-24" class="second-month cell">24 Feb <b><?php staffOff('2016-2-24'); ?></b> </td>
           <td id="2016-2-25" class="second-month cell">25 Feb <b><?php staffOff('2016-2-25'); ?></b> </td>
           <td id="2016-2-26" class="second-month cell">26 Feb <b><?php staffOff('2016-2-26'); ?></b> </td>
           <td id="2016-2-27" class="second-month cell">27 Feb <b><?php staffOff('2016-2-27'); ?></b> </td>
           <td id="2016-2-28" class="second-month cell">28 Feb <b><?php staffOff('2016-2-28'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-2-29" class="second-month cell">29 Feb <b><?php staffOff('2016-2-29'); ?></b> </td>
           <td id="2016-3-1" class="cell">1 Mar <b><?php staffOff('2016-3-1'); ?> </b></td>
           <td id="2016-3-2" class="cell">2 Mar <b><?php staffOff('2016-3-2'); ?> </b></td>
           <td id="2016-3-3" class="cell">3 Mar <b><?php staffOff('2016-3-3'); ?> </b></td>
           <td id="2016-3-4" class="cell">4 Mar <b><?php staffOff('2016-3-4'); ?> </b></td>
           <td id="2016-3-5" class="cell">5 Mar <b><?php staffOff('2016-3-5'); ?> </b></td>
           <td id="2016-3-6" class="cell">6 Mar <b><?php staffOff('2016-3-6'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-3-7" class="cell">7 Mar <b><?php staffOff('2016-3-7'); ?> </b></td>
           <td id="2016-3-8" class="cell">8 Mar <b><?php staffOff('2016-3-8'); ?> </b></td>
           <td id="2016-3-9" class="cell">9 Mar <b><?php staffOff('2016-3-9'); ?> </b></td>
           <td id="2016-3-10" class="cell">10 Mar <b><?php staffOff('2016-3-10'); ?></b> </td>
           <td id="2016-3-11" class="cell">11 Mar <b><?php staffOff('2016-3-11'); ?></b> </td>
           <td id="2016-3-12" class="cell">12 Mar <b><?php staffOff('2016-3-12'); ?></b> </td>
           <td id="2016-3-13" class="cell">13 Mar <b><?php staffOff('2016-3-13'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-3-14" class="cell">14 Mar <b><?php staffOff('2016-3-14'); ?></b> </td>
           <td id="2016-3-15" class="cell">15 Mar <b><?php staffOff('2016-3-15'); ?></b> </td>
           <td id="2016-3-16" class="cell">16 Mar <b><?php staffOff('2016-3-16'); ?></b> </td>
           <td id="2016-3-17" class="cell">17 Mar <b><?php staffOff('2016-3-17'); ?></b> </td>
           <td id="2016-3-18" class="cell">18 Mar <b><?php staffOff('2016-3-18'); ?></b> </td>
           <td id="2016-3-19" class="cell">19 Mar <b><?php staffOff('2016-3-19'); ?></b> </td>
           <td id="2016-3-20" class="cell">20 Mar <b><?php staffOff('2016-3-20'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-3-21" class="cell">21 Mar <b><?php staffOff('2016-3-21'); ?></b> </td>
           <td id="2016-3-22" class="cell">22 Mar <b><?php staffOff('2016-3-22'); ?></b> </td>
           <td id="2016-3-23" class="cell">23 Mar <b><?php staffOff('2016-3-23'); ?></b> </td>
           <td id="2016-3-24" class="cell">24 Mar <b><?php staffOff('2016-3-24'); ?></b> </td>
           <td id="2016-3-25" class="bh cell">25 Mar <i>Good Friday</i> </td>
           <td id="2016-3-26" class="cell">26 Mar <b><?php staffOff('2016-3-26'); ?></b> </td>
           <td id="2016-3-27" class="cell">27 Mar <b><?php staffOff('2016-3-27'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-3-28" class="bh cell">28 Mar <i>Easter Monday</i> </td>
           <td id="2016-3-29" class="cell">29 Mar <b><?php staffOff('2016-3-29'); ?></b> </td>
           <td id="2016-3-30" class="cell">30 Mar <b><?php staffOff('2016-3-30'); ?></b> </td>
           <td id="2016-3-31" class="cell">31 Mar <b><?php staffOff('2016-3-31'); ?></b> </td>
           <td id="2016-4-1" class="second-month cell">1 Apr <b><?php staffOff('2016-4-1'); ?> </b></td>
           <td id="2016-4-2" class="second-month cell">2 Apr <b><?php staffOff('2016-4-2'); ?> </b></td>
           <td id="2016-4-3" class="second-month cell">3 Apr <b><?php staffOff('2016-4-3'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-4-4" class="second-month cell">4 Apr <b><?php staffOff('2016-4-4'); ?> </b></td>
           <td id="2016-4-5" class="second-month cell">5 Apr <b><?php staffOff('2016-4-5'); ?> </b></td>
           <td id="2016-4-6" class="second-month cell">6 Apr <b><?php staffOff('2016-4-6'); ?> </b></td>
           <td id="2016-4-7" class="second-month cell">7 Apr <b><?php staffOff('2016-4-7'); ?> </b></td>
           <td id="2016-4-8" class="second-month cell">8 Apr <b><?php staffOff('2016-4-8'); ?> </b></td>
           <td id="2016-4-9" class="second-month cell">9 Apr <b><?php staffOff('2016-4-9'); ?> </b></td>
           <td id="2016-4-10" class="second-month cell">10 Apr <b><?php staffOff('2016-4-10'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-4-11" class="second-month cell">11 Apr <b><?php staffOff('2016-4-11'); ?></b> </td>
           <td id="2016-4-12" class="second-month cell">12 Apr <b><?php staffOff('2016-4-12'); ?></b> </td>
           <td id="2016-4-13" class="second-month cell">13 Apr <b><?php staffOff('2016-4-13'); ?></b> </td>
           <td id="2016-4-14" class="second-month cell">14 Apr <b><?php staffOff('2016-4-14'); ?></b> </td>
           <td id="2016-4-15" class="second-month cell">15 Apr <b><?php staffOff('2016-4-15'); ?></b> </td>
           <td id="2016-4-16" class="second-month cell">16 Apr <b><?php staffOff('2016-4-16'); ?></b> </td>
           <td id="2016-4-17" class="second-month cell">17 Apr <b><?php staffOff('2016-4-17'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-4-18" class="second-month cell">18 Apr <b><?php staffOff('2016-4-18'); ?></b> </td>
           <td id="2016-4-19" class="second-month cell">19 Apr <b><?php staffOff('2016-4-19'); ?></b> </td>
           <td id="2016-4-20" class="second-month cell">20 Apr <b><?php staffOff('2016-4-20'); ?></b> </td>
           <td id="2016-4-21" class="second-month cell">21 Apr <b><?php staffOff('2016-4-21'); ?></b> </td>
           <td id="2016-4-22" class="second-month cell">22 Apr <b><?php staffOff('2016-4-22'); ?></b> </td>
           <td id="2016-4-23" class="second-month cell">23 Apr <b><?php staffOff('2016-4-23'); ?></b> </td>
           <td id="2016-4-24" class="second-month cell">24 Apr <b><?php staffOff('2016-4-24'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-4-25" class="second-month cell">25 Apr <b><?php staffOff('2016-4-25'); ?></b> </td>
           <td id="2016-4-26" class="second-month cell">26 Apr <b><?php staffOff('2016-4-26'); ?></b> </td>
           <td id="2016-4-27" class="second-month cell">27 Apr <b><?php staffOff('2016-4-27'); ?></b> </td>
           <td id="2016-4-28" class="second-month cell">28 Apr <b><?php staffOff('2016-4-28'); ?></b> </td>
           <td id="2016-4-29" class="second-month cell">29 Apr <b><?php staffOff('2016-4-29'); ?></b> </td>
           <td id="2016-4-30" class="second-month cell">30 Apr <b><?php staffOff('2016-4-30'); ?></b> </td>
           <td id="2016-5-1" class="cell">1 May <b><?php staffOff('2016-5-1'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-5-2" class="bh cell">2 May <i>Early May</i> </td>
           <td id="2016-5-3" class="cell">3 May <b><?php staffOff('2016-5-3'); ?> </b></td>
           <td id="2016-5-4" class="cell">4 May <b><?php staffOff('2016-5-4'); ?> </b></td>
           <td id="2016-5-5" class="cell">5 May <b><?php staffOff('2016-5-5'); ?> </b></td>
           <td id="2016-5-6" class="cell">6 May <b><?php staffOff('2016-5-6'); ?> </b></td>
           <td id="2016-5-7" class="cell">7 May <b><?php staffOff('2016-5-7'); ?> </b></td>
           <td id="2016-5-8" class="cell">8 May <b><?php staffOff('2016-5-8'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-5-9" class="cell">9 May <b><?php staffOff('2016-5-9'); ?> </b></td>
           <td id="2016-5-10" class="cell">10 May <b><?php staffOff('2016-5-10'); ?></b> </td>
           <td id="2016-5-11" class="cell">11 May <b><?php staffOff('2016-5-11'); ?></b> </td>
           <td id="2016-5-12" class="cell">12 May <b><?php staffOff('2016-5-12'); ?></b> </td>
           <td id="2016-5-13" class="cell">13 May <b><?php staffOff('2016-5-13'); ?></b> </td>
           <td id="2016-5-14" class="cell">14 May <b><?php staffOff('2016-5-14'); ?></b> </td>
           <td id="2016-5-15" class="cell">15 May <b><?php staffOff('2016-5-15'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-5-16" class="cell">16 May <b><?php staffOff('2016-5-16'); ?></b> </td>
           <td id="2016-5-17" class="cell">17 May <b><?php staffOff('2016-5-17'); ?></b> </td>
           <td id="2016-5-18" class="cell">18 May <b><?php staffOff('2016-5-18'); ?></b> </td>
           <td id="2016-5-19" class="cell">19 May <b><?php staffOff('2016-5-19'); ?></b> </td>
           <td id="2016-5-20" class="cell">20 May <b><?php staffOff('2016-5-20'); ?></b> </td>
           <td id="2016-5-21" class="cell">21 May <b><?php staffOff('2016-5-21'); ?></b> </td>
           <td id="2016-5-22" class="cell">22 May <b><?php staffOff('2016-5-22'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-5-23" class="cell">23 May <b><?php staffOff('2016-5-23'); ?></b> </td>
           <td id="2016-5-24" class="cell">24 May <b><?php staffOff('2016-5-24'); ?></b> </td>
           <td id="2016-5-25" class="cell">25 May <b><?php staffOff('2016-5-25'); ?></b> </td>
           <td id="2016-5-26" class="cell">26 May <b><?php staffOff('2016-5-26'); ?></b> </td>
           <td id="2016-5-27" class="cell">27 May <b><?php staffOff('2016-5-27'); ?></b> </td>
           <td id="2016-5-28" class="cell">28 May <b><?php staffOff('2016-5-28'); ?></b> </td>
           <td id="2016-5-29" class="cell">29 May <b><?php staffOff('2016-5-29'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-5-30" class="bh cell">30 May <i>Spring</i> </td>
           <td id="2016-5-31" class="cell">31 May <b><?php staffOff('2016-5-31'); ?></b> </td>
           <td id="2016-6-1" class="second-month cell">1 June <b><?php staffOff('2016-6-1'); ?> </b></td>
           <td id="2016-6-2" class="second-month cell">2 June <b><?php staffOff('2016-6-2'); ?> </b></td>
           <td id="2016-6-3" class="second-month cell">3 June <b><?php staffOff('2016-6-3'); ?> </b></td>
           <td id="2016-6-4" class="second-month cell">4 June <b><?php staffOff('2016-6-4'); ?> </b></td>
           <td id="2016-6-5" class="second-month cell">5 June <b><?php staffOff('2016-6-5'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-6-6" class="second-month cell">6 June <b><?php staffOff('2016-6-6'); ?> </b></td>
           <td id="2016-6-7" class="second-month cell">7 June <b><?php staffOff('2016-6-7'); ?> </b></td>
           <td id="2016-6-8" class="second-month cell">8 June <b><?php staffOff('2016-6-8'); ?> </b></td>
           <td id="2016-6-9" class="second-month cell">9 June <b><?php staffOff('2016-6-9'); ?> </b></td>
           <td id="2016-6-10" class="second-month cell">10 June <b><?php staffOff('2016-6-10'); ?></b> </td>
           <td id="2016-6-11" class="second-month cell">11 June <b><?php staffOff('2016-6-11'); ?></b> </td>
           <td id="2016-6-12" class="second-month cell">12 June <b><?php staffOff('2016-6-12'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-6-13" class="second-month cell">13 June <b><?php staffOff('2016-6-13'); ?></b> </td>
           <td id="2016-6-14" class="second-month cell">14 June <b><?php staffOff('2016-6-14'); ?></b> </td>
           <td id="2016-6-15" class="second-month cell">15 June <b><?php staffOff('2016-6-15'); ?></b> </td>
           <td id="2016-6-16" class="second-month cell">16 June <b><?php staffOff('2016-6-16'); ?></b> </td>
           <td id="2016-6-17" class="second-month cell">17 June <b><?php staffOff('2016-6-17'); ?></b> </td>
           <td id="2016-6-18" class="second-month cell">18 June <b><?php staffOff('2016-6-18'); ?></b> </td>
           <td id="2016-6-19" class="second-month cell">19 June <b><?php staffOff('2016-6-19'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-6-20" class="second-month cell">20 June <b><?php staffOff('2016-6-20'); ?></b> </td>
           <td id="2016-6-21" class="second-month cell">21 June <b><?php staffOff('2016-6-21'); ?></b> </td>
           <td id="2016-6-22" class="second-month cell">22 June <b><?php staffOff('2016-6-22'); ?></b> </td>
           <td id="2016-6-23" class="second-month cell">23 June <b><?php staffOff('2016-6-23'); ?></b> </td>
           <td id="2016-6-24" class="second-month cell">24 June <b><?php staffOff('2016-6-24'); ?></b> </td>
           <td id="2016-6-25" class="second-month cell">25 June <b><?php staffOff('2016-6-25'); ?></b> </td>
           <td id="2016-6-26" class="second-month cell">26 June <b><?php staffOff('2016-6-26'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-6-27" class="second-month cell">27 June <b><?php staffOff('2016-6-27'); ?></b> </td>
           <td id="2016-6-28" class="second-month cell">28 June <b><?php staffOff('2016-6-28'); ?></b> </td>
           <td id="2016-6-29" class="second-month cell">29 June <b><?php staffOff('2016-6-29'); ?></b> </td>
           <td id="2016-6-30" class="second-month cell">30 June <b><?php staffOff('2016-6-30'); ?></b> </td>
           <td id="2016-7-1" class="cell">1 July <b><?php staffOff('2016-7-1'); ?> </b></td>
           <td id="2016-7-2" class="cell">2 July <b><?php staffOff('2016-7-2'); ?> </b></td>
           <td id="2016-7-3" class="cell">3 July <b><?php staffOff('2016-7-3'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-7-4" class="cell">4 July <b><?php staffOff('2016-7-4'); ?> </b></td>
           <td id="2016-7-5" class="cell">5 July <b><?php staffOff('2016-7-5'); ?> </b></td>
           <td id="2016-7-6" class="cell">6 July <b><?php staffOff('2016-7-6'); ?> </b></td>
           <td id="2016-7-7" class="cell">7 July <b><?php staffOff('2016-7-7'); ?> </b></td>
           <td id="2016-7-8" class="cell">8 July <b><?php staffOff('2016-7-8'); ?> </b></td>
           <td id="2016-7-9" class="cell">9 July <b><?php staffOff('2016-7-9'); ?> </b></td>
           <td id="2016-7-10" class="cell">10 July <b><?php staffOff('2016-7-10'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-7-11" class="cell">11 July <b><?php staffOff('2016-7-11'); ?></b> </td>
           <td id="2016-7-12" class="cell">12 July <b><?php staffOff('2016-7-12'); ?></b> </td>
           <td id="2016-7-13" class="cell">13 July <b><?php staffOff('2016-7-13'); ?></b> </td>
           <td id="2016-7-14" class="cell">14 July <b><?php staffOff('2016-7-14'); ?></b> </td>
           <td id="2016-7-15" class="cell">15 July <b><?php staffOff('2016-7-15'); ?></b> </td>
           <td id="2016-7-16" class="cell">16 July <b><?php staffOff('2016-7-16'); ?></b> </td>
           <td id="2016-7-17" class="cell">17 July <b><?php staffOff('2016-7-17'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-7-18" class="cell">18 July <b><?php staffOff('2016-7-18'); ?></b> </td>
           <td id="2016-7-19" class="cell">19 July <b><?php staffOff('2016-7-19'); ?></b> </td>
           <td id="2016-7-20" class="cell">20 July <b><?php staffOff('2016-7-20'); ?></b> </td>
           <td id="2016-7-21" class="cell">21 July <b><?php staffOff('2016-7-21'); ?></b> </td>
           <td id="2016-7-22" class="cell">22 July <b><?php staffOff('2016-7-22'); ?></b> </td>
           <td id="2016-7-23" class="cell">23 July <b><?php staffOff('2016-7-23'); ?></b> </td>
           <td id="2016-7-24" class="cell">24 July <b><?php staffOff('2016-7-24'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-7-25" class="cell">25 July <b><?php staffOff('2016-7-25'); ?></b> </td>
           <td id="2016-7-26" class="cell">26 July <b><?php staffOff('2016-7-26'); ?></b> </td>
           <td id="2016-7-27" class="cell">27 July <b><?php staffOff('2016-7-27'); ?></b> </td>
           <td id="2016-7-28" class="cell">28 July <b><?php staffOff('2016-7-28'); ?></b> </td>
           <td id="2016-7-29" class="cell">29 July <b><?php staffOff('2016-7-29'); ?></b> </td>
           <td id="2016-7-30" class="cell">30 July <b><?php staffOff('2016-7-30'); ?></b> </td>
           <td id="2016-7-31" class="cell">31 July <b><?php staffOff('2016-7-31'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-8-1" class="second-month cell">1 Aug <b><?php staffOff('2016-8-1'); ?> </b></td>
           <td id="2016-8-2" class="second-month cell">2 Aug <b><?php staffOff('2016-8-2'); ?> </b></td>
           <td id="2016-8-3" class="second-month cell">3 Aug <b><?php staffOff('2016-8-3'); ?> </b></td>
           <td id="2016-8-4" class="second-month cell">4 Aug <b><?php staffOff('2016-8-4'); ?> </b></td>
           <td id="2016-8-5" class="second-month cell">5 Aug <b><?php staffOff('2016-8-5'); ?> </b></td>
           <td id="2016-8-6" class="second-month cell">6 Aug <b><?php staffOff('2016-8-6'); ?> </b></td>
           <td id="2016-8-7" class="second-month cell">7 Aug <b><?php staffOff('2016-8-7'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-8-8" class="second-month cell">8 Aug <b><?php staffOff('2016-8-8'); ?> </b></td>
           <td id="2016-8-9" class="second-month cell">9 Aug <b><?php staffOff('2016-8-9'); ?> </b></td>
           <td id="2016-8-10" class="second-month cell">10 Aug <b><?php staffOff('2016-8-10'); ?></b> </td>
           <td id="2016-8-11" class="second-month cell">11 Aug <b><?php staffOff('2016-8-11'); ?></b> </td>
           <td id="2016-8-12" class="second-month cell">12 Aug <b><?php staffOff('2016-8-12'); ?></b> </td>
           <td id="2016-8-13" class="second-month cell">13 Aug <b><?php staffOff('2016-8-13'); ?></b> </td>
           <td id="2016-8-14" class="second-month cell">14 Aug <b><?php staffOff('2016-8-14'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-8-15" class="second-month cell">15 Aug <b><?php staffOff('2016-8-15'); ?></b> </td>
           <td id="2016-8-16" class="second-month cell">16 Aug <b><?php staffOff('2016-8-16'); ?></b> </td>
           <td id="2016-8-17" class="second-month cell">17 Aug <b><?php staffOff('2016-8-17'); ?></b> </td>
           <td id="2016-8-18" class="second-month cell">18 Aug <b><?php staffOff('2016-8-18'); ?></b> </td>
           <td id="2016-8-19" class="second-month cell">19 Aug <b><?php staffOff('2016-8-19'); ?></b> </td>
           <td id="2016-8-20" class="second-month cell">20 Aug <b><?php staffOff('2016-8-20'); ?></b> </td>
           <td id="2016-8-21" class="second-month cell">21 Aug <b><?php staffOff('2016-8-21'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-8-22" class="second-month cell">22 Aug <b><?php staffOff('2016-8-22'); ?></b> </td>
           <td id="2016-8-23" class="second-month cell">23 Aug <b><?php staffOff('2016-8-23'); ?></b> </td>
           <td id="2016-8-24" class="second-month cell">24 Aug <b><?php staffOff('2016-8-24'); ?></b> </td>
           <td id="2016-8-25" class="second-month cell">25 Aug <b><?php staffOff('2016-8-25'); ?></b> </td>
           <td id="2016-8-26" class="second-month cell">26 Aug <b><?php staffOff('2016-8-26'); ?></b> </td>
           <td id="2016-8-27" class="second-month cell">27 Aug <b><?php staffOff('2016-8-27'); ?></b> </td>
           <td id="2016-8-28" class="second-month cell">28 Aug <b><?php staffOff('2016-8-28'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-8-29" class="bh second-month cell">29 Aug <i>August</i> </td>
           <td id="2016-8-30" class="second-month cell">30 Aug <b><?php staffOff('2016-8-30'); ?></b> </td>
           <td id="2016-8-31" class="second-month cell">31 Aug <b><?php staffOff('2016-8-31'); ?></b> </td>
           <td id="2016-9-1" class="cell">1 Sept <b><?php staffOff('2016-9-1'); ?> </b></td>
           <td id="2016-9-2" class="cell">2 Sept <b><?php staffOff('2016-9-2'); ?> </b></td>
           <td id="2016-9-3" class="cell">3 Sept <b><?php staffOff('2016-9-3'); ?> </b></td>
           <td id="2016-9-4" class="cell">4 Sept <b><?php staffOff('2016-9-4'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-9-5" class="cell">5 Sept <b><?php staffOff('2016-9-5'); ?> </b></td>
           <td id="2016-9-6" class="cell">6 Sept <b><?php staffOff('2016-9-6'); ?> </b></td>
           <td id="2016-9-7" class="cell">7 Sept <b><?php staffOff('2016-9-7'); ?> </b></td>
           <td id="2016-9-8" class="cell">8 Sept <b><?php staffOff('2016-9-8'); ?> </b></td>
           <td id="2016-9-9" class="cell">9 Sept <b><?php staffOff('2016-9-9'); ?> </b></td>
           <td id="2016-9-10" class="cell">10 Sept <b><?php staffOff('2016-9-10'); ?></b> </td>
           <td id="2016-9-11" class="cell">11 Sept <b><?php staffOff('2016-9-11'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-9-12" class="cell">12 Sept <b><?php staffOff('2016-9-12'); ?></b> </td>
           <td id="2016-9-13" class="cell">13 Sept <b><?php staffOff('2016-9-13'); ?></b> </td>
           <td id="2016-9-14" class="cell">14 Sept <b><?php staffOff('2016-9-14'); ?></b> </td>
           <td id="2016-9-15" class="cell">15 Sept <b><?php staffOff('2016-9-15'); ?></b> </td>
           <td id="2016-9-16" class="cell">16 Sept <b><?php staffOff('2016-9-16'); ?></b> </td>
           <td id="2016-9-17" class="cell">17 Sept <b><?php staffOff('2016-9-17'); ?></b> </td>
           <td id="2016-9-18" class="cell">18 Sept <b><?php staffOff('2016-9-18'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-9-19" class="cell">19 Sept <b><?php staffOff('2016-9-19'); ?></b> </td>
           <td id="2016-9-20" class="cell">20 Sept <b><?php staffOff('2016-9-20'); ?></b> </td>
           <td id="2016-9-21" class="cell">21 Sept <b><?php staffOff('2016-9-21'); ?></b> </td>
           <td id="2016-9-22" class="cell">22 Sept <b><?php staffOff('2016-9-22'); ?></b> </td>
           <td id="2016-9-23" class="cell">23 Sept <b><?php staffOff('2016-9-23'); ?></b> </td>
           <td id="2016-9-24" class="cell">24 Sept <b><?php staffOff('2016-9-24'); ?></b> </td>
           <td id="2016-9-25" class="cell">25 Sept <b><?php staffOff('2016-9-25'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-9-26" class="cell">26 Sept <b><?php staffOff('2016-9-26'); ?></b> </td>
           <td id="2016-9-27" class="cell">27 Sept <b><?php staffOff('2016-9-27'); ?></b> </td>
           <td id="2016-9-28" class="cell">28 Sept <b><?php staffOff('2016-9-28'); ?></b> </td>
           <td id="2016-9-29" class="cell">29 Sept <b><?php staffOff('2016-9-29'); ?></b> </td>
           <td id="2016-9-30" class="cell">30 Sept <b><?php staffOff('2016-9-30'); ?></b> </td>
           <td id="2016-10-1" class="second-month cell">1 Oct <b><?php staffOff('2016-10-1'); ?> </b></td>
           <td id="2016-10-2" class="second-month cell">2 Oct <b><?php staffOff('2016-10-2'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-10-3" class="second-month cell">3 Oct <b><?php staffOff('2016-10-3'); ?> </b></td>
           <td id="2016-10-4" class="second-month cell">4 Oct <b><?php staffOff('2016-10-4'); ?> </b></td>
           <td id="2016-10-5" class="second-month cell">5 Oct <b><?php staffOff('2016-10-5'); ?> </b></td>
           <td id="2016-10-6" class="second-month cell">6 Oct <b><?php staffOff('2016-10-6'); ?> </b></td>
           <td id="2016-10-7" class="second-month cell">7 Oct <b><?php staffOff('2016-10-7'); ?> </b></td>
           <td id="2016-10-8" class="second-month cell">8 Oct <b><?php staffOff('2016-10-8'); ?> </b></td>
           <td id="2016-10-9" class="second-month cell">9 Oct <b><?php staffOff('2016-10-9'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-10-10" class="second-month cell">10 Oct <b><?php staffOff('2016-10-10'); ?></b> </td>
           <td id="2016-10-11" class="second-month cell">11 Oct <b><?php staffOff('2016-10-11'); ?></b> </td>
           <td id="2016-10-12" class="second-month cell">12 Oct <b><?php staffOff('2016-10-12'); ?></b> </td>
           <td id="2016-10-13" class="second-month cell">13 Oct <b><?php staffOff('2016-10-13'); ?></b> </td>
           <td id="2016-10-14" class="second-month cell">14 Oct <b><?php staffOff('2016-10-14'); ?></b> </td>
           <td id="2016-10-15" class="second-month cell">15 Oct <b><?php staffOff('2016-10-15'); ?></b> </td>
           <td id="2016-10-16" class="second-month cell">16 Oct <b><?php staffOff('2016-10-16'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-10-17" class="second-month cell">17 Oct <b><?php staffOff('2016-10-17'); ?></b> </td>
           <td id="2016-10-18" class="second-month cell">18 Oct <b><?php staffOff('2016-10-18'); ?></b> </td>
           <td id="2016-10-19" class="second-month cell">19 Oct <b><?php staffOff('2016-10-19'); ?></b> </td>
           <td id="2016-10-20" class="second-month cell">20 Oct <b><?php staffOff('2016-10-20'); ?></b> </td>
           <td id="2016-10-21" class="second-month cell">21 Oct <b><?php staffOff('2016-10-21'); ?></b> </td>
           <td id="2016-10-22" class="second-month cell">22 Oct <b><?php staffOff('2016-10-22'); ?></b> </td>
           <td id="2016-10-23" class="second-month cell">23 Oct <b><?php staffOff('2016-10-23'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-10-24" class="second-month cell">24 Oct <b><?php staffOff('2016-10-24'); ?></b> </td>
           <td id="2016-10-25" class="second-month cell">25 Oct <b><?php staffOff('2016-10-25'); ?></b> </td>
           <td id="2016-10-26" class="second-month cell">26 Oct <b><?php staffOff('2016-10-26'); ?></b> </td>
           <td id="2016-10-27" class="second-month cell">27 Oct <b><?php staffOff('2016-10-27'); ?></b> </td>
           <td id="2016-10-28" class="second-month cell">28 Oct <b><?php staffOff('2016-10-28'); ?></b> </td>
           <td id="2016-10-29" class="second-month cell">29 Oct <b><?php staffOff('2016-10-29'); ?></b> </td>
           <td id="2016-10-30" class="second-month cell">30 Oct <b><?php staffOff('2016-10-30'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-10-31" class="second-month cell">31 Oct <b><?php staffOff('2016-10-31'); ?></b> </td>
           <td id="2016-11-1" class="cell">1 Nov <b><?php staffOff('2016-11-1'); ?> </b></td>
           <td id="2016-11-2" class="cell">2 Nov <b><?php staffOff('2016-11-2'); ?> </b></td>
           <td id="2016-11-3" class="cell">3 Nov <b><?php staffOff('2016-11-3'); ?> </b></td>
           <td id="2016-11-4" class="cell">4 Nov <b><?php staffOff('2016-11-4'); ?> </b></td>
           <td id="2016-11-5" class="cell">5 Nov <b><?php staffOff('2016-11-5'); ?> </b></td>
           <td id="2016-11-6" class="cell">6 Nov <b><?php staffOff('2016-11-6'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-11-7" class="cell">7 Nov <b><?php staffOff('2016-11-7'); ?> </b></td>
           <td id="2016-11-8" class="cell">8 Nov <b><?php staffOff('2016-11-8'); ?> </b></td>
           <td id="2016-11-9" class="cell">9 Nov <b><?php staffOff('2016-11-9'); ?> </b></td>
           <td id="2016-11-10" class="cell">10 Nov <b><?php staffOff('2016-11-10'); ?></b> </td>
           <td id="2016-11-11" class="cell">11 Nov <b><?php staffOff('2016-11-11'); ?></b> </td>
           <td id="2016-11-12" class="cell">12 Nov <b><?php staffOff('2016-11-12'); ?></b> </td>
           <td id="2016-11-13" class="cell">13 Nov <b><?php staffOff('2016-11-13'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-11-14" class="cell">14 Nov <b><?php staffOff('2016-11-14'); ?></b> </td>
           <td id="2016-11-15" class="cell">15 Nov <b><?php staffOff('2016-11-15'); ?></b> </td>
           <td id="2016-11-16" class="cell">16 Nov <b><?php staffOff('2016-11-16'); ?></b> </td>
           <td id="2016-11-17" class="cell">17 Nov <b><?php staffOff('2016-11-17'); ?></b> </td>
           <td id="2016-11-18" class="cell">18 Nov <b><?php staffOff('2016-11-18'); ?></b> </td>
           <td id="2016-11-19" class="cell">19 Nov <b><?php staffOff('2016-11-19'); ?></b> </td>
           <td id="2016-11-20" class="cell">20 Nov <b><?php staffOff('2016-11-20'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-11-21" class="cell">21 Nov <b><?php staffOff('2016-11-21'); ?></b> </td>
           <td id="2016-11-22" class="cell">22 Nov <b><?php staffOff('2016-11-22'); ?></b> </td>
           <td id="2016-11-23" class="cell">23 Nov <b><?php staffOff('2016-11-23'); ?></b> </td>
           <td id="2016-11-24" class="cell">24 Nov <b><?php staffOff('2016-11-24'); ?></b> </td>
           <td id="2016-11-25" class="cell">25 Nov <b><?php staffOff('2016-11-25'); ?></b> </td>
           <td id="2016-11-26" class="cell">26 Nov <b><?php staffOff('2016-11-26'); ?></b> </td>
           <td id="2016-11-27" class="cell">27 Nov <b><?php staffOff('2016-11-27'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-11-28" class="cell">28 Nov <b><?php staffOff('2016-11-28'); ?></b> </td>
           <td id="2016-11-29" class="cell">29 Nov <b><?php staffOff('2016-11-29'); ?></b> </td>
           <td id="2016-11-30" class="cell">30 Nov <b><?php staffOff('2016-11-30'); ?></b> </td>
           <td id="2016-12-1" class="second-month cell">1 Dec <b><?php staffOff('2016-12-1'); ?> </b></td>
           <td id="2016-12-2" class="second-month cell">2 Dec <b><?php staffOff('2016-12-2'); ?> </b></td>
           <td id="2016-12-3" class="second-month cell">3 Dec <b><?php staffOff('2016-12-3'); ?> </b></td>
           <td id="2016-12-4" class="second-month cell">4 Dec <b><?php staffOff('2016-12-4'); ?> </b></td>
          </tr>
          <tr>
           <td id="2016-12-5" class="second-month cell">5 Dec <b><?php staffOff('2016-12-5'); ?> </b></td>
           <td id="2016-12-6" class="second-month cell">6 Dec <b><?php staffOff('2016-12-6'); ?> </b></td>
           <td id="2016-12-7" class="second-month cell">7 Dec <b><?php staffOff('2016-12-7'); ?> </b></td>
           <td id="2016-12-8" class="second-month cell">8 Dec <b><?php staffOff('2016-12-8'); ?> </b></td>
           <td id="2016-12-9" class="second-month cell">9 Dec <b><?php staffOff('2016-12-9'); ?> </b></td>
           <td id="2016-12-10" class="second-month cell">10 Dec <b><?php staffOff('2016-12-10'); ?></b> </td>
           <td id="2016-12-11" class="second-month cell">11 Dec <b><?php staffOff('2016-12-11'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-12-12" class="second-month cell">12 Dec <b><?php staffOff('2016-12-12'); ?></b> </td>
           <td id="2016-12-13" class="second-month cell">13 Dec <b><?php staffOff('2016-12-13'); ?></b> </td>
           <td id="2016-12-14" class="second-month cell">14 Dec <b><?php staffOff('2016-12-14'); ?></b> </td>
           <td id="2016-12-15" class="second-month cell">15 Dec <b><?php staffOff('2016-12-15'); ?></b> </td>
           <td id="2016-12-16" class="second-month cell">16 Dec <b><?php staffOff('2016-12-16'); ?></b> </td>
           <td id="2016-12-17" class="second-month cell">17 Dec <b><?php staffOff('2016-12-17'); ?></b> </td>
           <td id="2016-12-18" class="second-month cell">18 Dec <b><?php staffOff('2016-12-18'); ?></b> </td>
          </tr>
          <tr>
           <td id="2016-12-19" class="second-month cell">19 Dec <b><?php staffOff('2016-12-19'); ?></b> </td>
           <td id="2016-12-20" class="second-month cell">20 Dec <b><?php staffOff('2016-12-20'); ?></b> </td>
           <td id="2016-12-21" class="second-month cell">21 Dec <b><?php staffOff('2016-12-21'); ?></b> </td>
           <td id="2016-12-22" class="second-month cell">22 Dec <b><?php staffOff('2016-12-22'); ?></b> </td>
           <td id="2016-12-23" class="second-month cell">23 Dec <b><?php staffOff('2016-12-23'); ?></b> </td>
           <td id="2016-12-24" class="second-month cell">24 Dec <b><?php staffOff('2016-12-24'); ?></b> </td>
           <td id="2016-12-25" class="bh second-month cell">25 Dec <i>Christmas</i> </td>
          </tr>
          <tr>
           <td id="2016-12-26" class="bh second-month cell">26 Dec <i>Boxing Day</i> </td>
           <td id="2016-12-27" class="bh second-month cell">27 Dec <i>Substitute Day</i> </td>
           <td id="2016-12-28" class="second-month cell">28 Dec <b><?php staffOff('2016-12-28'); ?></b> </td>
           <td id="2016-12-29" class="second-month cell">29 Dec <b><?php staffOff('2016-12-29'); ?></b> </td>
           <td id="2016-12-30" class="second-month cell">30 Dec <b><?php staffOff('2016-12-30'); ?></b> </td>
           <td id="2016-12-31" class="second-month cell">31 Dec <b><?php staffOff('2016-12-31'); ?></b> </td>
           <td class="not-current" width="128px">1 Jan</td>
        </tbody>
      </table>
    </div>


    <?php
    if ($_GET['check'] == "check"){
      $db = mysqli_connect("127.0.0.1:3306","root", "","Holiday booking");
      $firstname = $_GET['firstname'];

      $sql = "SELECT daysoff FROM staff ";
      $sql .= "WHERE firstname = '{$firstname}'";
      $result = mysqli_query($db,$sql);

      $daysoff = mysqli_fetch_array($result);
      $daysbooked = count($_GET) - 1;
      ?>
      <div class="shader"></div>
      <?php

      if (($daysbooked + $daysoff) > 28){
      ?>
        <div class="error-box">
          <div class="exclamation-mark"><i class="fa fa-exclamation"></i></div>
          <div class="error-message">
            <h3>
              <?php
                if (($daysbooked + $daysoff) > 28){
                  echo "You booked too many days off <br>";
                  echo "You already have {$daysbooked} booked off <br>";
                  echo "And you just tried to book $daysoff days off";
                }
              ?>
            </h3>
          </div>
          <div class="close"><i class="fa fa-times fa-2x"></i></div>
        </div>
      <?php
      }
      else{
      ?>
        <div class="success-box">
          <div class="tick"><i class="fa fa-check"></i></div>
          <div class="success-message">
            <h3>
              Added to the calendar
            </h3>
          </div>
          <div class="close"><i class="fa fa-times fa-2x"></i></div>
        </div>
      <?php
      }
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="control.js"></script>
  </body>
</html>
