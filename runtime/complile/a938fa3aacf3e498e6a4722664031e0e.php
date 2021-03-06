<!DOCTYPE html>
<html lang="zh-EN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{sort:title}</title>
<meta name="keywords" content="{sort:keywords}">
<meta name="description" content="{sort:description}">
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
<!-- ???????????? -->
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/product_list1.css">
{pboot:sort scode={sort:tcode}}
<div class="nybg" style="background-image: url([sort:pic]);">
  <div class="container">
    <div class="row align-items-center nybgt">
      <div class="nybgt_txt">
        <div class="nybgt_txth"> [sort:name] </div>
        <div class="nybgt_txtx"></div>
      </div>
    </div>
    <div></div>
  </div>
  <div class="nybgb">
    <div class="container">
      <div class="row align-items-center nybgbbig">
        <div class="nymbx">{pboot:position}</div>
      </div>
    </div>
  </div>
</div>
{/pboot:sort} 

<!-- ?????????????????? -->
<div class="nycqlb">
  <div class="container">
    <div class="row nycqlbbox">
      <div class="col-12 col-lg-3 nycqlbl order-lg-1 order-12">
        <div class="nycqlbldw"> </div>
        <div class="nycqlblbox "> {pboot:nav parent={sort:tcode}}
          <div class="nycqlblbox_item">
            <div class="nycqlblbox_itemtitle"> <a class="nycqlblbox_itemtitlel {pboot:if('[nav:scode]'=='{sort:scode}')} on {/pboot:if}" href="[nav:link]"> <i class="iconfont icon-double-circle"></i><span>[nav:name]</span> </a>
              <div class="nycqlblbox_itemtitlelr {pboot:if('[nav:scode]'=='{sort:scode}')} on {/pboot:if}"> <span> <i class="iconfont icon-xiangxia"></i></span> </div>
            </div>
            <div class="nycqlblbox_itemct" > {pboot:2nav parent=[nav:scode]} <a href="[2nav:link]" class="nycqlblbox_itemcta "> [2nav:name] </a> {/pboot:2nav} </div>
          </div>
          {/pboot:nav} </div>
      </div>
      <div class="col-12 col-lg-9  nycqlbr pb120  order-lg-12 order-1">
        <div class="row nycqlbrbox row-cols-1">
          <div class="nycqlbrbox_title">
            <div class="nycqlbrbox_titlet">
              <div class="nycqlbrbox_titleth"> {sort:name} </div>
              <div class="nycqlbrbox_titletss">
                <form method="get" action="{pboot:scaction}" class="nycqlbrbox_titletssbox">
                  <input type="text" name="keyword" value="" id="top-keywords" class="nycqlbrbox_titletssbox_sr" placeholder="??????">
                  <input name="" type="submit" class="nycqlbrbox_titletssbox_tj" style="background-image: url({pboot:sitedomain}/style/images/searchb.png);" value="">
                </form>
              </div>
            </div>
            <div class="nycqlbrbox_titleb"></div>
          </div>
          <div class="nycqlbrbox_ct"> {pboot:list num=9} <a href="[list:link]" class="nycqlbrbox_cta" target="_blank">
            <div class="nycqlbrbox_ctaimg"> <img src="[list:ico]" alt="[list:title]"> </div>
            <div class="nycqlbrbox_ctatxt">
              <div class="nycqlbrbox_ctatxtct"> [list:title] </div>
            </div>
            </a> {/pboot:list} </div>
          
          {pboot:if({page:rows}>0)}
      <div class="pagebar">
        <div class="pagination">
          <a class="page-item page-link" href="{page:pre}" title="?????????"><<</a>
          {page:numbar}
          <a class="page-item page-link" href="javascript:;" title="?????????/?????????">{page:current}/{page:count}</a>
          <a class="page-item page-link" href="{page:next}" title="?????????">>></a>
        </div>
      </div>	
    {else}
      <div class="tac text-secondary">??????????????????????????????</div>
    {/pboot:if}
    
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(window).resize(function () {
        var winw1 = $(window).width();
        var gssmboxw1 = $('.nycqlbbox').width()
        var gssmboxdw1 = (winw1 - gssmboxw1) / 2
        var gssmboxl1 = $('.nycqlbl').width()
        $('.nycqlbldw').css('width', gssmboxdw1 + gssmboxl1)
    })
    $(window).resize();

    $('.nycqlblbox_itemtitlelr').click(function () {
        // ????????????????????????
        $(this).toggleClass('on on1')
        $('.nycqlblbox_itemct:visible').slideUp().siblings('.nycqlblbox_itemtitle').find('.nycqlblbox_itemtitlelr').removeClass('on').addClass('on1')
        var subnav1 = $(this).parents('.nycqlblbox_item').find('.nycqlblbox_itemct')
        // console.log(subnav.is(':hidden'));
        if (subnav1.is(':hidden')) {
            subnav1.slideDown()
        } else {
            subnav1.slideUp()
        };
    })
</script> 

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