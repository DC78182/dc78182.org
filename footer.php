<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Hackermans!
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://dc78182.org/">DC78182</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->


<!-- DataTables -- >
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
    $(function () {
        $('#mainTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>
-->
</body>
</html>
