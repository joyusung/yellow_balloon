<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노랑풍선 [여행을 가볍게]</title>
    <!-- favicon 연결 -->
    <link rel="shortcut icon" href="img/yb_favicon.png" type="image/icon">
    <!-- swiper css CDN으로 연결 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- 외부css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- easing js 연결 -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- swiper js를 CDN으로 연결 -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- 외부js -->
    <script src="js/main.js"></script>
    
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <? include "header.html"; ?>
        <!-- section -->
        <section class="visual">
            <div class="box"> 
            <!-- swiper 플러그인 -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide s1">
                            <a href="#">
                                <img src="img/visual1.png" alt="제주의 오늘 Feel the JEJU">                      
                            </a>
                        </div>
                        <div class="swiper-slide s2">
                            <a href="#">
                                <img src="img/visual2.png" alt="">
                            </a>
                        </div>
                    <div class="swiper-slide s3">
                        <a href="#">
                            <img src="img/visual3.png" alt="싱가포르">                      
                        </a>
                      </div>
                    <div class="swiper-slide s4">
                        <a href="#">
                            <img src="img/visual4.png" alt="하와이">                      
                        </a>
                    </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="foreign">
            <div class="center_box">
                <div class="f_btn">
                    <ul>
                        <li class="b1 active">
                            <a href="#">SYDNEY<br>& NEW SOUTH WALES</a> 
                        </li>
                        <li class="b2">
                            <a href="#">SINGAPORE</a> 
                        </li>
                        <li class="b3">
                            <a href="#">Enjoy! Safety!<br>SAIPAN</a> 
                        </li>
                        <li class="b4">
                            <a href="#">DISCOVER<br>FINLAND</a> 
                        </li>
                    </ul>
                </div>
                <div class="vdo">
                    <ul class="vdo_box">
                        <li class="v1">
                            <iframe src="https://www.youtube.com/embed/Ya2fid4_Si4?controls=0&autoplay=1&loop=1&mute=1&playlist=Ya2fid4_Si4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </li>
                        <li class="v2">
                            <iframe src="https://www.youtube.com/embed/eEGcWbwwUsw?controls=0&autoplay=1&loop=1&mute=1&playlist=eEGcWbwwUsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </li>
                        <li class="v3">
                            <iframe src="https://www.youtube.com/embed/luU2LnSEJ_A?controls=0&autoplay=1&loop=1&mute=1&playlist=luU2LnSEJ_A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </li>
                        <li class="v4">
                            <iframe src="https://www.youtube.com/embed/RLLNvekAaYI?controls=0&autoplay=1&loop=1&mute=1&playlist=RLLNvekAaYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </li>
                    </ul>
                </div>
                <div class="explain">
                    <ul>
                        <li class="ex1">
                            <h2>현지 격리 없이 떠나는 호주!<br>
                            시드니&뉴사이스웨일즈 주</h2>
                            <p>다양한 경험을 통해<br>
                            새로워진 나를 만나보세요!</p>
                            <span>이국적인 즐길거리가 가득한 곳!</span>
                            <h3>시드니 6일</h3>
                            <h4><strong>2,199,000</strong>원~</h4>
                            <h3>시드니 7일</h3>
                            <h4><strong>2,499,000</strong>원~</h4>
                            <h3>시드니 10일</h3>
                            <h4><strong>2,899,000</strong>원~</h4>
                            <img src="img/sydneyicon2.png" alt="">
                        </li>
                        <li class="ex2">
                            <h2>우리가 기다렸던 여행지!<br>
                            격리없이 바로 떠난다<br>
                            싱가포르</h2>
                            <p>싱가포르 ALL INCLUSIVE 5일<br>
                            <span>노랑풍선</span>과 함께 떠나볼까요?</p>
                            <span>NO팁/NO옵션/NO쇼핑</span>
                            <h3>싱가포르 프리미엄 5일</h3>
                            <h4><strong>1,499,000</strong>원~</h4>
                            <img src="img/singaporeicon.png" alt="">
                        </li>
                        <li class="ex3">
                            <h2>Enjoy!Safety!<br>
                            셀레임 가득한 <span>사이판</span>즐기기</h2>
                            <p class="p1"><span></span> #마나가하섬에서 스노클링하기</p>
                            <p class="p2"><span></span> #동굴에서 하는 그로토 스노클링하기</p>
                            <p class="p3" style="margin-bottom: 60px;"><span></span> #사이판 속 정글로 탐험 떠나기</p>
                            <h3>켄싱턴 호텔 4/5일</h3>
                            <h4><strong>1,069,000</strong>원~</h4>
                            <h3>하얏트 호텔 4/5일</h3>
                            <h4><strong>849,000</strong>원~</h4>
                            <h3>월드 리조트 4/5일</h3>
                            <h4><strong>679,000</strong>원~</h4>
                            <img src="img/saipanicon.png" alt="">
                        </li>
                        <li class="ex4">
                            <h2>세계에서 가장 행복한 나라<br>
                            아름답고 신비로운 여헁<br>
                            핀란드</h2>
                            <p>핀란드에 매력은 어디까지?</p><br>
                            <p class="p1"><span></span>#허스키 썰매, 산타 할아버지 만나기</p>
                            <p class="p2"><span></span> #신비한 오로라 보기</p>
                            <p class="p3"><span></span> #북유럽 디자인 경험하기</p>
                            <h3>핀란드 겨울여행 7일</h3>
                            <h4><strong>3,379,000</strong>원~</h4>
                            <img src="img/finlandicon2.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="theme">
            <div class="tab_slide">
                <div class="tab_title">
                    <ul>
                        <li class="k_theme active"><a href="#">국내 테마여행</a></li>
                        <li class="f_theme"><a href="#">해외 테마여행</a></li>
                    </ul>                    
                </div>
                <div class="tab_slide_con">
                    <div class="tab_slide_list t1 active">
                        <!-- 국내 테마여행 슬라이드 -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide k1">
                                  <a href="#">
                                    <img src="img/travel1.png" alt="우아섬">
                                  </a>
                              </div>
                              <div class="swiper-slide k2">
                                  <a href="#">
                                    <img src="img/travel2.png" alt="역사경주">
                                  </a>
                              </div>
                              <div class="swiper-slide k3">
                                  <a href="#">
                                    <img src="img/travel3.png" alt="골프">
                                  </a>
                              </div>
                            </div>
                            <div class="swiper-button-next mynext2"></div>
                            <div class="swiper-button-prev myprev2"></div>
                            <div class="swiper-scrollbar bar2"></div>
                        </div>
                    </div>
                    <div class="tab_slide_list t2">
                        <!-- 해외 테마여행 슬라이드 -->
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide f1">
                                  <a href="#">
                                    <img src="img/travel4.png" alt="뷰맛집">
                                  </a>
                              </div>
                              <div class="swiper-slide f2">
                                  <a href="#">
                                    <img src="img/travel5.png" alt="허니문">
                                  </a>
                              </div>
                              <div class="swiper-slide f3">
                                  <a href="#">
                                    <img src="img/travel6.png" alt="해외축구">
                                  </a>
                              </div>
                            </div>
                            <div class="swiper-button-next mynext3"></div>
                            <div class="swiper-button-prev myprev3"></div>
                            <div class="swiper-scrollbar bar3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="korea">
            <div class="center_box">
                <div class="explain">
                    <ul>
                        <li class="ex1">
                            <h2>제주의 오늘과 마주하다.<br>
                            제주도</h2>
                            <p>제주의 오늘은 어제와 또 다른 얼굴을<br>
                            가지게 될테니, 망설이지 말고<br>
                            <span>지금바로 떠나보는 것은 어떨까?</span></p>
                            <h3>필수옵션 최저가 2/3일</h3>
                            <h4><strong>230,000</strong>원~</h4>
                            <h3>풀옵션 최저가 2/3일</h3>
                            <h4><strong>289,000</strong>원~</h4>
                            <h3>프리미엄 2/3일</h3>
                            <h4><strong>600,000</strong>원~</h4>
                            <img src="img/jejuicon.png" alt="">
                        </li>
                        <li class="ex2">
                            <h2>내 생애 가장 젊은날<br>
                            나는 <span>여수</span>로 간다.</h2>
                            <p>여수 밤바다~♬<br>
                            바다하면 여수!<br>
                            얼마나 아름다운지 놀러가자!</p>
                            <h3>노랑풍선 시티투어 1/2일</h3>
                            <h4><strong>69,000</strong>원~</h4>
                            <h3>여수 끝판왕 2/3일</h3>
                            <h4><strong>119,000</strong>원~</h4>
                            <img src="img/yeosuicon.png" alt="">
                        </li>
                        <li class="ex3">
                            <h2>아시아에서 가장 길다.<br>
                            탑정호 출렁다리가 있는<br>
                            충남 예산</h2>
                            <p>바쁜 일상을 내려놓고,<br>
                               힐링의 장소 충남 예산에서 놀자!
                            </p>
                            <h3>당일치기 투어</h3>
                            <h4><strong>20.000</strong>원~</h4>
                            <h3>예산 끝판왕</h3>
                            <h4><strong>80,000</strong>원~</h4>
                            <img src="img/yesanicon2.png" alt="">
                        </li>
                    </ul>
                </div>
                
                <div class="vdo">
                    <ul class="vdo_box">
                        <li class="v1">
                            <iframe src="https://www.youtube.com/embed/z-bmDu9Q5wE?controls=0&autoplay=1&loop=1&mute=1&playlist=z-bmDu9Q5wE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </li>
                        <li class="v2">
                            <iframe src="https://www.youtube.com/embed/KawhpK-IVoI?controls=0&autoplay=1&loop=1&mute=1&playlist=KawhpK-IVoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </li>
                        <li class="v3">
                            <iframe src="https://www.youtube.com/embed/R0DRT7vRYVg?controls=0&autoplay=1&loop=1&mute=1&playlist=R0DRT7vRYVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </li>
                    </ul>
                </div>
                <div class="k_btn">
                    <ul>
                        <li class="b1 active">
                            <a href="#">Feel the JeJu<br>제주 JEJU</a> 
                        </li>
                        <li class="b2">
                            <a href="#">Recreational city<br>여수 YEOSU</a> 
                        </li>
                        <li class="b3">
                            <a href="#">healing place<br>충남 예산 YESAN</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="free">
            <div class="center_box">
                <h1>자유여행</h1>
                <div class="freelist">
                    <ul>
                        <li><a href="#">
                            <img src="img/free1.jpg" alt="">
                            <div class="content">
                                <p>항공</p>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <img src="img/free2.jpg" alt="">
                            <div class="content">
                                <p>기차</p>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <img src="img/free3.jpg" alt="">
                            <div class="content">
                                <p>렌트카</p>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <img src="img/free4.jpg" alt="">
                            <div class="content">
                                <p>고속버스<br>
                                &  노랑시티버스</p>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <img src="img/free5.jpg" alt="">
                            <div class="content">
                                <p>호텔</p>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <img src="img/free6.jpg" alt="">
                            <div class="content">
                                <p>투어<br>
                                & 액티비티</p>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <img src="img/free7.jpg" alt="">
                            <div class="content">
                                <p>쇼핑</p>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <img src="img/free8.jpg" alt="">
                            <div class="content">
                                <p>편의시설</p>
                            </div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="review">
            <div class="center_box">
                <div class="tab_btn">
                    <h2>노랑풍선<br>
                    고객 여행기</h2>
                    <p>'여행을 가볍게'<br>
                    노랑풍선과 함께 한<br>
                    여러분들의<br>
                    즐거웠던 추억을<br>
                    공유해 보세요!</p>
                    <a href="#">더보기</a>
                </div>
                <div class="photo">
                    <img src="img/review.png" alt="리뷰">
                </div>
                <div class="content">
                    <h3>패키지 > 사이판</h3>
                    <h2>"가족과 5박6일 사이판 여행 다녀왔습니다~"</h2>
                    <hr>
                    <p>노랑풍선 패키지 여행으로 사랑하는 아내와 딸과 함께 사이판으로 놀러갔어요.<br>
                    함께 동행한 가이드님도 너무 친철하셨고, 덕분에 가족들과 행복한 시간을 보냈어요.<br>
                    여러분들도 기회가 되신다면 사이판 여행 적극 추천 드려요~</p>
                    <a href="#">자세히 보기 ></a>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="center_box">
                <div class="event">
                    <h1>이벤트</h1>
                    <a href="#">더보기</a>
                    <div class="e_banner">
                        <a href="#">
                            <img src="img/event.jpg" alt="이벤트">
                        </a>
                    </div>
                </div>
                <div class="homeshopping">
                    <h1>홈쇼핑 방영상품</h1>
                    <a href="#">더보기</a>
                    <div class="h_banner">
                        <div class="gs">
                            <a href="#">
                                <div class="gs_logo">
                                    <img src="img/gslogo.png" alt="GS로고">
                                </div>
                                <hr>
                                <p>2022.04.23 (토) 23:38 방영</p>
                                <img src="img/homeshopping1.png" alt="GS홈쇼핑">
                                <h3>사이판 PIC</h3>
                            </a>
                        </div>
                        <div class="lotte">
                            <a href="#">
                                <div class="lotte_logo">
                                    <img src="img/lottelogo.png" alt="롯데로고">
                                </div>
                                <hr>
                                <p>2022.04.23(토) 16:25 방영</p>
                                <img src="img/homeshopping2.png" alt="롯데홈쇼핑">
                                <h3>일본 오사카 4/5일</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="last">
            <div class="ad_box">
                <div class="advice">
                    <div class="carrier">
                        <img src="img/carrier.png" alt="패키지여행">
                        <h2>패키지여행 상담</h2>
                        <p>1544-2288</p>
                    </div>
                    <div class="airplain">
                        <img src="img/airplain.png" alt="자유여행">
                        <h2>자유여행 상담</h2>
                        <p>1644-3399</p>
                    </div>
                </div>
            </div>
            <div class="appbox">
                <div class="app">
                    <h1>언제 어디서든 노랑풍선을<br>
                        APP으로 만나보세요!</h1>
                    <ul>
                        <li><a href="#" style="padding:0 30px">APP STORE</a></li>
                        <li><a href="#">GOOGLE PLAY</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- footer -->
        <? include "footer.html"; ?>
    </div>
    <!-- 탑버튼 -->
    <div class="top active2">TOP</div>
    <!-- 전체 메뉴 -->
    <? include "site.html"; ?>
</body>
</html>