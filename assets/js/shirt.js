jQuery(document).ready(function() {
     shirt = this.__canvas = new fabric.Canvas('shirt')
    // Export SVG Start
  function rasterizeSVG () {
         jQuery('.main-section').addClass('active-main')
        var img = this.canvas.toSVG()
          fabric.loadSVGFromString(img, function (objects, options) {
          var svg = fabric.util.groupSVGElements(objects, options);
              svg.set({
                     left: 100,
                     top: 60,
                     hasControls: false, 
                     hasBorders: false,
                     selectable: false,
              });
              svg.scaleToWidth(100);
              svg.scaleToHeight(100);
          shirt.add(svg);
      }, addSVGProperties);

 fabric.Text.positionFromTspan = function(element, options) {

        var position = {
            x: 0,
            y: 0
        };

        var childrens = [].slice.call(element.childNodes);

        var tspans = new Array();

        childrens.forEach(function(el, index, array) {

            if (el.nodeName == 'tspan') {
                tspans.push(el);
            }
        });

        if (tspans.length > 0) {

            var tspan = tspans[0];

            var attributes = [].slice.call(tspan.attributes);

            attributes.forEach(function(attr, index, array) {

                if (attr.nodeName == 'x') {
                    position.x = parseFloat(attr.nodeValue);
                } else if (attr.nodeName == 'y') {
                    position.y = parseFloat(attr.nodeValue);
                } 

            });

            return position;

        } else {

            return undefined;
        }
  };

  /**
   * Returns fabric.Text instance from an SVG element (<b>not yet implemented</b>)
   * @static
   * @memberOf fabric.Text
   * @param {SVGElement} element Element to parse
   * @param {Object} [options] Options object
   * @return {fabric.Text} Instance of fabric.Text
   */
  fabric.Text.fromElement = function(element, options) {
    if (!element) {
      return null;
    }

    var parsedAttributes = fabric.parseAttributes(element, fabric.Text.ATTRIBUTE_NAMES);
    options = fabric.util.object.extend((options ? fabric.util.object.clone(options) : { }), parsedAttributes);

    // TSPAN :
    var position = this.positionFromTspan(element, options);

    if (position != undefined) {
        options.top = position.y;
        options.left = position.x;
    } else {
        options.top = options.top || 0;
        options.left = options.left || 0;
    }

    if ('dx' in parsedAttributes) {
      options.left += parsedAttributes.dx;
    }
    if ('dy' in parsedAttributes) {
      options.top += parsedAttributes.dy;
    }

    if (!('fontSize' in options)) {
      options.fontSize = fabric.Text.DEFAULT_SVG_FONT_SIZE;
    }

    if (!options.originX) {
      options.originX = 'left';
    }
    var textContent = element.textContent.replace(/^\s+|\s+$|\n+/g, '').replace(/\s+/g, ' '),
        text = new fabric.Text(textContent, options),
        /*
          Adjust positioning:
            x/y attributes in SVG correspond to the bottom-left corner of text bounding box
            top/left properties in Fabric correspond to center point of text bounding box
        */
        offX = 0;

    if (text.originX === 'left') {
      offX = text.getWidth() / 2;
    }
    if (text.originX === 'right') {
      offX = -text.getWidth() / 2;
    }
    text.set({
      left: text.getLeft() + offX,
      top: text.getTop() - text.getHeight() / 2 + text.fontSize * (0.18 + text._fontSizeFraction) /* 0.3 is the old lineHeight */
    });

    return text;
  };



    }
    // Export SVG Start


// Free Drawing Export
function FreeDrawingExport(){
        var img = this.canvas.toSVG()
          fabric.loadSVGFromString(img, function (objects, options) {
          var svg = fabric.util.groupSVGElements(objects, options);
              svg.set({
                     left: 100,
                     top: 60,
                     hasControls: false, 
                     hasBorders: false,
                     selectable: false,
              });
              svg.scaleToWidth(100);
              svg.scaleToHeight(100);
          shirt.add(svg);
      }, addSVGProperties);
}
d.renderAll()


  jQuery('#FirstBck').click(function() {
    // jQuery('.main-section-inner').css('display', 'block')
    // jQuery('.design-shirt').css('display', 'none')
    // jQuery('.main-section').removeClass('active-main')
    location.reload()
  })  
  jQuery('.add_signature_brush').click(function() {
    jQuery('.design-shirt').css('display', 'block')
    jQuery('.main-section-inner').css('display', 'none')
    jQuery('.main-section').addClass('active-main')
    console.log('before');
    FreeDrawingExport();
    console.log(shirt);
    shirt.setActiveObject(shirt.item(0));
    var objects = shirt.getActiveObject().getObjects();
    console.log(objects);
    // for (var i = 0, len = objects.length; i < len; i++) {
    //     if (objects[i].text) {
    //         objects[i].setFill({height:50,width:50});
    //         // objects[i].fontSize = 60;
    //     }
    //     if(objects[9]) {
    //        objects[9].set({ strokeWidth: 5, height:50 , width:50 });
    //     }
        
    // }
    // shirt.renderAll();
  })  

  jQuery("#shirt_cont").click(btn => {
    rasterizeSVG()
    jQuery('.design-shirt').css('display', 'block')
    jQuery('.main-section-inner').css('display', 'none')
  })

  jQuery('.icon-tab ul li a').click(function() {
    jQuery('.icon-tab ul li a').removeClass('iconActive');
    jQuery(this).addClass('iconActive');
  })

  // Shirt Color 
  jQuery('.shirt_color ul li span').click(function() {
    jQuery('.shirt_color ul li span').removeClass('borderActive');
    jQuery(this).addClass('borderActive');
  })

  jQuery('.icon-tab #shirt_color').click(function() {
    jQuery('#shirt_color_list').toggleClass('activeColor');
    jQuery('#square_color_list').removeClass('activeSquare');
    jQuery('#shirt_color_list').removeClass('activelogo');
    jQuery('#word_color_list').removeClass('activeWord');
    jQuery('#shirt_size').removeClass('activeSize');
  })

  jQuery('.icon-tab #square_color').click(function() {
    jQuery('#square_color_list').toggleClass('activeSquare');
    jQuery('#shirt_color_list').removeClass('activeColor');
    jQuery('#logo_color_list').removeClass('activelogo');
    jQuery('#word_color_list').removeClass('activeWord');
    jQuery('#shirt_size').removeClass('activeSize');
  })  

  jQuery('.icon-tab #logo_color').click(function() {
     jQuery('#logo_color_list').toggleClass('activelogo');
     jQuery('#shirt_color_list').removeClass('activeColor');
     jQuery('#square_color_list').removeClass('activeSquare');
     jQuery('#word_color_list').removeClass('activeWord');
     jQuery('#shirt_size').removeClass('activeSize');
  })  

  jQuery('.icon-tab #word_color').click(function() {
     jQuery('#word_color_list').toggleClass('activeWord');
     jQuery('#shirt_color_list').removeClass('activeColor');
     jQuery('#square_color_list').removeClass('activeSquare');
     jQuery('#logo_color_list').removeClass('activelogo');
     jQuery('#shirt_size').removeClass('activeSize');
  }) 

  jQuery('.icon-tab #style_design').click(function() {
     jQuery('#shirt_size').toggleClass('activeSize');
     jQuery('#word_color_list').removeClass('activeWord');
     jQuery('#shirt_color_list').removeClass('activeColor');
     jQuery('#square_color_list').removeClass('activeSquare');
     jQuery('#logo_color_list').removeClass('activelogo');
  }) 

  jQuery('input:radio[name="shirt_size"]').change(
    function(){
        if (jQuery(this).is(':checked') && jQuery(this).val() == 'small') {
          shirt.item(0).set({ left:160, top:60});
          shirt.item(0).scaleToWidth(50)
          shirt.renderAll();
          jQuery('#shirt_size .black_shirt').addClass('activeColorShirtSmall');
          jQuery('#shirt_size .white_shirt_sec').removeClass('activeColorShirtlarge');
      
        }
         if (jQuery(this).is(':checked') && jQuery(this).val() == 'large') {
          shirt.item(0).set({ left:100, top:60});
          shirt.item(0).scaleToWidth(100)
          shirt.renderAll();
          jQuery('#shirt_size .white_shirt_sec').addClass('activeColorShirtlarge');
          jQuery('#shirt_size .black_shirt').removeClass('activeColorShirtSmall');

        }
    });



  

jQuery('input:radio[name="black"]').change(
    function(){
        if (jQuery(this).is(':checked') && jQuery(this).val() == 'black') {
          jQuery(".shirt-thumb").addClass("activeBlackShirt");
           var imageUrl = document.getElementById("Get_url_black_shirt").value;
           shirt.setBackgroundImage(imageUrl, shirt.renderAll.bind(shirt), {
              scaleX: shirt.width / 130,
              scaleY: shirt.height / 150,
              top:10,
              left:20
          });

          shirt.setActiveObject(shirt.item(0));
          var objects = shirt.getActiveObject().getObjects();
            for (var i = 0, len = objects.length; i < len; i++) {
                if (objects[i].id === 'iam1') {
                    objects[i].setFill('#FFF');
                }
                if (objects[i].id === 'iam2') {
                    objects[i].setFill('#FFF');
                } 
                if (objects[i].id === 'iam3') {
                    objects[i].setFill('#FFF');
                } 
                if (objects[i].id === 'iam4') {
                    objects[i].setFill('#FFF');
                } 
                if (objects[i].id === 'iam5') {
                    objects[i].setFill('#FFF');
                } 
                if (objects[i].id === 'outerWhite') {
                    objects[i].setFill('#FFF');
                } 
                if (objects[i].id === 'squareColor') {
                    objects[i].setFill('#2a2833');
                }
                if (objects[i].id === 'borderStyle') {
                    objects[i].setFill('#FFF');
                }
              //   if (objects[i].text) {
              //      console.log(objects[i].text);
              //     objects[i].setFill('#FFF');
              //     objects[i].fontSize = 60;
              //     objects[i].left = 0;
              // }
            }
            shirt.renderAll();
        }
         if (jQuery(this).is(':checked') && jQuery(this).val() == 'white') {
          jQuery(".shirt-thumb").removeClass("activeBlackShirt");
           var imageUrl = document.getElementById("Get_url_white_shirt").value;
          shirt.setBackgroundImage(imageUrl, shirt.renderAll.bind(shirt), {
                  scaleX: shirt.width / 150,
                  scaleY: shirt.height / 160,
                  top:10,
                  left:10
          });
        }

    });

    var imageUrl = document.getElementById("Get_url_white_shirt").value;
    shirt.setBackgroundImage(imageUrl, shirt.renderAll.bind(shirt), {
            scaleX: shirt.width / 150,
            scaleY: shirt.height / 160,
            top:10,
            left:10
    });

    // Sqaure Color
    jQuery("#square_color_list input[name=color]").click(function() {  
        SqaureColor = jQuery("input[name=color]:checked").val()
        var testColor = SqaureColor
        shirt.setActiveObject(shirt.item(0));
        var objects = shirt.getActiveObject().getObjects();
        for (var i = 0, len = objects.length; i < len; i++) {
            if (objects[i].id === 'squareColor') {
                objects[i].setFill(testColor);
            }
        }
        shirt.renderAll();
    });

    // Logo Color
    jQuery("#logo_color_list input[name=color]").click(function() {   
        SqaureColor = jQuery("input[name=color]:checked").val()
        var testColor = SqaureColor
        shirt.setActiveObject(shirt.item(0));
        var objects = shirt.getActiveObject().getObjects();
        for (var i = 0, len = objects.length; i < len; i++) {
            if (objects[i].id === 'iam1') {
                objects[i].setFill(testColor);
            }
            if (objects[i].id === 'iam2') {
                objects[i].setFill(testColor);
            } 
            if (objects[i].id === 'iam3') {
                objects[i].setFill(testColor);
            } 
            if (objects[i].id === 'iam4') {
                objects[i].setFill(testColor);
            } 
            if (objects[i].id === 'iam5') {
                objects[i].setFill(testColor);
            } 
            if (objects[i].id === 'borderStyle') {
                objects[i].setFill(testColor);
            } 
        }
        shirt.renderAll();
    });    

    // Word Color
    jQuery("#word_color_list input[name=color]").click(function() {   
        SqaureColor = jQuery("input[name=color]:checked").val()
        var testColor = SqaureColor
        shirt.setActiveObject(shirt.item(0));
        var objects = shirt.getActiveObject().getObjects();
        for (var i = 0, len = objects.length; i < len; i++) {
            if (objects[i].text) {
                objects[i].setFill(testColor);
                // objects[i].fontSize = 60;
            }
            if(objects[9]) {
               objects[9].set({ strokeWidth: 5, stroke: testColor });
            }
            
        }
        shirt.renderAll();
    });    


     function addSVGProperties(el, obj) {
        obj.id = el.getAttribute('id');
        // console.log('svg element: ', el, 'id: ', obj.id);
    }
// SVG color Change Square End

// appendImg
 jQuery('.add_img_appned').click(function() {
    ConvertImg()
  }) 
    function ConvertImg() {
      var imgValue = this.shirt.toSVG()
      jQuery('.imgValue').attr('value', imgValue)
      localStorage.setItem("finalValue", "1");
    }

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    if(vars[0] == 'p1') {
      jQuery('.main-section-inner').css('display', 'none');
      jQuery('.productCustomFeatureImg').css('display', 'block');
      jQuery('.main-section').css('padding-top', '0px')
      jQuery('.single_add_to_cart_button').css('display', 'block')
    }else {
      jQuery('.main-section-inner').css('display', 'block');
      jQuery('.productCustomFeatureImg').css('display', 'none');
    }

}
getUrlVars()


   jQuery('.sizeChartToggle').click(function() {
      sizeChartToggle()
    }) 
    function sizeChartToggle() {
      jQuery('.size-tab').toggleClass('size-tab-active')
    }


// append input hidden field for sizeChartToggle
 jQuery('#sizeSelect').on('change', function(){ 
    if(this.checked) {
        jQuery('#field_category').val('Adult');
        jQuery('.changeGender').html('Adult')
        SizeSelectedValue()
     }else{
       jQuery('#field_category').val('Young');
       jQuery('.changeGender').html('Young')
       SizeSelectedValue()
     }
 })

  function SizeSelectedValue() {
      jQuery('.ShirtSizeMain input').on('change', function() {
        var SelectedValue = jQuery('input[name="ShirtSize"]:checked').val()
        jQuery('#field_size').val(SelectedValue);
    }); 
  } SizeSelectedValue()




});


// jQuery('#customer_login .u-column1').addClass('col-md-6');