<script src='<?php echo base_url('assets/tinymce/tinymce.min.js'); ?>'></script>
 <script>
  tinymce.init({
    selector: '.edit',
     theme: 'modern',
      relative_urls: false,
/*    width: 600,
    height: 300,*/
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
    ,
     // extended_valid_elements : "iframe[src|frameborder|style|scrolling|class|width|height|name|align]"
      extended_valid_elements : "iframe[src|title|width|height|allowfullscreen|frameborder]",
      element_format : 'html'
  });
  </script>