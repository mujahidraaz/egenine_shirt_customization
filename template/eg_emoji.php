                 <div class="emoji" id="emoji">
                    <button style="color: white;" onclick="ToggleEmojiClass()"><img src="<?php echo plugins_url( 'assets/images/emoji.png' , dirname(__FILE__ )); ?>"><span>Emoji</span></button>
                  </div> 
                  <div class="emoji-tab" id="emoji-tab">
                    <div class="click-tick"><img src="<?php echo plugins_url( 'assets/images/tick.png' , dirname(__FILE__ )); ?>" onclick="addEmoji()"></div>
                    <ul>
<!--                         <li><img src="<?php //echo plugins_url( 'assets/images/emo-1.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-2.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-3.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-4.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-5.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-6.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-7.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-8.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-9.png' , dirname(__FILE__ )); ?>"  onclick="select_img(this.src)"></li>
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-10.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>    
                        <li><img src="<?php //echo plugins_url( 'assets/images/emo-10.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>    -->
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/1.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/2.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/3.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/4.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/5.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/6.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/7.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/8.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/9.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/10.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/11.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/12.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/13.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/14.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/15.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>


                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/16.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/17.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/18.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/19.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/20.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/21.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/22.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/23.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/24.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/25.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/26.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/27.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/28.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/29.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/30.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/31.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/32.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/33.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/34.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/35.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/36.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/37.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/38.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
<!--                         <li><img src="<?php //echo plugins_url( 'assets/images/emoji/39.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>   -->
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/40.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/41.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/42.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/43.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/44.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/45.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/46.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/47.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/48.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/49.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/50.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/51.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/52.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/53.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/54.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/55.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/56.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/57.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/58.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/59.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/60.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/61.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/62.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/63.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/64.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/65.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/66.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/67.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/68.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/69.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/70.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/71.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/72.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/73.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/74.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/75.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/76.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/77.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/78.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/79.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/80.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/81.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/82.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/83.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/84.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/85.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/86.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/87.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/88.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/89.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/90.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/91.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/92.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/93.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/94.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/95.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/96.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li>  
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/97.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li> 
                        <li><img src="<?php echo plugins_url( 'assets/images/emoji/98.png' , dirname(__FILE__ )); ?>" onclick="select_img(this.src)"></li> 
                    </ul>
                  </div>
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


var counter = 1;
var current_img = "";
function select_img(src) {
  if(counter > 3) {
    return false;
  }
  current_img = src;
  counter++;

}
function addEmoji() {
  
    if(counter > 4) {
      return false;
    }
    if(current_img == "") {
      return false
    }

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
    fabric.Image.fromURL(current_img, function(img) {
        img.set({
            id: 'cat',
            left: 170,
            top: 200,
            scaleX: 0.1,
            scaleY: 0.1,
            originX: 'center',
            originY: 'center',
            cornerStrokeColor: '#ccc',
        });

        // overwrite the prototype object based
        img.customiseCornerIcons({
            settings: {
                borderColor: '#ccc',
                cornerSize: 25,
                cornerShape: 'rect',
                cornerBackgroundColor: '#ccc',
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

        canvas.add(img);
        canvas.setActiveObject(img);
    });

    current_img = "";

     var element = document.getElementById("emoji-tab");
     element.classList.remove("emoji-tab-active");  
  
}


</script>
