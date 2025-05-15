<!DOCTYPE html>
<html lang="ko">
<?php $pageTitle = "COSRX 로그인/회원가입"; ?>
<head>
    <?php include("common/head.php"); ?>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="hd_top">
        <?php include("common/headerTop.php"); ?>
    </div>
    <header>
        <?php include("common/header.php"); ?>
    </header>
    <main class="login_wrap">
        <section class="login_box">
            <h2>로그인</h2>
            <p>아이디와 비밀번호 입력하기 귀찮으시죠?<br>기존 SNS 계정으로 1초 만에 로그인 / 회원가입 하세요.</p>
            <div class="sns_login">
                <!-- SNS 아이콘 -->
                <img src="#" alt="kakao">
                <img src="#" alt="naver">
                <img src="#" alt="google">
                <img src="#" alt="apple">
            </div>
            <form action="#" method="post" class="loginFrm">
                <label for="id">아이디</label>
                <input type="text" id="id" name="id" maxlength="20"  placeholder="아이디">
                
                <label for="pw">비밀번호</label>
                <input type="password" id="pw" name="pw" placeholder="비밀번호">

                <div class="login_options">
                    <label><input type="checkbox" checked> 아이디 저장</label>
                    <label><input type="checkbox"> 자동 로그인</label>
                    <a href="#">로그인/비밀번호 찾기</a>
                </div>
                
                <button type="submit" class="btn_login">로그인</button>
                <button type="button" class="btn_signup" disabled>회원가입</button>
            </form>
            <div class="guest_order">
                <a href="#">비회원 주문조회</a>
            </div>
        </section>
        <aside class="membership_bnr">
            <h3>멤버십 혜택</h3>
            <p>코스알엑스 공식몰에서만 만나볼 수 있는 혜택!</p>
            <img src="#" alt="첫 회원가입 혜택 이미지">
        </aside>
    </main>
    <footer>
        <?php include("common/footer.php"); ?>
    </footer>
</body>
</html>