<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chủ</title>
  <link href='assets/images/favico.ico' rel='shortcut icon' type='image/ico'/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<<<<<<< HEAD:resources/views/layouts/welcome.blade.php
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/base.css">
  <script src="assets/js/js.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/font/fontawesome-free-5.14.0-web/css/all.min.css">

=======
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/base.css">
  <script src="./assets/js/js.js"></script>
  <script src="./assets/js/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="./assets/css/jquery.modal.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/font/fontawesome-free-5.14.0-web/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
>>>>>>> 62e20cb... nguyen update template:create_template/index.html
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <script src="./assets/js/owl.carousel.min.js"></script>
</head>

<body>
  <div class="main">
    <div id="form-modal">
      <div class="cont" id="ex1">
        <div class="form sign-in">
          <h2>Đăng nhập</h2>
          <label>
            <span>Email hoặc SĐT</span>
            <input type="email" name="email">
          </label>
          
          <label>
            <span>Mật khẩu</span>
            <input type="password" name="password">
          </label>
          <button class="submit" type="button">Đăng nhập</button>
          <p class="forgot-pass">Quên mật khẩu?</p>
    
          <div class="social-media">
            <p>Hoặc đăng nhập bằng tài khoản bằng mạng xã hội:</p>
            <ul>
              <li><img src="./assets/images/facebook.png"></li>
              <li><img src="./assets/images/google.png"></li>
              <li><img src="./assets/images/zalo.png"></li>
              <li><img src="./assets/images/linkedin.png"></li>
            </ul>
          </div>
        </div>
    
        <div class="sub-cont">
          <div class="img">
            <div class="img-text m-up">
              <h2>Tạo tài khoản</h2>
              <p>Tạo tài khoản để theo dõi đơn hàng, lưu
                danh sách sản phẩm yêu thích, nhận
                nhiều ưu đãi hấp dẫn.!</p>
            </div>
            <div class="img-text m-in">
              <h2>Đăng nhập</h2>
              <p>Đăng nhập để theo dõi đơn hàng, lưu
                danh sách sản phẩm yêu thích, nhận
                nhiều ưu đãi hấp dẫn!</p>
            </div>
            <div class="img-btn">
              <span class="m-up">Đăng ký</span>
              <span class="m-in">Đăng nhập</span>
            </div>
          </div>
          <div class="form sign-up">
            <h2>Đăng ký tài khoản</h2>
            <label>
              <span>Họ và tên</span>
              <input type="text">
            </label>
            <label>
              <span>Email</span>
              <input type="email">
            </label>
            <label>
              <span>Số điện thoại</span>
              <input type="text">
            </label>
            <label>
              <span>Mật khẩu</span>
              <input type="password">
            </label>
            <label>
              <span>Ngày sinh</span>
              <input type="date">
            </label>
            <label>
              <span>Giới tính</span>
              <select name="" id="">
                <option value="">Nam</option>
                <option value="">Nữ</option>
              </select>
              
            </label>
            <button type="button" class="submit">Sign Up Now</button>
          </div>
        </div>
      </div>
    </div>
    <header class="header">
      <div class="top-menu">
        <div class="grid-top-menu">
          
          <ul>
            <li class="notifications-help">
              Chào mừng bạn đã đến cửa hàng của chúng tôi
            </li>
            <li class="notifications-help"> Hãy Kết Nối Với Chúng Tôi
              <a href=""> <i class="fab fa-facebook"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
            </li>
          </ul>
          <ul>
            <li>
              <a href="" class="notifications-help"><i class="fa fa-bell" aria-hidden="true"></i> Thông Báo </a>
            </li>
            <li>
              <a href="" class="notifications-help"><i class="fa fa-question" aria-hidden="true"></i> Trợ Giúp</a>
            </li>
            <li>
<<<<<<< HEAD:resources/views/layouts/welcome.blade.php
              <a href="{{ route('home') }}">Đăng Nhập</a>
=======
              <a href="#ex1" rel="modal:open"><i class="fas fa-user"></i> Tài khoản</a>
            </li>
            
            <li>
              <a href=""><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a>
