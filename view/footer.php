</div>
<!-- End: Main --> 

<!-- Begin: Front Page Loading Animation --> 
<div id="page-loader"><span class="glyphicon glyphicon-cog fa-spin cog-1"></span></div>
<!-- End: Front Page Loading Animation --> 

<!-- Core Javascript - via CDN -->
<script src="js/ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="css/netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> <!-- Plugins - Via CDN -->
<script type="text/javascript" src="js/cdnjs.cloudflare.com/ajax/libs/flot/0.8.1/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="js/ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.min.js"></script>

<!-- Plugins - Via Local Storage
<script type="text/javascript" src="vendor/plugins/jqueryflot/jquery.flot.min"></script>
<script type="text/javascript" src="vendor/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="vendor/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendor/plugins/calendar/fullcalendar.min.js"></script>
-->

<!-- Plugins -->
<script type="text/javascript" src="vendor/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="vendor/plugins/formswitch/js/bootstrap-switch.min.js"></script> 
<script type="text/javascript" src="vendor/plugins/calendar/gcal.js"></script><!-- Calendar Addon -->
<script type="text/javascript" src="vendor/plugins/jqueryflot/jquery.flot.resize.min.js"></script><!-- Flot Charts Addon -->
<script type="text/javascript" src="vendor/plugins/datatables/js/datatables.js"></script><!-- Datatable Bootstrap Addon -->
<script type="text/javascript" src="vendor/plugins/validate/jquery.validate.js"></script> 
<!-- Theme Javascript -->
<script type="text/javascript" src="js/uniform.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!--<script type="text/javascript" src="js/plugins.js"></script>-->
<script type="text/javascript" src="js/custom.js"></script>



<script type="text/javascript">
 jQuery(document).ready(function() {


  // validate signup form on keyup and submit
  jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 

  $("#addPlanForm").validate({
   
    rules: {
      planName: {
        required:true,
        lettersonly: true
      },
      planSpeed: {
        required:true,
        number: true
      },
      planType:{
        required:true
      },
      planPrice: {
        required:true,
        number:true
      },
      planDownloadType: {
                required: true
            },
     planMonthMode: {
                required: true
            },

    },
    messages: {
      planName: "please enter the plan (only alphabets)",
      planSpeed: "please enter the speed (only numbers)",
      planType: "please select speed plan",
      planPrice: "please enter the price (only numbers)",
      planDownloadType:"please select download type",
      planMonthMode:"please select month mode"
    
      
    }
  });
   


 });
</script>


