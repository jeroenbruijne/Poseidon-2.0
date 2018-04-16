</div>
</section>
</section>
</div>

<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="<?php echo  base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo  base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo  base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo  base_url(); ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo  base_url(); ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo  base_url(); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo  base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo  base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo  base_url(); ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo  base_url(); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo  base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo  base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo  base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo  base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo  base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/linechart.js"></script> -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
<script>
  $.validator.setDefaults({
    submitHandler: function() {
      alert("submitted!");
    }
  });

  $(document).ready(function() {

    // validate signup form on keyup and submit
    $("#myform").validate({
      rules: {
        dateandtime: {
          required: true
        },
        temperature: {
          required: true,
          number: true,
          min: 15,
          max: 25
        },
      },
      messages: {
        dateandtime: "Please enter a date and time",
        temperature: {
          required: "Please enter a temperature",
          number: "Temperature can be a number or decimal",
          min: "Temperature must be greater than 15",
          max: "Temperature must be less than 25"
        },
      },
    });
  });
  $(document).ready(function() {

    console.log("footer.php:88");

    $("#registerform").validate({
      rules: {
        user_name: { 
          required: true,
          min: 10
        },
        user_age: {
          number: true,
          required: true
        },
      },
      messages: {
        user_name: "Please enter a username",
        user_age: "please enter your age"
      },
    });
  });

      console.log("footer.php:108");

</script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php foreach($temperatures as $t) { echo $t['temperature'] . ',';} ?>],
    datasets: [{
      label: 'sensor 1',
      data: [<?php foreach($temperatures as $t) { echo $t['temperature'] . ',';} ?>],  // 12, 19, 3, 17, 6, 3, 7, 12, 19, 3, 17, 6, 3, 7, 12, 19, 3, 17, 6, 3, 7
      backgroundColor: "rgba(153,255,51,0.4)"
    }, {
      label: 'oranges',
      data: [2, 29, 5, 5, 2, 3, 10],
      backgroundColor: "rgba(255,153,0,0.4)"
    }]
  }
});
</script>
</body>
</html>
<script>
      console.log("footer.php:133");
</script>