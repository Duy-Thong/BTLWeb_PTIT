<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles2.css">
    <link rel="icon" href="https://i.imgur.com/HFRT62v.png">
    <title>PTIT IT SOLUTIONS</title>

    <style>
        .navbar-nav .nav-item {
            margin-left: auto !important;
        }

        .navbar {
            height: 60px;
            margin-top: 0px !important;
            background-color: rgba(255, 255, 255, 0.8);
            color: #fff;
            font-size: large !important;
            font-weight: bold !important;
        }

        .row {
            margin-top: 20px;
        }

        .company-info {
            background-color: rgba(255, 255, 255, 0);

            padding: 20px;
            border-radius: 10px;
        }

        .company-info h2 {
            color: #black;
            font-weight: bold;
            font-size: 35px;
            margin-bottom: 15px;
        }

        .company-info p {
            color: #black;
            font-size: 16px;
            line-height: 1.2;
            margin-bottom: 10px;
        }

        .carousel {
            border-radius: 10px;
            overflow: hidden;
        }

        header {
            margin-top: 20px;
            border-radius: 10px;
            position: relative;
            width: 100%;
            min-height: auto;
            text-align: center;
            color: #fff;
            background-image: url('https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/440024490_756185783345437_2645742285185558349_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHI_mjR9CGuLAdnBGTdDiLM45v1zeyW8Tzjm_XN7JbxPLZPpWH-1YGpceSd70Wu23s9SdeJ5nGbh09w82KkItJ6&_nc_ohc=5zaj0nwgwXYQ7kNvgG5GS-c&_nc_ht=scontent.fhan14-5.fna&cb_e2o_trans=q&oh=00_AYB8Stu6vE6Gdjsx_pkDjK89FvG8Hhg9yWI6Ix0b93z9DQ&oe=666A044E') !important;
            background-blend-mode: multiply;
            background-position: bottom center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            height: 500px;
            padding-top: 150px;

        }

        header .header-content {
            position: relative;
            width: 100%;
            padding: 100px 15px 70px;
            text-align: center;
        }


        table {
            width: 90%;
            border-color: white;
            background-color: rgba(255, 255, 255, 0) !important;

        }


        .footer {
            color: white;
            justify-content: center;
            text-align: center;
            background-color: #444444;
            align-items: center;
            align-content: center;
        }

        .col-4 {
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            background-image: url('https://i.pinimg.com/736x/5a/26/52/5a265297fbd9a33a12eb3268c883e330.jpg');
            backdrop-filter: blur(15px);
            background-color: rgba(0, 0, 0, 0.2);
            background-blend-mode: multiply;
        }
    </style>
</head>