>>>>>>> 62e20cb... nguyen update template:create_template/index.html
            </li>
            <li>
              <a href="">Tiếng việt</a> | <a href="">Tiếng anh</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- end top-menu -->
      <div class="header-content">
        <div class="menu-content">
          <div class="logo">
            <a href=""><img src="./assets/images/logo_nne.png" alt=""></a>
          </div>
          <div class="seach">
            <input type="text" placeholder="Tìm Kiếm Sản Phẩm">
            <div class="option">
              <button><i class="fas fa-search button-icon"></i> Tìm kiếm</button>
            </div>
          </div>
          <div class="category">
            <i class="cart-icon fas fa-shopping-cart"></i><span class="cart-text">Giỏ hàng <span class="cart-num">0</span></span>
          </div>
        </div>
      </div>
      <div class="bot-header">
        <div class="container">
    
          <div class="bot-danhmuc">
            <ul>
              <li class="head-danhmuc"><i class="fa fa-bars"></i><a href=""></a> Danh mục sản phẩm</li>
              <li><i class="fas fa-map-marker-alt giao-toi "></i> <span style="text-align: justify;">Bạn muốn giao tới đâu</span> </li>
              <li><i class="fas fa-shipping-fast giao-hang"></i> Miễn phí giao hàng</li>
              <li><i class="fas fa-language change-language"></i> Thay đổi ngôn ngữ</li>
            </ul>
            <!-- <div class="col-lg-3 col-md-6 ">
             <h3 class="head-danhmuc"><i class="fa fa-bars"></i> Danh mục sản phẩm</h3>
            </div>
            <div class="col-lg-3 giao-toi ">
              <i class="fas fa-map-marker-alt "></i> <span style="text-align: justify;">Bạn muốn giao tới đâu</span> 
            </div>
            <div class="col-lg-3 giao-hang ">
              <i class="fas fa-shipping-fast"></i> Miễn phí giao hàng
            </div>
            <div class="col-lg-3 change-language ">
              <i class="fas fa-language"></i> Thay đổi ngôn ngữ
            </div>
             -->
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <div class="container">
      <div class="container-row">
        <div id="top-heading-res" class="column-list-product">
          <nav class="list_product">
           
            
            <ul class="product-list">
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-tablet-alt"></i> Điện thoại - máy tính bảng</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5 >Xu hướng</h5>
                      <li><a href="#">Samsung Galaxy S20 Plus</a></li>
                      <li><a href="#">Samsung Galaxy A51</a></li>
                      <li><a href="#">Samsung Galaxy A31</a></li>
                      <li><a href="#">Iphone 11</a></li>
                      <li><a href="#">Ipad 10.2</a></li>
                      <li><a href="#">Ipad Mini 5</a></li>
                      <li><a href="#">Samsung Galaxy A11</a></li>
                      <li><a href="#">Samsung Galaxy A20s</a></li>
                      <li><a href="#">iPhone 11 Pro Max 64GB</a></li>
                    </ul>
                    <ul>
                      <h5>Nổi Bật</h5>
                      <li><a href="">Oppo A31</a></li>
                      <li><a href="">Oppo A12</a></li>
                      <li><a href="">Oppo Reno 3</a></li>
                      <li><a href="">Vsmart Joy 3</a></li>
                      <li><a href="">Vsmart Star</a></li>
                      <li><a href="">Vivo Y15</a></li>
                      <li><a href="">Vivo Y12</a></li>
                      <li><a href="">Xiaomi Redmi 8</a></li>
                      <li><a href="">VIVO Y91C</a></li>
                    </ul>
                    <ul>
                      <h5>Máy Tính bảng</h5>
                      <li><a href="">Samsung Galaxy Tab A8 8</a></li>
                      <li><a href="">iPad Air 10.5 Wi-Fi 64GB New 2019</a></li>
                      <li><a href="">iPad Pro 11 inch (2020) Wifi</a></li>
                      <li><a href="">iPad Mini 5 Wi-Fi 64GB</a></li>
                      <li><a href="">iPad Pro 11 inch Wifi 2020</a></li>
                      <li><a href="">iPad 10.2 Inch WiFi 128GB New 2019</a></li>
                      <li><a href="">Máy Tính Bảng Kindle Fire HD10(9th) 32GB (2019)</a></li>
                      <li><a href="">iPad 10.2 Inch WiFi/Cellular 128GB New 2019</a></li>
                      <li><a href="">iPad Mini 5 Wi-Fi 64GB</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/23/13/f5/3cc2090fe9a9cd4b5a6a52090492bbb3.jpg"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-tv"></i> Đện tử - Điện lạnh</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Tivi</h5>
                      <li><a href="#">Tivi bán chạy</a></li>
                      <li><a href="#">Tivi mới 2020</a></li>
                      <li><a href="#">Tivi cao cấp</a></li>
                      <li><a href="#">Smart Tivi - Android Tivi</a></li>
                      <li><a href="#">Internet Tivi</a></li>
                      <li><a href="#">Tivi 4K</a></li>
                      <li><a href="#">Tivi LED thường</a></li>
                      <li><a href="#">Tivi OLED</a></li>
                      <li><a href="#">Tivi QLED</a></li>
                    </ul>
                    <ul>
                      <h5>Máy Lạnh- Máy Điều Hòa</h5>
                      <li><a href="">Máy lạnh bán chạy</a></li>
                      <li><a href="">Máy lạnh mới 2020</a></li>
                      <li><a href="">Máy lạnh Inverter</a></li>
                      <li><a href="">Tủ lạnh Side by side</a></li>
                      <li><a href="">Tủ lạnh mới 2020</a></li>
                      <li><a href="">Tủ Đông - Tủ Mát</a></li>
                      <li><a href="">Máy Rửa Chén</a></li>
                      <li><a href="">Tủ Ướp Rượu</a></li>
                      <li><a href="">Máy Nước Nóng</a></li>
                    </ul>
                    <ul>
                      <h5>Máy Giặt</h5>
                      <li><a href="">Máy giặt bán chạy</a></li>
                      <li><a href="">Máy giặt mới 2020</a></li>
                      <li><a href="">Máy giặt Inverter</a></li>
                      <li><a href="">Máy Sấy Quần Áo</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/22/5b/ba/74f7ac3ba734049cb3a6f36506841a6f.png"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-tv"></i> Đện tử - Điện lạnh</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Tivi</h5>
                      <li><a href="#">Tivi bán chạy</a></li>
                      <li><a href="#">Tivi mới 2020</a></li>
                      <li><a href="#">Tivi cao cấp</a></li>
                      <li><a href="#">Smart Tivi - Android Tivi</a></li>
                      <li><a href="#">Internet Tivi</a></li>
                      <li><a href="#">Tivi 4K</a></li>
                      <li><a href="#">Tivi LED thường</a></li>
                      <li><a href="#">Tivi OLED</a></li>
                      <li><a href="#">Tivi QLED</a></li>
                    </ul>
                    <ul>
                      <h5>Máy Lạnh- Máy Điều Hòa</h5>
                      <li><a href="">Máy lạnh bán chạy</a></li>
                      <li><a href="">Máy lạnh mới 2020</a></li>
                      <li><a href="">Máy lạnh Inverter</a></li>
                      <li><a href="">Tủ lạnh Side by side</a></li>
                      <li><a href="">Tủ lạnh mới 2020</a></li>
                      <li><a href="">Tủ Đông - Tủ Mát</a></li>
                      <li><a href="">Máy Rửa Chén</a></li>
                      <li><a href="">Tủ Ướp Rượu</a></li>
                      <li><a href="">Máy Nước Nóng</a></li>
                    </ul>
                    <ul>
                      <h5>Máy Giặt</h5>
                      <li><a href="">Máy giặt bán chạy</a></li>
                      <li><a href="">Máy giặt mới 2020</a></li>
                      <li><a href="">Máy giặt Inverter</a></li>
                      <li><a href="">Máy Sấy Quần Áo</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/22/5b/ba/74f7ac3ba734049cb3a6f36506841a6f.png"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-headphones"></i> Phụ Kiện - Thiết bị số</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Thiết Bị Âm Thanh</h5>
                      <li><a href="#">Tai nghe nhét tai</a></li>
                      <li><a href="#">Tai nghe chụp tai</a></li>
                      <li><a href="#">Tai nghe Bluetooth đàm thoại</a></li>
                      <li><a href="#">Tai nghe nhạc Bluetooth</a></li>
                      <li><a href="#">Tai nghe Bluetooth Thể Thao</a></li>
                      <li><a href="#">Loa Vi Tính</a></li>
                      <li><a href="#">Loa Bluetooth</a></li>
                      <li><a href="#">Loa Kéo</a></li>
                      <li><a href="#">Soundbar/loa hifi/khác</a></li>
                    </ul>
                    <ul>
                      <h5>Phụ Kiện Điện Thoại</h5>
                      <li><a href="">Pin Sạc Dự Phòng</a></li>
                      <li><a href="">Dây Cáp Sạc</a></li>
                      <li><a href="">Cáp sạc iPhone/iPad</a></li>
                      <li><a href="">Đế Sạc Không Dây</a></li>
                      <li><a href="">Adapter - Củ sạc</a></li>
                      <li><a href="">Thẻ nhớ điện thoại</a></li>
                      <li><a href="">Bao da - Ốp lưng</a></li>
                      <li><a href="">Miếng dán màn hình</a></li>
                      <li><a href="">Gậy chụp hình - Gậy Selfie</a></li>
                    </ul>
                    <ul>
                      <h5>Thiết Bị Mạng</h5>
                      <li><a href="">Bộ phát Wifi</a></li>
                      <li><a href="">Thiết Bị 3G/4G</a></li>
                      <li><a href="">Router Wifi</a></li>
                      <li><a href="">Thiết Bị Mở Rộng Sóng</a></li>
                      <li><a href="">Access Point</a></li>
                      <li><a href="">Bộ chia mạng - Switch</a></li>
                      <li><a href="">USB wifi</a></li>
                      <li><a href="">Ổ cứng mạng</a></li>
                      <li><a href="">Phụ kiện thiết bị mạng</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/8b/c8/4b/d2cce447488b01397c96145729e14888.png"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-laptop"></i> Lap Top - Thiết Bị IT</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Laptop Theo Giá</h5>
                      <li><a href="#">Dưới 8 triệu</a></li>
                      <li><a href="#">Từ 8 - 10 triệu</a></li>
                      <li><a href="#">Từ 10 - 15 triệu</a></li>
                      <li><a href="#">Từ 15 - 20 triệu</a></li>
                      <li><a href="#">Trên 20 triệu</a></li>
                    </ul>
                    <ul>
                      <h5>Laptop Chính Hãng</h5>
                      <li><a href="">Macbook</a></li>
                      <li><a href="">Dell</a></li>
                      <li><a href="">Asus</a></li>
                      <li><a href="">HP</a></li>
                      <li><a href="">LG</a></li>
                      <li><a href="">Lenovo</a></li>
                      <li><a href="">Acer</a></li>
                      <li><a href="">MSI</a></li>
                      <li><a href="">Masstel</a></li>
                    </ul>
                    <ul>
                      <h5>Phụ kiện, Linh kiện máy tính</h5>
                      <li><a href="">Chuột máy tính</a></li>
                      <li><a href="">Bàn Phím</a></li>
                      <li><a href="">Combo Bàn Phím & Chuột</a></li>
                      <li><a href="">Ổ cứng di động</a></li>
                      <li><a href="">USB</a></li>
                      <li><a href="">Đế tản nhiệt Laptop</a></li>
                      <li><a href="">Ổ cứng HDD</a></li>
                      <li><a href="">Ổ cứng SSD</a></li>
                      <li><a href="">Card Màn Hình - VGA</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/09/41/3f/841362df79427b1f96b4e7f52f200c0f.jpg"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-shower"></i> Đồ Điện Gia Dụng</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Top Thương hiệu</h5>
                      <li><a href="#">Philips</a></li>
                      <li><a href="#">Lock&Lock</a></li>
                      <li><a href="#">Bluestone</a></li>
                      <li><a href="#">Kangaroo</a></li>
                      <li><a href="#">Sunhouse</a></li>
                      <li><a href="#">Sharp</a></li>
                      <li><a href="#">Panasonic</a></li>
                      <li><a href="#">Electrolux</a></li>
                      <li><a href="#">Toshiba</a></li>
                      <li><a href="#">Nagakawa</a></li>
                    </ul>
                    <ul>
                      <h5>Đồ dùng nhà bếp</h5>
                      <li><a href="">Nồi chiên</a></li>
                      <li><a href="">Nồi cơm điện</a></li>
                      <li><a href="">Máy xay-máy ép</a></li>
                      <li><a href="">Lò vi sóng</a></li>
                      <li><a href="">Lò nướng điện</a></li>
                      <li><a href="">Vỉ nướng điện</a></li>
                      <li><a href="">Bếp các loại</a></li>
                      <li><a href="">Máy pha cà phê</a></li>
                      <li><a href="">Máy làm sữa đậu nành</a></li>
                    </ul>
                    <ul>
                      <h5>PThiết bị gia đình</h5>
                      <li><a href="">Bàn ủi - Bàn là</a></li>
                      <li><a href="">Quạt điện</a></li>
                      <li><a href="">Thiết bị sưởi ấm</a></li>
                      <li><a href="">Máy hút bụi</a></li>
                      <li><a href="">Robot hút bụi</a></li>
                      <li><a href="">Máy lọc không khí</a></li>
                      <li><a href="">Máy tạo ẩm</a></li>
                      <li><a href="">Máy hút ẩm</a></li>
                      <li><a href="">Máy lọc nước</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/22/5b/ba/74f7ac3ba734049cb3a6f36506841a6f.png"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->

              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-home"></i>Nhà Cửa Đời Sống <span class="new">Mới</span></a>
                <div class="lon">
                  <div class="cac">
                    <ul class="menu-details__list">
                      <h5>Thương Hiệu Hàng Đầu</h5>
                      <li><a href="#" class="menu-details__list-item">Lock&Lock</a></li>
                      <li><a href="#" class="menu-details__list-item">Duy Tân</a></li>
                      <li><a href="#" class="menu-details__list-item">Everon</a></li>
                      <li><a href="#" class="menu-details__list-item">Luminarc</a></li>
                      <li><a href="#" class="menu-details__list-item">Minh Long</a></li>
                      <li><a href="#" class="menu-details__list-item">Homeeasy</a></li>
                      <li><a href="#" class="menu-details__list-item">Sunhouse</a></li>
                      <li><a href="#" class="menu-details__list-item">Zojirushi</a></li>
                      <li><a href="#" class="menu-details__list-item">Karcher</a></li>
                      <li><a href="#" class="menu-details__list-item">Bosch</a></li>
                      <li><a href="#" class="menu-details__list-item">Philips</a></li>
                    </ul>
                    <ul>
                      <h5>Đồ Dùng Gia Đình</h5>
                      <li><a href="">Dụng cụ nấu ăn</a></li>
                      <li><a href="">Cà men, hộp đựng cơm</a></li>
                      <li><a href="">Hộp đựng thực phẩm</a></li>
                      <li><a href="">Kệ nhà bếp</a></li>
                      <li><a href="">Dao và phụ kiện</a></li>
                      <li><a href="">Bình nước, bình giữ nhiệt</a></li>
                      <li><a href="">Bộ bình ly</a></li>
                      <li><a href="">Bộ bình trà</a></li>
                      <li><a href="">Bình lọc nước</a></li>
                      <li><a href="">Ly, cốc</a></li>
                      <li><a href="">Tô chén đĩa</a></li>
                      <li><a href="">Đồ dùng phòng ngủ</a></li>
                      <li><a href="">Ga giường, drap</a></li>
                      <li><a href="">Nội thất</a></li>
                      <li><a href="">Tủ quần áo</a></li>
                    </ul>
                    <ul>
                      <h5>Đèn & Thiết Bị Chiếu Sáng</h5>
                      <li><a href="">Đèn bàn</a></li>
                      <li><a href="">Bóng đèn</a></li>
                      <li><a href="">Ổ cắm điện</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/22/5b/ba/74f7ac3ba734049cb3a6f36506841a6f.png"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-stethoscope"></i> Làm Đẹp - Sức Khỏe <span class="new">Mới</span></a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Thương Hiệu</h5>
                      <li><a href="#">La Roche-Posay</a></li>
                      <li><a href="#">L'oreal Paris</a></li>
                      <li><a href="#">Maybelline</a></li>
                      <li><a href="#">Vichy</a></li>
                      <li><a href="#">Laneige</a></li>
                      <li><a href="#">Innsifree</a></li>
                      <li><a href="#">Rohto</a></li>
                      <li><a href="#">Anessa - Senka - ZA - Tsubaki</a></li>
                      <li><a href="#">Nivea</a></li>
                      <li><a href="#">Ofélia</a></li>
                      <li><a href="#">Durex</a></li>
                      <li><a href="#">SHISEIDO</a></li>
                      <li><a href="#">Mamonde</a></li>
                      <li><a href="#">Omron</a></li>
                      <li><a href="#">The Body Shop</a></li>
                      <li><a href="#">Romano - Enchanteur - Bioessence</a></li>
                    </ul>
                    <ul>
                      <h5>Chăm sóc da mặt & Chăm sóc cơ thể</h5>
                      <li><a href="">Sữa rửa mặt</a></li>
                      <li><a href="">Nước hoa hồng</a></li>
                      <li><a href="">Serum & kem dưỡng</a></li>
                      <li><a href="">Dưỡng ẩm</a></li>
                      <li><a href="">Dưỡng trắng</a></li>
                      <li><a href="">Mặt nạ</a></li>
                      <li><a href="">Chống nắng</a></li>
                      <li><a href="">Sữa tắm</a></li>
                      <li><a href="">Dưỡng thể</a></li>
                      <li><a href="">Khử mùi</a></li>
                      <li><a href="">Chăm sóc tóc</a></li>
                      <li><a href="">Dầu gội - Dầu xả</a></li>
                      <li><a href="">Dưỡng tóc - Ủ tóc</a></li>
                    </ul>
                    <ul>
                      <h5>Balo, Túi Xách, Ví Thời Trang</h5>
                      <li><a href="">Balo</a></li>
                      <li><a href="">Balo mini</a></li>
                      <li><a href="">Túi thời trang nữ</a></li>
                      <li><a href="">Ví nữ</a></li>
                      <li><a href="">Túi xách, ví nam</a></li>
                      <li><a href="">Cặp, túi nam</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/a3/72/61/909d2d48003464fb82b1375900e49bb8.jpg"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-tshirt"></i> Thời Trang Phụ Kiện</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Thời trang nữ</h5>
                      <li><a href="#">Áo nữ</a></li>
                      <li><a href="#">Áo cardigan, áo len, áo hoodie nữ</a></li>
                      <li><a href="#">Áo khoác nữ</a></li>
                      <li><a href="#">Đầm nữ</a></li>
                      <li><a href="#">Quần nữ</a></li>
                      <li><a href="#">Chân váy</a></li>
                      <li><a href="#">Váy chống nắng, khẩu trang</a></li>
                      <li><a href="#">Đồ ngủ, đồ mặc nhà, đồ lót, đồ bơi</a></li>
                      <li><a href="#">Tất, vớ nữ</a></li>
                      <li><a href="#">Nón nữ</a></li>
                      <li><a href="#">Phụ kiện tóc nữ</a></li>
                      <li><a href="#">Phụ kiện nữ khác</a></li>
                      <li><a href="#">Phụ kiện thời trang</a></li>
                      <li><a href="#">Đồng hồ</a></li>
                      <li><a href="#">Mắt kính</a></li>
                      <li><a href="#">Trang sức</a></li>
                    </ul>
                    <ul>
                      <h5>Thời Trang Nam</h5>
                      <li><a href="">Áo thun nam</a></li>
                      <li><a href="">Áo sơmi nam</a></li>
                      <li><a href="">Áo khoác nam</a></li>
                      <li><a href="">Quần nam</a></li>
                      <li><a href="">Đồ lót, đồ ngủ, đồ bơi nam</a></li>
                      <li><a href="">Tất, vớ nam</a></li>
                      <li><a href="">Thắt lưng, dây nịt nam</a></li>
                      <li><a href="">Nón nam</a></li>
                      <li><a href="">Phụ kiện nam khác</a></li>
                    </ul>
                    <ul>
                      <h5>Balo, Túi Xách, Ví Thời Trang</h5>
                      <li><a href="">Balo</a></li>
                      <li><a href="">Balo mini</a></li>
                      <li><a href="">Túi thời trang nữ</a></li>
                      <li><a href="">Ví nữ</a></li>
                      <li><a href="">Túi xách, ví nam</a></li>
                      <li><a href="">Cặp, túi nam</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/22/5b/ba/74f7ac3ba734049cb3a6f36506841a6f.png"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-baseball-ball"></i> Thể Thao Dã Ngoại <span class="new">Mới</span></a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Thương Hiệu Nổi Bật</h5>
                      <li><a href="#">Anta</a></li>
                      <li><a href="#">Biti's Hunter</a></li>
                      <li><a href="#">Boxing Saigon</a></li>
                      <li><a href="#">Coleman</a></li>
                      <li><a href="#">MDbuddy</a></li>
                      <li><a href="#">Mizuno</a></li>
                      <li><a href="#">Nike</a></li>
                      <li><a href="#">Adidas</a></li>
                      <li><a href="#">Salomon</a></li>
                      <li><a href="#">Sportslink</a></li>
                      <li><a href="#">Victorinox</a></li>
                      <li><a href="#">Li-Ning</a></li>
                      <li><a href="#">Yonex</a></li>
                      <li><a href="#">Mofit</a></li>
                    </ul>
                    <ul>
                      <h5>Thời Trang Thể Thao</h5>
                      <li><a href="">Giày thể thao nam</a></li>
                      <li><a href="">Giày thể thao nữ</a></li>
                      <li><a href="">Trang phục thể thao nam</a></li>
                      <li><a href="">Trang phục thể thao nữ</a></li>
                    </ul>
                    <ul>
                      <h5>Hoạt Động Dã Ngoại</h5>
                      <li><a href="">Lều - túi ngủ</a></li>
                      <li><a href="">Bàn ghế xếp di động</a></li>
                      <li><a href="">Câu cá</a></li>
                      <li><a href="">Trượt patin</a></li>
                      <li><a href="">Phụ kiện dã ngoại</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/ae/38/36/5902bd6334f5f25e26fd9bcc662ea2bd.jpg"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="product-list-item">
                <a href="#" class="item-link"><i class="fas fa-car"></i>Xe Máy, Ô Tô, Xe Đạp</a>
                <div class="lon">
                  <div class="cac">
                    <ul>
                      <h5>Mô Tô - Xe Máy</h5>
                      <li><a href="#">Xe đạp - Xe điện trả góp 0% lãi suất</a></li>
                      <li><a href="#">Chuyên trang xe và phụ kiện</a></li>
                      <li><a href="#">Boxing Saigon</a></li>
                      <li><a href="#">Xe tay ga</a></li>
                      <li><a href="#">Xe số</a></li>
                      <li><a href="#">Xe côn tay</a></li>
                      <li><a href="#">Xe Mô tô</a></li>
                      <li><a href="#">Xe 50cc</a></li>
                    </ul>
                    <ul>
                      <h5>Ô Tô</h5>
                      <li><a href="">Hyundai</a></li>
                      <li><a href="">FORD</a></li>
                      <li><a href="">Honda</a></li>
                      <li><a href="">Toyota</a></li>
                    </ul>
                    <ul>
                      <h5>Xe Điện & Xe Đạp</h5>
                      <li><a href="">Xe đạp điện</a></li>
                      <li><a href="">Xe điện thăng bằng</a></li>
                      <li><a href="">Xe đạp</a></li>
                      <li><a href="">Xe đạp thể thao</a></li>
                      <li><a href="">Xe đạp trẻ em</a></li>
                    </ul>
                    <ul>
                      <li class="menu-details__list-item">
                        <a href="#" class="ads-item">
                          <img
                            src="https://salt.tikicdn.com/ts/banner/67/3e/8e/ff1c3105613a4c47ecdb35010b79b13a.jpg"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- end -->
            
              <!-- end -->
          
              <!-- end -->
              
            </ul>
          </nav>
        </div>
        <div class="column-content">
          <div id="slider">
            <p href="#" class="control next">&gt;</p>
            <p href="#" class="control prev">&lt;</p>
            <ul>
              <a href="#">
                <li><img width="100%" src="./assets/images/slider1.png" alt=""></li>
              </a>
              <a href="#">
                <li><img width="100%" src="./assets/images/slider2.jpg" alt=""></li>
              </a>
              <a href="#">
                <li><img width="100%" src="./assets/images/slider3.png" alt=""></li>
              </a>
            </ul>
          </div>
          <div class="list-product-res">
            <ul class="list-product-res-content">
              <li class="product-res-content">
                <a href=""> Công Nghệ</a>
              </li>
              <li class="product-res-content">
                <a href=""> Gia Đình</a>
              </li>
              <li class="product-res-content">
                <a href=""> Sức Khỏe</a>
              </li>
              <li class="product-res-content">
                <a href=""> Mẹ & Bé</a>
              </li>
              <li class="product-res-content">
                <a href=""> Đời Sống</a>
              </li>
              <li class="product-res-content">
                <a href=""> Thời Trang</a>
              </li>
              <li class="product-res-content">
                <a href=""> Xe Cộ</a>
              </li>
              <li class="product-res-content">
                <a href=""> Sạch</a>
              </li>
            </ul>
          </div>
          <div class="banner_bottom_container">
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/Banners-MainGrid1.png" alt=""></a></div>
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/Banners-MainGrid2.png" alt=""></a></div>
          </div>
        </div>
        <div class="column-quangcao">
          <div class="banner_qc_container">
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/qc1.png" alt=""></a></div>
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/qc2.png" alt=""></a></div>
          </div>
          <div class="banner_qc_container">
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/qc3.png" alt=""></a></div>
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/qc4.png" alt=""></a></div>
          </div>
          <div class="banner_qc_container">
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/qc6.png" alt=""></a></div>
            <div class="Banners-MainGrid"><a href=""><img src="./assets/images/qc7.png" alt=""></a></div>
          </div>
        </div>
      </div>
      <!-- end danh mục - slider - quảng cáo -->
      <div class="sales-container">

        <div class="container-row">
          <ul class="sales">
            <li class="sales-item">
              <a href=""><img src="" alt=""><img src="./assets/images/sales1.png" alt=""></a>
            </li>
            <li class="sales-item">
              <a href=""><img src="" alt=""><img src="./assets/images/sales2.png" alt=""></a>
            </li>
            <li class="sales-item">
              <a href=""><img src="" alt=""><img src="./assets/images/sales3.png" alt=""></a>
            </li>
            <li class="sales-item">
              <a href=""><img src="" alt=""><img src="./assets/images/sales4.png" alt=""></a>
            </li>
          </ul>
          <!-- end sales -->
        </div>
      </div>
      <!-- end sales -->
      <div class="selling-max">
        <div class="container">
          <div class="selling-title">
            <img src="https://frontend.tikicdn.com/_desktop-next/static/img/giasoc.svg" alt="">
            <img src="https://frontend.tikicdn.com/_desktop-next/static/img/flash.gif" alt="">
            <img src="https://frontend.tikicdn.com/_desktop-next/static/img/homnay.svg" alt="">
          </div>
          <div class="row">
            <div class="col-md-3 pro-hov">
              <div class="product-top">
                  <img src="./assets/images/pro1.jpg" alt="">
                  <div class="overlay">
                      <button type="button" class="btn btn-secondary" title="Quick Shop">
                          <i class="fa fa-eye" ></i>
                      </button>
                      <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                          <i class="fa fa-heart" ></i>
                      </button>
                      <button type="button" class="btn btn-secondary" title="Add to cart">
                          <i class="fa fa-shopping-cart" ></i>
                      </button>
                  </div>
              </div>
              <span class="percent deal">80%</span>
              <div class="product-bottom text-center">
                  <i class="fas fa-star" ></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star" ></i>
                  <i class="fas fa-star-half" ></i>
                  <i class="far fa-star" ></i>
                  <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
                  <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
              </div>
          </div>
          <div class="col-md-3 pro-hov">
            <div class="product-top">
                <img src="https://salt.tikicdn.com/cache/280x280/ts/product/34/5c/52/85412535723b0e4b72638d79ca2f521f.jpg" alt="">
                <div class="overlay">
                    <button type="button" class="btn btn-secondary" title="Quick Shop">
                        <i class="fa fa-eye" ></i>
                    </button>
                    <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                        <i class="fa fa-heart" ></i>
                    </button>
                    <button type="button" class="btn btn-secondary" title="Add to cart">
                        <i class="fa fa-shopping-cart" ></i>
                    </button>
                </div>
            </div>
            <span class="percent deal">80%</span>
            <div class="product-bottom text-center">
                <i class="fas fa-star" ></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star" ></i>
                <i class="fas fa-star-half" ></i>
                <i class="far fa-star" ></i>
                <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
                <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
            </div>
        </div>
        <div class="col-md-3 pro-hov">
          <div class="product-top">
              <img src="https://salt.tikicdn.com/cache/280x280/ts/product/da/83/1b/6061de7e0a3dc94f5241d6fcb09c4bba.jpg" alt="">
              <div class="overlay">
                  <button type="button" class="btn btn-secondary" title="Quick Shop">
                      <i class="fa fa-eye" ></i>
                  </button>
                  <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                      <i class="fa fa-heart" ></i>
                  </button>
                  <button type="button" class="btn btn-secondary" title="Add to cart">
                      <i class="fa fa-shopping-cart" ></i>
                  </button>
              </div>
          </div>
          <span class="percent deal">80%</span>
          <div class="product-bottom text-center">
              <i class="fas fa-star" ></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star" ></i>
              <i class="fas fa-star-half" ></i>
              <i class="far fa-star" ></i>
              <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
              <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
          </div>
      </div>
      <div class="col-md-3 pro-hov">
        <div class="product-top">
            <img src="./assets/images/pro1.jpg" alt="">
            <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye" ></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                    <i class="fa fa-heart" ></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to cart">
                    <i class="fa fa-shopping-cart" ></i>
                </button>
            </div>
        </div>
        <span class="percent deal">80%</span>
        <div class="product-bottom text-center">
            <i class="fas fa-star" ></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star" ></i>
            <i class="fas fa-star-half" ></i>
            <i class="far fa-star" ></i>
            <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
            <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
        </div>
    </div>
    <div class="col-md-3 pro-hov">
      <div class="product-top">
          <img src="./assets/images/pro1.jpg" alt="">
          <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                  <i class="fa fa-eye" ></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                  <i class="fa fa-heart" ></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to cart">
                  <i class="fa fa-shopping-cart" ></i>
              </button>
          </div>
      </div>
      <span class="percent deal">80%</span>
      <div class="product-bottom text-center">
          <i class="fas fa-star" ></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star" ></i>
          <i class="fas fa-star-half" ></i>
          <i class="far fa-star" ></i>
          <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
          <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
      </div>
  </div>
  <div class="col-md-3 pro-hov">
    <div class="product-top">
        <img src="./assets/images/pro1.jpg" alt="">
        <div class="overlay">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-eye" ></i>
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                <i class="fa fa-heart" ></i>
            </button>
            <button type="button" class="btn btn-secondary" title="Add to cart">
                <i class="fa fa-shopping-cart" ></i>
            </button>
        </div>
    </div>
    <span class="percent deal">80%</span>
    <div class="product-bottom text-center">
        <i class="fas fa-star" ></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star" ></i>
        <i class="fas fa-star-half" ></i>
        <i class="far fa-star" ></i>
        <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
        <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
    </div>
