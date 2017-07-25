             <footer class="Footer bg-dark dker" style="position: fixed !important;z-index: 1000 !important;">
                <p>2017 &copy; Core Ict COnsultancy</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                       Some Text here
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->

            <script type="text/javascript" src="{{ asset('/plugins/jquery/jquery.js') }}"></script>

            <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>


            <!--Bootstrap -->
             <script type="text/javascript" src="{{ asset('/plugins/bootstrap/js/bootstrap.js') }}"></script>        
            <!-- MetisMenu -->
            <script type="text/javascript" src="{{ asset('/plugins/metismenu/metisMenu.js') }}"></script>  
            <!-- onoffcanvas -->
            <script type="text/javascript" src="{{ asset('/plugins/onoffcanvas/onoffcanvas.js') }}"></script>        
            <!-- Screenfull -->
            <script type="text/javascript" src="{{ asset('/plugins/screenfull/screenfull.js') }}"></script>
            <!-- Metis core scripts -->
            <script type="text/javascript" src="{{ asset('/js/core.js') }}"></script>
            <!-- Metis demo scripts -->
            <script type="text/javascript" src="{{ asset('/js/appAdmin.js') }}"></script>            
                 <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script> 
            <script type="text/javascript" src="{{ asset('/js/style-switcher.js') }}"></script>         
        <!-- END body -->
    </div>
</body>
<!-- END html -->
</html>