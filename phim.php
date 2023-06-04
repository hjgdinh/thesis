<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoạt Hình Kungfu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet"
        href="./assets/fonts/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="app">
        <header class="header" style="background-color: black">
            <div class="grid wide">
                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo  hide-on-tablet">
                        <img class="header__logo-img"
                            src="https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2021/12/Logo.jpg?fit=400%2C100&ssl=1"
                            alt="tiki-logo">
                    </div>
                    <div class="header__search">
                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder=" Nhập tên phim cần tìm.......">
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <ul>
                        <li>
                            <span>
                                <a href="">Tu Tiên</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a href="">Luyện Cấp</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a href="">Trùng Sinh</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a href=""> OVA</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a href=""> Xuyên Không</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a href=""> Hài Hước</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="app__container" style="background-color: rgb(29, 27, 27);">
            <div class="grid wide">
                <div class="right-content">
                    <a class="home-filter__btn btn btn--primary" href=""
                        style="color: orangered; font-size: 17px; float: right"> Xem Nhiều
                    </a>
                    <div class="row sm-gutter app__content">
                        <div class="col l-10 m-12 c-12">
                            <div class="home-product">
                                <div class="row sm-gutter">
                                    <div class="col l-2-4 m-4 c-6">
                                        <!-- product item -->
                                        <a class="home-product-item" href="">
                                            <div class="home-product-item__img"
                                                style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/The-Gioi-Hoan-My.jpg?resize=300%2C421&ssl=1); height: max-content ">
                                            </div>
                                            <div class="home-product-item__favourite">
                                                <button>
                                                    <span> Tập 110 </span>
                                                </button>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flim-poster" style="padding-left: 30px">
                                        <div class="move-detail">
                                            <h1 class="entry-title" style="color: white;font-size:30px">Thế Giới Hoàn Mỹ
                                            </h1>
                                            <p class="org_title" style="color: white;font-size:15px">Tập 110</p>
                                            <p class="released">
                                                <i class="h1-clock" style="color: white;font-size:15px">Thời lượng: "22
                                                    phút" </i>
                                            </p>
                                            <p class="episode">
                                                <span style="color: white;font-size:15px">Mới nhất</span>
                                                <button>Tập 110</button>
                                            </p>
                                            <p class="category" style="color: white;font-size:15px">
                                                "Thể Loại"
                                                <a href="" style="color: #13b3ed;font-size:15px">Luyện Cấp</a> ,
                                                <a href="" style="color: #13b3ed;font-size:15px">Trùng Sinh</a>
                                            </p>
                                            <button class="btn_btn"
                                                style="background-color: #e32f0b; width: 100px; height: 25px;">Xem
                                                Phim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="halim-list-server" class="list-eps-ajax">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active server-1">
                        <a href="">
                            <i class="hl-server"></i> FULL HD
                        </a>
                    </li>
                </ul>
                <div class="content">
                    <div class="tab-content">
                        <div class="halim">
                            <ul class="halim-list">
                                <li class="halim-episode">
                                    <button>
                                        <span>1</span>
                                    </button>
                                </li>
                                <li class="halim-episode ">
                                    <button>
                                        <span>2</span>
                                    </button>
                                </li>
                                <li class="halim-episode ">
                                    <button>
                                        <span>3</span>
                                    </button>
                                </li>
                                <li class="halim-episode ">
                                    <button>
                                        <span>4</span>
                                    </button>
                                </li>
                                <li class="halim-episode">
                                    <button>
                                        <span>5</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" style="border: 2px; background-color: #232121;padding-left: 50px">
                <table>
                    <a class="" href="" style="color: orangered; font-size: 19px"> Nội dung Phim</a>
                    <p style="color: white; font-size: 17px">Thế Giới Hoàn Mỹ</p>
                    <p style="color: white; font-size: 17px">Bộ phim <a href="https://hhhkungfu.tv/the-gioi-hoan-my">Thế
                            Giới Hoàn Mỹ</a> cải biên từ tiểu thuyết cùng tên.<br>
                        <br>Hắn vì tu đạo mà sinh, vì ứng kiếp mà đến, hắn hoá thân thành muôn vàn huyết vũ, vẩy xuống
                        vạn cổ tuế nguyệt,<br> <br> trải qua vô số tôi luyện của thời không và gột rửa của dòng chảy
                        tháng năm, hắn hoá thành vạn cổ, hoá thành tự tại.<br>
                        <br>Xem nam chính Thạch Hạo làm thế nào đạt đến huy hoàng đỉnh cao một đời, tạo nên truyền
                        thuyết vô tận.
                    </p>
                    <h2 style="color: white; font-size: 17px"><strong>Cảnh giới tu luyện:</strong></h2>
                    <p style="color: white; font-size: 17px">Bàn Huyết Cảnh -&gt; Động Thiên Cảnh -&gt; Hóa Linh Cảnh
                        -&gt; Minh Văn Cảnh -&gt; Liệt Trận Cảnh -&gt; Tôn Giả Cảnh.</p>
                    <p style="color: white; font-size: 17px">Thần Hỏa Cảnh -&gt; Chân Nhất Cảnh -&gt; Thánh Tế Cảnh
                        -&gt; Thiên Thần Cảnh -&gt; Hư Đạo Cảnh -&gt; Trảm Ngã Cảnh -&gt; Độn Nhất Cảnh -&gt; Chí Tôn
                        Cảnh -&gt; Chí Tôn Cực Đạo.</p>
                </table>
            </form>

        </div>
    </div>
    <footer class="footer">
        <div class="grid wide footer__content"></div>
        <div class="footer__bottom">
            <div class="grid wide">
                <p class="footer__text">© Vietsub bởi Hoạt Hình Kungfu Subteam</p>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="grid wide">
                <p class="footer__text">Web phim hhkungfu.tv</p>
            </div>
        </div>
    </footer>
</body>
</php>