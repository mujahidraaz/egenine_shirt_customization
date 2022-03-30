function superScript() {
 var active = canvas.getActiveObject();
 if (!active) return;
 active.setSuperscript();
 canvas.requestRenderAll();
}
    // basic settings
     canvas = this.__canvas = new fabric.Canvas('c', {
        preserveObjectStacking: true
     })
      var Get_bgImg = document.getElementById("Get_bgImg").value;
     fabric.loadSVGFromURL(Get_bgImg, function(objects, options) {
        var shape = fabric.util.groupSVGElements(objects, options);
        canvas.add(shape.scale(0.5));
          shape.set({
           left: 0,
           top: 0,
           hasControls: false, 
           hasBorders: false,
           selectable: false
         }) 
      }); 

/*
* Add SVG Code 
*
*/
var wid = jQuery(window).width();
if( wid <= 767 )
{
  var svgURL = document.getElementById("GetSvg_url").value;
  fabric.loadSVGFromURL(svgURL, function(objects, options){
    var svgData = fabric.util.groupSVGElements(objects, options);
    svgData.top = 10;
    svgData.left = 50;
    canvas.add(svgData.scale(0.3
      ));
  });
}else 
{
  var svgURL = document.getElementById("GetSvg_url").value;
  fabric.loadSVGFromURL(svgURL, function(objects, options){
    var svgData = fabric.util.groupSVGElements(objects, options);
    svgData.top = 0;
    svgData.left = 0;
    canvas.add(svgData.scale(0.5));
  });
}


/*
* Add Free Drawing on canvas Start
*
*/

var d = new fabric.Canvas('d', {
    isDrawingMode: true,
    // backgroundColor : "#000000",
})
 d.freeDrawingBrush.color = "#000"

// d.freeDrawingBrush.color = '#ffffff';
document.getElementById('freeDrawingExport').onclick = addDrawToBig
function addDrawToBig(){
     jQuery('.add_signature_brush').css('display', 'block')
     jQuery('.brush_controls h5').css('display', 'none')
     jQuery('.brush-btn-main-top').css('display', 'none')
     jQuery('#freeDrawingExport').css('display', 'none')
     jQuery('#main-brush').css('display', 'none')
     jQuery('#brush-btn-main-top').css('display', 'none')
     var element = document.getElementById("free-drawing");
     element.classList.remove("show-canvas"); 
    var svg = d.toSVG()

      // let w = window.open('')
      // w.document.write(svg)
      // return 'data:image/svg+xml;utf8,' + encodeURIComponent(svg)

    fabric.loadSVGFromString(svg,function(objects, options) {
      var obj = fabric.util.groupSVGElements(objects, options);
       canvas.add(obj).centerObject(obj).setActiveObject(obj);
       obj.set({
       top: 130,
       left:50,
       height:90,
       width:200,
       hasControls: false, 
       hasBorders: false,
       selectable: false,
    }).setCoords();
       canvas.add(obj).setActiveObject(obj);
       // canvas.add(obj);      
    });
}d.renderAll()    
function ShowSigniture() {
     var element = document.getElementById("free-drawing");
     element.classList.add("show-canvas");
}
 function Submitform(){
    var sing_value = document.querySelector('input[name = sign]:checked').value;
    if(sing_value == 'Sign') {
        ShowSigniture()
          jQuery('.edit-tools .edit-tools-inner').css('display', 'none') 
          jQuery('.bgImg-main h2').css('display', 'none')
         document.getElementById("brush_controls").style.display = "block";
    }else {
        document.getElementById("input-text").style.display = "block";
         jQuery('.edit-tools .edit-tools-inner').css('display', 'none')
         jQuery('.bgImg-main h2').css('display', 'none')
    }
}
  function CountinoueBtn() {
    Submitform()
    document.getElementById("controls").style.display = "none";
     jQuery('.underline_img').css('display', 'none') 
     jQuery('.bgImg-main h3').css('display','none')
  }

/*
* Add Free Drawing on canvas End
*
*/
// Brush Code Start
      d.freeDrawingBrush.width = 2;
document.getElementById("size").onchange = function () {
     d.freeDrawingBrush.width = 2;
      var element = document.getElementById("main-brush");
      element.classList.add("radio-active-small");
      var element = document.getElementById("main-brush");
      element.classList.remove("radio-active-large");
  }
