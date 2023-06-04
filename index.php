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
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <!--  -->
    <script src="./assets/script/script.js" defer></script>
</head>

<body>
    <div class="app">
        <header class="header" style="background-color: black">
            <div class="grid wide">

                <!-- Header with search -->
                <div class="header-with-search">

                    <div class="header__logo  hide-on-tablet">
                        <img class="header__logo-img" src="https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2021/12/Logo.jpg?fit=400%2C100&ssl=1" alt="">
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
        </header>
        <div class="app__container" style="background-color: rgb(29, 27, 27);">

            <div class="grid wide">
                <div class="row sm-gutter app__content">
                    <div class="col l-10 m-12 c-12">
                        <a class="home-filter__btn btn btn--primary" href="" style="color: orangered; font-size: 20px;">Mới Nhất
                        </a>

                        <div class="home-product">
                            <div class="row sm-gutter">
                                <div data-day="monday" class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="./phim.php">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/The-Gioi-Hoan-My.jpg?resize=300%2C421&ssl=1) ; ">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Thế Giới Hoàn Mỹ
                                        </h4>
                                        <div class="home-product-item__favourite">
                                            <button>
                                                <span> Tập 110</span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div data-day="tuesday" class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Dau-La-Dai-Luc-2.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Đấu La Đại Lục
                                        </h4>
                                        <div class="home-product-item__favourite">

                                            <button>
                                                <span>Tập 220</span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div data-day="sunday" class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Bach-Luyen-Thanh-Than.jpg?resize=300%2C449&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Bách Luyện Thành
                                            Thần</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 10</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/Nghich-Thien-Chi-Ton.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Nghịch Thiên Chí
                                            Tôn</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 19</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Cuu-Thien-Huyen-De-Quyet-2.jpg?resize=300%2C449&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Cửu Thiên Huyền Đế
                                        </h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 120 END Phần 7</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/Vo-Thuong-Than-De-2.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Vô Thượng Thần Đế
                                        </h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 29</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/Linh-Kiem-Ton-4.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Linh Kiếm Tôn</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 219</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Bach-Luyen-Phi-Thang-Luc.jpg?resize=300%2C449&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Bách Luyện Phi
                                            Thăng Lực</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 18</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Than-An-Vuong-Toa-2.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Thần Ấn Vương Tọa
                                        </h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 30</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Hoa-Giang-Ho-Chi-Bat-Luong-Nhan-6.jpg?resize=300%2C449&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Giang Hồ Bất Chi
                                            Lương Nhân</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 12 END</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/Doc-Bo-Tieu-Dao.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Độc Bộ Tiêu Dao
                                        </h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 310</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/Van-Gioi-Tien-Tung-4.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Vạn Giới Tiên Tung
                                        </h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 374</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Van-Co-Than-Thoai.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Vạn Cổ Thần Thoại
                                        </h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 81</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/Kiem-Vuc-Phong-Van.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Kiếm Vực Phong
                                            Thần</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 75</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Thanh-Lien-Kiem-Tien-Truyen.jpg?resize=300%2C449&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Thanh Liên Kiếm
                                            Tiên Truyện</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 9</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Bat-Diet-Than-Vuong.jpg?resize=300%2C449&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Bất Diệt Thần
                                            Vương</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 5</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/Gia-Thien.jpg?resize=300%2C449&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Già Thiên</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 4</span>
                                            </button>
                                        </div>

                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6">
                                    <!-- product item -->
                                    <a class="home-product-item" href="">
                                        <div class="home-product-item__img" style="background-image: url(https://i0.wp.com/hhhkungfu.tv/wp-content/uploads/2022/01/Nhat-Niem-Vinh-Hang.jpg?resize=300%2C421&ssl=1);">
                                        </div>
                                        <h4 class="home-product-item__name" style="color: aliceblue;">Nhất Niệm Vĩnh
                                            Hằng</h4>


                                        <div class="home-product-item__favourite">

                                            <button style="color: blue;">
                                                <span>Tập 97</span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <a class="home-filter__btn btn btn--primary" href="lichchieu.php" style="color: orangered; font-size: 20px;">Lịch Chiếu</a>
                        <!--   
                            <div class="calendar"><br>
                            
                                <a  href="" style="color: white;font-size: 14px">Thứ 2</a>
                            </div>
                            <div class="calendar">

                                <a href="" style="color: white;font-size: 14px">Thứ 3</a>
                            </div>
                            <div class="calendar">
                                <a  href="" style="color: white;font-size: 14px">Thứ 4</a>
                            </div>
                            <div class="calendar">

                                <a  href="" style="color: white;font-size: 14px">Thứ 5</a>
                            </div>
                            <div class="calendar">

                                <a  href="" style="color: white;font-size: 14px">Thứ 6</a>
                            </div>
                            <div class="calendar">

                                <a  href="" style="color: white;font-size: 14px">Thứ 7</a>
                            </div >
                            <div class="calendar">

                                <a href="" style="color: white;font-size: 14px">Chủ Nhật</a>
                            </div> -->
                        <a class="home-filter__btn btn btn--primary" href="" style="color: orangered; font-size: 20px; float: right;"> Xem Nhiều
                        </a>
                    </div>
                    <section>
                        <button class="day" type="submit">Thứ 2</button>
                        <button class="day" type="submit">Thứ 3</button>
                        <button class="day" type="submit">Thứ 4</button>
                        <button class="day" type="submit">Thứ 5</button>
                        <button class="day" type="submit">Thứ 6</button>
                        <button class="day" type="submit">Thứ 7</button>
                        <button class="day" type="submit">Chủ nhật</button>
                    </section>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer" style="background-color: #232121">
        <div class="grid wide footer__content">
            <div class="grid wide">
                <p class="footer__text">© Vietsub bởi Hoạt Hình Kungfu Subteam</p>
            </div>
        </div><br>
        <div class="grid wide">
            <p class="footer__text">Web phim hhkungfu.tv</p>
        </div>
        <div class="footer__bottom">

        </div>
    </footer>
</body>
</php>