</div>
<div class="col-md-3 pro-hov">
  <div class="product-top">
      <img src="./assets/images/pro1.jpg" alt="">
      <div class="overlay">
          <button type="button" class="btn btn-secondary" title="Quick Shop">
              <i class="fa fa-eye" ></i>
          </button>
          <button type="button" class="btn btn-secondary" title="Add to Wishlish">
              <i class="fa fa-heart" ></i>
          </button>
          <button type="button" class="btn btn-secondary" title="Add to cart">
              <i class="fa fa-shopping-cart" ></i>
          </button>
      </div>
  </div>
  <span class="percent deal">80%</span>
  <div class="product-bottom text-center">
      <i class="fas fa-star" ></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star-half" ></i>
      <i class="far fa-star" ></i>
      <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
      <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
  </div>
</div>
<div class="col-md-3 pro-hov">
  <div class="product-top">
      <img src="./assets/images/pro1.jpg" alt="">
      <div class="overlay">
          <button type="button" class="btn btn-secondary" title="Quick Shop">
              <i class="fa fa-eye" ></i>
          </button>
          <button type="button" class="btn btn-secondary" title="Add to Wishlish">
              <i class="fa fa-heart" ></i>
          </button>
          <button type="button" class="btn btn-secondary" title="Add to cart">
              <i class="fa fa-shopping-cart" ></i>
          </button>
      </div>
  </div>
  <span class="percent deal">80%</span>
  <div class="product-bottom text-center">
      <i class="fas fa-star" ></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star-half" ></i>
      <i class="far fa-star" ></i>
      <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
      <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
  </div>
