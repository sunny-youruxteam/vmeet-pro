
$(document).ready(function() {
    $('.toogle_switch_box').on('click', function(e) {
        $(this).parent().toggleClass("active");
    });
    $('.icon_btn_blur').on('click', function(e) {
        $(this).toggleClass("active");
    });

});




$(document).ready(function() {
    $('#HeaderMenuToggle').on('click', function(e) {
        $("body").toggleClass("menu-open");
    });
});
$(document).ready(function() {
    $('#BottomMenuToggle').on('click', function(e) {
        $("body").toggleClass("botttom-menu-open");
    });
});


$(document).ready(function() {
    $('.search_icon_only button').on('click', function(e) {
        $(".search_bar").parent().toggleClass('open_search_box');
    });
});
$(document).ready(function() {
    $('#Videos_hide').on('click', function(e) {
        $("#VideosHide").hide('slow');
        $(this).parent().parent().parent().fadeOut('slow');
    });
});



$(document).ready(function() {
    $('.bottom_menu ul li a').on('click', function(e) {
      // var bottom_menuID = $(this).attr('data-mdb-target');
      // $(".modal-backdrop").removeClass('show');
      
      $(".bottom_menu ul li a").removeClass('active');
      $(this).removeClass('active');
      $(this).addClass('active');
      // $(bottom_menuID).addClass('show').hasClass('modal').hide();
    });
});


$(document).ready(function() {
    $('#OpenNotificationBox').on('click', function(e) {
      $(this).toggleClass("NotifationActive")
        $(".notification_popup").slideToggle().css('opacity', '1');
    });
});

$(document).ready(function() {
    $('.popup_filter_box > a').on('click', function(e) {
      $(this).toggleClass("Filter_Open")
      $(this).next().slideToggle().css('opacity', '1');
    });
});

$(document).ready(function() {
    $('#Close_Filter').on('click', function(e) {
      $("#FilterOpen").toggleClass("Filter_Open")
        $(".filter_open_box").slideToggle().css('opacity', '0');
    });
});

$(document).ready(function() {
    $('#Close_Filter').on('click', function(e) {
      $("#FilterOpen").toggleClass("Filter_Open")
        $(".filter_open_box").slideToggle().css('opacity', '0');
    });
});


$(document).ready(function() {
    $('.speakers_open_pofile_box_inr').on('click', function(e) {
        $(this).parent().children( ".open_speakers_pofile_list_details" ).addClass("OpenPofileDetialsChild");
    });
});

$(document).ready(function() {
    $('.Close_pofile_details_open').on('click', function(e) {
        $(this).parent().parent().removeClass("OpenPofileDetialsChild")
    });
});

$(document).ready(function() {
    $('.main_notification_close').on('click', function(e) {
        $(this).parent().hide()
    });
});
$(document).ready(function() {
    $('.Close_side_penal').on('click', function(e) {
        $(this).parent().css({"right":"-290px"});
        $(".tabs_box_side_notes li").removeClass("active");
        $(".content_sectin_side_notes_inr").removeClass("active");
    });
});





$(document).ready( function(){
    $('.search_icon_only button').click( function() {
        var toggleWidth = $(".search_bar").width() == 200 ? "0" : "200px";
        $('.search_bar').animate({ width: toggleWidth });
    });
});

$(document).ready(function(e) {
    $('.maps_img img[usemap]').rwdImageMaps();
});


// conferene Zone slider 
$('.conferene_zone_slider').slick({
  slidesToShow: 3,
  sliderscroll:1,
  centerMode: true,
  centerPadding: "0px",
  speed: 500,
  infinite:false,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            centerMode: false,
            slidesToScroll: 1
          }
        }
      ]
});

$('.booths_slide').slick({
  slidesToShow: 2,
  sliderscroll:1,
  speed: 500,
  infinite:false,
});

$('.single_booths_slider').slick({
  slidesToShow: 1,
  sliderscroll:1,
  speed: 500,
  infinite:false,
});






