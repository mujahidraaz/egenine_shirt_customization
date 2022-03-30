  <script type="text/javascript">
  var image1 = document.createElement('img'),
        canvas,
        randomColor = function randomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        };
  function inputCountinoue() {
    var inputVal = document.getElementById("text_mode").value;
         itext_value = [inputVal];
         if(inputVal !== "") {
             document.getElementById("input-text").style.display = "none";
             document.getElementById("itext_controls").style.display = "block";
              jQuery('.itext-toggle').css('display', 'block')
         }else {
             // document.getElementById("text_mode").style.border = "1px red solid";
             jQuery('#myModal').css('display', 'block')
         }

         if(inputVal == "secretemoji") {
            var element = document.getElementById("emoji");
            element.classList.toggle("emoji-active");
            document.getElementById("itext-toggle").style.display = "none";
            jQuery('.controls').append('<h2 class="display-hide">Choose your Emoji</h2>')
            jQuery('#shirt_cont').addClass('shirt_cont_active')
         }else if(inputVal == "picturesque"){
            // picturesque
            jQuery('.file-main').css('display', 'block')
            jQuery('.itext-toggle').css('display', 'none')
            jQuery('.bgImg-main h3').css('display','block')
         }else if(inputVal !== ""){
           Add()
           jQuery('.controls').append('<h2 class="display-hide">type your word</h2>')
            jQuery('#shirt_cont').css('display', 'block')
         }
 }     

 function BrushBackIText() {
     // document.getElementById("itext-toggle").style.display = "none";
     // document.getElementById("itext_controls").style.display = "none";
     // document.getElementById("input-text").style.display = "block";
     // jQuery('.display-hide').hide()
     // setTimeout(function() {
        location.reload()
      // }, 100);


// Finding the canvas
var canvas=document.querySelector(query);

// Hide the canvas
canvas.style.display="none";
    
 }  


function Add() {
    fabric.Object.prototype.setControlsVisibility( {
       ml: false,
       mr: false,
       tr: false,
       mb: false,
       mtr:false,
       mb: false,
       bl: false,
       mt: false
    } );

    fabric.Canvas.prototype.customiseControls({
        tl: {
            action: 'remove',
            cursor: 'pointer',
        },
        br: {
            action: 'scale'
        }
    });

      var element = document.getElementById("free-drawing");
        element.classList.remove("show-canvas");
        var itext = new fabric.IText(itext_value.toString(), {
         left: 90,
         top: 180,
         fontSize: 40,
         class:itext,
         fill: '#black',
         strokeWidth: 1,
         stroke: "black",
        });
        // overwrite the prototype object based
        itext.customiseCornerIcons({
            settings: {
                borderColor: '#ccc',
                cornerSize: 30,
                cornerShape: 'rounded',
                cornerBackgroundColor: '#FFF',
                cornerPadding: 10,
            },
            tl: {
                 icon: '<?php echo plugins_url('assets/images/cross.png', dirname(__FILE__ )); ?>',
            },
            br: {
                icon: '<?php echo plugins_url('assets/images/expand.png', dirname(__FILE__ )); ?>',
            }
        }, function() {
            canvas.renderAll();
        });

            var fontControl = jQuery('#font-control');
            jQuery(document.body).on('change', '#font-control', function () {
                itext.fontFamily = fontControl.val();
                canvas.renderAll();
            });

             canvas.add(itext);
             canvas.setActiveObject(itext);

}

</script>
<input type="hidden" name="GetSvg_url" id="GetSvg_url" value="<?php echo plugins_url('assets/images/iam.svg', dirname(__FILE__ )); ?>">
<input type="hidden" name="Get_bgImg" id="Get_bgImg" value="<?php echo plugins_url('assets/images/img.svg', dirname(__FILE__ )); ?>">
