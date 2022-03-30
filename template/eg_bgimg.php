<!-- new  -->
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/js/jquery.Jcrop.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/css/jquery.Jcrop.min.css" type="text/css" /> -->
<!-- new style -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script name="jquery-croper-script">
!function(e,r){"object"==typeof exports&&"undefined"!=typeof module?r(require("jquery"),require("cropperjs")):"function"==typeof define&&define.amd?define(["jquery","cropperjs"],r):r(e.jQuery,e.Cropper)}(this,function(c,s){"use strict";if(c=c&&c.hasOwnProperty("default")?c.default:c,s=s&&s.hasOwnProperty("default")?s.default:s,c.fn){var e=c.fn.cropper,d="cropper";c.fn.cropper=function(p){for(var e=arguments.length,a=Array(1<e?e-1:0),r=1;r<e;r++)a[r-1]=arguments[r];var u=void 0;return this.each(function(e,r){var t=c(r),n="destroy"===p,o=t.data(d);if(!o){if(n)return;var f=c.extend({},t.data(),c.isPlainObject(p)&&p);o=new s(r,f),t.data(d,o)}if("string"==typeof p){var i=o[p];c.isFunction(i)&&((u=i.apply(o,a))===o&&(u=void 0),n&&t.removeData(d))}}),void 0!==u?u:this},c.fn.cropper.Constructor=s,c.fn.cropper.setDefaults=s.setDefaults,c.fn.cropper.noConflict=function(){return c.fn.cropper=e,this}}});
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.min.css" />
<div class="image-container">
  <img id="cropper-canvas-image" src="#" alt="your image" />
</div>


<script type="text/javascript">
  let ICropper = (function($) {
  let $cropperCanvasImage = $('#cropper-canvas-image');
  return {
    readUrl,
    cropImage,
    initCropper
  }
  function readUrl(input) {
    if (input.files && input.files[0]) {

      let reader = new FileReader();
      reader.onload = function(e) {
        $cropperCanvasImage.attr('src', e.target.result)
      };
      reader.readAsDataURL(input.files[0]);
     jQuery('.image-container img').css('display', 'block')
    }
  }

  function initCropper() {
    jQuery('.image-container').css('display', 'block')
    $cropperCanvasImage.cropper({
      aspectRatio: 1 / 1,
    });
  }

  function cropImage() {
    jQuery('.image-container').css('display', 'none')
    let imgUrl = $cropperCanvasImage.data('cropper').getCroppedCanvas().toDataURL();
    let img = document.createElement("img");
    img.src = imgUrl;
    console.log(imgUrl)

     fabric.Image.fromURL(imgUrl, function (img) {
      var oImg = img.set({
        left: 25,
        top: 23,
        angle: 0,
        width:288,
        height:292,
        hasControls: false, 
        hasBorders: false,
        selectable: false        
         }).scale(0.9);
      canvas.add(oImg).renderAll();
      var a = canvas.setActiveObject(oImg);
      var dataURL = canvas.toDataURL({format: 'png', quality: 0.8});
    }); 
  }
})(jQuery)
</script>
<!-- new style end -->