</div>
          </div>
          <div class="btn-more text-center mt-3 mb-3">
            <a href="">Xem thêm</a>
          </div>
        </div>
      </div>


      <div class="top-selling">
        <h2>Top Khuyến Mãi</h2>
        <div class="custom-slider">
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay1.jpg" alt=""> </a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay2.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay3.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay4.png" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay5.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay6.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay7.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay8.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay10.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay11.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay12.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay13.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay14.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay15.jpg" alt=""></a></div>
          <div class="custom-box"><a href="#"><img src="./assets/images/topbanchay9.jpg" alt=""></a></div>
        </div>
        <!-- end top khuyến mãi -->
        <h2>Ngành hàng quan tâm</h2>
        <div id="gallery">
          <div class="pro-hov">
            <div class="product-top">
                <img src="https://salt.tikicdn.com/cache/280x280/media/catalog/product/m/3/m331blue_0.u2470.d20161215.t105840.843570.jpg" alt="">
               
            </div>
            
            <div class="product-bottom text-center">
               
                <p class="title text-center"> Chuột văn phòng</p>
                
            </div>
        </div>
        <div class="pro-hov">
          <div class="product-top">
              <img src="https://salt.tikicdn.com/ts/category/66/15/4f/6282e8c6655cb87cb226e3b701bb9137.png" alt="">
             
          </div>
          
          <div class="product-bottom text-center">
             
              <p class="title text-center"> Chuột văn phòng</p>
              
          </div>
      </div>
      <div class="pro-hov">
        <div class="product-top">
            <img src="https://salt.tikicdn.com/ts/category/93/27/e3/192b0ebe1d4658c51f9931bda62489b2.png" alt="">
           
        </div>
        
        <div class="product-bottom text-center">
           
            <p class="title text-center"> Chuột văn phòng</p>
            
        </div>
    </div>
    <div class="pro-hov">
      <div class="product-top">
          <img src="https://salt.tikicdn.com/ts/category/85/13/02/d8e5cd75fd88862d0f5f647e054b2205.png" alt="">
         
      </div>
      
      <div class="product-bottom text-center">
         
          <p class="title text-center"> Chuột văn phòng</p>
          
      </div>
  </div>
  <div class="pro-hov">
    <div class="product-top">
        <img src="https://salt.tikicdn.com/ts/category/b3/2b/72/8e7b4b703653050ffc79efc8ee017bd0.png" alt="">
       
    </div>
    
    <div class="product-bottom text-center">
       
        <p class="title text-center"> Chuột văn phòng</p>
        
    </div>
