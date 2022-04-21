


<footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- librerias de data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.1.4/js/dataTables.rowGroup.min.js"></script>
   
    
</footer>

<script>
    $(document).ready(function() {
    $('#producto_table').DataTable( {
        order: [[2, 'asc']],
        
    } );
} );
</script>

</body>
</html>