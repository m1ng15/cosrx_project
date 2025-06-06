<!DOCTYPE html>
<html lang="ko">
<?php $pageTitle = "COSRX 메인페이지 | 정민재"; ?>
<head>
    <?php include("common/head.php"); ?>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <div class="hd_top">
    <?php include("common/headerTop.php"); ?>
    </div>
    <header>
        <?php include("common/header.php"); ?>
    </header>
    <main>
        <!-- START 0. 메인 배너 슬라이드 -->
        <div class="main_bnr_wrap">
            <div class="swiper main_bnr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide main_bnr1">
                        <div class="contents contents1">
                            <p class="title_des">NEW<span class="line"></span>알파-알부틴</p>
                            <h1 class="title">모두를 위한<br>트러블 흔적 고민 세럼</h1>
                            <div class="bnr_des">
                                <p>트라넥사믹액씨드 3% + 나이아신아마이드 5% +  아세틸글루코사민(NAG) 2%</p>
                                <p>잡티 흔적을 개선하고 피부톤 개선에 도움을 줍니다</p>
                            </div>
                            <a href="#" id="bnr_more">제품 더보기</a>
                        </div>
                    </div>
                    <div class="swiper-slide main_bnr2">
                        <div class="contents contents2">
                            <p class="title_des">MD's Pick<span class="line"></span>풀핏</p>
                            <h1 class="title">환절기 피부를 위한<br>탄탄보습 영양광채 케어</h1>
                            <div class="bnr_des">
                                <p>원물 그대로의 순도 100% 알로에</p>
                                <p>가장 산뜻한 제형으로 가장 가장 랑력한 차단 기능을 제공합니다</p>
                            </div>
                            <a href="#" id="bnr_more">제품 더보기</a>
                        </div>
                    </div>
                    <div class="swiper-slide main_bnr3">
                        <div class="contents contents3">
                            <p class="title_des">NEW<span class="line"></span>선크림</p>
                            <h1 class="title">수분 세럼을 바른 듯한<br>촉촉하고 가벼운 수분 진정 선스크린</h1>
                            <div class="bnr_des">
                                <p>영양 에너지가 풍부한 꿀광 부스팅</p>
                                <p>지친피부에 생기와 활력을 더해줍니다</p>
                            </div>
                            <a href="#" id="bnr_more">제품 더보기</a>
                        </div>
                    </div>
                    <!-- !! 메인 베너 광고 추가 부분 !! -->
                </div>
            </div>
            <!-- 메인 베너 페이지 및 버튼 -->
            <div class="bnr_btn">
                <button type="button" class="prev"><img src="images/bnr_next.png" alt="이전 이벤트 보기"></button>
                <button type="button" class="next"><img src="images/bnr_next.png" alt="다음 이벤트 보기"></button>
            </div>
            <div class="swiper-pagination main_pagination"></div>
        </div>
        <!-- START 1. 베스트 상품 -->
        <div class="container best_container">
            <div class="header_wrap">
                <div class="title_wrap">
                    <div class="title">
                        <p class="title_en">Our Best Sellers</p>
                        <h2 class="title_ko">베스트 상품</h2>
                    </div>
                    <p class="more_btn" id="best_more"><a href="#">제품 더보기</a></p>
                </div>
            </div>
            <div class="main_wrap best_wrap">
                <ul class="category" id="best_category">
                    <li><a href="#" class="active">전체</a></li>
                    <li><a href="#">패드</a></li>
                    <li><a href="#">클렌징</a></li>
                    <li><a href="#">토너&#47;미스트</a></li>
                    <li><a href="#">앰플&#47;에센스</a></li>
                    <li><a href="#">로션&#47;크림</a></li>
                    <li><a href="#">마스크&#47;팩</a></li>
                    <li><a href="#">선케어</a></li>
                </ul>
                <div id="best_slider_group">
                    <div class="swiper" id="all_best_slider">
                        <!-- START 베스트 상품 슬라이드 -->
                        <div class="swiper-wrapper">
                            <!-- 베스트 상품 1 -->
                            <div class="swiper-slide best_slide1">
                                <a href="#" class="contents contents1">
                                    <p class="item_img"><img src="images/best_001.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 2 -->
                            <div class="swiper-slide best_slide2">
                                <a href="#" class="contents contents2">
                                    <p class="item_img"><img src="images/best_002.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 3 -->
                            <div class="swiper-slide best_slide3">
                                <a href="#" class="contents contents3">
                                    <p class="item_img"><img src="images/best_003.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 4 -->
                            <div class="swiper-slide best_slide4">
                                <a href="#" class="contents contents4">
                                    <p class="item_img"><img src="images/best_004.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 5 -->
                            <div class="swiper-slide best_slide5">
                                <a href="#" class="contents contents5">
                                    <p class="item_img"><img src="images/best_005.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 6 -->
                            <div class="swiper-slide best_slide6">
                                <a href="#" class="contents contents6">
                                    <p class="item_img"><img src="images/best_006.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 7 -->
                            <div class="swiper-slide best_slide7">
                                <a href="#" class="contents contents7">
                                    <p class="item_img"><img src="images/best_007.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 8 -->
                            <div class="swiper-slide best_slide8">
                                <a href="#" class="contents contents8">
                                    <p class="item_img"><img src="images/best_008.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 9 -->
                            <div class="swiper-slide best_slide9">
                                <a href="#" class="contents contents9">
                                    <p class="item_img"><img src="images/best_009.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- 베스트 상품 10 -->
                            <div class="swiper-slide best_slide10">
                                <a href="#" class="contents contents10">
                                    <p class="item_img"><img src="images/best_010.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <div class="item_review">
                                            <div class="star">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                                <img src="images/star.png" alt="">
                                            </div>
                                            <p>(653)</p>
                                        </div>
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                            <p class="des">수분 결광 세럼</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>   
                        </div>
                        <!-- END 베스트 상품 슬라이드 -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                    <!-- 베스트 상품 슬라이드 이동 버튼 -->
                    <div class="best_move_btn">
                        <button type="button" class="prev"><img src="images/item_next.png" alt="이전 이벤트 보기"></button>
                        <button type="button" class="next"><img src="images/item_next.png" alt="다음 이벤트 보기"></button>
                    </div>
                    <!-- !! 베스트셀러 내용 추가 - 패드 !!  -->
                    <!-- !! 베스트셀러 내용 추가 - 클렌징 !!  -->
                </div>
            </div>
        </div>
        <!-- START 2. 전체 상품 -->
        <div class="container products_container">
            <div class="header_wrap"> <!-- 행의 헤더 (제목 + 카테고리) -->
                <div class="title_wrap">
                    <div class="title">
                        <p class="title_en">Our Products</p>
                        <h2 class="title_ko">전체 상품</h2>
                    </div>
                </div>
            </div>
            <div class="main_wrap all_wrap">
                <ul class="category" id="products_category">
                    <li><a href="#" class="active">전체</a></li>
                    <li><a href="#">패드</a></li>
                    <li><a href="#">클렌징</a></li>
                    <li><a href="#">토너&#47;미스트</a></li>
                    <li><a href="#">앰플&#47;에센스</a></li>
                    <li><a href="#">로션&#47;크림</a></li>
                    <li><a href="#">마스크&#47;팩</a></li>
                    <li><a href="#">선케어</a></li>
                </ul>
                <div id="all_products_group"> <!-- 전체 상품 모든 카테고리 그룹 -->
                    <div class="all_group" id="tag_all">
                        <!-- 전체 상품 row 1 -->
                        <div class="all_row1">
                            <!-- 전체 상품 row 1-1 -->
                            <a href="#" class="contents all_item1">
                                <p><img src="images/all_001.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 전체 상품 row 1-2 -->
                            <a href="#" class="contents all_item2">
                                <p class="item_img"><img src="images/all_002.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 전체 상품 row 1-3 -->
                            <a href="#" class="contents all_item3">
                                <p class="item_img"><img src="images/all_003.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 전체 상품 row 1-4 -->
                            <a href="#" class="contents all_item4">
                                <p class="item_img"><img src="images/all_004.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- 전체 상품 row 2 -->
                        <div class="all_row2">
                            <!-- 전체 상품 row 2-1 (5) -->
                            <a href="#" class="contents all_item5">
                                <p class="item_img"><img src="images/all_005.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 전체 상품 row 2-2 (6) -->
                            <a href="#" class="contents all_item6">
                                <p class="item_img">
                                    <img src="images/all_006.png" alt="">
                                </p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 전체 상품 row 2-3 (7) -->
                            <a href="#" class="contents all_item7">
                                <p class="item_img"><img src="images/all_007.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 전체 상품 row 2-4 (8) -->
                            <a href="#" class="contents all_item8">
                                <p class="item_img"><img src="images/all_008.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- !! 전체 상품 추가 부분 !!  -->
                </div>
                <p id="all_more"><a href="#">제품 더보기</a></p>
            </div>
        </div>
        <!-- START 3. 콜렉션 소개 배너 -->
        <div class="collection_bnr_wrap">
            <div class="swiper collection_bnr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide collection_bnr1">
                        <div class="contents contents1">
                            <div class="contents_title">
                                <h2><span>고효능 더마 제품</span>THE RX :</h2>
                                <p>피부 고민 해결을 위한 단 하나의 솔루션</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide collection_bnr2">
                        <div class="contents contents2">
                            <div class="contents_title">
                                <h2><span>고효능 더마 제품</span>THE RX :</h2>
                                <p>피부 고민 해결을 위한 단 하나의 솔루션</p>
                            </div>
                        </div>
                    </div>
                    <!-- !! 콜렉션 베너 내용 추가 부분 !! -->
                </div>
            </div>
        </div>
        <!-- START 4. 콜렉션 상품 -->
        <div class="container collection_container">
            <div class="header_wrap">
                <div class="title_wrap">
                    <div class="title">
                        <p class="title_en">COSRX Collection</p>
                        <h2 class="title_ko">콜렉션 상품</h2>
                    </div>
                    <p class="more_btn" id="best_more"><a href="#">제품 더보기</a></p>
                </div>
            </div>
            <div class="main_wrap collection_wrap">
                <ul class="line_style_category"  id="collection_category">
                    <li class="active"><a href="#"><span>고효능 더마 제품</span>THE RX</a></li>
                    <li><a href="#"><span>평생 인생템</span>원스텝</a></li>
                    <li><a href="#"><span>꿀광 부스팅</span>풀핏</a></li>
                    <li><a href="#"><span>진정한 리얼 시카</span>퓨어 핏</a></li>
                    <li><a href="#"><span>데일리 필링케어</span>리프레쉬</a></li>
                    <li><a href="#"><span>필(fill)수(水)처방</span>하이드리움</a></li>
                    <li><a href="#"><span>피부 고민템</span>에이씨 컬렉션</a></li>
                    <li><a href="#"><span>피부 장벽템</span>밸런시움</a></li>
                    <li><a href="#"><span>고효능 스킨 케어</span>스네일</a></li>
                </ul>
                <div id="collection_group">
                    <div class="all_colc_group" id="tag_rx">
                        <ul class="collc_row1">
                            <li class="contents colc_item1">
                                <p class="item_img"><img src="images/collc_001.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="contents colc_item2">
                                <p class="item_img"><img src="images/collc_001.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="contents colc_item3">
                                <p class="item_img"><img src="images/collc_001.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="collc_row2">
                            <li class="contents colc_item4">
                                <p class="item_img"><img src="images/collc_001.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="contents colc_item5">
                                <p class="item_img"><img src="images/collc_001.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="contents colc_item6">
                                <p class="item_img"><img src="images/collc_001.png" alt=""></p>
                                <div class="item_info">
                                    <div class="item_name">
                                        <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                    </div>
                                    <div class="item_price">
                                        <strong class="sale_price">34,500원</strong>
                                        <div class="original_price">
                                            <del class="original">45,000원</del>
                                            <em class="sale">25%</em>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- !! 콜렉션 상품 추가 부분!! -->
                </div>
            </div>
        </div>
        <!-- START 5. 콜렉션 상품 추천 배너 -->
        <div class="colc_product_bnr_wrap">
            <div class="swiper colc_product_bnr"> <!-- 가장 큰 배너 -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide colc_product_bnr1">
                        <p><img src="images/hyd_main.jpg" alt=""></p> <!-- 큰 이미지 -->
                        <div class="contents contents1">
                            <div class="contents_title">
                                <h2><span>수분채움</span>하이드리움</h2>
                                <p>: 건조한 피부에 필요한 성분만 엄선한 필(fill)수(水)처방</p>
                            </div>
                            <!-- Start : 콜렉션 상품 추천 2중 배너-->
                            <div class="swiper colc_product_slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide colc_product_slide1">
                                        <a href="#" class="slide_contents slide_contents1">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Hydrium Triple Hyaluronic Moisturizing Cleanser</span>하이드리움 모이스처 클렌저</h3>
                                                <p class="colc_item_tag">#촉촉세안 #데일리쿠션버블 #식물유래계면활성제</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide2">
                                        <a href="#" class="slide_contents slide_contents2">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Hydrium Watery Toner</span>하이드리움 워터리 토너</h3>
                                                <p class="colc_item_tag">#수분길토너 #수분자석 #닦토</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide3">
                                        <a href="#" class="slide_contents slide_contents3">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Hydrium Moisture Power Enriched Cream</span>하이드리움 크림</h3>
                                                <p class="colc_item_tag">#속깊은수분크림 #피부보습 #수분보호막</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide4">
                                        <a href="#" class="slide_contents slide_contents4">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Hydrium Triple Hyaluronic Moisturizing Cleanser</span>하이드리움 모이스처 클렌저</h3>
                                                <p class="colc_item_tag">#촉촉세안 #데일리쿠션버블 #식물유래계면활성제</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide5">
                                        <a href="#" class="slide_contents slide_contents5">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Hydrium Watery Toner</span>하이드리움 워터리 토너</h3>
                                                <p class="colc_item_tag">#수분길토너 #수분자석 #닦토</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide6">
                                        <a href="#" class="slide_contents slide_contents6">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Hydrium Moisture Power Enriched Cream</span>하이드리움 크림</h3>
                                                <p class="colc_item_tag">#속깊은수분크림 #피부보습 #수분보호막</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End : 콜렉션 상품 추천 이중 배너-->
                        </div>
                    </div>
                    <div class="swiper-slide colc_product_bnr2">
                        <p><img src="images/cica_main.jpg" alt=""></p> <!-- 큰 이미지 -->
                        <div class="contents contents1">
                            <div class="contents_title">
                                <h2><span>수분채움</span>하이드리움</h2>
                                <p>: 건조한 피부에 필요한 성분만 엄선한 필(fill)수(水)처방</p>
                            </div>
                            <!-- Start : 콜렉션 상품 추천 2중 배너-->
                            <div class="swiper colc_product_slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide colc_product_slide1">
                                        <a href="#" class="slide_contents slide_contents1">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Pure Fit Cica Creamy Foam Cleanser</span>퓨어 핏 시카 크리미 폼 클렌저</h3>
                                                <p class="colc_item_tag">#씻카폼 #시카버블폼 #진정클리어링</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide2">
                                        <a href="#" class="slide_contents slide_contents2">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Pure Fit Cica Cream</span>퓨어 핏 시카 크림 </h3>
                                                <p class="colc_item_tag">#시카맑음케어 #시카에너지케어 #시카진정케어</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide3">
                                        <a href="#" class="slide_contents slide_contents3">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Pure Fit Cica Calming True Sheet Mask</span>퓨어 핏 시카 시트 마스크</h3>
                                                <p class="colc_item_tag">#센텔라시트마스크 #더블시카마스크 #세븐시카마스크</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide4">
                                        <a href="#" class="slide_contents slide_contents4">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Pure Fit Cica Creamy Foam Cleanser</span>퓨어 핏 시카 크리미 폼 클렌저</h3>
                                                <p class="colc_item_tag">#씻카폼 #시카버블폼 #진정클리어링</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide5">
                                        <a href="#" class="slide_contents slide_contents5">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Pure Fit Cica Cream</span>퓨어 핏 시카 크림 </h3>
                                                <p class="colc_item_tag">#시카맑음케어 #시카에너지케어 #시카진정케어</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide colc_product_slide6">
                                        <a href="#" class="slide_contents slide_contents6">
                                            <div class="slide_info">
                                                <h3 class="colc_item_name"><span class="en">Pure Fit Cica Calming True Sheet Mask</span>퓨어 핏 시카 시트 마스크</h3>
                                                <p class="colc_item_tag">#센텔라시트마스크 #더블시카마스크 #세븐시카마스크</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End : 콜렉션 상품 추천 이중 배너-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 6행 피부고민별 상품 -->
        <div class="container concerns_container">
            <div class="header_wrap">
                <div class="title_wrap">
                    <div class="title">
                        <p class="title_en">Skin Concerns</p>
                        <h2 class="title_ko">피부 고민별 맞춤 상품</h2>
                    </div>
                    <p class="more_btn" id="concerns_more"><a href="#">제품 더보기</a></p>
                </div>
            </div>
            <div class="main_wrap concerns_wrap">
                <ul class="line_style_category" id="concerns_category">
                    <li class="active"><a href="#">모공&#47;피지</a></li>
                    <li><a href="#">수분&#47;보습</a></li>
                    <li><a href="#">미백&#47;선케어</a></li>
                    <li><a href="#">주름&#47;탄력</a></li>
                </ul>
                <div id="concerns_slider_group">
                    <div class="swiper" id="pore_slider">
                        <!-- START 모공/피지 상품 슬라이드 -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pore_slide1">
                                <a href="#" class="contents contents1">
                                    <p class="item_img"><img src="images/concerns_001.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide pore_slide2">
                                <a href="#" class="contents contents2">
                                    <p class="item_img"><img src="images/concerns_002.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide pore_slide3">
                                <a href="#" class="contents contents3">
                                    <p class="item_img"><img src="images/concerns_003.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide pore_slide4">
                                <a href="#" class="contents contents4">
                                    <p class="item_img"><img src="images/concerns_004.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide pore_slide5">
                                <a href="#" class="contents contents5">
                                    <p class="item_img"><img src="images/concerns_001.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide pore_slide6">
                                <a href="#" class="contents contents6">
                                    <p class="item_img"><img src="images/concerns_002.jpg" alt=""></p>
                                    <!-- 상품 정보 -->
                                    <div class="item_info">
                                        <!-- 상품 제목 -->
                                        <div class="item_name">
                                            <p class="name">더 6 펩타이드 스킨 부스터 세럼 + RX SET</p>
                                        </div>
                                        <!-- 상품 가격 -->
                                        <div class="item_price">
                                            <strong class="sale_price">34,500원</strong>
                                            <div class="original_price">
                                                <del class="original">45,000원</del>
                                                <em class="sale">25%</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 수분/보습 swiper -->
                    <!-- 미백/선케어 swiper -->
                    <!-- 주름/탄력 swiper -->
                </div>
            </div>
        </div>
        <!-- 7행 베스트 리뷰 -->
        <div class="container review_container">
            <div class="header_wrap"> <!-- 행의 헤더 (제목 + 카테고리) -->
                <div class="title_wrap">
                    <div class="title">
                        <p class="title_en">Best Review</p>
                        <h2 class="title_ko">베스트 리뷰</h2>
                    </div>
                </div>
            </div>
            <div class="main_wrap review_wrap">
                <div class="swiper review_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide review1">
                            <div class="review_img">
                                <img src="images/review_big_img.jpg" alt="" class="review_big">
                                <img src="images/review_product_img.png" alt="" class="review_product">
                            </div>
                            <div class="review_txt">
                                <ul class="product_info">
                                    <li><a href="#" class="name">더 비타민C 세럼</a></li>
                                    <ul class="review_info">
                                        <li class="score"><span>평점</span>4.9</li>
                                        <li class="comment"><a href="#"><span>38,388개</span>의 리뷰가 있습니다.</a></li>
                                    </ul>
                                </ul>
                                <dl class="user_review">
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="swiper-slide review2">
                            <div class="review_img">
                                <img src="images/review_big_img.jpg" alt="" class="review_big">
                                <img src="images/review_product_img.png" alt="" class="review_product">
                            </div>
                            <div class="review_txt">
                                <ul class="product_info">
                                    <li><a href="#" class="name">더 비타민C 세럼</a></li>
                                    <ul class="review_info">
                                        <li><span>평점</span>4.9</li>
                                        <li><span>38,388개</span>의 리뷰가 있습니다.</li>
                                    </ul>
                                </ul>
                                <dl class="user_review">
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="swiper-slide review3">
                            <div class="review_img">
                                <img src="images/review_big_img.jpg" alt="" class="review_big">
                                <img src="images/review_product_img.png" alt="" class="review_product">
                            </div>
                            <div class="review_txt">
                                <ul class="product_info">
                                    <li><a href="#" class="name">더 비타민C 세럼</a></li>
                                    <ul class="review_info">
                                        <li><span>평점</span>4.9</li>
                                        <li><span>38,388개</span>의 리뷰가 있습니다.</li>
                                    </ul>
                                </ul>
                                <dl class="user_review">
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="swiper-slide review4">
                            <div class="review_img">
                                <img src="images/review_big_img.jpg" alt="" class="review_big">
                                <img src="images/review_product_img.png" alt="" class="review_product">
                            </div>
                            <div class="review_txt">
                                <ul class="product_info">
                                    <li><a href="#" class="name">더 비타민C 세럼</a></li>
                                    <ul class="review_info">
                                        <li class="score"><span>평점</span>4.9</li>
                                        <li class="comment"><a href="#"><span>38,388개</span>의 리뷰가 있습니다.</a></li>
                                    </ul>
                                </ul>
                                <dl class="user_review">
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                    <dt>Ks***ef</dt>
                                    <dd>밤에 바르고 잤더니 피부가 몰라보게 화사해졌습니다.<br>지인 추천 했어요! 가성비, 효과 다 짱입니다.</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review_move_btn">
                    <button type="button" class="prev"><img src="images/bnr_next.png" alt="이전 이벤트 보기"></button>
                    <button type="button" class="next"><img src="images/bnr_next.png" alt="다음 이벤트 보기"></button>
                </div>
            </div>
        </div>
        <!-- 8행 브랜드 소개 -->
        <div class="brand_bnr_wrap">
            <div class="brand_info">
                <div class="text">
                    <p class="title">About COSRX</p>
                    <p class="des">Cosmetics + RX(Prescription)<br>코스알엑스는 많은 사람들이 본연의 아름다움을<br>찾길 바라는 마음으로 정성을 다하고 있습니다.</p>
                </div>
                <p><a href="#" id="brand_more">COSRX</a></p>
            </div>
        </div>
    </main>
    <footer>
        <?php include("common/footer.php"); ?>
    </footer>
</body>
</html>