</div>
<div class="pro-hov">
  <div class="product-top">
      <img src="https://salt.tikicdn.com/ts/category/48/96/3b/9403c9f9579883b9433decf44e3d4591.png" alt="">
     
  </div>
  
  <div class="product-bottom text-center">
     
      <p class="title text-center"> Chuột văn phòng</p>
      
  </div>
</div>
<div class="pro-hov">
  <div class="product-top">
      <img src="https://salt.tikicdn.com/ts/category/7b/54/d8/fdee971618ba2ef7ae7a313021677c46.png" alt="">
     
  </div>
  
  <div class="product-bottom text-center">
     
      <p class="title text-center"> Chuột văn phòng</p>
      
  </div>
</div>
<div class="pro-hov">
  <div class="product-top">
      <img src="https://salt.tikicdn.com/ts/category/7b/54/d8/fdee971618ba2ef7ae7a313021677c46.png" alt="">
     
  </div>
  
  <div class="product-bottom text-center">
     
      <p class="title text-center"> Chuột văn phòng</p>
      
  </div>
</div>
        </div>
        <!-- end top bán chạy -->
        
      </div>
      <div class="product">
        <h2>Sản Phẩm Hot Trong Ngày</h2>
        <div class="filter">
          <span class="filter-label">Sắp Xếp theo</span>
          <button class="filter-btn btn btn-primary">Phổ Biến</button>
          <button class="filter-btn btn btn-primary">Mới Nhất</button>
          <button class="filter-btn btn btn-primary">Bán Chạy</button>
          <!--  -->
          <div class="select-input btn btn-primary">
            <span>Theo Giá</span>
            <i class="fas fa-angle-down"></i>
            <!--  -->
            <ul class="select-input-list btn btn-primary">
              <li>
                <a href="">Giá: Thấp Đến Cao</a>
              </li>
              <li>
                <a href="">Giá: Cao Tới Thấp</a>
              </li>
            </ul>
          </div>

          <div class="filter-paginate">
            <span class="paginate-num">
              <span class="paginate-current">1</span>/14
            </span>
            <div class="paginate-control">
              <a href="" class="filter-control-btn"><i class="fas fa-angle-left"></i></a>
              <a href="" class="filter-control-btn"><i class="fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- end filter  -->
        <!-- san pham -->
        <div class="container">
         
          <div class="row">
              <div class="col-md-3 pro-hov">
                  <div class="product-top">
                      <img src="./assets/images/pro1.jpg" alt="">
                      <div class="overlay">
                          <button type="button" class="btn btn-secondary" title="Quick Shop">
                              <i class="fa fa-eye" ></i>
                          </button>
                          <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                              <i class="fa fa-heart" ></i>
                          </button>
                          <button type="button" class="btn btn-secondary" title="Add to cart">
                              <i class="fa fa-shopping-cart" ></i>
                          </button>
                      </div>
                  </div>
                  <span class="percent deal">80%</span>
                  <div class="product-bottom text-center">
                      <i class="fas fa-star" ></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star" ></i>
                      <i class="fas fa-star-half" ></i>
                      <i class="far fa-star" ></i>
                      <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
                      <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
                  </div>
              </div>
              <div class="col-md-3 pro-hov">
                <div class="product-top">
                    <img src="./assets/images/pro1.jpg" alt="">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick Shop">
                            <i class="fa fa-eye" ></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                            <i class="fa fa-heart" ></i>
                        </button>
                        <button type="button" class="btn btn-secondary" title="Add to cart">
                            <i class="fa fa-shopping-cart" ></i>
                        </button>
                    </div>
                </div>
                <span class="percent deal">80%</span>
                <div class="product-bottom text-center">
                  <i class="fas fa-star" ></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star" ></i>
                  <i class="fas fa-star-half" ></i>
                  <i class="far fa-star" ></i>
                    <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
                    <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
                </div>
            </div>
            <div class="col-md-3 pro-hov">
              <div class="product-top">
                  <img src="./assets/images/pro1.jpg" alt="">
                  <div class="overlay">
                      <button type="button" class="btn btn-secondary" title="Quick Shop">
                          <i class="fa fa-eye" ></i>
                      </button>
                      <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                          <i class="fa fa-heart" ></i>
                      </button>
                      <button type="button" class="btn btn-secondary" title="Add to cart">
                          <i class="fa fa-shopping-cart" ></i>
                      </button>
                  </div>
              </div>
              <span class="percent deal">80%</span>
              <div class="product-bottom text-center">
                <i class="fas fa-star" ></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star" ></i>
                <i class="fas fa-star-half" ></i>
                <i class="far fa-star" ></i>
                  <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
                  <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
              </div>
          </div>
          <div class="col-md-3 pro-hov">
            <div class="product-top">
                <img src="./assets/images/pro1.jpg" alt="">
                <div class="overlay">
                    <button type="button" class="btn btn-secondary" title="Quick Shop">
                        <i class="fa fa-eye" ></i>
                    </button>
                    <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                        <i class="fa fa-heart" ></i>
                    </button>
                    <button type="button" class="btn btn-secondary" title="Add to cart">
                        <i class="fa fa-shopping-cart" ></i>
                    </button>
                </div>
            </div>
            <span class="percent deal">80%</span>
            <div class="product-bottom text-center">
              <i class="fas fa-star" ></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star" ></i>
              <i class="fas fa-star-half" ></i>
              <i class="far fa-star" ></i>
                <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
                <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
            </div>
        </div>
        <div class="col-md-3 pro-hov">
          <div class="product-top">
              <img src="./assets/images/pro1.jpg" alt="">
              <div class="overlay">
                  <button type="button" class="btn btn-secondary" title="Quick Shop">
                      <i class="fa fa-eye" ></i>
                  </button>
                  <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                      <i class="fa fa-heart" ></i>
                  </button>
                  <button type="button" class="btn btn-secondary" title="Add to cart">
                      <i class="fa fa-shopping-cart" ></i>
                  </button>
              </div>
          </div>
          <span class="percent deal">80%</span>
          <div class="product-bottom text-center">
            <i class="fas fa-star" ></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star" ></i>
            <i class="fas fa-star-half" ></i>
            <i class="far fa-star" ></i>
              <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
              <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
          </div>
      </div>
      <div class="col-md-3 pro-hov">
        <div class="product-top">
            <img src="./assets/images/pro1.jpg" alt="">
            <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop">
                    <i class="fa fa-eye" ></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                    <i class="fa fa-heart" ></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add to cart">
                    <i class="fa fa-shopping-cart" ></i>
                </button>
            </div>
        </div>
        <span class="percent deal">80%</span>
        <div class="product-bottom text-center">
          <i class="fas fa-star" ></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star" ></i>
          <i class="fas fa-star-half" ></i>
          <i class="far fa-star" ></i>
            <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
            <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
        </div>
    </div>
    <div class="col-md-3 pro-hov">
      <div class="product-top">
          <img src="./assets/images/pro1.jpg" alt="">
          <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                  <i class="fa fa-eye" ></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                  <i class="fa fa-heart" ></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to cart">
                  <i class="fa fa-shopping-cart" ></i>
              </button>
          </div>
      </div>
      <span class="percent deal">80%</span>
      <div class="product-bottom text-center">
        <i class="fas fa-star" ></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star" ></i>
        <i class="fas fa-star-half" ></i>
        <i class="far fa-star" ></i>
          <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
          <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
      </div>
  </div>
  <div class="col-md-3 pro-hov">
    <div class="product-top">
        <img src="./assets/images/pro1.jpg" alt="">
        <div class="overlay">
            <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-eye" ></i>
            </button>
            <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                <i class="fa fa-heart" ></i>
            </button>
            <button type="button" class="btn btn-secondary" title="Add to cart">
                <i class="fa fa-shopping-cart" ></i>
            </button>
        </div>
    </div>
    <span class="percent deal">80%</span>
    <div class="product-bottom text-center">
      <i class="fas fa-star" ></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star" ></i>
      <i class="fas fa-star-half" ></i>
      <i class="far fa-star" ></i>
        <p class="title"> Chuột không dây logitech MB3000 slient-plus</p>
        <h5 class="price">200.000 đ <span class="original deal">300.000 đ</span></h5>
    </div>