<body>
    <div class="container-fluid h-custom">
        <div class="row" style="margin-top: 0px">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Logo_PTIT_University.png/768px-Logo_PTIT_University.png"
                            alt="PTIT Logo" style="height: 50px; padding-left: 50px;">

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-auto" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" style="margin-left: 1000px ;color:#e1102d ">Đăng
                                    nhập</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <header>
            <div class="header-content">
                <div class="header-content-inner">

                </div>
            </div>
        </header>
        <div class="row" style="color: white">
            <div class="col-lg-7">
                <div class="company-info">
                    <?php
                    require_once 'connect.php';

                    $sql = "SELECT count(*) FROM nhan_vien_tbl";

                    $result = $sql_connect->query($sql);
                    echo '<h2 >Giới Thiệu</h2> 
                    <p>PTIT IT SOLUTIONS là một công ty công nghệ hàng đầu cung cấp các giải pháp phần mềm và dịch vụ IT
                        chất lượng cao.</p>
                    <p>Chúng tôi cam kết mang lại sự hài lòng tối đa cho khách hàng thông qua các sản phẩm và dịch vụ
                        của chúng tôi.</p>';
                    echo '<p>Với đội ngũ ' . $result->fetch_row()[0] . ' nhân sự giàu kinh nghiệm, đều là sinh viên PTIT, chúng tôi tự tin đáp ứng tất cả nhu cầu khách hàng. </p>';

                    ?>
                </div>

                <div class="company-info" style="margin-top: 5px">
                    <h2 style="text-align: left">Đối tác của chúng tôi</h2>
                    <div class="row">
                        <div class="col-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRewD-GA3LiD3hR67-LersZb2u_MKnocvklhk5Zh9W1zw&s"
                                alt="..." style="width: 90px; height: 100px;">
                        </div>
                        <div class="col-2">
                            <img src="https://static.topcv.vn/company_logos/DI0mrf3w2ImlSatkOrvo1eMLqDJgJYhs_1698750119____c4502361f4204ef5b499959700371263.jpg"
                                alt="..." style="width: 90px; height: 100px;">
                        </div>
                        <div class="col-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzvc1jTfA-jSsl0d9rbRLqGMpFIHf7-RpqFbRdti6asA&s"
                                alt="..." style="width: 90px; height: 100px;">
                        </div>
                        <div class="col-2">
                            <img src="https://images.samsung.com/is/image/samsung/assets/vn/about-us/brand/logo/mo/256_144_3.png?$512_N_PNG$"
                                alt="..." style="width: 90px; height: 100px;">
                        </div>
                        <div class="col-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP0FHhId8C3RcM0QlHDJ3-mY8s6udzGQfMJ-KLUN8x0Q&s"
                                alt="..." style="width: 90px; height: 100px;">
                        </div>
                    </div>

                </div>
                <div class="company-info" style="margin-top: 5px">
                    <?php
                    require_once 'connect.php';

                    $sql = "SELECT * FROM chuc_vu_tbl";

                    $result = $sql_connect->query($sql);
                    echo '<h2 style="text-align: left">Vị trí trong công ty 🧑‍💻</h2>';
                    if ($result->num_rows > 0) {
                        echo '<table>';
                        $counter = 0; // Đếm số chức vụ đã hiển thị
                        while ($row = $result->fetch_assoc()) {
                            if ($counter % 3 == 0) {
                                if ($counter != 0) {
                                    echo '</tr>';
                                }
                                echo '<tr>';
                            }
                            echo '<td style="font-size: 20px">' . $row['chuc_vu'] . '</td>';
                            $counter++;
                        }
                        echo '</tr>';
                        echo '</table>';
                    } else {
                        echo "Không có dữ liệu.";
                    }
                    ?>
                </div>

            </div>
            <div class="col-lg-4" style="margin-left: 50px">
                <div class="row mb-3 mt3">
                    <h2 style="text-align: center">Thông tin cập nhật ℹ️</h2>
                </div>

                <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/439857691_850745270429133_4145458248405202967_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHZmA1ARESwEep8U1OAL2IfvT7fnkNtRzm9Pt-eQ21HOVWorliLQACqHouFadtWoOUQn8HY4OrA4OTCKvd8oDUm&_nc_ohc=-HNYgUZ7Y9UQ7kNvgG77dn-&_nc_ht=scontent.fhan14-5.fna&cb_e2o_trans=q&oh=00_AYAY-14sHb82wakiRLYl_mS48YzpLiZBHBpHtE0BOJvKAQ&oe=6669E669"
                                class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/440940108_853374686832858_3284865058892749389_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG3rRVSBy1J_Z_ABoqrHcdj7xv5Q0StutPvG_lDRK2602FLIBRj12ehYe6r77lbGE84xgORbgFeWHQJwZSPJOXQ&_nc_ohc=5NiPSy4cbgsQ7kNvgHwLbIi&_nc_ht=scontent.fhan14-1.fna&cb_e2o_trans=q&oh=00_AYCtarr7-8M5RRP-HH0cIMyoHYBJiulE-MK2MfR3N5jFzw&oe=6669E129"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/439318543_845987900904870_419212040986401258_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFRbHr4V6j_4BpruLv9l2sEwa-v4rdl8BXBr6_it2XwFfsH-R-apols_dIBXHhXCyi5UgxYmSEDjNRv3iPnxCYV&_nc_ohc=UgYNDSR0bJoQ7kNvgEjzoeZ&_nc_ht=scontent.fhan14-5.fna&cb_e2o_trans=q&oh=00_AYB_0o4GJm8Pr0lG-Y6TSVwXcKnOOjbGpGIbRAMHKXpoZQ&oe=6669E726"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="col-4">
                <iframe
                    src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FKhoaCNTT1.PTIT%2Fvideos%2F453215290554513&width=500&show_text=false&appId=1098885021354546&height=281"
                    width="500" height="281" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    allowFullScreen="true"></iframe>
            </div>
            <div class="col-4">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/uP1W4H7rn6M?si=M0U3a7AdhnSLaAYL"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-4">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/KP4bW7Ueckw?si=RU-f0M8d_9AvZP8w"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay>
                </iframe>
            </div>
        </div>
        <div class="row">
            <div class="footer">
                <div class="row">
                    <div class="col-4 contact-info">
                        <p> Km 10 Nguyễn Trãi, Hà Đông, Hanoi, Vietnam
                            <br>
                            024 3756 2186
                            <br>
                            ctsv@ptit.edu.vn
                            <br>
                            https://www.youtube.com/@PChannels
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="social-network">
                            <div>Connect with Us</div>
                            <br>
                            <div><a target="_blank" href="https://www.youtube.com/@PChannels"><img
                                        src="https://www.samsungcareers.com.vn/img/youtube.dc10c907.svg"></a><a
                                    target="_blank" href="https://www.facebook.com/HocvienPTIT"><img
                                        src="	https://www.samsungcareers.com.vn/img/facebook.985cba83.svg"
                                        class="mx-3"></a><a target="_blank"
                                    href="https://www.linkedin.com/company/samsungvietnam"><img
                                        src="	https://www.samsungcareers.com.vn/img/linkedin.808756f4.svg"></a></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14901.454424631565!2d105.79380725!3d20.978057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1svi!2s!4v1717838542408!5m2!1svi!2s"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>