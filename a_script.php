<!-- Bootstrap core JavaScript -->
  <script src="admin/jquery/jquery.min.js"></script>
  <script src="admin/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="admin/jquery/datatables.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  
	<!-- DataTable -->
  <script>
$(document).ready(function () {
$('#dt').DataTable();
$('.dataTables_length').addClass('bs-select');
});

</script>