<!DOCTYPE html>
<html lang="zh-EN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
<meta name="author" content="www.adminbuy.cn K125" />
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/bootstrap.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/swiper.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/animate.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/font_2461737_iw5mgbjsy8.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/hover-min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/video-js.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/share.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/base1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/common1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/index1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/aboutus1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/news_list1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/album_list.css">
<script src="{pboot:sitedomain}/style/js/jquery.min.js"></script>
<script src="{pboot:sitedomain}/style/js/swiper.min.js"></script>
<script src="{pboot:sitedomain}/style/js/bootstrap.min.js"></script>
<script src="{pboot:sitedomain}/style/js/count.js"></script>
<script src="{pboot:sitedomain}/style/js/video.min.js"></script>
<script src="{pboot:sitedomain}/style/js/social-share.min.js"></script>
<script src="{pboot:sitedomain}/style/js/swiper.animate1.0.3.min.js"></script>
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/baguetteBox.min.css">
<script src="{pboot:sitedomain}/style/js/baguetteBox.min.js"></script>
</head>
<body>
<!-- ?????? -->
<div class="headsbox">
  <div class="heads">
    <div class="container">
      <div class="row justify-content-between align-items-center headsbig">
        <div class="headlogo"> <a href="{pboot:sitedomain}/" class="headlogo_box">
          <div class="headlogo_boximg"> <img src="{pboot:sitelogo}" alt="{pboot:companyname}"> </div>
          </a> </div>
        <div class="headnav">
          <div class="headnav_item {pboot:if(0=='{sort:tcode}')} active {/pboot:if}"> <a href="{pboot:sitedomain}/" class="headnav_itema "> <span>??????</span> </a> </div>
          {pboot:nav}
          <div class="headnav_item {pboot:if('[nav:scode]'=='{sort:tcode}')} active {/pboot:if}"> <a href="[nav:link]" class="headnav_itema"> <span>[nav:name]</span> {pboot:if([nav:soncount]>0)}<i class="iconfont icon-xiangshang"></i>{/pboot:if} </a> {pboot:if([nav:soncount]>0)}
            <div class="headnav_qtxl">
              <div class="headnav_qtxl_box"> {pboot:2nav parent=[nav:scode]} <a href="[2nav:link]" class="headnav_qtxl_boxitem">[2nav:name]</a> {/pboot:2nav} </div>
            </div>
            {/pboot:if} </div>
          {/pboot:nav} </div>
        <div class="headqt">
          <div class="headqt_ss"> <i class="iconfont icon-sousuo"></i>
            <div class="headqt_ssdw">
              <form method="get" action="{pboot:scaction}" class="headqt_ssdwbox">
                <input type="text" name="keyword" value="" id="top-keywords" class="headqt_ssdwboxsr" placeholder="??????">
                <input type="submit" name="" id="" class="headqt_ssdwboxtj" value="">
              </form>
            </div>
          </div>
          <div class="mb_btn"> <i class="iconfont icon-daohang"></i> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ?????? -->
<div class="headsbox_zw"></div>
<script>
        // ??????????????????
        $(".headnav_item.on").hover(function () {
            $(this).children(".headnav_cqxl").stop().slideDown()
        }, function () {
            $(this).children(".headnav_cqxl").stop().slideUp()
        })
        // ??????
        $(".headqt_yy").hover(function () {
            $(this).children(".headqt_yydw").stop().slideDown()
        }, function () {
            $(this).children(".headqt_yydw").stop().slideUp()
        })
        // ??????????????????
        $(".headnav_item").hover(function () {
            $(this).children('.headnav_qtxl').stop().slideDown()
        }, function () {
            $(this).children('.headnav_qtxl').stop().slideUp()
        })
        // ??????

        $('.headqt_ss i').click(function () {
            if ($(this).hasClass('icon-sousuo')) {
                $(this).removeClass('icon-sousuo')
                $(this).addClass('icon-guanbi')
                $(this).siblings('.headqt_ssdw').toggleClass('on')
            } else {
                $(this).addClass('icon-sousuo')
                $(this).removeClass('icon-guanbi')
                $(this).siblings('.headqt_ssdw').toggleClass('on')
            }
        })
    </script> 
