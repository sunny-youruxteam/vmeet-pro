

$(document).ready(function(){
  $('.profile_frame_slider').slick();
  $('.profileBgSlider').slick({
    dots: false,
    infinite: false,
    slidesToShow: 5,
    sliderscroll:1,
  });
});


$('.modal').on('shown.bs.modal', function (e) {
  $('.profile_frame_slider').slick('setPosition');
  $('.profileBgSlider').slick('setPosition');
});




$(document).ready(function(){  
  $(".profile_frame_slider_img").click(function(){
    var bg_img = $(this).children('img').attr('src');
    $('.profile_frame_slider_img').removeClass('active_bg'); // remove all current selections
    $(this).addClass('active_bg')  
    // $('.selfie_profile_img span').css('background', bg_img);
    $('#SelfieStationBgSelect .selfie_profile_img span').css("background", "url(" + bg_img + ")");
  });
});
  
$('.main_menu ul li a').on('click', function(e) {
  $(this).toggleClass("SubMenuOpen").siblings().removeClass('SubMenuOpen');
});

$('.stat_conversation_box .dropdown-toggle').on('click', function(e) {
  $(this).parent().parent().parent().parent().toggleClass("dropdown_open");
});
// Pofile Slider


$('.nav_tabbing_why ul li:first-child').addClass('active');
$('.content_why_img_otr').hide();
$('.content_why_img_otr:first').show();
$('.nav_tabbing_why ul li a').click(function(){
  $('.nav_tabbing_why ul li a').removeClass('active');
  $(this).addClass('active');
  $('.content_why_img_otr').hide();
  
  var activeTab = $(this).attr('href');
  $(activeTab).fadeIn(1000);
  return false;
});




// conferene Zone slider 

jQuery(document).ready(function() {
  if($('html').hasClass('rtl')) {
    $('.rtl .conferene_zone_slider').slick({
      rtl: true,
      slidesToShow: 3,
      sliderscroll:1,
      centerMode: true,
      centerPadding: "0px",
      speed: 500,
      infinite:false,
    });
    $('.booths_slide').slick({
      rtl: true,
      slidesToShow: 2,
      sliderscroll:1,
      speed: 500,
      infinite:false,
    });
    $('.single_booths_slider').slick({
      rtl: true,
      slidesToShow: 1,
      sliderscroll:1,
      speed: 500,
      infinite:false,
      arrows:true,
      dots:false
    });
    $('.social_zone_slider').slick({
      slidesToShow: 3,
      sliderscroll:1,
      speed: 500,
      infinite:false,
    }); 
  }
  else{
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
      arrows:true,
      dots:false
    });
    $('.social_zone_slider').slick({
      slidesToShow: 3,
      sliderscroll:1,
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
  }
});

  




// venobox Popup 
$(document).ready(function(){

    /* default settings */
    $('.venobox').venobox(); 


    /* custom settings */
    
    $("#firstlink").venobox().trigger('click');


});







$(document).ready(function() {
    $('.toogle_switch_box').on('click', function(e) {
        $(this).parent().toggleClass("active");
    });
    $('.icon_btn_blur').on('click', function(e) {
        $(this).toggleClass("active");
    });

});
$('#ToggleThis').on('click', function(e) {
  $(this).toggleClass("active");
});





