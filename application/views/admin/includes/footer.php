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
            $("#foto_quadrada").fileinput({showCaption: false,showUpload: false,language: 'pt'});
            $("#foto_retangular").fileinput({showCaption: false,showUpload: false,language: 'pt'});
            $("#foto_facebook").fileinput({showCaption: false,showUpload: false,language: 'pt'});

          $('#summernote').summernote({
              height: 300,                 
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
