$('#blurpic').mousemove(function(e){
    var xpos = e.pageX - this.offsetLeft;
    var ypos = e.pageY - this.offsetTop;
    
    
    $('#clearpic').css({
       left:  xpos,
       top:   ypos,
       backgroundPositionX: -xpos,
       backgroundPositionY: -ypos
          
    });
});
    
$('#clearpic').mousemove(function(e){
    var xpos = e.pageX -25
    var ypos = e.pageY -25
    
    
    $('#clearpic').css({
       left:  xpos,
       top:   ypos,
       backgroundPositionX: -xpos +9 ,
       backgroundPositionY: -ypos +9
          
    });
});
    
