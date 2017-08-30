<!DOCTYPE html>
<style type="text/css">
  #balle {
    width: 10px;
    height: 10px;
    background-color: red;
    border: black 2px solid;
    border-radius : 10px;
    position: relative;
  }
</style>

<body>
  <div id="balle"></div>
  <script src="jquery.3.2.1.js"></script>
  <script>
    $(function() {
      function bis() {
        $('#balle').animate({left: '+=200'}, 'slow')
                   .animate({top: '+=200'}, 'slow')
                   .animate({left: '-=200'}, 'slow')
                   .animate({top: '-=200'}, 'slow');
      };
      setInterval(bis, 2400);
    });
  </script>
