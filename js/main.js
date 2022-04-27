$(document).ready(function(){
    $('nav').hover(function(){
        // 서브 내려옴
        $('.sub').stop().slideDown()
        // 서브배경 내려옴
        $('.sub_bg').stop().slideDown()
    },function(){
        // 서브 올라감
        $('.sub').stop().slideUp()
        // 서브배경 올라감
        $('.sub_bg').stop().slideUp()
    });

    $('.sub_bg').hover(function(){
        // 서브 내려옴
        $('.sub').stop().slideDown()
        // 서브배경 내려옴
        $('.sub_bg').stop().slideDown()
    },function(){
        // 서브 올라감
        $('.sub').stop().slideUp()
        // 서브배경 올라감
        $('.sub_bg').stop().slideUp()
    });
    // 검색창
    $('.search a').click(function(){
        $('.search_area').stop().slideDown({
            duration:500,
            easing:"easeInOutCirc"
        });
    });
    $('.search_area > a').click(function(){
        $('.search_area').stop().slideUp();
    });

    // 비주얼swiper
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 250,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        
    });

    // 해외여행 영역
    $('section.foreign .f_btn ul li').click(function(e){
        e.preventDefault();
        var btnNum=$(this).index();
        // 만약 클릭한 버튼에 active속성이 없다면
        // hasClass() : 클래스 속성을 갖고 있는지 검사
        if(!($(this).hasClass('active'))){
            $('section.foreign .f_btn ul li').removeClass('active');
            $(this).addClass('active');
            $('section.foreign .explain ul li p span').removeClass('active');
            vdomove1(btnNum);
            desmove1(btnNum);
        }
    });
    function vdomove1(btnNum){
        var vdowidth1=$('section.foreign .vdo').width();
        var moving1=-(btnNum*vdowidth1);
        $('section.foreign .vdo .vdo_box').animate({
            left: moving1
        });
    }
    var currentDes1=$('section.foreign .explain ul li:first');
    var oldDes1=""

    function desmove1(btnNum){
        oldDes1=currentDes1;
        currentDes1=$('section.foreign .explain ul li').eq(btnNum);
        oldDes1.animate({
            opacity:0,
            top:-510
        },300,function(){
            oldDes1.css({
                opacity:0,
                top:510
            });
        });
        currentDes1.delay(1000).stop().animate({
            opacity:1,
            top:0
        },500);
    }
    
    $('section.foreign .f_btn ul .b3').click(function(){
        $('section.foreign .explain ul .ex3 p span').addClass('active');
    });
    $('section.foreign .f_btn ul .b4').click(function(){
        $('section.foreign .explain ul .ex4 p span').addClass('active');
    });

    // 테마여행
    $('.t1').addClass('active');
    $('.t2').removeClass('active');
    $('.k_theme').click(function(e){
        e.preventDefault();
        $('.t1').addClass('active');
        $('.t2').removeClass('active');
        $('.k_theme').addClass('active');
        $('.f_theme').removeClass('active');
    });
    $('.f_theme').click(function(e){
        e.preventDefault();
        $('.t2').addClass('active');
        $('.t1').removeClass('active');
        $('.f_theme').addClass('active');
        $('.k_theme').removeClass('active');
    });
    // 테마여행 슬라이드 배너 클릭시 맨위로 올라가는 것을 방지(링크속성 막음)
    $('section.theme .tab_slide_list a').click(function(e){
        e.preventDefault();
    });
    // 테마여행 슬라이더 스크롤 
    var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 200,
        navigation: {
          nextEl: ".mynext2",
          prevEl: ".myprev2",
        },
        scrollbar: {
            el: ".bar2",
            hide:false
        },
    });
    var swiper = new Swiper(".mySwiper3", {
        spaceBetween: 200,
        navigation: {
          nextEl: ".mynext3",
          prevEl: ".myprev3",
        },
        scrollbar: {
            el: ".bar3",
            hide:false
        },
    });

    // 국내여행 영역
    $('section.korea .k_btn ul li').click(function(e){
        e.preventDefault();
        var num=$(this).index();
        // hasClass() : 클래스 속성을 갖고 있는지 검사
        // 있다면 실행X, 없다면 실행O
        if(!($(this).hasClass('active'))){
            $('section.korea .k_btn ul li').removeClass('active');
            $(this).addClass('active');
            vdomove(num);
            desmove(num);
        }
    });
    
    var currentDes=$('section.korea .explain ul li:first');
    var oldDes="";

    function vdomove(num){
        var vdowidth=$('section.korea .vdo').width();
        var moving=-(num*vdowidth);
        $('section.korea .vdo .vdo_box').animate({
            left:moving
        });
    }
    function desmove(num){
        oldDes=currentDes;
        currentDes=$('section.korea .explain ul li').eq(num);
        oldDes.stop().animate({
            opacity:0,
            top:-510
        },300,function(){
            oldDes.css({
                opacity:0,
                top:510
            });
        });
        currentDes.delay(1000).stop().animate({
            opacity:1,
            top:0
        },500);
    }
    // a태그 속성 막기
    $('section.free a').click(function(e){
        e.preventDefault();
    });
    $('section.review a').click(function(e){
        e.preventDefault();
    });
    $('section.banner a').click(function(e){
        e.preventDefault();
    });
    $('section.last a').click(function(e){
        e.preventDefault();
    });
    $('footer').click(function(e){
        e.preventDefault();
    });

    // 패밀리사이트
    $('footer .family .fa_title a').click(function(){
        $('.fa_con').show();
    });
    $('footer .family .fa_con a img').click(function(){
        $('.fa_con').hide();
    });

    // Top탑 버튼
    $('.top').click(function(){
        $('html,body').animate({
            scrollTop:0
        });
    });
    // 전체메뉴
    $('.total_menu').click(function(e){
        e.preventDefault();
        $('body').addClass('active');
        $('.site').animate({
            left: 0
        },500,function(){
            navAni1();    
        });
    })
    $('.site .closebtn').click(function(){
        $('body').removeClass('active');
        $('.site').animate({
            left: "100%"
        },500,function(){
            navAniEnd();    
        });
    });

    // site_right 영역 사이즈 js
    // 윈도우의 가로길이에서 .site_right의 가로 길이 뺌
    // var siteWidth=$(window).width()-$('.site_left').width();
    // $('.site_right').css('width',siteWidth);
    function navAniEnd(){
        $('.site_menu > ul > li').css({
            'opacity':0,
            'margin-top':'50px'
        });
        $('.site_nav > ul > li').css({
            'opacity':0,
            'margin-top':'100px'
        });
        $('.site_banner > ul > li').css({
            'opacity':0,
            'margin-top':'50px'
        });
    }
    navAniEnd();
    // .site영역의 nav의 주메뉴 애니메이션
    function navAni1(){
        $('.site_menu > ul > li').each(function(){
            var liNum=$(this).index();
            $(this).delay(200*liNum).animate({
                'opacity':1,
                'margin-top':0
            });
        });
        $('.site_nav > ul > li').each(function(){
            var siteNum=$(this).index();
            $(this).delay(100*siteNum).animate({
                'opacity':1,
                'margin-top':'50px'
            });
        });
        $('.site_banner  ul > li').each(function(){
            var bannerNum=$(this).index();
            $(this).delay(200*bannerNum).animate({
                'opacity':1,
                'margin-top':0
            });
        });
    }
    $('.site_bg ul li').hide();
    $('.site_bg ul li:first').show();
    // .site영역의 .site_menu의 주메뉴에 마우스 오버하면 배경 과 서브메뉴 나타남
    $('.site_menu > ul > li > a').hover(function(){
        if(!($(this).hasClass('active'))){
            var siteNum=$(this).parent('li').index();
            // 배경바뀜
            $('.site_bg ul li').stop().fadeOut();
            $('.site_bg ul li').eq(siteNum).stop().fadeIn();
            // 글씨색변경
            $('.site_menu ul > li > a').removeClass('active');
            $(this).addClass('active');
            // 라인 애니메이션
            $('.site_menu ul > li > p').removeClass('active');
            $(this).next().addClass('active');
            // sub 슬라이드
            $('.site_menu .sub').hide();
            $(this).next().next().slideDown();
        }
    },function(){
        $(this).removeClass('active');
        $(this).next().next().slideUp();
        $(this).next().removeClass('active');
        $('.site_bg ul li').removeClass('active');
        $('.site_bg ul li:first').addClass('active');
    });
    
    // top버튼이 아래쪽에서 조금 위쪽에 위치되었다 있다가 홈페이지를 위로 올리면 (footer높이만큼) 브라우저 오른쪽아래에 고장되도록 하는 코드
    $(window).scroll(function(){
        // $('footer').offset().top: footer의 위쪽 위치값이 브라우저의 높이값고 떨어져있는 거리
        if($(window).scrollTop()+$(window).height()>=$('footer').offset().top){
            $('.top').addClass('active');
        }else{
            $('.top').removeClass('active');
        }

        var sTop=$(this).scrollTop();
        // top일때 사라짐
        if(sTop>150){
            $('.top').removeClass('active2');
        }else{
            $('.top').addClass('active2');
        }
    });
});