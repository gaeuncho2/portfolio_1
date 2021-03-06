<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파리바게트 :: 브레드</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/bread.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/animate.css">
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="./js/slick.min.js"></script>
</head>
<body>
<?php
    $partnum = $_GET["partnum"];
    echo "<script>
        useData($partnum)
    </script>";
?>

    <header id="header" class="on">
        <div class="header">
            <h1 class="on">
                <p><a href="index.html">PARIS BAGUETTE</a></p>
            </h1>
            <ul class="depth1 on">
                <li><a href="#sect2">PB PRODUCT</a>
                    <ul class="depth2">
                        <li><a href="#">브레드</a></li>
                        <li><a href="#">샌드위치 &#47; 샐러드</a></li>
                        <li><a href="#">음료&#47;아이스</a></li>
                    </ul>
                </li>
                <li><a href="#sect3">PB STORY</a></li>
                <li><a href="#sect4">MAGAZINE</a></li>
                <li><a href="#sect5">PROMOTION</a></li>
            </ul>
        </div>
        <div class="member">
            <a href="login.html">LOG IN</a>
            <a href="join.html">JOIN</a>
        </div>
    </header>

    <section>
        <div class="wrap inner">
            <ul class="tabTit">
                <li><a href="part1">브레드</a></li>
                <li><a href="part2">케이크</a></li>
                <li><a href="part3">샌드위치 &#47; 샐러드</a></li>
                <li><a href="part4">디저트 &#47; 스낵</a></li>
                <li><a href="part5">음료 &#47; 아이스</a></li>
            </ul>
        </div>
    </section>

    <footer id="footer">
        <div class="footer_wrap inner">
            <div class="mini">
                <img src="./img/cropped-PB_favicon-32x32.png" alt="">
            </div>
            <ul class="info">
				<li><a href="#none">브랜드소개</a></li>
				<li><a href="#none">개인정보취급방침</a></li>
			</ul>
            <ul class="contact">
                <li>고객센터</li>
                <li>고객칭찬</li>
                <li>080-731-2027</li>
            </ul>
            <ul class="sns">
                <li><a href="#none"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#none"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#none"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <ul class="law">
                <li><a href="#">이용약관</a></li>
                <li><a href="#"><span>개인정보처리방침</spa></a></li>
                <li><a href="#">이메일무단수집거부</a></li>
                <li><a href="#">운영관리방침</a></li>
            </ul> 
            
            <div class="footer_txt">
                <span class="copy"> All Rights Reserved &copy; PARIS BAGUETTE, PARIS CROISSANT CO., LTD. </span>
                <span class="addr">경기도 성남시 중원구 상대원동 사기막골로 31번길 18 (주) 파리크라상 대표전화 02-1234-5678</span>
            </div>
        </div> 

    </footer>

    <script src="./js/bread.js"></script>
</body>
</html>