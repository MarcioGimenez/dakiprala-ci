</div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=base_url()?>assets/admin/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url()?>assets/admin/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?=base_url()?>assets/admin/js/jquery.mask.js"></script>
    <script src="<?=base_url()?>assets/admin/js/js.js"></script>
    <script type="text/javascript">


      $(document).ready(function() {

        setTimeout(function() {
         var id_local = $("#id_cadastro").val();
         $("#foto_quadrada").fileinput({
          showCaption: false,
          showUpload: true,
          language: 'pt',
          uploadUrl: "<?=base_url()?>admin/local/upload/"+id_local, 
          uploadAsync: true,
          allowedFileExtensions: ["jpg", "png", "gif"],
          maxImageWidth: 250, maxImageHeight: 150,maxFileCount:1
        });
         $("#foto_retangular").fileinput({
          showCaption: false,
          showUpload: true,
          language: 'pt',
          uploadUrl: "<?=base_url()?>admin/local/upload/"+id_local, 
          uploadAsync: true,
          allowedFileExtensions: ["jpg", "png", "gif"],
          maxImageWidth: 1200, maxImageHeight: 450,maxFileCount: 1
        });
         $("#foto_facebook").fileinput({
          showCaption: false,
          showUpload: true,
          language: 'pt',
          uploadUrl: "<?=base_url()?>admin/local/upload/"+id_local, 
          uploadAsync: true,
          allowedFileExtensions: ["jpg", "png", "gif"],
          maxFileCount: 1
        });
         //.on("filebatchselected", function(event, files) {
          //$("#foto_facebook").fileinput("upload");
        //});

      }, 2000);
        
        $('#summernote').summernote({
          height: 200,                 
          minHeight: null,             
          maxHeight: null,             
          focus: true                  
        });
        $('.summernote').each( function() {
          $(this).val($(this).code());
        });
      });


    </script>
  </body>
  </html>
