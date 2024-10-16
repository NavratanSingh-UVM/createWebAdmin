<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="javascript:void()">UVM</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('owner-assets/vendors/hc-sticky/hc-sticky.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/jquery.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>   
    <script src="{{ asset('owner-assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/slick/slick.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/counter/countUp.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/dropzone/js/dropzone.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/hc-sticky/hc-sticky.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/jparallax/TweenMax.min.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/mapbox-gl/mapbox-gl.js')}}"></script>
    <script src="{{ asset('owner-assets/vendors/dataTables/jquery.dataTables.min.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('assets/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('assets/plugins/topojson/topojson.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    
    <!-- ChartistJS -->
    <script src="{{ asset('assets/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script> --}}
  
    <script src="{{ asset('assets/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
    <script src="{{ asset('owner-assets/js/theme.js')}}"></script>
    <script src="{{ asset('assets/js/fullcalender.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    
     
    
    <script>
        (function($) {
            "use strict"
            new quixSettings({
                headerPosition: "fixed",
                sidebarPosition: "fixed"
            });
        })(jQuery);
        $(".alert-block").delay(3200).fadeOut(300);
        function showLoader(){
            $("#loader").removeClass('d-none');
        }
        function hideLoader(){
            $("#loader").addClass('d-none');
        }
        $(document).ready(function() {
            $('select').select2();
        });
        let site_url = {!! json_encode(url('/'))!!}
    </script>
    @stack('js')
</body>
</html>