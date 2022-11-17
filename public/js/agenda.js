document.addEventListener('DOMContentLoaded', function () {
  let formulario = document.querySelector("form");

  let calendarEl = document.getElementById('calendar');
  let calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: "es",

    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,listWeek'
    },
    dateClick: function (info) {
      const modal = new Modal(document.getElementById('evento'), null);
      modal.show();
      $("#close-icon").on("click", function () {
        modal.hide();
      });

      $(document).on('click', function (e) {
        if (!(($(e.target).closest("#evento").length === 0) || ($(e.target).closest("#close-icon").length === 0))) {
          modal.hide();
        }
      });

    }
  });
  calendar.render();

  $("#save").on("click", function () {
    const data = new FormData(formulario);
    console.log(datos);
  })
});


function filterFunction() {
  let input, filter, ul, li, a, i;
  input = $("#input-group-search").val();
  filter = input.value.toUpperCase();
  div = document.getElementById("dropdownSearch");
  a = div.getElementsByClassName('patient');
  chk = div.getElementsByClassName('chk');
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
      chk[i].style.display = "";
    } else {
      a[i].style.display = "none";
      chk[i].style.display = "none";
    }
  }
}