<script type="text/javascript">
  jQuery(document).ready(function() {
    
  // Init Theme Core    
  Core.init();
   $('.datepicker').datepicker()
  // Create an example page animation. Really
  // not suitable for production enviroments
  var headerAnimate = setTimeout(function() {
    // Animate Header from Top
    $('header').css("display", "block").addClass('animated bounceInDown');
  },300);
  
  // Add an aditional delay to hide the loading spinner
  // and animate body content from bottom of page
  var bodyAnimate = setTimeout(function() {
    // hide spinner
    $('#page-loader').css("display", "none");
    
    // show body and animate from bottom. At end of animation 
    // add several css properties because the animation will bug 
    // existing psuedo backgrounds(:after)
    $('#main').css("display", "block").addClass('animated animated-short bounceInUp').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
      $('header').removeClass('animated bounceInDown');
      $('#main').removeClass('animated animated-short bounceInUp')
      $('body').css({background: "#FFFFFF", overflow: "visible"});
      $('#content, #sidebar').addClass('refresh');
      // Init sparkline animations
      sparkload();
    });       
   },1150);
  
  // Init Datatables
  $('#datatable, #datatable_2').dataTable( {
    "bSort": true,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    "aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ -1 ] }]
  });
  
  // Init Sparkline Plugin
  var runSparkline = function () {
    
    // Define Sparklines values
    var Values1 = [0,1,5,2,4,3,5,8,7];
    var Values2 = [3,2,3,1,0,2,5,6,4];
    var Values3 = [6,4,5,3,4,2,1,2,3];
    var Values4 = [2,1,2,3,2,4,2,1,0];

      // Pass values, define options, and create chart
    $('.sparkbar1').sparkline(Values1, {type: "bar",
        barColor: "#428bca",
        barWidth: "8",
        height: "35"} 
    );
    $('.sparkbar2').sparkline(Values2, {type: "bar",
        barColor: "#5cb85c",
        barWidth: "8",
        height: "35"} 
    );
    $('.sparkbar3').sparkline(Values3, {type: "bar",
        barColor: "#5bc0de",
        barWidth: "8",
        height: "35"} 
    );
    $('.sparkbar4').sparkline(Values4, {type: "bar",
        barColor: "#777777",
        barWidth: "8",
        height: "35"} 
    );
  }
    
  // Example function to animate the appearance of 
  // Sparklines. Only ran on Sparkline elements which 
  // have the ".sparkline-delay" class 
  var sparkload = function() {
    $('.sparkline-delay').each(function() {
      var This = $(this)
      var delayTime = $(this).data('delay');

      $(This).children('canvas').css({"height": "0", "vertical-align": "bottom"});
      var delayCharts = setTimeout(function () {
        $(This).css("display", "block");
          $(This).children('canvas').animate({height: 35}, 800);
      }, 10); 
    });
  }   
    
  // Init Calendar Plugin
  var runFullCalendar = function () {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    // Define Calendar options and events
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      editable: true,
      events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 9),
          color: '#008aaf '
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d-5),
          end: new Date(y, m, d-3)
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d+3, 16, 0),
          allDay: false
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d+10, 16, 0),
          allDay: false
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          color: '#0070ab'
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          color: '#0070ab'
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d+1, 19, 0),
          end: new Date(y, m, d+1, 22, 30),
          allDay: false
        },
        {
          title: 'Mandatory!',
          start: new Date(y, m, 22),
          color: '#d10011'
        }
      ]
    });
  }

  // Init Flot Charts Plugin
  var runFlotCharts = function () {
    
  // Define chart clolors ( add more colors if you want or flot will do it automatically
  var chartColours = ['#5bc0de'];

  // Generate random number for charts
  randNum = function(){return (Math.floor( Math.random()* (1+40-20) ) ) + 20;}

  // Check if element exist and draw auto updating chart
  if($(".chart-updating").length) {
    $(function () {
      // We use an inline data source in the example, usually data would
      // be fetched from a server
      var data = [], totalPoints = 50;
      function getRandomData() {
        if (data.length > 0)
          data = data.slice(1);

        while (data.length < totalPoints) {
          var prev = data.length > 0 ? data[data.length - 1] : 50;
          var y = prev + Math.random() * 10 - 5;
          if (y < 0)
            y = 0;
          if (y > 100)
            y = 100;
          data.push(y);
        }

        var res = [];
        for (var i = 0; i < data.length; ++i)
          res.push([i, data[i]])
        return res;
      }

      var updateInterval = 750;

      var options = {
        series: { 
          shadowSize: 0, // drawing is faster without shadows
          lines: {
            show: true,
            fill: true,
            fillColor: { colors: ['rgba(47, 137, 214, 0.4)', 'rgba(98, 174, 239, 0.3)'] },
            lineWidth: 1,
            steps: false
          },
          points: {
            show: false,
            radius: 2.5,
            symbol: "circle",
            lineWidth: 2.5
          }
        },
        grid: {
          show: true,
          aboveData: false,
          color: "#3f3f3f",
          labelMargin: 5,
          axisMargin: 0, 
          borderWidth: 0,
          borderColor:null,
          minBorderMargin: 5 ,
          clickable: true, 
          hoverable: true,
          autoHighlight: false,
          mouseActiveRadius: 20
        }, 
        colors: chartColours,
        yaxis: { 
           min: 0,
           max: 100,
           font: {size: 11, color: "#888888"}
        },
        xaxis: { 
           show: true,
           font: {size: 11, color: "#888888"}
        }
      };
      var plot = $.plot($(".chart-updating"), [ getRandomData() ], options);

      function update() {
        plot.setData([ getRandomData() ]);
        // since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();
        
        setTimeout(update, updateInterval);
      }
      update();
    });
    }
  }
     
  runSparkline();
  runFullCalendar();    
  runFlotCharts();
  
  // Example animations ran on Header Buttons - For Demo Purposes
  $('.header-btns > div').on('show.bs.dropdown', function() {
    $(this).children('.dropdown-menu').addClass('animated animated-short flipInY');
  });
  $('.header-btns > div').on('hide.bs.dropdown', function() {
    $(this).children('.dropdown-menu').removeClass('animated flipInY');
  });
        

});
</script>
<script type="text/javascript">
 jQuery(document).ready(function() {

   // Init Theme Core
   Core.init();

   //Init jquery Date Picker
   $('.datepicker').datepicker()
   
   //Init jquery Date Range Picker
   $('input[name="daterange"]').daterangepicker();
   
   //Init jquery Color Picker
   $('.colorpicker').colorpicker() 
   $('.rgbapicker').colorpicker() 
   
   //Init jquery Time Picker
   $('.timepicker').timepicker();
    
   //Init jquery Tags Manager 
   $(".tm-input").tagsManager({
        tagsContainer: '.tag-container',
    prefilled: ["Miley Cyrus", "Apple", "Wow This is a really Long tag", "Na uh"],
    tagClass: 'tm-tag-info',
     });

   //Init jquery spinner init - default  
   $(".checkbox").uniform();
   $(".radio").uniform();

  //Init jquery spinner init - default
  $("#chosen-list1").chosen();
  $("#chosen-list2").chosen(); 
    
  //Init jquery spinner init - default
  $("#spinner1").spinner();
  
  //Init jquery spinner init - currency 
  $("#spinner2").spinner({
      min: 5,
      max: 2500,
      step: 25,
      start: 1000,
      //numberFormat: "C"
    });
  
  //Init jquery spinner init - decimal  
  $( "#spinner3" ).spinner({
      step: 0.01,
      numberFormat: "n"
    });
  
  //Init jquery time spinner
    $.widget( "ui.timespinner", $.ui.spinner, {
    options: {
      // seconds
      step: 60 * 1000,
      // hours
      page: 60
    },
    _parse: function( value ) {
      if ( typeof value === "string" ) {
      // already a timestamp
      if ( Number( value ) == value ) {
        return Number( value );
      }
      return +Globalize.parseDate( value );
      }
      return value;
    },
   
    _format: function( value ) {
      return Globalize.format( new Date(value), "t" );
    }
    });
    $( "#spinner4" ).timespinner();

  //Init jquery masked inputs
  $('.date').mask('99/99/9999');
  $('.time').mask('99:99:99');
  $('.date_time').mask('99/99/9999 99:99:99');
  $('.zip').mask('99999-999');
  $('.phone').mask('(999) 999-9999');
  $('.phoneext').mask("(999) 999-9999 x99999");
  $(".money").mask("999,999,999.999"); 
  $(".product").mask("999.999.999.999"); 
  $(".tin").mask("99-9999999");
  $(".ssn").mask("999-99-9999");
  $(".ip").mask("9ZZ.9ZZ.9ZZ.9ZZ");
  $(".eyescript").mask("~9.99 ~9.99 999");
  $(".custom").mask("9.99.999.9999");
  
});
</script>
</body>

</html>