<!-- banner -->
<div class="banner">
  <div class="swiper-container banner_container">
    <div class="swiper-wrapper banner_wrapper"> {pboot:slide gid=1}
      <div class="swiper-slide banner_slide">
        <div class="banner_slideitem"> <img src="[slide:pic]" alt="[slide:title]" class="banner_slideitempc"> <img src="[slide:pic]" alt="[slide:title]" class="banner_slideitemmb"> 
          <!-- ?????? -->
          <div class="banner_slideitemtxt">
            <div class="banner_slideitemtxt_box">
              <div class="container">
                <div class="banner_boxtxt">
                  <div class="banner_boxtxth">
                    <h2 class="ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s"
                        swiper-animate-delay="0.2s">[slide:title]</h2>
                  </div>
                  <div class="banner_boxtxtp">
                    <p class="ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s"
                        swiper-animate-delay="0.4s">[slide:subtitle]</p>
                  </div>
                  <div class="banner_boxtxta ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s"
                      swiper-animate-delay="0.6s"> <a href="[slide:link]"
                        class="banner_boxtxta_box hvr-icon-forward"> <span>????????????</span> <i
                          class="iconfont iconshangjiantou hvr-icon"></i> </a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/pboot:slide} </div>
  </div>
</div>
<!-- banner?????? -->
<div class="bannergl">
  <div class="container">
    <div class="row bannerglbox">
      <div class="bannerglbox_l">
        <div class="bannerglbox_ldq"> 0 </div>
        <div class="bannerglbox_lx"></div>
        <div class="bannerglbox_lzs"> 2 </div>
        <div class="bannerglbox_lp"> Reliable Power Solution </div>
      </div>
      <div class="bannerglbox_c"> <i class="iconfont icon-shubiao" id="banerbtn"></i> </div>
      <div class="bannerglbox_r">
        <div class="bannerglbox_rpre "> <i class="iconfont icon-xiangzuo"></i> </div>
        <div class="bannerglbox_rx"> </div>
        <div class="bannerglbox_rnext"> <i class="iconfont icon-xiangyou-copy"></i> </div>
      </div>
    </div>
  </div>
</div>
<script>
    var bannerSwiper = new Swiper('.banner_container', {
      spaceBetween: 0,
      centeredSlides: true,
      // autoplay: {
      //     delay: 3000,
      //     disableOnInteraction: false,
      // },
      navigation: {
        nextEl: '.bannerglbox_rnext',
        prevEl: '.bannerglbox_rpre',
      },
      on: {
        init: function () {
          swiperAnimateCache(this); //?????????????????? 
          swiperAnimate(this); //???????????????????????????
          var dqys1 = this.activeIndex + 1
          var zys1 = this.slides.length
          var bannerh = this.slides.find('.banner_boxtxth h2').html()
          $('.bannerglbox_ldq').html(dqys1)
          $('.bannerglbox_lzs').html(zys1)
          $('.bannerglbox_lp').html(bannerh)
        },
        slideChangeTransitionEnd: function () {
          swiperAnimate(this);
        },
        slideChangeTransitionStart: function () {
          var dqys1 = this.activeIndex + 1
          $('.bannerglbox_ldq').html(dqys1)
          var bannerh = $('.banner_slide').eq(dqys1 - 1).find('.banner_boxtxth h2').html()
          $('.bannerglbox_lp').html(bannerh)
        },
      },
    });

    $(window).resize(function () {
      var windw = $(window).width();
      var wh = $(window).height();
      var headh = $('.headsbox_zw').height();
      var bannerh = wh - headh
      if (windw < 1200) {
        $('.bannerglbox').addClass('on')
        if (bannerh < 500) {
          $('.banner').css('height', '700px');
        } else {
          $('.banner').css('height', 'auto');
        }
      } else {
        if (bannerh < 500) {
          $('.banner').css('height', '700px');
        } else {
          $('.banner').css('height', bannerh);
        }
      }
    })
    $(window).resize();
    $(window).scroll(function () {
      var windw = $(window).width();
      var wins = $(window).scrollTop()
      if (windw > 1200) {
        wins > 20 ? $('.bannerglbox').addClass('on') : $('.bannerglbox').removeClass('on')
      }
    });
    $(window).scroll();
  </script> 
