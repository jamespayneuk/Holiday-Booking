function getDates(){
  dates = []
  $(".selected").each(function(index){
    dates.push($(this).attr('id'))
  })
  return dates
}

function wordDate(date){
  months = ["","January","Febuary","March","April","May","June","July","August","September","October","November","December"]
  endings = ["th","st","nd","rd","th","th","th","th","th","th"]

  date_array = date.split("-")
  year = date_array[0]
  month = months[date_array[1]]
  day = date_array[2]
  ending = endings[day.slice(-1)]

  return day+ending+" "+month+" "+year+"\n"
}

$(document).ready(function(){
  $(".cell").click(function(){
    if ($(this).hasClass('already-taken')) {
      alert('This date has already been booked')
    } else {
      $(this).toggleClass('selected')
    }
    
  })

  $('#form').submit( function(e) {
    e.preventDefault();
    var dates = getDates();
    var postData = $(this).serialize() + '&dates=' + dates.join(',');
    console.log(postData);
    
    $.ajax({
      url: 'bookNewHoliday.php',
      type: 'post',
      dataType: 'json',
      data: $(this).serialize(),
      success: function(data) {
         if (data.errors.length == 0) {
           $.each( dates, function( key, val ) {
             $('#successDates').append('<p>' + wordDate(val) + '</p>');
           })
           $('#successModal').modal();
         } else {
          $.each( data.errors, function( key, val ) {
            $('#errorMessages').append('<p>' + val + '</p>');
          });
          $('#failModal').modal();
        }         
       }
    });
  });

  $('#addStaffForm').submit( function(e) {
    e.preventDefault();
      $.ajax({
      url: 'addNewStaffMember.php',
      type: 'post',
      dataType: 'json',
      data: $(this).serialize(),
      success: function(data) {
         if (data.errors.length == 0) {
           alert('Staff Member Added')
         } else {
           alert('Error. Website down or Staff Member already exists.')
        }         
       }
    });
  });

  $('.modal-close').click(function(){
    window.location.reload();
  });
})

function getStaffList() {
  $.getJSON( "getStaffList.php", function( data ) {
    $.each( data.staff, function( key, val ) {
      $('#staffList').append('<option id=' + val + '>' + val + '</option>');
    });
  });
}


function getListOfDatesAlreadyBooked(admin=false){
  $.getJSON( "getListOfDatesAlreadyBooked.php", function( data ) {
    var staff = {};

    $.each( data.dates, function( key, val ) {
      $('#' + key).addClass('already-taken').append('<strong>' + val + '</strong>')
      if (staff[val]) {
        staff[val] += 1;
      } else {
        staff[val] = 1;
      }
    });

    if (admin) {
      $('#allowanceBox').append('<strong>Current Staff Allowances:</strong>');
      $.each(staff, function(key, val) {
        $('#allowanceBox').append('<p>' + key + ': ' + val + '</p>');
      })
    }

  });
} 




