function getDates(){
  dates = []
  $(".selected").each(function(index){
    dates.push($(this).attr('id'))
  })
  return dates
}

function wordDates(dates){
  months = ["","January","Febuary","March","April","May","June","July","August","September","October","November","December"]
  endings = ["th","st","nd","rd","th","th","th","th","th","th"]

  str = ""
  dates.forEach(function (date,i,dates) {
    date_array = date.split("-")
    year = date_array[0]
    month = months[date_array[1]]
    day = date_array[2]
    ending = endings[day.slice(-1)]

    str += day+ending+" "+month+" "+year+"\n"
  })
  return str
}

$(document).ready(function(){
  $(".cell").click(function(){
    $(this).toggleClass('selected')
  })

  $('#form').submit(function(){
    dates = getDates()

    window.alert("Are you sure you want to add these dates?:\n"+wordDates(dates))


    $.each(dates, function(i,date){
      $('<input />').attr('type', 'hidden')
          .attr('name', i)
          .attr('value', date)
          .appendTo('#form');
    })
  })

  $(".close").click(function(){
    window.location.href = 'http://localhost:8888/main.php';
  })
})

function getStaffList() {
  $.getJSON( "getStaffList.php", function( data ) {
    
    $.each( data.staff, function( key, val ) {
      $('#stafflist').append('<option id=' + val + '>' + val + '</option>');
    });

  });
}