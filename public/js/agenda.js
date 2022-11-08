document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:"es",

      headerToolbar: {
        left:'prev,next today',
        center:'title',
        right:'dayGridMonth,timeGridWeek,listWeek'
      },
       dateClick:function(info){
        const modal = new Modal(document.getElementById("evento"));
        modal.show();
       }
    });
    calendar.render();
  });