<!-- ?????? -->
<div class="products">
  <div class="container">
  {pboot:sort scode=5}
    <div class="row justify-content-between align-items-center productsbox">
      <div class="productsbox_l">
        <div class="productsbox_lx"></div>
        <div class="productsbox_lh">[sort:name]</div>
      </div>
      <div class="productsbox_r">  <a href="[sort:link]" class="productsbox_ra hvr-sweep-to-right"> ????????????+ </a>  </div>
    </div>
    {/pboot:sort}
    <div class="row">
      <div class="productsboxb"> 
        <!-- ???????????? -->
        <div class="products_prev"> <i class="iconfont icon-xiangzuo"></i> </div>
        <div class="products_next"> <i class="iconfont icon-xiangyou-copy"></i> </div>
        <div class="swiper-container gallery-thumbs productst_thumbs">
          <div class="swiper-wrapper productst_wrapper"> {pboot:nav parent=5}
            <div class="swiper-slide productst_slide"> <a href="[nav:link]" target="_blank"
                  class="productst_slidea">
              <div class="productst_slideaimg"> <img src="[nav:ico]" alt="[nav:name]"> </div>
              <div class="productst_slideah">[nav:name]</div>
              <div class="productst_slideatext">[nav:description lencn=50]</div>
              <!-- ?????? -->
              <div class="productst_slidedw">
                <div class="productst_slidedwbox" style="background-image: url([nav:pic]);">
                  <div class="productst_slidedwboxbig">
                    <div class="productst_slidedwbox_h">[nav:name]</div>
                    <div class="productst_slidedwbox_x"> </div>
                    <div class="productst_slidedwbox_p"> [nav:description lencn=50] </div>
                    <div class="productst_slidedwbox_a hvr-shrink"> ???????????? </div>
                  </div>
                  <!-- ?????? -->
                  <div class="productst_slidedwboxdw"> <img src="{pboot:sitedomain}/style/images/sanjiaoxing.png" alt="sanjiao"> </div>
                </div>
              </div>
              </a> </div>
            {/pboot:nav} </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
      var productstGalleryThumbs = new Swiper('.productst_thumbs', {
        slidesPerView: 2,
        slidesPerColumn: 2,
        spaceBetween: 10,
        slidesPerColumnFill: 'row',
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
          300: { //???????????????????????????768
            spaceBetween: 1,
            slidesPerView: 1,
            slidesPerColumn: 1,
          },
          768: { //???????????????????????????768
            slidesPerView: 1,
            slidesPerColumn: 1,
          },
          992: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 10,
          },
          1200: {
            slidesPerView: 3,
            slidesPerColumn: 1,
            spaceBetween: 10,
          }
        }
      });
      var productsbGalleryTop = new Swiper('.productsb_top', {
        effect: 'fade',
        spaceBetween: 10,
        navigation: {
          nextEl: '.products_next',
          prevEl: '.products_prev',
        },
        thumbs: {
          swiper: productstGalleryThumbs
        }
      });
      $('.productst_thumbs .productst_slide').mouseover(function () {
        var prdIndex = $(this).index()
        productsbGalleryTop.slideTo(prdIndex, 500, false);
      })
      // ????????????
      $('#banerbtn').on('click', function (e) {
        $('html, body').animate({
          scrollTop: ($('.products').offset().top - 80)
        }, 800);
      });
    </script> 
<!-- ???????????? -->
<div class="rmproduct">
  <div class="container">
    <div class="row justify-content-center rmproduct_title"> ???????????? </div>
    <div class="row row-cols-1 rmproduct_box"> 
      <!-- ???????????? -->
      <div class="rmproduct_next"> <i class="iconfont icon-xiangyou-copy "></i> </div>
      <div class="rmproduct_prev"> <i class="iconfont icon-xiangzuo"></i> </div>
      <div class="swiper-container rmproduct_container">
        <div class="swiper-wrapper rmproduct_wrapper"> {pboot:list scode=5 num=15 order=sorting}
          <div class="swiper-slide rmproduct_slide"> <a href="[list:link]" class="rmproduct_slidea">
            <div class="rmproduct_slidea_img"> <img src="[list:ico]" alt="[list:title]"> </div>
            <div class="rmproduct_slidea_txt">[list:title]</div>
            </a> </div>
          {/pboot:list} </div>
      </div>
    </div>
    <div class="row justify-content-center rmproduct_more"> {pboot:sort scode=5} <a href="[sort:link]" class="hvr-sweep-to-right"> ????????????+ </a> {/pboot:sort} </div>
  </div>