$(document).ready(function() {
    $('#HeaderMenuToggle').on('click', function(e) {
        $("body").toggleClass("menu-open");
    });
    
    $('.single_notification .NotificationCloseBox').on('click', function(e) {
      $(this).parent().parent().remove();
    });

    $('.NotificationCloseBox').on('click', function(e) {
        $(this).parent().remove();
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
    $('.open_feed_menu').on('click', function(e) {
        $(".feed_menu_box_open").toggleClass('feed_menu_active');
    });
    $(".notification_popup .close_all_btn").on("click", function(a) {
        $(this).parent().fadeOut();
        $(".feed_menu_box_open").removeClass('feed_menu_active');
    });
    $(".close_all_btn").on("click", function(a) {
      $(".feed_menu_box_open").removeClass('feed_menu_active');
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

    $('.rtl .Close_side_penal').on('click', function(e) {
        $(this).parent().css({"left":"-290px" , "right":"unset"});
    });
});





$(document).ready( function(){
    $('.search_icon_only button').click( function() {
        var toggleWidth = $(".search_bar").width() == 200 ? "0" : "200px";
        $('.search_bar').animate({ width: toggleWidth });
    });
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
    $('.rtl .tabs_box_side_notes li a').on('click', function(e) {
        $(this).parent().parent().parent().css({"left": "0" , "right": "unset"})
        e.preventDefault();
    });
});
$(document).ready(function(e) {
    $('.Close_side_penal').on('click', function(e) {
      $(this).parent().css({"right": "-290px"});
    });
    $('.rtl .Close_side_penal').on('click', function(e) {
      $(this).parent().css({"right": "unset" , "left": "-290px"});
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

// $(document).ready(function() {
//   $('.popup_right_head a, .speakers_zone_popup a').on('click', function(e) {
//     $(".modal-backdrop").remove();
//     setTimeout(
//         function(){
//           $(".modal-backdrop").remove();
//         }, 1000);
//   });
// });

// $(document).ready(function() {
//   var ClosePopupId = $(this).attr('data-mdb-dismiss');
//    $(ClosePopupId).on('click', function() {
//       $(".modal-backdrop").remove();
//   });
// });



// $(document).ready(function() {

//   $('.bottom_menu ul li a:not(.nopopup)').on('click', function() {
//     $(".modal-backdrop").remove();
//     $('body').append(
//       $('<div>').prop({
//         className: 'modal-backdrop fade show',
//       })
//     );
//   });
//   $('.modal-backdrop').on('click', function() {
//     $(this).remove();
//     $(".modal-backdrop").remove();
//  }); 
 
//  });





// $(document).ready(function() {
//   $( ".modal:not(.bottom_menu)" ).click(function() {
//     $(".modal-backdrop").remove();
//   });
// });



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










// $('body').click(function () {
//   $('.modal-backdrop').remove();
// })






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


    


function checkPosition() {
  if (window.matchMedia('(max-width: 767px)').matches) {
      $('.main_menu ul li a').on('click', function(e) {
      $('alter')
      });
  } else {
      //...
  }
}

if($(window).width() <= 767){

  $(document).ready(function() {
      $(".chat_option_list a").on("click", function(a) {
          $(".main_content_section").addClass( "side_pannel_open" );
      });
  });
}

$(document).ready(function() {
  // var pageURL = $(location).attr("href");
  // var pageURLSchedule = pageURL + '#favsessions_box';
  // // alert(pageURLSchedule);
  // if (pageURLSchedule == pageURL) {
  //   $('.my_collections_tab_list li:nth-child(5) a').trigger('click');
  //   alert(pageURL);
  // } else {
  //   $('.my_collections_tab_list li:nth-child(1) a').trigger('click');
  // }
  $(function() {
    if ( document.location.href.indexOf('#favsessions_box') > -1 ) {
          $('.my_collections_tab_list a').removeClass('active');
          $('.my_collections_tab_list li:nth-child(5) a').addClass('active');
          $('.tab-pane').removeClass('active show');
          $('#favsessions_box').addClass('active show');
          
          // alert($(location).attr("href"));
      }
  });
});
  



$(document).ready(function() {
    $(".Open_content_arrow").on("click", function(a) {
        $(this).parent().children(".ContentBox").siblings().slideDown(300);
        $(this).siblings().addClass("active");
        $(this).parent().children(".ContentBox").slideToggle(300);
        $(this).toggleClass("active");
    });
});


$(".ticket_radio_btn  .form-check").on("click", function(a) {
  $(".ticket_radio_btn  .form-check").parent().removeClass('active');
  $(this).parent().addClass('active');
});
// Input Jquery


// $(document).ready(function(e) {
//     $('.maps_img img[usemap]').rwdImageMaps();
// });

// $(document).ready(function() {
//   $( ".modal" ).click(function() {
//     $(".modal-backdrop").remove();
//     $('#stall_iframe').get(0).pause();
//   });
// });




// Take Pictures Javascript
var videoCapture;
    $(document).ready(function () {
        videoCapture = document.getElementById('capturevideo');
    });
    $(document).on('click', '#btnActivateCamera', function () {
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            // access video stream from webcam
            navigator.mediaDevices.getUserMedia({ video: true }).then(function (stream) {
                // on success, stream it in video tag 
                window.localStream = stream;
                videoCapture.srcObject = stream;
                videoCapture.play();
                activateCamera();
            }).catch(e => {
                // on failure/error, alert message. 
                alert("Please Allow: Use Your Camera!");
            });
        }
    });
    $(document).on('click', '#btnDeactivateCamera', function () {
        // stop video streaming if any
        localStream.getTracks().forEach(function (track) {
            if (track.readyState == 'live' && track.kind === 'video') {
                track.stop();
                deactivateCamera();
            }
        });
    });

    $(document).on('click', '#btnCapture', function () {
        document.getElementById('capturecanvas').getContext('2d').drawImage(videoCapture, 0, 0, 200, 200);

        document.getElementById('capturecanvas1').getContext('2d').drawImage(videoCapture, 0, 0, 200, 200);
        document.getElementById('capturecanvas2').getContext('2d').drawImage(videoCapture, 0, 0, 200, 200);
        document.getElementById('capturecanvas3').getContext('2d').drawImage(videoCapture, 0, 0, 200, 200);
    });

// Take Pictures Javascript


// 3 Short GIF

const DEFAULT_RECORD_TEXT = 'Record a 2 seconds animated gif';
let globalStream;

navigator.mediaDevices.getUserMedia({
  video: true,
}).then(async function(stream) {

  var video = document.querySelector('.video_gif');

  video.srcObject = globalStream = stream;
  video.onloadedmetadata = function(e) {
    video.play();
    document.querySelector('button').innerText = DEFAULT_RECORD_TEXT;
  };
});

let recording = false;

function snap() {
  var video = document.querySelector('.video_gif');
  var canvas = document.createElement("canvas");
  const coefficient = 360/video.videoWidth;
  canvas.width = video.videoWidth*coefficient;
  canvas.height = video.videoHeight*coefficient;

  canvas.getContext('2d').drawImage(video, 0, 0, video.videoWidth, video.videoHeight, 0, 0, canvas.width, canvas.height);
  return canvas.getContext('2d');
}

function record() {
  if(!globalStream || recording) return;

  recording = true;
  document.querySelector('button').innerText = 'Get ready to record...';
  
  var encoder = new GIFEncoder();
  encoder.setRepeat(0);
  encoder.setDelay(100);
  encoder.start();

  document
    .querySelector('button')
    .innerText = 'Recording... (2 seconds left)';
  setTimeout(() => {
    document
      .querySelector('button')
      .innerText = 'Recording... (1 seconds left)';
  }, 1000);

  let frames = 20;
  encoder.addFrame(snap());
  frames--;
  let inter = setInterval(() => {
    encoder.addFrame(snap());
    frames--;
    if(frames<=0) {
      clearInterval(inter);
      encoder.finish();
      document
        .querySelector('button')
        .innerText = DEFAULT_RECORD_TEXT;
      recording = false;
      var binary_gif = encoder.stream().getData();
      var data_url = 'data:image/gif;base64,'+encode64(binary_gif);
      document.querySelector('#preview').innerHTML = `<a href=${data_url} download="gifit.gif" titl="Click to download the gif!"><img src="${data_url}"/></a>`;
      document.querySelector('#preview1').innerHTML = `<a href=${data_url} download="gifit.gif" titl="Click to download the gif!"><img src="${data_url}"/></a>`;
      document.querySelector('#preview2').innerHTML = `<a href=${data_url} download="gifit.gif" titl="Click to download the gif!"><img src="${data_url}"/></a>`;
    }
  }, 100);
}
// 3 Short GIF