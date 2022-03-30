'use strict';
function addEmoji() {
    alert()
    var image1 = document.createElement('img'),
        canvas,
        width = 1000,
        height = 100,
        randomColor = function randomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        };

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

    // basic settings
    canvas = new fabric.Canvas('c', {
        width: width,
        height: height,
    });

    image1.src = 'assets/images/cat.jpg';
    fabric.Image.fromURL(image1.src, function(img) {
        img.set({
            id: 'cat',
            left: 500,
            top: 100,
            scaleX: 0.2,
            scaleY: 0.2,
            originX: 'center',
            originY: 'center',
            cornerStrokeColor: 'blue',
        });

        // overwrite the prototype object based
        img.customiseCornerIcons({
            settings: {
                borderColor: 'black',
                cornerSize: 25,
                cornerShape: 'rect',
                cornerBackgroundColor: 'black',
                cornerPadding: 10,
            },
            tl: {
                icon: 'assets/images/remove.svg',
            },
            br: {
                icon: 'assets/images/resize.svg',
            }
        }, function() {
            canvas.renderAll();
        });

        canvas.add(img);
        canvas.setActiveObject(img);
    });

}