</div>
<script>
      var rmproductSwiper = new Swiper('.rmproduct_container', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
          nextEl: '.rmproduct_next',
          prevEl: '.rmproduct_prev',
        },
        breakpoints: {
          768: { //???????????????????????????320
            slidesPerView: 3,
            spaceBetween: 10,
          },
          992: { //???????????????????????????768 
            slidesPerView: 4,
            spaceBetween: 20,
          },
          1200: { //???????????????????????????1280
            slidesPerView: 5,
            spaceBetween: 20,
          }
        }
      });
    </script> 
<!-- ???????????? -->
<div class="about">
  <div class="aboutl" style="background-image: url({pboot:sitedomain}/style/images/a1.jpg);"> </div>
  <div class="aboutr"> </div>
  <!-- ?????? -->
  <div class="aboutdw">
    <div class="aboutdw_box">
      <div class="container">
        <div class="row  justify-content-end">
          <div class="aboutdw_boxr">
            <div class="aboutdw_boxr_box">
              <div class="aboutdw_boxr_boxh">????????????</div>
              <div class="aboutdw_boxr_boxp"> {pboot:content id=40}
                [content:content drophtml=1 dropblank=1 lencn=200]
                {/pboot:content} </div>
              <div class="aboutdw_boxr_gd">
                <div class="aboutdw_boxr_gdvideo hvr-icon-pulse-shrink"> <i class="iconfont icon-shipin hvr-icon"></i> <span>??????????????????</span> </div>
                {pboot:sort scode=1} <a class="aboutdw_boxr_gdmore hvr-icon-forward" href="[sort:link]"> <span>????????????</span> <i class="iconfont icon-you hvr-icon"></i> </a> {/pboot:sort} </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ???????????? -->
<div class="videos">
  <div class="videos_box"> 
    <!-- poster???????????? vjs-big-play-centered???????????? preload????????? controls????????? muted??????vjs-fluid?????????????????????-->
    <video id="my-video" class="video-js vjs-big-play-centered vjs-fluid" controls preload="auto" width="" height=""
          poster="" data-setup="{  }">
      <source
            src="{label:video}"
            type="video/mp4">
    </video>
  </div>
  <!-- ?????? -->
  <div class="videos_zhezhao"> <img src="{pboot:sitedomain}/style/images/close.png" alt="close"> </div>
</div>
<script>
      var myPlayer = videojs('my-video');
      $('.aboutdw_boxr_gdvideo').click(function (e) {
        $('.videos').stop().show()
        myPlayer.play();
        e.stopPropagation();
      })
      $('.videos_zhezhao').click(function (e) {
        $('video').trigger('pause');
        myPlayer.currentTime(0);
        $('.videos').stop().hide()
        e.stopPropagation();
      })
    </script> 
<!-- ?????? -->
<div class="shuzhi">
  <div class="container">
    <div class="row row-cols-2 row-cols-md-5 numCount ">
      <div class="col shuzhi_item">
        <div class="shuzhi_itembox">
          <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="0" data-endval="11" data-speed="1.5"
                  data-decimals="0" id="mumC5">11</span> <sup></sup> </div>
          <div class="shuzhi_itembox"> ????????????????????? </div>
        </div>
      </div>
      <div class="col shuzhi_item">
        <div class="shuzhi_itembox">
          <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="1000" data-endval="20" data-speed="1.5"
                  data-decimals="0" id="mumC1">20</span> <sup>M</sup> </div>
          <div class="shuzhi_itembox"> ????????????????????????????????? </div>
        </div>
      </div>
      <div class="col shuzhi_item">
        <div class="shuzhi_itembox">
          <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="0" data-endval="105" data-speed="1.5"
                  data-decimals="0" id="mumC2">105</span> <sup></sup> </div>
          <div class="shuzhi_itembox">?????????????????????</div>
        </div>
      </div>
      <div class="col shuzhi_item">
        <div class="shuzhi_itembox">
          <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="400000" data-endval="900" data-speed="1"
                  data-decimals="0" id="mumC3">900</span> <sup>+</sup> </div>
          <div class="shuzhi_itembox"> ?????????????????????????????? </div>
        </div>
      </div>
      <div class="col shuzhi_item">
        <div class="shuzhi_itembox">
          <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="0" data-endval="2000" data-speed="1.5"
                  data-decimals="0" id="mumC4">2000</span> <sup>+</sup> </div>
          <div class="shuzhi_itembox"> ???????????? </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
      var countCXArr = [];
      var countCX = function () {
        $('.numCount').each(function (i, dom) {
          if (countCXArr[i] && countCXArr[i] === true) {
            return;
          }
          var sT;
          var ncTop;
          sT = $(window).scrollTop();
          ncTop = $(dom).offset().top;
          var id, decimals, startVal, endVal, duration;
          if (sT > ncTop - $(window).height() && sT < ncTop) {
            $(dom).find('.numCX').each(function () {
              id = $(this).attr('id');
              decimals = $(this).attr('data-decimals'),
                startVal = $(this).attr('data-startVal'),
                endVal = $(this).attr('data-endVal'),
                duration = $(this).attr('data-speed');
              new CountUp(id, startVal, endVal, decimals, duration, {
                useEasing: true, //??????
                separator: '' //???????????????
              }).start();
              // target???????????????id, startVal????????????????????????, endVal????????????????????????, decimals??????????????????????????????0, duration??????????????????????????????????????????2, options????????????????????????
              countCXArr[i] = true;
            })
          }
        })
      }
      countCX();
      $(window).on("scroll", function () {
        countCX();
      })
    </script> 