</div>
  
             
           
<div class="btn-more text-center mt-3 mb-3">
  <a href="">Xem thêm</a>
</div>
          </div>
      </div>
      </div>
      <!-- end sản phẩm -->
    </div>
    <!-- end container -->
    <footer>
      <div class="footer__email">
          <div class="container footer-leter">
              <div class="row">
                  <div class="col-lg-2 NewsLetter-icon">
                      <img src="./assets/images/newsletter.png" alt="">
                  </div>
                  <div class="NewsLetter-description col-lg-4">
                      <h3>Đăng ký nhận bản tin Sky mart</h3>
                      <h5>Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn</h5>
                  </div>
                  <div class="NewsLetter-form col-lg-5">
                      <div>
                          <input type="email" placeholder="Địa chỉ email của bạn" value="">
                          <button>Đăng ký</button>
                      </div>
                     
                  </div>
              </div>
             
          </div>
      </div>
      <div class="footer__infor">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-xs-6">
                      <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                      <p class="hotline">
                          Hotline chăm sóc khách hàng: <span>1900-6035</span>
                          <span class="small-text">(1000đ/phút , 8-21h kể cả T7, CN)</span>
                      </p>
                      <a href="" class="small-text">Các câu hỏi thường gặp</a>
                      <a href="" class="small-text">Gửi yêu cầu hỗ trợ</a>
                      <a href="" class="small-text">Hướng dẫn đặt hàng</a>
                      <a href="" class="small-text">Phương thức vận chuyển</a>
                      <a href="" class="small-text">Chính sách đổi trả</a>
                      <a href="" class="small-text">Hướng dẫn mua trả góp</a>
                      <a href="" class="small-text">Chính sách hàng nhập khẩu</a>
                      <a href="" class="small-text">Hỗ trợ khách hàng: hotro@SkyMart.vn</a>
                      <a href="" class="small-text">Báo lỗi bảo mật: securiti@SkyMart.vn</a>
                  </div>
                  <div class="col-lg-3 col-md-6 col-xs-6">
                      <h4>Về Sky mart</h4>
                      <p></p>
                      <a href="" class="small-text">Giới thiệu SkyMart</a>
                      <a href="" class="small-text">Tuyển Dụng</a>
                      <a href="" class="small-text">Chính sách bảo mật thanh toán</a>
                      <a href="" class="small-text">Chính sách bảo mật thông tin cá nhân</a>
                      <a href="" class="small-text">Chính sách giải quyết khiếu nại</a>
                      <a href="" class="small-text">Điều khoản sử dụng</a>
                      <a href="" class="small-text">Giới thiệu SkyMart Xu</a>
                      <a href="" class="small-text">Bán hàng doanh nghiệp</a>
                      <a href="" class="small-text">Báo lỗi bảo mật: securiti@SkyMart.vn</a>
                  </div>
                  <div class="col-lg-2 col-md-6 col-xs-6">
                      <h4>Hợp tác và liên kết</h4>
                      <p></p>
                      <a href="" class="small-text">Quy chế hoạt động Sàn GDTMĐT</a>
                      <a href="" class="small-text"> Bán hàng cùng Tiki</a>
                  
                  </div>
                  <div class="col-lg-2 col-md-6 col-xs-6 icon-tt">
                      <h4>Phương thức thanh toán</h4>
                      <p>
                          <img class="icon " src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/visa.svg" style="width:44px" alt="">
                          <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/mastercard.svg" style="width:44px"  alt="">
                          <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/jcb.svg" style="width:44px"  alt="">
                          <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/cash.svg" style="width:44px"  alt="">
                          <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/internet-banking.svg" style="width:44px"  alt="">
                          <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/installment.svg"  style="width:44px" alt="">
                      </p>
                  </div>
                  <div class="col-lg-2 col-md-6 col-xs-6">
                      <h4>Kết nối với SkyMart</h4>
                      <p>
                          <a href="" class="icon">
                              <img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/fb.svg" width="32" alt="">
                          </a>
                          <a href="" class="icon">
                              <img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/youtube.svg" width="32" alt="">
                          </a>
                          <a href="" class="icon">
                              <i class="icon tikicon icon-footer-zalo"></i>
                          </a>
                      </p>
                      <h4 class="store-title">Tải ứng dụng trên điện thoại</h4>
                      <p>
                          <a href="" class="icon">
                              <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/appstore.png" alt="">
                          </a>
                          <br>
                          <a href="" class="icon">
                              <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/playstore.png" alt="">
                          </a>
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer__copyright">
          <div class="container">
              <div><h5>© 2016 - Bản quyền của Công Ty Cổ Phần Sky INC. - Skymart.vn</h5>
                  <p>Giấy chứng nhận Đăng ký Kinh doanh số 0309532909 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp ngày 06/01/2010</p>
                  </div>
          </div>
          
      </div>
  </footer>
    <!-- end footer -->
    
    <script type="text/javascript" src="./assets/js/script.js"></script>
</body>

</html>
<script>
  $('#gallery').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    pauseOnHover: false,
    cssEase: 'linear'
  });
</script>
<!-- scrip của khuyến mãi -->
<script>
  $('.custom-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      }
    ]
  });
</script>
<!-- scrip của bán chạy -->
<!-- script swiper slider -->