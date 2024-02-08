<!-- <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer> -->

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
$.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('assets/dist/js/adminlte2167.js?v=3.2.0')}}"></script>

<script src="{{asset('assets/dist/js/demo.js')}}"></script>

<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 15:52:24 GMT -->

</html>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    new DataTable('#example');
})
</script>


<script>
$(document).ready(function() {
    $('.delete').click(function() {
        // let titl = $(this).attr("data-id");
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location = titl;
                }, 500);
            }
        });
    })
})
</script>