<!-- ???????????? --> 

<script>
      var lnyslGalleryThumbs = new Swiper('.lnysl_thumbs', {
        slidesPerView: 'auto',
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        observer: true,
        observeParents: true,
        breakpoints: {
          0: { //???????????????????????????320
            spaceBetween: 0,
            slidesPerView: 2,
            slidesPerColumnFill: 'row',
            slidesPerColumn: 3,
          },
          768: { //???????????????????????????320
            spaceBetween: 0,
            slidesPerView: 2,
            slidesPerColumnFill: 'row',
            slidesPerColumn: 3,
          },
          992: { //???????????????????????????768 
            spaceBetween: 0,
            slidesPerView: 1,
            slidesPerColumnFill: 'row',
            slidesPerColumn: 6,
          },
          1200: { //???????????????????????????1280
            spaceBetween: 0,
            slidesPerView: 1,
            slidesPerColumnFill: 'row',
            slidesPerColumn: 6,
          }
        }
      });
      var lnysrGalleryTop = new Swiper('.lnysr_top', {
        autoHeight: true,
        spaceBetween: 10,
        navigation: {
          nextEl: '.lnysbox_lbtnnext',
          prevEl: '.lnysbox_lbtnper',
        },
        thumbs: {
          swiper: lnyslGalleryThumbs
        },
        on: {
          init: function (swiper) {
            var bannerswIndex = this.activeIndex
            $('.lnysbox_rboxdw_boxs>div').eq(bannerswIndex).addClass('on').siblings().removeClass(
              'on')
          },
          slideChangeTransitionStart: function () {
            var bannerswIndex2 = this.activeIndex
            $('.lnysbox_rboxdw_boxs>div').eq(bannerswIndex2).addClass('on').siblings().removeClass(
              'on')
          },
        },
      });
      $('.lnysbox_l .lnysl_slide ').mouseover(function () {
        var llIndex = $(this).index()
        lnysrGalleryTop.slideTo(llIndex, 500, false);
        $('.lnysbox_rboxdw_boxs>div').eq(llIndex).addClass('on').siblings().removeClass('on')
      })
    </script> 
