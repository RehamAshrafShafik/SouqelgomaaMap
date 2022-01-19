$(document).ready(function () {
    $('#dtVerticalScrollExample').DataTable({
    "scrollY": "500px",
    "scrollCollapse": true,
    "paging" :false,
    "sDom": '<"top"i>rt<"clear">',
    "bFilter": true,
    "bInfo": false,
  
    });
    $('.dataTables_length').addClass('bs-select');
    });

   