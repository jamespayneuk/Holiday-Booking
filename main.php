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
    <div class="formBox">
      <form id="form" action="" method="GET">
        <label>Firstname:</label>
        <div class="form-group form-horizontal">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <select class="form-control" name="firstname" id="stafflist">
              <!-- Get staff list from database -->
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
           <td id="2016-1-2" class="cell" width="128px">2 Jan <b> </b></td>
           <td id="2016-1-3" class="cell" width="128px">3 Jan <b> </b></td>
          </tr>
          <tr>
           <td id="2016-1-4" class="cell">4 Jan <b> </b></td>
           <td id="2016-1-5" class="cell">5 Jan <b> </b></td>
           <td id="2016-1-6" class="cell">6 Jan <b> </b></td>
           <td id="2016-1-7" class="cell">7 Jan <b> </b></td>
           <td id="2016-1-8" class="cell">8 Jan <b> </b></td>
           <td id="2016-1-9" class="cell">9 Jan <b> </b></td>
           <td id="2016-1-10" class="cell">10 Jan <b></b> </td>
          </tr>
          <tr>
           <td id="2016-1-11" class="cell">11 Jan <b></b> </td>
           <td id="2016-1-12" class="cell">12 Jan <b></b> </td>
           <td id="2016-1-13" class="cell">13 Jan <b></b> </td>
           <td id="2016-1-14" class="cell">14 Jan <b></b> </td>
           <td id="2016-1-15" class="cell">15 Jan <b></b> </td>
           <td id="2016-1-16" class="cell">16 Jan <b></b> </td>
           <td id="2016-1-17" class="cell">17 Jan <b></b> </td>
          </tr>
          <tr>
           <td id="2016-1-18" class="cell" >18 Jan <b></b> </td>
           <td id="2016-1-19" class="cell" >19 Jan <b></b> </td>
           <td id="2016-1-20" class="cell" >20 Jan <b></b> </td>
           <td id="2016-1-21" class="cell" >21 Jan <b></b> </td>
           <td id="2016-1-22" class="cell" >22 Jan <b></b> </td>
           <td id="2016-1-23" class="cell" >23 Jan <b></b> </td>
           <td id="2016-1-24" class="cell" >24 Jan <b></b> </td>
          </tr>
          <tr>
           <td id="2016-1-25" class="cell">25 Jan <b></b> </td>
           <td id="2016-1-26" class="cell">26 Jan <b></b> </td>
           <td id="2016-1-27" class="cell">27 Jan <b></b> </td>
           <td id="2016-1-28" class="cell">28 Jan <b></b> </td>
           <td id="2016-1-29" class="cell">29 Jan <b></b> </td>
           <td id="2016-1-30" class="cell">30 Jan <b></b> </td>
           <td id="2016-1-31" class="cell">31 Jan <b></b> </td>
          </tr>
          <tr>
           <td id="2016-2-1" class="second-month cell">1 Feb <b> </b></td>
           <td id="2016-2-2" class="second-month cell">2 Feb <b> </b></td>
           <td id="2016-2-3" class="second-month cell">3 Feb <b> </b></td>
           <td id="2016-2-4" class="second-month cell">4 Feb <b> </b></td>
           <td id="2016-2-5" class="second-month cell">5 Feb <b> </b></td>
           <td id="2016-2-6" class="second-month cell">6 Feb <b> </b></td>
           <td id="2016-2-7" class="second-month cell">7 Feb <b> </b></td>
          </tr>
          <tr>
           <td id="2016-2-8" class="second-month cell">8 Feb <b> </b></td>
           <td id="2016-2-9" class="second-month cell">9 Feb <b> </b></td>
           <td id="2016-2-10" class="second-month cell">10 Feb <b></b> </td>
           <td id="2016-2-11" class="second-month cell">11 Feb <b></b> </td>
           <td id="2016-2-12" class="second-month cell">12 Feb <b></b> </td>
           <td id="2016-2-13" class="second-month cell">13 Feb <b></b> </td>
           <td id="2016-2-14" class="second-month cell">14 Feb <b></b> </td>
          </tr>
          <tr>
           <td id="2016-2-15" class="second-month cell">15 Feb <b></b> </td>
           <td id="2016-2-16" class="second-month cell">16 Feb <b></b> </td>
           <td id="2016-2-17" class="second-month cell">17 Feb <b></b> </td>
           <td id="2016-2-18" class="second-month cell">18 Feb <b></b> </td>
           <td id="2016-2-19" class="second-month cell">19 Feb <b></b> </td>
           <td id="2016-2-20" class="second-month cell">20 Feb <b></b> </td>
           <td id="2016-2-21" class="second-month cell">21 Feb <b></b> </td>
          </tr>
          <tr>
           <td id="2016-2-22" class="second-month cell">22 Feb <b></b> </td>
           <td id="2016-2-23" class="second-month cell">23 Feb <b></b> </td>
           <td id="2016-2-24" class="second-month cell">24 Feb <b></b> </td>
           <td id="2016-2-25" class="second-month cell">25 Feb <b></b> </td>
           <td id="2016-2-26" class="second-month cell">26 Feb <b></b> </td>
           <td id="2016-2-27" class="second-month cell">27 Feb <b></b> </td>
           <td id="2016-2-28" class="second-month cell">28 Feb <b></b> </td>
          </tr>
          <tr>
           <td id="2016-2-29" class="second-month cell">29 Feb <b></b> </td>
           <td id="2016-3-1" class="cell">1 Mar <b> </b></td>
           <td id="2016-3-2" class="cell">2 Mar <b> </b></td>
           <td id="2016-3-3" class="cell">3 Mar <b> </b></td>
           <td id="2016-3-4" class="cell">4 Mar <b> </b></td>
           <td id="2016-3-5" class="cell">5 Mar <b> </b></td>
           <td id="2016-3-6" class="cell">6 Mar <b> </b></td>
          </tr>
          <tr>
           <td id="2016-3-7" class="cell">7 Mar <b> </b></td>
           <td id="2016-3-8" class="cell">8 Mar <b> </b></td>
           <td id="2016-3-9" class="cell">9 Mar <b> </b></td>
           <td id="2016-3-10" class="cell">10 Mar <b></b> </td>
           <td id="2016-3-11" class="cell">11 Mar <b></b> </td>
           <td id="2016-3-12" class="cell">12 Mar <b></b> </td>
           <td id="2016-3-13" class="cell">13 Mar <b></b> </td>
          </tr>
          <tr>
           <td id="2016-3-14" class="cell">14 Mar <b></b> </td>
           <td id="2016-3-15" class="cell">15 Mar <b></b> </td>
           <td id="2016-3-16" class="cell">16 Mar <b></b> </td>
           <td id="2016-3-17" class="cell">17 Mar <b></b> </td>
           <td id="2016-3-18" class="cell">18 Mar <b></b> </td>
           <td id="2016-3-19" class="cell">19 Mar <b></b> </td>
           <td id="2016-3-20" class="cell">20 Mar <b></b> </td>
          </tr>
          <tr>
           <td id="2016-3-21" class="cell">21 Mar <b></b> </td>
           <td id="2016-3-22" class="cell">22 Mar <b></b> </td>
           <td id="2016-3-23" class="cell">23 Mar <b></b> </td>
           <td id="2016-3-24" class="cell">24 Mar <b></b> </td>
           <td id="2016-3-25" class="bh cell">25 Mar <i>Good Friday</i> </td>
           <td id="2016-3-26" class="cell">26 Mar <b></b> </td>
           <td id="2016-3-27" class="cell">27 Mar <b></b> </td>
          </tr>
          <tr>
           <td id="2016-3-28" class="bh cell">28 Mar <i>Easter Monday</i> </td>
           <td id="2016-3-29" class="cell">29 Mar <b></b> </td>
           <td id="2016-3-30" class="cell">30 Mar <b></b> </td>
           <td id="2016-3-31" class="cell">31 Mar <b></b> </td>
           <td id="2016-4-1" class="second-month cell">1 Apr <b> </b></td>
           <td id="2016-4-2" class="second-month cell">2 Apr <b> </b></td>
           <td id="2016-4-3" class="second-month cell">3 Apr <b> </b></td>
          </tr>
          <tr>
           <td id="2016-4-4" class="second-month cell">4 Apr <b> </b></td>
           <td id="2016-4-5" class="second-month cell">5 Apr <b> </b></td>
           <td id="2016-4-6" class="second-month cell">6 Apr <b> </b></td>
           <td id="2016-4-7" class="second-month cell">7 Apr <b> </b></td>
           <td id="2016-4-8" class="second-month cell">8 Apr <b> </b></td>
           <td id="2016-4-9" class="second-month cell">9 Apr <b> </b></td>
           <td id="2016-4-10" class="second-month cell">10 Apr <b></b> </td>
          </tr>
          <tr>
           <td id="2016-4-11" class="second-month cell">11 Apr <b></b> </td>
           <td id="2016-4-12" class="second-month cell">12 Apr <b></b> </td>
           <td id="2016-4-13" class="second-month cell">13 Apr <b></b> </td>
           <td id="2016-4-14" class="second-month cell">14 Apr <b></b> </td>
           <td id="2016-4-15" class="second-month cell">15 Apr <b></b> </td>
           <td id="2016-4-16" class="second-month cell">16 Apr <b></b> </td>
           <td id="2016-4-17" class="second-month cell">17 Apr <b></b> </td>
          </tr>
          <tr>
           <td id="2016-4-18" class="second-month cell">18 Apr <b></b> </td>
           <td id="2016-4-19" class="second-month cell">19 Apr <b></b> </td>
           <td id="2016-4-20" class="second-month cell">20 Apr <b></b> </td>
           <td id="2016-4-21" class="second-month cell">21 Apr <b></b> </td>
           <td id="2016-4-22" class="second-month cell">22 Apr <b></b> </td>
           <td id="2016-4-23" class="second-month cell">23 Apr <b></b> </td>
           <td id="2016-4-24" class="second-month cell">24 Apr <b></b> </td>
          </tr>
          <tr>
           <td id="2016-4-25" class="second-month cell">25 Apr <b></b> </td>
           <td id="2016-4-26" class="second-month cell">26 Apr <b></b> </td>
           <td id="2016-4-27" class="second-month cell">27 Apr <b></b> </td>
           <td id="2016-4-28" class="second-month cell">28 Apr <b></b> </td>
           <td id="2016-4-29" class="second-month cell">29 Apr <b></b> </td>
           <td id="2016-4-30" class="second-month cell">30 Apr <b></b> </td>
           <td id="2016-5-1" class="cell">1 May <b> </b></td>
          </tr>
          <tr>
           <td id="2016-5-2" class="bh cell">2 May <i>Early May</i> </td>
           <td id="2016-5-3" class="cell">3 May <b> </b></td>
           <td id="2016-5-4" class="cell">4 May <b> </b></td>
           <td id="2016-5-5" class="cell">5 May <b> </b></td>
           <td id="2016-5-6" class="cell">6 May <b> </b></td>
           <td id="2016-5-7" class="cell">7 May <b> </b></td>
           <td id="2016-5-8" class="cell">8 May <b> </b></td>
          </tr>
          <tr>
           <td id="2016-5-9" class="cell">9 May <b> </b></td>
           <td id="2016-5-10" class="cell">10 May <b></b> </td>
           <td id="2016-5-11" class="cell">11 May <b></b> </td>
           <td id="2016-5-12" class="cell">12 May <b></b> </td>
           <td id="2016-5-13" class="cell">13 May <b></b> </td>
           <td id="2016-5-14" class="cell">14 May <b></b> </td>
           <td id="2016-5-15" class="cell">15 May <b></b> </td>
          </tr>
          <tr>
           <td id="2016-5-16" class="cell">16 May <b></b> </td>
           <td id="2016-5-17" class="cell">17 May <b></b> </td>
           <td id="2016-5-18" class="cell">18 May <b></b> </td>
           <td id="2016-5-19" class="cell">19 May <b></b> </td>
           <td id="2016-5-20" class="cell">20 May <b></b> </td>
           <td id="2016-5-21" class="cell">21 May <b></b> </td>
           <td id="2016-5-22" class="cell">22 May <b></b> </td>
          </tr>
          <tr>
           <td id="2016-5-23" class="cell">23 May <b></b> </td>
           <td id="2016-5-24" class="cell">24 May <b></b> </td>
           <td id="2016-5-25" class="cell">25 May <b></b> </td>
           <td id="2016-5-26" class="cell">26 May <b></b> </td>
           <td id="2016-5-27" class="cell">27 May <b></b> </td>
           <td id="2016-5-28" class="cell">28 May <b></b> </td>
           <td id="2016-5-29" class="cell">29 May <b></b> </td>
          </tr>
          <tr>
           <td id="2016-5-30" class="bh cell">30 May <i>Spring</i> </td>
           <td id="2016-5-31" class="cell">31 May <b></b> </td>
           <td id="2016-6-1" class="second-month cell">1 June <b> </b></td>
           <td id="2016-6-2" class="second-month cell">2 June <b> </b></td>
           <td id="2016-6-3" class="second-month cell">3 June <b> </b></td>
           <td id="2016-6-4" class="second-month cell">4 June <b> </b></td>
           <td id="2016-6-5" class="second-month cell">5 June <b> </b></td>
          </tr>
          <tr>
           <td id="2016-6-6" class="second-month cell">6 June <b> </b></td>
           <td id="2016-6-7" class="second-month cell">7 June <b> </b></td>
           <td id="2016-6-8" class="second-month cell">8 June <b> </b></td>
           <td id="2016-6-9" class="second-month cell">9 June <b> </b></td>
           <td id="2016-6-10" class="second-month cell">10 June <b></b> </td>
           <td id="2016-6-11" class="second-month cell">11 June <b></b> </td>
           <td id="2016-6-12" class="second-month cell">12 June <b></b> </td>
          </tr>
          <tr>
           <td id="2016-6-13" class="second-month cell">13 June <b></b> </td>
           <td id="2016-6-14" class="second-month cell">14 June <b></b> </td>
           <td id="2016-6-15" class="second-month cell">15 June <b></b> </td>
           <td id="2016-6-16" class="second-month cell">16 June <b></b> </td>
           <td id="2016-6-17" class="second-month cell">17 June <b></b> </td>
           <td id="2016-6-18" class="second-month cell">18 June <b></b> </td>
           <td id="2016-6-19" class="second-month cell">19 June <b></b> </td>
          </tr>
          <tr>
           <td id="2016-6-20" class="second-month cell">20 June <b></b> </td>
           <td id="2016-6-21" class="second-month cell">21 June <b></b> </td>
           <td id="2016-6-22" class="second-month cell">22 June <b></b> </td>
           <td id="2016-6-23" class="second-month cell">23 June <b></b> </td>
           <td id="2016-6-24" class="second-month cell">24 June <b></b> </td>
           <td id="2016-6-25" class="second-month cell">25 June <b></b> </td>
           <td id="2016-6-26" class="second-month cell">26 June <b></b> </td>
          </tr>
          <tr>
           <td id="2016-6-27" class="second-month cell">27 June <b></b> </td>
           <td id="2016-6-28" class="second-month cell">28 June <b></b> </td>
           <td id="2016-6-29" class="second-month cell">29 June <b></b> </td>
           <td id="2016-6-30" class="second-month cell">30 June <b></b> </td>
           <td id="2016-7-1" class="cell">1 July <b> </b></td>
           <td id="2016-7-2" class="cell">2 July <b> </b></td>
           <td id="2016-7-3" class="cell">3 July <b> </b></td>
          </tr>
          <tr>
           <td id="2016-7-4" class="cell">4 July <b> </b></td>
           <td id="2016-7-5" class="cell">5 July <b> </b></td>
           <td id="2016-7-6" class="cell">6 July <b> </b></td>
           <td id="2016-7-7" class="cell">7 July <b> </b></td>
           <td id="2016-7-8" class="cell">8 July <b> </b></td>
           <td id="2016-7-9" class="cell">9 July <b> </b></td>
           <td id="2016-7-10" class="cell">10 July <b></b> </td>
          </tr>
          <tr>
           <td id="2016-7-11" class="cell">11 July <b></b> </td>
           <td id="2016-7-12" class="cell">12 July <b></b> </td>
           <td id="2016-7-13" class="cell">13 July <b></b> </td>
           <td id="2016-7-14" class="cell">14 July <b></b> </td>
           <td id="2016-7-15" class="cell">15 July <b></b> </td>
           <td id="2016-7-16" class="cell">16 July <b></b> </td>
           <td id="2016-7-17" class="cell">17 July <b></b> </td>
          </tr>
          <tr>
           <td id="2016-7-18" class="cell">18 July <b></b> </td>
           <td id="2016-7-19" class="cell">19 July <b></b> </td>
           <td id="2016-7-20" class="cell">20 July <b></b> </td>
           <td id="2016-7-21" class="cell">21 July <b></b> </td>
           <td id="2016-7-22" class="cell">22 July <b></b> </td>
           <td id="2016-7-23" class="cell">23 July <b></b> </td>
           <td id="2016-7-24" class="cell">24 July <b></b> </td>
          </tr>
          <tr>
           <td id="2016-7-25" class="cell">25 July <b></b> </td>
           <td id="2016-7-26" class="cell">26 July <b></b> </td>
           <td id="2016-7-27" class="cell">27 July <b></b> </td>
           <td id="2016-7-28" class="cell">28 July <b></b> </td>
           <td id="2016-7-29" class="cell">29 July <b></b> </td>
           <td id="2016-7-30" class="cell">30 July <b></b> </td>
           <td id="2016-7-31" class="cell">31 July <b></b> </td>
          </tr>
          <tr>
           <td id="2016-8-1" class="second-month cell">1 Aug <b> </b></td>
           <td id="2016-8-2" class="second-month cell">2 Aug <b> </b></td>
           <td id="2016-8-3" class="second-month cell">3 Aug <b> </b></td>
           <td id="2016-8-4" class="second-month cell">4 Aug <b> </b></td>
           <td id="2016-8-5" class="second-month cell">5 Aug <b> </b></td>
           <td id="2016-8-6" class="second-month cell">6 Aug <b> </b></td>
           <td id="2016-8-7" class="second-month cell">7 Aug <b> </b></td>
          </tr>
          <tr>
           <td id="2016-8-8" class="second-month cell">8 Aug <b> </b></td>
           <td id="2016-8-9" class="second-month cell">9 Aug <b> </b></td>
           <td id="2016-8-10" class="second-month cell">10 Aug <b></b> </td>
           <td id="2016-8-11" class="second-month cell">11 Aug <b></b> </td>
           <td id="2016-8-12" class="second-month cell">12 Aug <b></b> </td>
           <td id="2016-8-13" class="second-month cell">13 Aug <b></b> </td>
           <td id="2016-8-14" class="second-month cell">14 Aug <b></b> </td>
          </tr>
          <tr>
           <td id="2016-8-15" class="second-month cell">15 Aug <b></b> </td>
           <td id="2016-8-16" class="second-month cell">16 Aug <b></b> </td>
           <td id="2016-8-17" class="second-month cell">17 Aug <b></b> </td>
           <td id="2016-8-18" class="second-month cell">18 Aug <b></b> </td>
           <td id="2016-8-19" class="second-month cell">19 Aug <b></b> </td>
           <td id="2016-8-20" class="second-month cell">20 Aug <b></b> </td>
           <td id="2016-8-21" class="second-month cell">21 Aug <b></b> </td>
          </tr>
          <tr>
           <td id="2016-8-22" class="second-month cell">22 Aug <b></b> </td>
           <td id="2016-8-23" class="second-month cell">23 Aug <b></b> </td>
           <td id="2016-8-24" class="second-month cell">24 Aug <b></b> </td>
           <td id="2016-8-25" class="second-month cell">25 Aug <b></b> </td>
           <td id="2016-8-26" class="second-month cell">26 Aug <b></b> </td>
           <td id="2016-8-27" class="second-month cell">27 Aug <b></b> </td>
           <td id="2016-8-28" class="second-month cell">28 Aug <b></b> </td>
          </tr>
          <tr>
           <td id="2016-8-29" class="bh second-month cell">29 Aug <i>August</i> </td>
           <td id="2016-8-30" class="second-month cell">30 Aug <b></b> </td>
           <td id="2016-8-31" class="second-month cell">31 Aug <b></b> </td>
           <td id="2016-9-1" class="cell">1 Sept <b> </b></td>
           <td id="2016-9-2" class="cell">2 Sept <b> </b></td>
           <td id="2016-9-3" class="cell">3 Sept <b> </b></td>
           <td id="2016-9-4" class="cell">4 Sept <b> </b></td>
          </tr>
          <tr>
           <td id="2016-9-5" class="cell">5 Sept <b> </b></td>
           <td id="2016-9-6" class="cell">6 Sept <b> </b></td>
           <td id="2016-9-7" class="cell">7 Sept <b> </b></td>
           <td id="2016-9-8" class="cell">8 Sept <b> </b></td>
           <td id="2016-9-9" class="cell">9 Sept <b> </b></td>
           <td id="2016-9-10" class="cell">10 Sept <b></b> </td>
           <td id="2016-9-11" class="cell">11 Sept <b></b> </td>
          </tr>
          <tr>
           <td id="2016-9-12" class="cell">12 Sept <b></b> </td>
           <td id="2016-9-13" class="cell">13 Sept <b></b> </td>
           <td id="2016-9-14" class="cell">14 Sept <b></b> </td>
           <td id="2016-9-15" class="cell">15 Sept <b></b> </td>
           <td id="2016-9-16" class="cell">16 Sept <b></b> </td>
           <td id="2016-9-17" class="cell">17 Sept <b></b> </td>
           <td id="2016-9-18" class="cell">18 Sept <b></b> </td>
          </tr>
          <tr>
           <td id="2016-9-19" class="cell">19 Sept <b></b> </td>
           <td id="2016-9-20" class="cell">20 Sept <b></b> </td>
           <td id="2016-9-21" class="cell">21 Sept <b></b> </td>
           <td id="2016-9-22" class="cell">22 Sept <b></b> </td>
           <td id="2016-9-23" class="cell">23 Sept <b></b> </td>
           <td id="2016-9-24" class="cell">24 Sept <b></b> </td>
           <td id="2016-9-25" class="cell">25 Sept <b></b> </td>
          </tr>
          <tr>
           <td id="2016-9-26" class="cell">26 Sept <b></b> </td>
           <td id="2016-9-27" class="cell">27 Sept <b></b> </td>
           <td id="2016-9-28" class="cell">28 Sept <b></b> </td>
           <td id="2016-9-29" class="cell">29 Sept <b></b> </td>
           <td id="2016-9-30" class="cell">30 Sept <b></b> </td>
           <td id="2016-10-1" class="second-month cell">1 Oct <b> </b></td>
           <td id="2016-10-2" class="second-month cell">2 Oct <b> </b></td>
          </tr>
          <tr>
           <td id="2016-10-3" class="second-month cell">3 Oct <b> </b></td>
           <td id="2016-10-4" class="second-month cell">4 Oct <b> </b></td>
           <td id="2016-10-5" class="second-month cell">5 Oct <b> </b></td>
           <td id="2016-10-6" class="second-month cell">6 Oct <b> </b></td>
           <td id="2016-10-7" class="second-month cell">7 Oct <b> </b></td>
           <td id="2016-10-8" class="second-month cell">8 Oct <b> </b></td>
           <td id="2016-10-9" class="second-month cell">9 Oct <b> </b></td>
          </tr>
          <tr>
           <td id="2016-10-10" class="second-month cell">10 Oct <b></b> </td>
           <td id="2016-10-11" class="second-month cell">11 Oct <b></b> </td>
           <td id="2016-10-12" class="second-month cell">12 Oct <b></b> </td>
           <td id="2016-10-13" class="second-month cell">13 Oct <b></b> </td>
           <td id="2016-10-14" class="second-month cell">14 Oct <b></b> </td>
           <td id="2016-10-15" class="second-month cell">15 Oct <b></b> </td>
           <td id="2016-10-16" class="second-month cell">16 Oct <b></b> </td>
          </tr>
          <tr>
           <td id="2016-10-17" class="second-month cell">17 Oct <b></b> </td>
           <td id="2016-10-18" class="second-month cell">18 Oct <b></b> </td>
           <td id="2016-10-19" class="second-month cell">19 Oct <b></b> </td>
           <td id="2016-10-20" class="second-month cell">20 Oct <b></b> </td>
           <td id="2016-10-21" class="second-month cell">21 Oct <b></b> </td>
           <td id="2016-10-22" class="second-month cell">22 Oct <b></b> </td>
           <td id="2016-10-23" class="second-month cell">23 Oct <b></b> </td>
          </tr>
          <tr>
           <td id="2016-10-24" class="second-month cell">24 Oct <b></b> </td>
           <td id="2016-10-25" class="second-month cell">25 Oct <b></b> </td>
           <td id="2016-10-26" class="second-month cell">26 Oct <b></b> </td>
           <td id="2016-10-27" class="second-month cell">27 Oct <b></b> </td>
           <td id="2016-10-28" class="second-month cell">28 Oct <b></b> </td>
           <td id="2016-10-29" class="second-month cell">29 Oct <b></b> </td>
           <td id="2016-10-30" class="second-month cell">30 Oct <b></b> </td>
          </tr>
          <tr>
           <td id="2016-10-31" class="second-month cell">31 Oct <b></b> </td>
           <td id="2016-11-1" class="cell">1 Nov <b> </b></td>
           <td id="2016-11-2" class="cell">2 Nov <b> </b></td>
           <td id="2016-11-3" class="cell">3 Nov <b> </b></td>
           <td id="2016-11-4" class="cell">4 Nov <b> </b></td>
           <td id="2016-11-5" class="cell">5 Nov <b> </b></td>
           <td id="2016-11-6" class="cell">6 Nov <b> </b></td>
          </tr>
          <tr>
           <td id="2016-11-7" class="cell">7 Nov <b> </b></td>
           <td id="2016-11-8" class="cell">8 Nov <b> </b></td>
           <td id="2016-11-9" class="cell">9 Nov <b> </b></td>
           <td id="2016-11-10" class="cell">10 Nov <b></b> </td>
           <td id="2016-11-11" class="cell">11 Nov <b></b> </td>
           <td id="2016-11-12" class="cell">12 Nov <b></b> </td>
           <td id="2016-11-13" class="cell">13 Nov <b></b> </td>
          </tr>
          <tr>
           <td id="2016-11-14" class="cell">14 Nov <b></b> </td>
           <td id="2016-11-15" class="cell">15 Nov <b></b> </td>
           <td id="2016-11-16" class="cell">16 Nov <b></b> </td>
           <td id="2016-11-17" class="cell">17 Nov <b></b> </td>
           <td id="2016-11-18" class="cell">18 Nov <b></b> </td>
           <td id="2016-11-19" class="cell">19 Nov <b></b> </td>
           <td id="2016-11-20" class="cell">20 Nov <b></b> </td>
          </tr>
          <tr>
           <td id="2016-11-21" class="cell">21 Nov <b></b> </td>
           <td id="2016-11-22" class="cell">22 Nov <b></b> </td>
           <td id="2016-11-23" class="cell">23 Nov <b></b> </td>
           <td id="2016-11-24" class="cell">24 Nov <b></b> </td>
           <td id="2016-11-25" class="cell">25 Nov <b></b> </td>
           <td id="2016-11-26" class="cell">26 Nov <b></b> </td>
           <td id="2016-11-27" class="cell">27 Nov <b></b> </td>
          </tr>
          <tr>
           <td id="2016-11-28" class="cell">28 Nov <b></b> </td>
           <td id="2016-11-29" class="cell">29 Nov <b></b> </td>
           <td id="2016-11-30" class="cell">30 Nov <b></b> </td>
           <td id="2016-12-1" class="second-month cell">1 Dec <b> </b></td>
           <td id="2016-12-2" class="second-month cell">2 Dec <b> </b></td>
           <td id="2016-12-3" class="second-month cell">3 Dec <b> </b></td>
           <td id="2016-12-4" class="second-month cell">4 Dec <b> </b></td>
          </tr>
          <tr>
           <td id="2016-12-5" class="second-month cell">5 Dec <b> </b></td>
           <td id="2016-12-6" class="second-month cell">6 Dec <b> </b></td>
           <td id="2016-12-7" class="second-month cell">7 Dec <b> </b></td>
           <td id="2016-12-8" class="second-month cell">8 Dec <b> </b></td>
           <td id="2016-12-9" class="second-month cell">9 Dec <b> </b></td>
           <td id="2016-12-10" class="second-month cell">10 Dec <b></b> </td>
           <td id="2016-12-11" class="second-month cell">11 Dec <b></b> </td>
          </tr>
          <tr>
           <td id="2016-12-12" class="second-month cell">12 Dec <b></b> </td>
           <td id="2016-12-13" class="second-month cell">13 Dec <b></b> </td>
           <td id="2016-12-14" class="second-month cell">14 Dec <b></b> </td>
           <td id="2016-12-15" class="second-month cell">15 Dec <b></b> </td>
           <td id="2016-12-16" class="second-month cell">16 Dec <b></b> </td>
           <td id="2016-12-17" class="second-month cell">17 Dec <b></b> </td>
           <td id="2016-12-18" class="second-month cell">18 Dec <b></b> </td>
          </tr>
          <tr>
           <td id="2016-12-19" class="second-month cell">19 Dec <b></b> </td>
           <td id="2016-12-20" class="second-month cell">20 Dec <b></b> </td>
           <td id="2016-12-21" class="second-month cell">21 Dec <b></b> </td>
           <td id="2016-12-22" class="second-month cell">22 Dec <b></b> </td>
           <td id="2016-12-23" class="second-month cell">23 Dec <b></b> </td>
           <td id="2016-12-24" class="second-month cell">24 Dec <b></b> </td>
           <td id="2016-12-25" class="bh second-month cell">25 Dec <i>Christmas</i> </td>
          </tr>
          <tr>
           <td id="2016-12-26" class="bh second-month cell">26 Dec <i>Boxing Day</i> </td>
           <td id="2016-12-27" class="bh second-month cell">27 Dec <i>Substitute Day</i> </td>
           <td id="2016-12-28" class="second-month cell">28 Dec <b></b> </td>
           <td id="2016-12-29" class="second-month cell">29 Dec <b></b> </td>
           <td id="2016-12-30" class="second-month cell">30 Dec <b></b> </td>
           <td id="2016-12-31" class="second-month cell">31 Dec <b></b> </td>
           <td class="not-current" width="128px">1 Jan</td>
        </tbody>
      </table>
    </div>

    <!-- Handle submitting form -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="control.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        getStaffList();
      });
    </script>
  
  </body>
</html>
