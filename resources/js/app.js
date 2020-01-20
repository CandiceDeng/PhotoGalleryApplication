require('./bootstrap');

var main = function(){
  $('#signUp').on('click',()=>{
    $('#container').addClass('right-panel-active');
  });
  $('#signIn').on('click',()=>{
    $('#container').removeClass('right-panel-active');
  });
  $('#signUp').click(function() {
     window.history.pushState('', '', '/register');
     return false;
   });
   $('#signIn').click(function() {
      window.history.pushState('', '', '/login');
      return false;
    });
  $("img").hover(function() {
    $(this).addClass("blur-image");
  },
  function() {
    $(this).removeClass("blur-image");
  }
);
  $("#filter-btn").on('click',()=>{

    if ( $("#filter-btn").text() == "GrayScale" ) {
      $("#filter-btn").text("Colorful");
    } else {
      $("#filter-btn").text("GrayScale");
    }
    $("img").toggleClass("filter");
  });

  //Dimension slider
  $("#slider-range").slider({
      range: true,
      min: 0,
      max: 400,
      step: 50,
      values: [0, 200],
      slide: function (e, ui) {
          var min = ui.values[0];
          var max = ui.values[1];
          $('.slider-min').html(min);
          $('.slider-max').html(max);
          $("img").each(function() {
            var imgsrc = this.src;
            var dim = imgsrc.split("/");
            var height = dim.pop();
            var width = dim.pop();
            if (width<min||width>max){
              $(this).hide();
            }else{
              $(this).show();
            }
          });
      }
  });


}

$(document).ready(main);

window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//PhotoGallery
function scaleGallery()
{
  // This is roughly the max pixels width/height of a square photo
  var widthSetting = 400;

  var containerWidth = $(".gallery").width();
  var ratioSumMax = containerWidth / widthSetting;
  var imgs = $(".gallery img");
  var numPhotos = imgs.length, ratioSum, ratio, photo, row, rowPadding, i = 0;

  while (i < numPhotos) {
    ratioSum = rowPadding = 0;
    row = new Array();
    while (i < numPhotos && ratioSum < ratioSumMax) {
        photo = $(imgs[i]);
        // reset width to original
        photo.width("");
        ratio = photo.width() / photo.height();
        rowPadding += getHorizontalPadding(photo);
        // if this is going to be first in the row, clear: left
        if(ratioSum == 0) photo.css("clear", "left"); else photo.css("clear", "none");
        ratioSum += ratio;
        row.push(photo);
        i++;
        // if only 1 image left, squeeze it in
        if(i == numPhotos - 1) ratioSumMax = 999;
    }
    unitWidth = (containerWidth - rowPadding) / ratioSum;

    row.forEach(function (elem) {
      elem.width(unitWidth * elem.width() / elem.height());
    });
  }
}

function getHorizontalPadding(elem)
{
    var padding = 0;
    var left = elem.css("padding-left");
    var right = elem.css("padding-right");
    padding += parseInt(left ? left.replace("px", "") : 0);
    padding += parseInt(right ? right.replace("px", "") : 0);
    return padding;
}

$(window).load(scaleGallery);
$(window).resize(scaleGallery);
