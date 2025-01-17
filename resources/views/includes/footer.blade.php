
       </div>
      </div>
    </div>



    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.js"></script>
    <!-- Handson -->
    <script src="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js"></script>

    @include('includes.alert')
    <script>
        $(document).ready(function(){
            $('select').select2({
                placeholder: "None Selected",
            });
        });

        function set_alert(type, message) {
            toastr[type](message);
        }
    </script>
    <script type="module">
        $(document).ready(function() {
            $('#toggleSidebar').click(function() {
                $('.sidebar').toggleClass('collapsed');
                $('#mainContent').toggleClass('expanded');
            });
        });
    </script>





 </body>

</html>

