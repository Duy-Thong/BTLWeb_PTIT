<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://i.imgur.com/HFRT62v.png">
    <title>Home Page</title>

    <style>
        .navbar-nav .nav-item {
            margin-left: auto !important;
        }


        .row {
            margin-top: 20px;
        }

        .company-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .company-info h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .company-info p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .carousel {
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>

<body class="body">

    <div class="container h-custom">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">PTIT IT SOLUTIONS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-auto" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" style="margin-left: 800px">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="company-info">
                    <br>
                    <h2>Giới Thiệu</h2>
                    <p>PTIT IT SOLUTIONS là một công ty công nghệ hàng đầu cung cấp các giải pháp phần mềm và dịch vụ IT
                        chất lượng cao.</p>
                    <p>Chúng tôi cam kết mang lại sự hài lòng tối đa cho khách hàng thông qua các sản phẩm và dịch vụ
                        của chúng tôi.</p>
                </div>

                <div class="company-info" style="margin-top: 5px">
                    <br>
                    <h2>Đối tác</h2>
                    <div class="table border-0">
                        <table>
                            <tr>
                                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRewD-GA3LiD3hR67-LersZb2u_MKnocvklhk5Zh9W1zw&s"
                                        alt="..." style="width: 90px; height: 100px;"></td>
                                <td><img src="https://static.topcv.vn/company_logos/DI0mrf3w2ImlSatkOrvo1eMLqDJgJYhs_1698750119____c4502361f4204ef5b499959700371263.jpg"
                                        alt="..." style="width: 90px; height: 100px;"></td>
                                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzvc1jTfA-jSsl0d9rbRLqGMpFIHf7-RpqFbRdti6asA&s"
                                        alt="..." style="width: 90px; height: 100px;"></td>
                                <td><img src="https://images.samsung.com/is/image/samsung/assets/vn/about-us/brand/logo/mo/256_144_3.png?$512_N_PNG$"
                                        alt="..." style="width: 90px; height: 100px;"></td>
                                <td><img src="https://cdn.tgdd.vn/Files/2021/01/07/1318645/logo-1_600x600.jpg" alt="..."
                                        style="width: 90px; height: 100px;"></td>
                                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP0FHhId8C3RcM0QlHDJ3-mY8s6udzGQfMJ-KLUN8x0Q&s"
                                        alt="..." style="width: 90px; height: 100px;"></td>


                            </tr>
                        </table>
                    </div>
                </div>

                <div class="company-info" style="margin-top: 5px">
                    <h2>Thông tin liên hệ</h2>
                    <p>Địa chỉ : km 10 Nguyễn Trãi Hà Đông</p>
                    <p>Email : ctsv@ptit.edu.vn </p>
                    <p>SDT : 024 3756 2186</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/427989759_862640745906252_8355469121714046330_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFtmGgZgub43MW1RSuKgWUaDG1_VBMxBs0MbX9UEzEGzTW4pWKOLvRmVAyo3--_agaoxUPmvnkPEc5G0Hfi0Xh_&_nc_ohc=j9Y5SGaqztEQ7kNvgHRVeiJ&_nc_ht=scontent.fhan14-5.fna&cb_e2o_trans=q&oh=00_AYAgjBwtQNFU1dEQoCvhbR0tUbCaFExLqyGLmtJL7A1mkw&oe=6654D6E8"
                                class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/441881313_861951862641807_6845151103340744896_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF7naiDaQ_Y6qbe_OOm4DGLQ4awRPWMdO5DhrBE9Yx07mcgjLCOCjqS6Mo7jQZy_4eYm-AUFvUP3AbA_SZMSV-P&_nc_ohc=nKApSr9YftAQ7kNvgFUWMSY&_nc_ht=scontent.fhan14-3.fna&cb_e2o_trans=q&oh=00_AYAQLdzR-XV1nnOE4k2V7zmDdTr-mdyM1mRkCg58zSUKyw&oe=6654FD1A"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/439857691_850745270429133_4145458248405202967_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHZmA1ARESwEep8U1OAL2IfvT7fnkNtRzm9Pt-eQ21HOVWorliLQACqHouFadtWoOUQn8HY4OrA4OTCKvd8oDUm&_nc_ohc=yHQH3m3KzeMQ7kNvgH6Tdj9&_nc_ht=scontent.fhan14-5.fna&cb_e2o_trans=q&oh=00_AYBHci-zOqwePs4L2oULitXPNixd6L0Y-_vMW3e6wRCxpQ&oe=6654CE69"
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>