<div id="TestDiv"></div>
<div class="bgImg-main">
      <h3>UPLOAD IMAGE</h3>
         <div class="back-btn" id="backBg">
              <button>
               <img src="<?php echo plugins_url( 'assets/images/back.png' , dirname(__FILE__ )); ?>"></button>
         </div>
   <div class="file-main">
      <h2>Upload image</h2>
     <div class="bgImg-inner">
      <label class="custom-file-upload">
        <!-- <input type="file" id="file" class="img"> -->
        <input type="file" name="source-image" id="file" class="img" onchange="ICropper.readUrl(this);" />
       </label>  
      <canvas id="canvas2" style="display: none;" width="200"></canvas>
     </div> 
     
     <h5>You can upload image in jpeg or png file</h5>
     <img src="<?php echo plugins_url( 'assets/images/continue-icon.png' , dirname(__FILE__ )); ?>" class="nextBtn nextBtnfile" onclick="FileContinoue()">
   </div> 
   <!-- Image Section End -->
   <div class="imgCropper"><div id="jcrop"></div></div>

  <div class="edit-tools">
    <div class="underline_img">
      <img src="<?php echo plugins_url( 'assets/images/underline.png' , dirname(__FILE__ )); ?>" class="nextBtn nextBtnfile" onclick="FileContinoue()">
    </div>
    <div class="edit-tools-inner">
     <ul>
       <li class="release-check"><button id="releaseCheck" onclick="ICropper.initCropper(this)"><img src="<?php echo plugins_url( 'assets/images/crop.png' , dirname(__FILE__ )); ?>"><span>Crop</span></button></li>
       <li class="underline">
        <img src="<?php echo plugins_url( 'assets/images/underline.png' , dirname(__FILE__ )); ?>">
        <span>Underline</span>
        <label class="switch">
          <input type="checkbox" id="underline">
          <span class="slider round"></span>
        </label>
      </li>
       <li><button onclick="ICropper.cropImage(this)"><img src="<?php echo plugins_url( 'assets/images/snap.png' , dirname(__FILE__ )); ?>"><span>Snap</span></button></li>
     </ul>
   </div>
  </div>
</div>

<script>
  var max_base64_size = 1000000;
jQuery("#file").change(function(){
  picture(this);
   jQuery('#jcrop').css('display', 'block')
   jQuery('#jcrop').addClass('activeJcrop')
   jQuery(".release-check button").removeAttr('disabled');
});
var picture_width;
var picture_height;
var crop_max_width = 160;
var crop_max_height = 160;
function picture(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      jQuery("#jcrop, #preview").html("").append("<img src=\""+e.target.result+"\" alt=\"\" />");
      picture_width = jQuery("#preview img").width();
      picture_height = jQuery("#preview img").height();
    }
    reader.readAsDataURL(input.files[0]);
  }
}
    function FileContinoue() {
      if (jQuery('#file').get(0).files.length === 0) {
        jQuery('#myModal').css('display', 'block')
        jQuery('.modal-content p').html('Please upload your image')
      }else {
        jQuery('.file-main').css('display', 'none')
        jQuery('.edit-tools .edit-tools-inner').css('display', 'block')
        jQuery('#backBg').css('display', 'block')
        jQuery('#jcrop').addClass('activeJcrop')
        jQuery('#controls').css('display', 'block')
        jQuery('#controls').addClass('controlsActive')
      }
    }

 jQuery(document).ready(function() {

    jQuery('#backBg').click(function() {
      jQuery('#backBg').css('display', 'none')
      jQuery('.file-main').css('display', 'block')
      jQuery('.edit-tools .edit-tools-inner').css('display', 'none')
      jQuery('#controls').css('display', 'none')
      jQuery('#brush_controls').css('display', 'none')
      jQuery('#free-drawing').css('display', 'none')
      jQuery('.bgImg-main h3').css('display','block')
    })


 fabric.loadSVGFromURL('<?php echo plugins_url('assets/images/underline.svg', dirname(__FILE__ )); ?>', function(objects, options) {
      var shape = fabric.util.groupSVGElements(objects, options);
      canvas.add(shape.scale(0.5));
        shape.set({
         left: 0,
         top: 0,
         hasControls: false, 
         hasBorders: false,
         selectable: false
       }) 
     canvas.setActiveObject(shape);
    }); 

jQuery("#underline").change(function() {
  if(this.checked) {
  fabric.loadSVGFromURL('<?php echo plugins_url('assets/images/underline.svg', dirname(__FILE__ )); ?>', function(objects, options) {
      var shape = fabric.util.groupSVGElements(objects, options);
      canvas.add(shape.scale(0.5));
        shape.set({
         left: 0,
         top: 0,
         hasControls: false, 
         hasBorders: false,
         selectable: false
       }) 
     canvas.setActiveObject(shape);
    }); 

  }else {
    jQuery('.underline_img').css('display', 'none')
    canvas.remove(canvas.getActiveObject());

  }
});



 })
</script>

