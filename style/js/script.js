(function() {
 
    // store the slider in a local variable
    var $window = $(window),
        flexslider = { vars:{} },
        slider_obj=false;
   
    // tiny helper function to add breakpoints
    function getGridSize() {
      return (window.innerWidth <= 728) ? 1 :
             (window.innerWidth > 1366) ? 3 : 2;
    }
   
    $(function() {
      //SyntaxHighlighter.all();
    });
    
    $window.load(function() {
      slider_obj=$('.flexslider');
      slider_obj.flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 10,
        minItems: getGridSize(), // use function to pull in initial value
        maxItems: getGridSize() // use function to pull in initial value
      });
    });
   
    // check grid size on resize event
    $window.resize(function() {
      var gridSize = getGridSize();
   
      flexslider.vars.minItems = gridSize;
      flexslider.vars.maxItems = gridSize;
    });

    jQuery(document).ready(function(e){
      //flexslider.pause();
      $('.flexslider .slides').magnificPopup({
        delegate: 'div.zoom-this-image',
        type: 'image',
        tLoading: 'جاري تحميل الصورة #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            //return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            return "";
          }
        },
        callbacks: {
          open: function() {
            // Will fire when this exact popup is opened
            // this - is Magnific Popup object
          },
          imageLoadComplete: function() {
            // fires when image in current popup finished loading
            // avaiable since v0.9.0
            //console.log('Image loaded');
            //console.log(this.currItem);
            //SingleSlider.stopAuto();
            //flexslider.pause();
            //this.currItem.img.wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom();
          },
          change: function() {
            //console.log('Image Changed');
            //console.log(this.currItem);
            //this.currItem.img.wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom();
          },
          close: function() {
            // Will fire when popup is closed
            //SingleSlider.startAuto();
            //flexslider.play();
          }
          // e.t.c.
        }
      });
      //////////////////////////////////

    });


  }());