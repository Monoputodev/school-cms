$(document).ready(function(){
    // Initialize the DataTable plugin on a table with id "datatable"
    $("#datatable").DataTable({
      ordering: false // Disable ordering
    });

    // Initialize the DataTable plugin on a table with id "datatable-buttons" and add buttons for copying, exporting to Excel and PDF, and column visibility
    $("#datatable-buttons").DataTable({
      lengthChange: false, // Disable the option to change the number of rows per page
      buttons: ["copy", "excel", "pdf", "colvis"] // Add buttons for copying, Excel, PDF, and column visibility
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");

    // Add a Bootstrap class to the select element that controls the number of rows per page
    $(".dataTables_length select").addClass("form-select form-select-sm");
  });
