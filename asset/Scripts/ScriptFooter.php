<!-- jQuery -->
<script src="asset/admin/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/admin/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="asset/admin/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="asset/admin/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="asset/admin/AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/admin/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/admin/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="asset/admin/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="asset/admin/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="asset/admin/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="asset/admin/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/admin/AdminLTE/dist/js/adminlte.js"></script>
<!-- Select2 -->
<script src="asset/admin/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/admin/AdminLTE/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="asset/admin/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="asset/admin/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="asset/admin/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="asset/admin/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="asset/admin/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    function fucAlert(id) {
        Swal.fire({
            title: 'Bạn muốn xóa?',
            text: "Nếu xóa bạn không thể khôi phục nó!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Tôi muốn!'
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Bạn đã chọn xóa!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    document.getElementById('a'+id).click();
                });
            }
        });
    }
</script>