<!-- ?????? -->
<div class="news">
  <div class="container">
    <div class="row justify-content-between align-items-center newstitle">
      <div class="productsbox_l">
        <div class="productsbox_lx"> </div>
        <div class="productsbox_lh">????????????</div>
      </div>
      <div class="newstitler">
        <div class="newstitler_box"> {pboot:nav parent=2} <a href="[nav:link]" target="_blank">[nav:name]</a> {/pboot:nav} </div>
        <div class="newstitler_a"> {pboot:sort scode=2} <a href="[sort:link]"> <i class="iconfont icon-xiangyou-copy"></i> </a> {/pboot:sort} </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-2 newsct"> {pboot:list scode=2 num=1 isico=1} <a class="newsct_l" href="[list:link]" target="_blank">
      <div class="newsct_lsj">[list:date style="Y-m-d"]</div>
      <div class="newsct_lh">[list:title]</div>
      <div class="newsct_lp">[list:description drophtml=1 dropblank=1 lencn=60]</div>
      <div class="newsct_limg"> <img src="[list:ico]" alt="[list:title]"> </div>
      </a> {/pboot:list}
      <div class="newsct_r"> {pboot:list scode=2 num=3 order=sorting} <a href="[list:link]" target="_blank"
              class="newsct_ritem hvr-underline-from-left">
        <div class="newsct_ritembox">
          <div class="newsct_ritembox_title">
            <div class="newsct_ritembox_titleh">[list:title]</div>
            <div class="newsct_ritembox_titlesj">[list:date style="Y-m-d"]</div>
          </div>
          <div class="newsct_ritembox_p">[list:description drophtml=1 dropblank=1 lencn=80]</div>
        </div>
        </a> {/pboot:list} </div>
    </div>
  </div>
</div>
<!-- ?????? --> 
<div class="foot">
    <div class="container">
        <div class="row row-cols-3 foot_title">
            <a href="tel:{pboot:companymobile}">
                <div class="foot_title_item">
                    <div class="foot_title_itemi"> <i class="iconfont icon-mobilephone_fill"></i> </div>
                    <div class="foot_title_itemtxt">
                        <p>{pboot:companymobile}</p>
                        <span>??????</span>
                    </div>
                </div>
            </a>
            <a href="mailto:{pboot:companyemail}">
                <div class="foot_title_item">
                    <div class="foot_title_itemi"> <i class="iconfont icon-mail"></i> </div>
                    <div class="foot_title_itemtxt">
                        <p>{pboot:companyemail}</p>
                        <span>??????</span>
                    </div>
                </div>
            </a>
            {pboot:sort scode=11}
            <a href="[sort:link]" target="_blank">
                <div class="foot_title_item">
                    <div class="foot_title_itemi"> <i class="iconfont icon-message_fill"></i> </div>
                    <div class="foot_title_itemtxt">
                        <p>{pboot:companyemail}</p>
                        <span>??????</span>
                    </div>
                </div>
            </a>
            {/pboot:sort}
        </div>
        <div class="row foot_ct">
            <div class="col-12 col-lg-auto foot_cl"> <a class="foot_cllogo">
                    <div class="foot_cllogoimg"> <img src="{pboot:sitelogo}" alt="{pboot:companyname}"> </div>

                </a>
                <div class="foot_fx"> </div>
            </div>
            <div class="col-12 col-lg foot_ctbox">
                <div class="row-cols-1  row-cols-lg-4 row justify-content-end justify-content-md-start">
                    {pboot:nav num=4}
                    <div class="foot_ctbox_item col">
                        <div class="foot_ctbox_itemtit"> <a href="[nav:link]">[nav:name]</a> <i
                                class="iconfont iconplus-line foot_ctbox_itemtitbtn"></i> </div>
                        <div class="foot_ctbox_itemct">
                            {pboot:2nav parent=[nav:scode]}
                            <a href="[2nav:link]" class="foot_ctbox_itemcta">[2nav:name]</a>
                            {/pboot:2nav}
                        </div>
                    </div>
                    {/pboot:nav}

                </div>
            </div>
        </div>
        <div class="row justify-content-sm-between foot_db justify-content-center">
            <div class="foot_dbl">
                {pboot:sitecopyright}
                <a href="https://beian.miit.gov.cn" target="_blank">{pboot:siteicp}</a>
            </div>
	 <div class="fr"><a href="{pboot:sitedomain}/sitemap.xml" target="_blank">XML??????</a> ???????????????<a href="https://www.adminbuy.cn/" target="_blank" title="????????????">????????????</a></div>
        </div>
    </div>
</div>
<script>
    $('.foot_ctbox_itemtitbtn').click(function () {
        // ????????????????????????
        $(this).toggleClass('iconminus iconplus-line')
        $('.foot_ctbox_itemct:visible').slideUp().siblings('.foot_ctbox_itemtit').find('i').addClass('iconplus-line').removeClass('iconminus')
        var subnav1 = $(this).parents('.foot_ctbox_item').find('.foot_ctbox_itemct')
        // console.log(subnav.is(':hidden'));
        if (subnav1.is(':hidden')) {
            subnav1.slideDown()
        } else {
            subnav1.slideUp()
        };
    })
