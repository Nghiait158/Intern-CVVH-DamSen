<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{('/frontend/css/header.css')}}" />
    {{-- <link rel="stylesheet" href="{{('/frontend/css/global.css')}}" /> --}}
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bangers:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;800&display=swap"
    />
  
  </head>

{{-- --------------------- Start Body ----------------------}}
<body> 
  <aside>
      <div id="sidebar" class="nav-collapse">
          <!-- sidebar menu start-->
          <div class="leftside-navigation">
            <div class="menu-wrapperMap">
              <div class="menuMap" id="menuMap">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
                  <path d="M2.5 10H23.5M2.5 2.5H23.5M2.5 17.5H13" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>
            <ul class="sidebar-menu" id="nav-accordion">
                  <li class="sub-menu">
                      <a class="active" href="{{URL::to('/adminContent')}}">
                          <span>Trang chủ</span>
                      </a>
                  </li>
                   
                  <li class="sub-menu">
                      <a href="javascript:;">Khám Phá</a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">Giới thiệu </a>
                      <ul class="sub">
                        <li><a href="">Lịch sử hình thành</a></li>
                        <li><a href="">Thành viên</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>    
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">Giá vé </a>
                      <ul class="sub">
                          <li><a href="">Vé trong công viên</a></li>
                          <li><a href="">Vé tập thể</a></li>
                          <li><a href="">Vé dịch vụ</a></li>                          
                          <li><a href="">Vé tập thể dục</a></li>                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="javascript:;">Sự Kiện </a>
                </li>
                <div class="image-container">
                  <img class="damSenPark" loading="lazy" alt="" src="{{ ('/frontEnd/img/damSenPark.png') }}">
                  <img class="logoDamSen" style="position: relative; left: -7px; top: -3px;" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoDamSen.png') }}">
                  <div class="social-logos">
                    <img class="logoFb" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoFb.png') }}">
                    <img class="logoIg" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoIg.png') }}">
                    <img class="logoYoutube" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoYoutube.png') }}">
                </div>
              </div>
                    
                  

            </ul>     
          <!-- sidebar menu end-->

          
      </div>
  </aside>   
  <section class="contentBody">
    <h1>content body</h1>
    @yield('content')
  </section>

  <section class="overlay hidden" id="overlay">

    <div class="show">
      {{-- <p>Map List</p>   --}}
      <div class="centered-box">
        <div class="areaBox">
            <p class="area-item">Trò chơi</p>
            <p class="area-item">Vườn thú</p>
            <p class="area-item">Cảnh đẹp sân khấu</p>
            <p class="area-item">Giáo dục trải nghiệm</p>
            <p class="area-item">Ẩm thực</p>
            <div class="line"></div>
        </div>

        {{-- ---------------------------------------- --}}
        <div class="list-location-TroChoi">
          <div class="column col-1">
            <p class="categoryName">CẢM GIÁC MẠNH</p>
            {{-- --@foreach ---- --}}
            <div class="item-location">
              <div class="circle-location">01</div>
              <span class="item-location-text">Cá Chép Nhào Lộn</span>
            </div>
            <div class="item-location">
              <div class="circle-location">02</div>
              <span class="item-location-text">Lâu Đài Kinh Dị</span>
            </div>
            <div class="item-location">
              <div class="circle-location">03</div>
              <span class="item-location-text">Phượng Hoàng Bay</span>
            </div>  
          {{-- ------------ --}}
          </div>

          <div class="column col-2">
            <p class="categoryName">TƯƠNG TÁC ẢO</p>
            <div class="item-location">
              <div class="circle-location">14</div>
              <span class="item-location-text">Xem Phim Cinemax 8D</span>  
            </div>
          </div>

          <div class="column col-3">
            <p class="categoryName">GIẢI TRÍ</p>
            <div class="item-location">
              <div class="circle-location">19</div>
              <span class="item-location-text">Băng Đăng</span>
            </div>
          </div>

          <div class="column col-4">
            <p class="categoryName">THIẾU NHI</p>
            <div class="item-location">
              <div class="circle-location">23</div>
              <div class="item-location-text">Ếch nhảy</div>
            </div>
            <div class="item-location">
              <div class="circle-location">24</div>
              <div class="item-location-text">Điệu Nhảy Thiên Thần</div>
            </div>
            <div class="item-location">
              <div class="circle-location">25</div>
              <div class="item-location-text">Khinh Khí Cầu Bay</div>
            </div>
            <div class="item-location">
              <div class="circle-location">26</div>
              <div class="item-location-text">Hải Cẩu Vượt Thác</div>
            </div>
            <div class="item-location">
              <div class="circle-location">23</div>
              <div class="item-location-text">Ếch nhảy</div>
            </div>
          </div>
        </div>



        {{----------------------------------------------------  --}}
      </div>
    </div>

  </section>




  {{-- --------------SCRIPT ---------------------------------}}
  <script>
    const menuMap = document.getElementById('menuMap');
    const overlay = document.getElementById('overlay');

    menuMap.addEventListener('click', function() {
      const svgElement = menuMap.querySelector('svg');
      if (overlay.classList.contains('hidden')) {
        overlay.classList.remove('hidden');
        overlay.classList.add('visible');
        menuMap.classList.add('active');
        svgElement.outerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <path d="M2 2L18 18M18 2L2 18" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>`;
      } else {
        overlay.classList.remove('visible');
        setTimeout(() => {
          overlay.classList.add('hidden');
        }, 500); // Time should match the duration of the transition
        menuMap.classList.remove('active');
        svgElement.outerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
          <path d="M2.5 10H23.5M2.5 2.5H23.5M2.5 17.5H13" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>`;
      }
    });


    document.querySelectorAll('.area-item').forEach(item => {
        item.addEventListener('click', function() {
            // Xóa màu nền của đường kẻ
            const line = document.querySelector('.line');
            line.style.width = '0'; // Reset chiều rộng về 0

            // Lấy chiều rộng của phần tử văn bản hiện tại
            const itemWidth = this.offsetWidth;
            const itemLeft = this.offsetLeft;

            // Cập nhật đường kẻ để hiển thị màu nền
            line.style.width = `${itemWidth}px`;
            line.style.left = `${itemLeft}px`;
            line.style.backgroundColor = '#EC008C'; // Màu khi chọn

            // Đặt lại màu nền về mặc định sau một khoảng thời gian
            setTimeout(() => {
                line.style.backgroundColor = 'rgba(238, 205, 224, 1)'; // Quay lại màu mặc định
            }, 1000);
        });
    });
  </script>

</body>
{{-- --------------------- End Body ----------------------}}

