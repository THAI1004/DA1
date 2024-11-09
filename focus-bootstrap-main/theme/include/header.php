<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Trang quản trị</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../images/favicon.png"
    />
    <link
      rel="stylesheet"
      href="../vendor/owl-carousel/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="../vendor/owl-carousel/css/owl.theme.default.min.css"
    />
    <link href="../vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
      <!--**********************************
            Nav header start
        ***********************************-->
      <div class="nav-header">
        <a href="index.html" class="brand-logo">
          <img class="logo-abbr" src="../images/logo.png" alt="" />
          <img class="logo-compact" src="../images/logo-text.png" alt="" />
          <img class="brand-title" src="../images/logo-text.png" alt="" />
        </a>

        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span
            ><span class="line"></span>
          </div>
        </div>
      </div>
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
      <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                <div class="search_bar dropdown">
                  <span
                    class="search_icon p-3 c-pointer"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-magnify"></i>
                  </span>
                  <div class="dropdown-menu p-0 m-0">
                    <form>
                      <input
                        class="form-control"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                      />
                    </form>
                  </div>
                </div>
              </div>

              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown notification_dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-bell"></i>
                    <div class="pulse-css"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <ul class="list-unstyled">
                      <li class="media dropdown-item">
                        <span class="success"><i class="ti-user"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Martin</strong> has added a
                              <strong>customer</strong> Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="primary"
                          ><i class="ti-shopping-cart"></i
                        ></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Jennifer</strong> purchased Light
                              Dashboard 2.0.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="danger"><i class="ti-bookmark"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Robin</strong> marked a
                              <strong>ticket</strong> as unsolved.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="primary"><i class="ti-heart"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>David</strong> purchased Light Dashboard
                              1.0.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="success"><i class="ti-image"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong> James.</strong> has added a<strong
                                >customer</strong
                              >
                              Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                    </ul>
                    <a class="all-notification" href="#"
                      >See all notifications <i class="ti-arrow-right"></i
                    ></a>
                  </div>
                </li>
                <li class="nav-item dropdown header-profile">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-account"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="./app-profile.html" class="dropdown-item">
                      <i class="icon-user"></i>
                      <span class="ml-2">Profile </span>
                    </a>
                    <a href="./email-inbox.html" class="dropdown-item">
                      <i class="icon-envelope-open"></i>
                      <span class="ml-2">Inbox </span>
                    </a>
                    <a href="./page-login.html" class="dropdown-item">
                      <i class="icon-key"></i>
                      <span class="ml-2">Logout </span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      <!--**********************************
            Sidebar start
        ***********************************-->
      <div class="quixnav">
        <div class="quixnav-scroll">
          <ul class="metismenu" id="menu">
            
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="fa-solid fa-list"></i></i
                ><span class="nav-text">List danh mục</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./ui-accordion.html">List danh mục</a></li>
                <li><a href="./ui-alert.html">Thêm mới danh mục</a></li>  
              </ul>
            </li>

            </li>
           
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="fa-brands fa-product-hunt"></i></i
                ><span class="nav-text">List sản phẩm</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./ui-accordion.html">List sản phẩm</a></li>
                <li><a href="./ui-alert.html">Thêm mới sản phẩm</a></li>  
              </ul>
            </li>
            
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="fa-regular fa-user"></i></i
                ><span class="nav-text">User</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./ui-accordion.html">List User</a></li> 
              </ul>
            </li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="fa-solid fa-cart-shopping"></i></i
                ><span class="nav-text">Quản lý đơn hàng</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./ui-accordion.html">List đơn hàng</a></li>
                <li><a href="./ui-alert.html">Update đơn hàng</a></li>  
              </ul>
            </li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="fa-regular fa-comment"></i></i
                ><span class="nav-text">Quản lý Bình luận</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./ui-accordion.html">List bình luận</a></li>
              </ul>
            </li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="fa-solid fa-sliders"></i></i
                ><span class="nav-text">Quản lý Banner</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./ui-accordion.html">Banner</a></li>
                <li><a href="./ui-alert.html">Thêm mới banner</a></li>  
              </ul>
            </li>
      <div class="content-body">
      <div class="container-fluid">