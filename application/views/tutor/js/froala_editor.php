<script type="text/javascript" src="<?php echo base_url('assets/froala/js/froala_editor.min.js');?>"></script>
  </script>

<script type="text/javascript" src="<?php echo base_url('assets/froala/js/froala_editor.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/block_styles.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/char_counter.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/file_upload.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/font_family.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/lists.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/lists.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/lists.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/froala/js/plugins/lists.min.js') ?>"></script>
<script type="text/javascript" src="<?php //echo base_url('assets/form/dist/js/framework/bootstrap.js')?>"></script>
<!-- Include Code Mirror. -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript">
  	
  	   jQuery(function(){
         
    $('.edit').editable({inlineMode: false, theme: 'gray',
        buttons: ["formatBlock", 'bold', 'italic', 'underline','insertUnorderedList', 'outdent', 'indent',  'createLink', 'insertImage'], plainPaste:true,toolbarFixed: false,zIndex: 1
 ,blockStyles: {
    'p': {
      'class1': 'Class 1',
      'class2': 'Class 2'
    },
    'h1': {
      'class3': 'Class 3',
      'class4': 'Class 4'
    }
  }    
  
    })

      });
  </script>

