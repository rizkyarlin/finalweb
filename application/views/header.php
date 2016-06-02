<!DOCTYPE html>
<html>

<head>
    <title>Universitas Hasanuddin</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.css" />
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">    
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $(function () {
    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: false
    });
});
    $( "#datepicker1").datepicker( {
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy',
                onClose: function(dateText, inst) { 
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).datepicker('setDate', new Date(year, 1));
                }
    });
    $("#datepicker1").focus(function () {
                $(".ui-datepicker-month").hide(); 
                $(".ui-datepicker-calendar").hide();
            });
  });


  </script>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
   
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */

</style>
</head>
<body>

<div class="container-fluid">
    
    <nav class="navbar navbar-default">
      <div class="container">
    
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Table">Universitas Hasanuddin</a>
        </div>
    
    
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>index.php/Table">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Table/post">Input Data Mahasiswa</a></li>
          </ul>
        </div>
      </div>
    </nav>