</script>

<!-- ???????????? -->

<div class="a_txt">
    <div class="div1 a_closed"></div>
    <div class="div2"> <a href="javascript:;" class="a_closed"> <img src="{pboot:sitedomain}/style/images/close.png"
                width="22"></a> </div>
    <div class="div3">
        <ul>
            <li>
                <div class="mblink_item">
                    <a href="{pboot:sitedomain}/" class="mblink_itema">
                        <div class="mblink_itematxt">??????</div>
                    </a>
                </div>
                <div class="a_txt2"> </div>
            </li>

            {pboot:nav}
            <li>
                <div class="mblink_item">
                    <a href="[nav:link]" class="mblink_itema">
                        <div class="mblink_itematxt">[nav:name]</div>
                    </a>
                    {pboot:if([nav:soncount]>0)}
                    <i class="mblink_itemi iconfont icon-jia"></i>
                    {/pboot:if}
                </div>
                {pboot:if([nav:soncount]>0)}
                <div class="a_txt2">
                    {pboot:2nav parent=[nav:scode]}
                    <a href="[2nav:link]">[2nav:name]</a>
                    {/pboot:2nav}
                </div>
                {/pboot:if}
            </li>
            {/pboot:nav}

            <div class="clear"></div>
        </ul>
    </div>
</div>
<script>
    //?????????????????????????????????
    $(".mb_btn").click(
        function () {
            $(".a_txt").stop(true, false).delay(0).animate({
                width: "100%",
                height: "100%"
            }, 0);
            $(".a_txt").find(".div1").stop(true, false).delay(0).animate({
                opacity: "0.95"
            }, 500);
            $(".a_txt").find(".div2").stop(true, false).delay(0).animate({
                opacity: "1"
            }, 500);
            $(".a_txt").find(".div3").stop(true, false).delay(0).animate({
                right: "0"
            }, 500);
        }
    )
    //???????????????????????????
    $(".a_closed").click(
        function () {
            $(".a_txt").stop(true, false).delay(500).animate({
                width: "0",
                height: "0"
            }, 0);
            $(".a_txt").find(".div1").stop(true, false).delay(0).animate({
                opacity: "0"
            }, 500);
            $(".a_txt").find(".div2").stop(true, false).delay(0).animate({
                opacity: "0"
            }, 500);
            $(".a_txt").find(".div3").stop(true, false).delay(0).animate({
                right: "-80%"
            }, 500);
        }
    )
    // ???????????????????????????
    $('.mblink_item>i').click(function () {
        // ????????????????????????
        $(this).toggleClass('icon-jia')
        $(this).toggleClass('icon-jian')
        $('.a_txt2:visible').slideUp().siblings('.mblink_item').find('i').addClass('icon-jian')
        var subnav = $(this).parents('li').find('.a_txt2')
        // console.log(subnav.is(':hidden'));
        if (subnav.is(':hidden')) {
            subnav.slideDown()
        } else {
            subnav.slideUp()
        };
    })
</script>
<!--????????????-->
<div class="cndns-right">

    <div class="cndns-right-meau meau-top" id="top-back"> <a href="javascript:" class="cndns-right-btn"
            onclick="topBack()"> <span class="demo-icon icon-up-open-big">&#xe818;</span></a> </div>
</div>
<div id="top-backs" class="daotop">
    <div> <a href="javascript:" class="cndns-right-btn" onclick="topBack()"> <span class="iconfont">&#xe609;</span>
        </a> </div>
</div>
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/zxkf.css">
<script type="text/javascript">
    //??????????????????
    $('.cndns-right').hide()
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $(".cndns-right").fadeIn();
        } else {
            $(".cndns-right").fadeOut();
        }
    })
    //????????????
    function topBack() {
        $('body,html').animate({
            scrollTop: 0
        }, 300);
    }
    $('.cndns-right .cndns-right-btn:first').css({
        border: "none"
    });
</script>
</div>
</body>

</html>
<?php return array (
  0 => 'D:/phpstudy_pro/WWW/pboot02.com/template/default/head.html',
  1 => 'D:/phpstudy_pro/WWW/pboot02.com/template/default/foot.html',
); ?>