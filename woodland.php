<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Woodland shoes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- font Awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- OWN link  -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="responsive.css" />

  <style>
    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>
</head>

<body>

  <div class="container-fluid" id="head-container">

    <div class="row m-0">
      <div class="col-lg-9 p-0 col-md-9 col-sm-9"></div>
      <div class="col-lg-1 mt-1 mb-1 col-md-1 col-sm-1">
        <p id="heading-text" class="text-end">
          Cart <i class="fa-solid fa-cart-shopping"></i>
        </p>
      </div>
      <div class="col-lg-1 mt-1 mb-1 col-md-1 col-sm-1">
        <p id="heading-text" class="text-end">Find Store</p>
      </div>
      <div class="col-lg-1 mt-1 mb-1 col-md-1 col-sm-1">
        <a href="login.php" style="text-decoration: none;" ><p id="heading-text" class="text-end">Sign In</p></a>
      </div>
    </div>
  </div>

  <!-- ======================================= First Head is Complete -->

  <div class="container-fluid">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-0">
          <nav class="navbar navbar-expand-lg bg-body-tertiary p-0" style="background-color: white !important">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 p-0">
                  <a class="navbar-brand" href="#"><img  src="photo/headerlogo.png"
                      style="border-radius: 0px; border: none" class="img-thumbnail" alt="..." /></a>
                </div>

                <div class="col-11">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item mt-3">
                        <a class="nav-link active" aria-current="page" href="#"><b id="text-men">Men</b></a>
                      </li>
                      <li class="nav-item mt-3">
                        <a class="nav-link active" aria-current="page" href="#"><b id="text-men">Women</b></a>
                      </li>
                      <li class="nav-item mt-3">
                        <a class="nav-link active" aria-current="page" href="#"><b id="text-men">Brands</b></a>
                      </li>
                      <li class="nav-item mt-3">
                        <a class="nav-link active" aria-current="page" href="#"><b id="text-men">About Us</b></a>
                      </li>
                      <li class="nav-item mt-3">
                        <a class="nav-link active" aria-current="page" href="#"><b id="text-men">Labs</b></a>
                      </li>
                      <li class="nav-item mt-3">
                        <a class="nav-link active" aria-current="page" href="#"><b id="text-men">Sale</b></a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2 mt-3" type="search" placeholder="Search" aria-label="Search" />
                      <button class="btn btn-outline-success mt-3" type="submit">
                        Search
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <!-- =================================================== -->
    <div class="row">
      <div class="col-12 p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="photo/hero_banner_1.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="photo/hero_banner_2.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="photo/hero_banner_3.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="photo/hero_banner_4.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="photo/hero_banner_5.webp" class="d-block w-100" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />
    <br />

    <div class="container">
      <div class="row">
        <div class="col-md-4 p-0">
          <div class="card" style="width: 22rem;  border: none; border-radius: 0px">




            <img src="photo/h_cat_1.webp" class="card-img-top" style="border-radius: 0px; border: none" alt="..." />





            <div class="card-body">
              <p class="card-title" id="cart-text-best-seller">Bestsellers</p>
              <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

            </div>
          </div>
        </div>

        <div class="col-md-4 p-0">
          <div class="card" style="width: 22rem;  border: none; border-radius: 0px">
            <img src="photo/h_cat_2.webp" class="card-img-top" style="border-radius: 0px; border: none" alt="..." />

            <div class="card-body">
              <p class="card-title" id="cart-text-best-seller">Sneakers</p>
              <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

            </div>
          </div>
        </div>

        <div class="col-md-4 p-0">
          <div class="card" style="width: 22rem;  border: none; border-radius: 0px">
            <img src="photo/h_cat_3.webp" class="card-img-top" style="border-radius: 0px; border: none" alt="..." />

            <div class="card-body">
              <p class="card-title" id="cart-text-best-seller">Boots</p>
              <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 p-0">
          <div class="card" style="width: 22rem;  border: none; border-radius: 0px">
            <img src="photo/h_cat_4.webp" class="card-img-top" style="border-radius: 0px; border: none" alt="..." />

            <div class="card-body">
              <p class="card-title" id="cart-text-best-seller">Sandals</p>
              <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

            </div>
          </div>
        </div>

        <div class="col-md-4 p-0">
          <div class="card" style="width: 22rem;  border: none; border-radius: 0px">
            <img src="photo/h_cat_5.webp" class="card-img-top" style="border-radius: 0px; border: none" alt="..." />

            <div class="card-body">
              <p class="card-title" id="cart-text-best-seller">Men</p>
              <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

            </div>
          </div>
        </div>

        <div class="col-md-4 p-0">
          <div class="card" style="width: 22rem; border: none; border-radius: 0px">
            <img src="photo/h_cat_6.webp" class="card-img-top" style="border-radius: 0px; border: none" alt="..." />

            <div class="card-body">
              <p class="card-title" id="cart-text-best-seller">Women</p>
              <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

            </div>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="row">
      <div class="col-12 p-0">
        <img src="photo/wdl_shoe_banner.webp" class="img-fluid" alt="..." />
      </div>
    </div>
    <br />

    <script>
      $(document).ready(function () {
        $("#prev").click(function () {
          $("#cards-ul").animate({ scrollLeft: "-=100" });
        });

        $("#next-1").click(function () {
          $("#cards-ul").animate({ scrollLeft: "+=100" });
        });
      });
    </script>

    <div class="container">

      <div class="row">
        <div class="col">
          <i class="fa-solid fa-less-than" id="prev"></i>
          &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
          <i class="fa-solid fa-greater-than" id="next-1"></i>
        </div>
      </div>

      <div class="row">
        <div class="col-12 p-0">
          <ul id="cards-ul">
            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FGC015050201A_004_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FGC0310S2572A_033_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FGC051032831A_042_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FGF0DM033641A_G77_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FLC0180U4672A_005_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>
            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FLC0510AR852A_003_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FLC0CW0U8212A_022_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FLC0DN0AR932A_299_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/FLC0IA0AR972A_367_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/GGJC05004162A_943_0.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Black casual shoes for Men</h5>

                  <h5 class="card-title">$5995/-</h5>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-md-6 p-0">
        <img src="photo/m_apparel_banner.webp" class="img-fluid" alt="..." />
      </div>

      <div class="col-md-6 p-0">
        <img src="photo/f_apparel_banner.webp" class="img-fluid" alt="..." />
      </div>
    </div>
    <br />

    <div class="container">
      <div class="row">
        <div class="col-md-3 p-0">
          <div class="card" style="width: 17rem; border-radius: 0px; border: none">
            <img src="photo/T-shirts.webp" style="border-radius: 0px" class="card-img-top" alt="..." />
            <br />

            <div class="card-body p-0">
              <h5 class="card-title">T-Shirt</h5>

              <p class="card-text">
                Shop Men
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop
                Women
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3 p-0">
          <div class="card" style="width: 17rem; border-radius: 0px; border: none">
            <img src="photo/Shirts.webp" style="border-radius: 0px" class="card-img-top" alt="..." />
            <br />

            <div class="card-body p-0">
              <h5 class="card-title">T-Shirt</h5>

              <p class="card-text">
                Shop Men
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop
                Women
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3 p-0">
          <div class="card" style="width: 17rem; border-radius: 0px; border: none">
            <img src="photo/Shorts.webp" style="border-radius: 0px" class="card-img-top" alt="..." />
            <br />

            <div class="card-body p-0">
              <h5 class="card-title">T-Shirt</h5>

              <p class="card-text">
                Shop Men
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop
                Women
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3 p-0">
          <div class="card" style="width: 17rem; border-radius: 0px; border: none">
            <img src="photo/Jeans.webp" style="border-radius: 0px" class="card-img-top" alt="..." />
            <br />

            <div class="card-body p-0">
              <h5 class="card-title">T-Shirt</h5>

              <p class="card-text">
                Shop Men
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop
                Women
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <br>
    <div class="row">
      <div class="col-md-12 p-0 ">

        <img src="photo/woodsport_banner.webp" width="100%" class="img-fluid" alt="...">

      </div>
    </div>

    <br>
    <br>


    <script>
      $(document).ready(function () {
        $("#prev-1").click(function () {
          $("#cards-ul-1").animate({ scrollLeft: "-=100" });
        });

        $("#next-1-1").click(function () {
          $("#cards-ul-1").animate({ scrollLeft: "+=100" });
        });
      });
    </script>





    <div class="container">

      <div class="row">
        <div class="col">
          <i class="fa-solid fa-less-than" id="prev-1"></i>
          &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
          <i class="fa-solid fa-greater-than" id="next-1-1"></i>
        </div>
      </div>

      <div class="row">
        <div class="col-12 p-0">
          <ul id="cards-ul-1">
            <li id="list_li-1">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/1.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/2.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/3.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/4.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/5.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>
            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/6.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/7.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>

            <li id="list_li">
              <div class="card" style="width: 13rem; border: none; border-radius: 0px">
                <img src="photo/8.jpg" id="shoes_pic-1" class="card-img-top" alt="..." />

                <div class="card-body">
                  <h5 class="card-title">Blue Sports Sneaker</h5>

                  <h5 class="card-title">$1500/-</h5>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <br><br>

    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4 p-0">


            <div class="card" style="width: 26rem; border-radius: 0px; border: none; ">

              <img src="photo/bag_cat_banner.webp" style=" border-radius: 0px; border: none;" class="card-img-top"
                alt="...">

              <div class="card-body">
                <p class="card-title" id="cart-text-best-seller">Bags</p>
                <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

              </div>
            </div>

          </div>

          <div class="col-md-4 p-0 ">

            <div class="card" style="width: 26rem; border-radius: 0px; border: none; ">

              <img src="photo/shoecare_cat_banner.webp" style=" border-radius: 0px; border: none;" class="card-img-top"
                alt="...">

              <div class="card-body">
                <p class="card-title" id="cart-text-best-seller">Shoe Care</p>
                <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

              </div>
            </div>

          </div>
          <div class="col-md-4 p-0">

            <div class="card" style="width: 26rem; border-radius: 0px; border: none; ">

              <img src="photo/beltsandmore_cat_banner.webp" style=" border-radius: 0px; border: none;"
                class="card-img-top" alt="...">

              <div class="card-body">
                <p class="card-title" id="cart-text-best-seller">Belts & More

                </p>
                <button type="button" id="button-shop-now" class="btn btn-outline-secondary"><b>Shop Now</b></button>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>


    <div class="row">
      <div class="col-md-12 text-center">
        <p style="font-size: 24px; font-weight: 400; ">AS WORN BY WOODLAND FAM</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p style="font-size: 24px; font-weight: 400; ">Click to shop & mention us on instagram @woodlandworldwide to be
          featured</p>
      </div>
    </div>

    <br>


    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="photo/insta_1.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="photo/insta_2.jpeg" />
        </div>
        <div class="swiper-slide">
          <img src="photo/insta_3.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="photo/insta_4.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="photo/insta_5.JPG" />
        </div>



      </div>
      <div class="swiper-pagination"></div>
    </div>

    <br>

    <div class="row" >
      <div class="col-md-12" >

        <div class="row">
          <div class="col-md-6 p-0 "  >

            <div class="card" id="banner-pic-logo" style="border: none; border-radius: 0px;">

              <img src="photo/pro_planet_banner.webp" style="border-radius: 0px;" class="card-img-top" alt="...">

              <div class="card-body" id="pro-planet-box">

                <h4 class="card-title">Pro Planet</h4>

                <p class="card-text">Proplanet is a community that is committed to make our plane a better place to live in.</p>
                <a href=""> <button type="button" style="border-radius: 0px; background-color: #0C5423; border: none; "
                    class="btn btn-success">Read More</button></a>

              </div>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="card" id="banner-pic-logo" style=" border: none; border-radius: 0px;">

              <img src="photo/r_lab_banner.webp" style="border-radius: 0px;" class="card-img-top" alt="...">

              <div class="card-body" id="pro-planet-box">

                <h4 class="card-title">Woodland Research Lab</h4>

                <p class="card-text">Woodlands expertise combines activity focused <br> designs and technologically
                  advanced
                  materials</p>
                <a href=""> <button type="button" style="border-radius: 0px; background-color: #0C5423; border: none; "
                    class="btn btn-success">Read More</button></a>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br>

    <div class="row" style="background-color: #0C5423;">
      <div class="col-md-2 mt-5 pt-3 ">
        <img src="photo/footerlogo.png" style="background: none; border: none; " class="img-thumbnail" alt="...">
      </div>
      <div class="col-md-10"></div>

    </div>

    <div class="row pt-4 " style="background-color: #0C5423;">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <p style="font-weight: 600; font-size: 20px; color: white;">Shop Footwear</p>

                <div class="row">
                  <div class="col-md-12">

                    <ul style="list-style: none; padding: 0px; ">
                      <li><a href="" style="text-decoration: none; color: white;">Boots</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Sneakers/Sports</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Casuals</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Formals</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Slippers/Flip-Flops</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Sandals</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Safety Shoes</a></li>
                    </ul>


                  </div>
                </div>



              </div>
              <div class="col-md-4">
                <p style="font-weight: 600; font-size: 20px; color: white;">Company</p>


                <div class="row">
                  <div class="col-md-12">

                    <ul style="list-style: none; padding: 0px; ">
                      <li><a href="" style="text-decoration: none; color: white;">Jackets</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">T-shirts</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Shirts</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Sweaters</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Sweatshirts & Hoodies</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Innerwear Tops</a></li>

                    </ul>


                  </div>
                </div>

              </div>
              <div class="col-md-4 p-0 ">
                <p style="font-weight: 600; font-size: 18px; color: white;">Shop Accessories & Bags</p>

                <div class="row">
                  <div class="col-md-12">

                    <ul style="list-style: none; padding: 0px; ">
                      <li><a href="" style="text-decoration: none; color: white;">Handbags</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Socks</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Fanny Bags</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Shoe Care</a></li>
                      <li><a href="" style="text-decoration: none; color: white;">Trolley Bags</a></li>

                    </ul>


                  </div>
                </div>


              </div>
            </div>

          </div>
          <div class="col-md-6">

            <div class="row">
              <div class="col-md-6">
                <p style="font-weight: 600; font-size: 20px; color: white;">Contact Us</p>

                <p style="color: white; font-size: small;">Need some more help? Get in touch with us and we’ll be more
                  than happy to guide you through! <br> <br>
                  care@woodlandworldwide.com <br>
                  1800 103 3445<br><br>
                  Woodland Customer Service Reps are available for inquiries Monday to Friday from 10AM to 6PM.
                </p>

              </div>
              <div class="col-md-6">
                <p style="font-weight: 600; font-size: 20px; color: white;">Always keep exploring more!</p>

                <p style="color: white;">
                  Get alerts for new arrivals, offers, and more! <br>
                  By entering your email, you agree to our Terms of Service & Privacy Policy, including receipt of
                  emails and promotions. You can unsubscribe at any time
                </p>

              </div>
            </div>


          </div>

        </div>




        <br> <br>

      </div>
    </div>





  </div>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>

</html>