$(document).ready(function(e) {
    var $container = $('.hall_list_content'),
        $trigger = $('.open_accoudiuon');
    $container.hide();
    // $trigger.first().addClass('active').show();
    // $trigger.first().parent().addClass('active');
    $trigger.on('click', function(e) {
        if ($(this).parent().parent().parent().children( ".hall_list_content" ).is(':hidden')) {
            $trigger.parent().parent().parent().removeClass('active').children( ".hall_list_content" ).slideUp(300);
            $(this).parent().parent().parent().toggleClass('active').children( ".hall_list_content" ).slideDown(300);
        } else {
            $trigger.parent().parent().parent().removeClass('active').children( ".hall_list_content" ).slideUp(300);
        }
        e.preventDefault();
    });
   
});

// Side Notes JS Tabbing 
$(document).ready(function(e) {
    $('.tabs_box_side_notes li a').on('click', function(e) {
        var divID = $(this).attr('href');
        $(this).parent().addClass('active').siblings().removeClass('active');
        $(divID).addClass('active').siblings().removeClass('active');
        $(this).parent().parent().parent().css({"right": "0"})
        e.preventDefault();
    });
});
$(document).ready(function(e) {
    $('.Close_side_penal').on('click', function(e) {
      $(this).parent().css({"right": "-290px"});
    });
});


$(document).ready(function() {
    $('.bottom_menu ul li a').on('click', function(e) {
        $(".search_bar").parent().toggleClass('open_search_box');
    });
});


var myMessages = ['info','warning','error','success'];	
function hideAllMessages()
{
  var messagesHeights = new Array(); 

  for (i=0; i<myMessages.length; i++)
  {
    messagesHeights[i] = $('.' + myMessages[i]).outerHeight();
    $('.' + myMessages[i]).css('top', -messagesHeights[i]); //move element outside viewport	  
  }
}
function showMessage(type)
{
  $('.'+ type +'-trigger').click(function(){
    hideAllMessages();				  
    $('.'+type).animate({top:"0"}, 500);
  });
}
$(document).ready(function(){
  hideAllMessages();
  for(var i=0;i<myMessages.length;i++)
  {
    showMessage(myMessages[i]);
  }
  $('.message').click(function(){			  
    $(this).animate({top: -$(this).outerHeight()}, 500);
  });		 

}); 



// Videos
var $video  = $('videoID'),
    $window = $(window); 

$(window).resize(function(){
    
    var height = $window.height();
    $video.css('height', height);
    
    var videoWidth = $video.width(),
        windowWidth = $window.width(),
    marginLeftAdjust =   (windowWidth - videoWidth) / 2;
    
    $video.css({
        'height': height, 
        'marginLeft' : marginLeftAdjust
    });
}).resize();
// Videos





// Process JS
function myFunction() {
    document.querySelectorAll(".bar").forEach(function(current) {
      let startWidth = 0;
      const endWidth = current.dataset.size;

      const interval = setInterval(frame, 20);

      function frame() {
        if (startWidth >= endWidth) {
          clearInterval(interval);
        } else {
            startWidth++;
            current.style.width = `${endWidth}%`;
            current.firstElementChild.innerText = `${startWidth}%`;
          }
       }
    });
  setTimeout(1000);
}

// Process JS



// Pofile Js

$(document).ready(function() {
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#fav_icon_upload_image_preview').css('background-image', 'url('+e.target.result +')');
            $('#fav_icon_upload_image_preview').hide();
            $('#fav_icon_upload_image_preview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
      }
  }
  $("#fav_icon_image_upload").change(function() {
      readURL(this);
  });
});


introJs().setOptions({'datepostion': 'right' });


$(document).ready(function() {
  $("#Feedback input:checkbox").on('click', function() {
    var $box = $(this);
    if ($box.is(":checked")) {
      var group = "input:checkbox[name='" + $box.attr("name") + "']";
      $(group).prop("checked", false);
      $box.prop("checked", true);
    } else {
      $box.prop("checked", false);
    }
  });
});





// Menu Popup Js Close Modal Backdrop
$(document).ready(function() {
   $('.bottom_menu ul li a').on('click', function() {
      var divID = $(this).attr('data-mdb-target');
      $(this).addClass('InfoCallBOX').siblings().removeClass('InfoCallBOX');
      // $(divID).fadeIn({"z-index": "1060"}).siblings().css({"z-index": "0"});
      // $(".modal-backdrop").removeClass('show');
      $(divID).fadeIn().siblings(".modal").fadeOut();
    $(".modal-backdrop").not(':eq(0)').remove();

    

  });
    
});

