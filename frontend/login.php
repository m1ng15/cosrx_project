<!DOCTYPE html>
<html lang="ko">
<?php $pageTitle = "COSRX 로그인/회원가입"; ?>
<head>
    <!-- 로그인 페이지 별도 js & css -->
    <script src="script/login.js" defer></script>
    <link rel="stylesheet" href="styles/login.css">
    <?php include("common/head.php"); ?>
</head>
<body>
    <div class="hd_top">
        <?php include("common/headerTop.php"); ?>
    </div>
    <header>
        <?php include("common/header.php"); ?>
    </header>
    <main>
        <div class="login_wrap">
            <section class="login_box">
                <div class="title">
                    <h2>로그인</h2>
                    <p>아이디와 비밀번호 입력하기 귀찮으시죠?<br>기존 SNS 계정으로 1초 만에 로그인 / 회원가입 하세요.</p>
                </div>
                <div class="sns_icons">
                    <a href="#" class="icon kakao" title="카카오톡"></a>
                    <a href="#" class="icon naver" title="네이버"></a>
                    <a href="#" class="icon google" title="구글"></a>
                    <a href="#" class="icon apple" title="애플"></a>
                </div>
                <form action="#" method="post" class="loginFrm">
                    <div class="id_group">
                        <div class="id_input input_group">
                            <input type="text" id="id" name="id" maxlength="20" placeholder="" required>
                            <label for="id">아이디</label>
                            <button type="button" class="x_btn" data-target="id"><img src="./images/close_bk.png" alt="아이디 지우기"></button>
                        </div>
                        <p>아이디를 입력해주세요</p>
                    </div>
                    <div class="pw_group">
                        <div class="pw_input input_group">
                            <input type="password" id="pw" name="pw" placeholder="" required>
                            <label for="pw">비밀번호</label>
                            <button type="button" id="togglePw" class="eye_btn" disabled><img src="./images/eye_off.png" alt=""></button>
                            <button type="button" class="x_btn" data-target="pw"><img src="./images/close_bk.png" alt="비밀번호 지우기"></button>
                        </div>
                        <p>비밀번호를 입력해주세요</p>
                    </div>    
                    <div class="login_options">
                        <div class="checkbox_group">
                            <label class="save_id">
                                <input type="checkbox" checked>
                                <span class="checkbox_icon"></span>
                                아이디 저장
                            </label>
                            <label class="auto_login">
                                <input type="checkbox">
                                <span class="checkbox_icon"></span>
                                자동 로그인
                            </label>
                        </div>
                        <a href="#">로그인/비밀번호 찾기</a>
                    </div>
                    <div class="form_btn">
                        <button type="submit" class="btn_login">로그인</button>
                        <button type="button" class="btn_signup">
                            회원가입
                            <span class="border left"></span>
                            <span class="border bottom"></span>
                        </button>
                    </div>
                </form>
                <div class="guest_order">
                    <a href="#">비회원 주문조회</a>
                </div>
            </section>
            <aside>
                <div class="membership_bnr">
                    <div class="title">
                        <h2>멤버십 혜택</h2>
                        <p>코스알엑스 공식몰에서만 만나볼 수 있는 혜택!</p>
                    </div>
                    <div class="bnr_image"></div>
                </div>
            </aside>
        </div>
    </main>
    <footer>
        <?php include("common/footer.php"); ?>
    </footer>
</body>
</html>