document.getElementById("size2").onchange = function () {
     d.freeDrawingBrush.width = 5;
      var element = document.getElementById("main-brush");
      element.classList.remove("radio-active-small");
      var element = document.getElementById("main-brush");
      element.classList.add("radio-active-large");
  }
  function BrushBack() {
      jQuery('#main-brush').css('display', 'block')
      jQuery('#brush-btn-main-top').css('display', 'block')
      document.getElementById("input-text").style.display = "none";
      document.getElementById("brush_controls").style.display = "none";
      document.getElementById("controls").style.display = "block";
      document.getElementById("itext_controls").style.display = "none";
      var element = document.getElementById("free-drawing");
      element.classList.remove("show-canvas");
  }
  function ToggleBrushClass() {
         var element = document.getElementById("main-brush");
         element.classList.toggle("brush_pin_active");
  }

  // Brush Code End

/*
* Emoji Code Start
*/
function ToggleEmojiClass() {
  var element = document.getElementById("emoji-tab");
    element.classList.toggle("emoji-tab-active");
}
/*
* Emoji Code End
*/
  var objectToSendBack;
  canvas.on("selection:created", function(event){
    objectToSendBack = event.target;
  });
  canvas.on("selection:updated", function(event){
    objectToSendBack = event.target;
  });


canvas.on("object:selected", function(options) {
    options.target.sendBackwards();
    canvas.sendToBack(objectToSendBack);
});

var sendSelectedObjectBack = function() {
  canvas.sendToBack(objectToSendBack);
}

// Canvas Clear function
function clearcanvas(){
  d.clear()
}





// // Tspan issue resolve
//   fabric.Text.positionFromTspan = function(element, options) {

//         var position = {
//             x: 0,
//             y: 0
//         };

//         var childrens = [].slice.call(element.childNodes);

//         var tspans = new Array();

//         childrens.forEach(function(el, index, array) {

//             if (el.nodeName == 'tspan') {
//                 tspans.push(el);
//             }
//         });

//         if (tspans.length > 0) {

//             var tspan = tspans[0];

//             var attributes = [].slice.call(tspan.attributes);

//             attributes.forEach(function(attr, index, array) {

//                 if (attr.nodeName == 'x') {
//                     position.x = parseFloat(attr.nodeValue);
//                 } else if (attr.nodeName == 'y') {
//                     position.y = parseFloat(attr.nodeValue);
//                 } 

//             });

//             return position;

//         } else {

//             return undefined;
//         }
//   };

//   /**
//    * Returns fabric.Text instance from an SVG element (<b>not yet implemented</b>)
//    * @static
//    * @memberOf fabric.Text
//    * @param {SVGElement} element Element to parse
//    * @param {Object} [options] Options object
//    * @return {fabric.Text} Instance of fabric.Text
//    */
//   fabric.Text.fromElement = function(element, options) {
//     if (!element) {
//       return null;
//     }

//     var parsedAttributes = fabric.parseAttributes(element, fabric.Text.ATTRIBUTE_NAMES);
//     options = fabric.util.object.extend((options ? fabric.util.object.clone(options) : { }), parsedAttributes);

//     // TSPAN :
//     var position = this.positionFromTspan(element, options);

//     if (position != undefined) {
//         options.top = position.y;
//         options.left = position.x;
//     } else {
//         options.top = options.top || 0;
//         options.left = options.left || 0;
//     }

//     if ('dx' in parsedAttributes) {
//       options.left += parsedAttributes.dx;
//     }
//     if ('dy' in parsedAttributes) {
//       options.top += parsedAttributes.dy;
//     }

//     if (!('fontSize' in options)) {
//       options.fontSize = fabric.Text.DEFAULT_SVG_FONT_SIZE;
//     }

//     if (!options.originX) {
//       options.originX = 'left';
//     }
//     var textContent = element.textContent.replace(/^\s+|\s+$|\n+/g, '').replace(/\s+/g, ' '),
//         text = new fabric.Text(textContent, options),
//         /*
//           Adjust positioning:
//             x/y attributes in SVG correspond to the bottom-left corner of text bounding box
//             top/left properties in Fabric correspond to center point of text bounding box
//         */
//         offX = 0;

//     if (text.originX === 'left') {
//       offX = text.getWidth() / 2;
//     }
//     if (text.originX === 'right') {
//       offX = -text.getWidth() / 2;
//     }
//     text.set({
//       left: text.getLeft() + offX,
//       top: text.getTop() - text.getHeight() / 2 + text.fontSize * (0.18 + text._fontSizeFraction) /* 0.3 is the old lineHeight */
//     });

//     return text;
//   };