$(document).ready(function() {
  $('.popup_right_head a, .speakers_zone_popup a').on('click', function(e) {
    $(".modal-backdrop").remove();
    setTimeout(
        function(){
          $(".modal-backdrop").remove();
        }, 1000);
  });
});

$(document).ready(function() {
  var ClosePopupId = $(this).attr('data-mdb-dismiss');
   $(ClosePopupId).on('click', function() {
      $(".modal-backdrop").remove();
  });
});

$(document).ready(function() {

  $('.bottom_menu ul li a').on('click', function() {
    $(".modal-backdrop").remove();
    $('body').append(
      $('<div>').prop({
        className: 'modal-backdrop fade show',
      })
    );
  });
  $('.modal-backdrop').on('click', function() {
    $(this).remove();
    $(".modal-backdrop").remove();
 }); 
});
// Menu Popup Js Close Modal Backdrop


// jQuery(document).ready(function() {
//   jQuery(".main_menu ul li a.active").on("click", function() {
//       if (jQuery(this).hasClass("active")) {
//         jQuery(this).removeClass("active");
//         jQuery(this)
//           .siblings("ul.sub_menu")
//           .slideUp(1000);
//         }
//            else {
        
//         jQuery(".main_menu ul li a.active").removeClass("active");
//         jQuery(this).addClass("active");
//         jQuery("ul.sub_menu").slideUp(1000);
//         jQuery(this)
//           .siblings("ul.sub_menu")
//           .slideDown(1000);
//       }
//   });
// })



// Jquery Media Height 
// $(window).height(function() {
//   if ($(window).height() < 401) {
//        $('.conferene_zone_slider').slick({
//             slidesToShow: 2,
//             sliderscroll:1,
//             centerMode: false,
//             variableWidth: true
//           });
//   }
//  else {
    
//  }
// });



// $(function(){
//   $header_height = $("header").height();
//   $typing_msg_field_height = $(".typing_msg_field").height();

//     $('.side_notes_scroll') .css({'height': (($(window).height()) - $header_height - $typing_msg_field_height - 76)+'px'});
//     $(window).bind('resize', function(){
//         $('.side_notes_scroll') .css({'height': (($(window).height()) - $header_height - $typing_msg_field_height - 76)+'px'});
//         alert('resized');
//     });
// });


// $(function(){
//   $side_notes_scroll_height = $(".side_notes_scroll").height();
//   $notes_box_info_height  = $(".notes_box_info").height();
//   $notes_bottom_align   = $(".notes_bottom_align ").height();
  

  
//     $('.notes_box_info') .css({'height': ($side_notes_scroll_height )+'px'}) ;
//     $(window).bind('resize', function(){
//         $('.notes_box_info') .css({'height': ($side_notes_scroll_height   )+'px'});
//         alert('resized');
//     });
// });



// jQuery(window).on('resize load', function(event) {
//   var $side_notes_scroll_height = jQuery('.side_notes_scroll').height();
//   jQuery('.notes_box_info').css('height', $side_notes_scroll_height + 'px');

// });

















    let currentTab = 0;
    showTab(currentTab);

    function showTab(number) {
      let $tabs = $('.tab');
      let $openTab = $($tabs[number]);
      let $prevBtn = $('#prevBtn');
      let $nextBtn = $('#nextBtn');
      let $submitBtn = $('#submitBtn');

      let $NumberValue = $('#NumberValue');
      

      $openTab.css("display", "block");

      number == 0 ? $prevBtn.css("display", "none") : $prevBtn.css("display", "inline");
      number == ($tabs.length - 1) ? $nextBtn.css("display", "none") : $nextBtn.css("display", "inline");
      number == ($tabs.length - 1) ? $submitBtn.css("display", "inline") : $submitBtn.css("display", "none");

    }

    function nextPrev(number) {
      let $tabs = $('.tab');
      //   (number == 1 && !validateForm()) ? (return false) : "";
      $($tabs[currentTab]).css("display", "none");
      currentTab = currentTab + number;
      showTab(currentTab);
    }



    $(function() {
      var current = $("#NumberValue").text();
      
      $("#prevBtn").on("click", function() {
        current = current - 1;
        $("#NumberValue").text(current);
      });

      $("#nextBtn").on("click", function() {
        current = parseInt(current) + parseInt(1);
        $("#NumberValue").text(current);
      });

    })