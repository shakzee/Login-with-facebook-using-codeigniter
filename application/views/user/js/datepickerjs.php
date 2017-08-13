 
 <script type="text/javascript">



 $('#idTourDateDetails').datepicker({
     dateFormat: 'dd-mm-yy',
     minDate: '+5d',
     changeMonth: true,
     changeYear: true,
     altField: "#idTourDateDetailsHidden",
     altFormat: "yy-mm-dd"
 });


$.fn.modal.Constructor.prototype.enforceFocus = function() {};
</script>
