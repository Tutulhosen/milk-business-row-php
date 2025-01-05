  <!-- Sticky Footer -->
      <footer class="sticky-footer fixed-bottom">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><!-- All &copy; Rights Resereved By Bc160402422 |--> <?php //echo date('Y');?></span>
          </div>
        </div>
      </footer>

<!-- JavaScript to handle table export to Excel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>


 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/sb-admin.min.js"></script>

  <script src="https://kit.fontawesome.com/5b135da28d.js" crossorigin="anonymous"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>



<script>
    document.getElementById('excel').addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior

        // Get the table element
        var table = document.getElementById('myTable');

        // Convert HTML table to worksheet
        var ws = XLSX.utils.table_to_sheet(table);

        // Create a new workbook and append the worksheet
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Lead Generation');

        // Generate the Excel file and trigger the download
        XLSX.writeFile(wb, 'Lead_Generation.xlsx');
    });
</script>


<script src="script.js"></script>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="include/dist/imageuploadify.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="file"]').imageuploadify();
            })
        </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>
