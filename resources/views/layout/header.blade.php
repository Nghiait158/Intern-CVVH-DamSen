<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
{{-- ----------------------------CSS--------------------------------- --}}
    <link rel="stylesheet" href="{{('/frontEnd/css/header.css')}}" />
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}" /> --}}

    <link rel="stylesheet" href="{{('/frontEnd/css/homePage.css')}}" />
    <link rel="stylesheet" href="{{('/frontEnd/css/khampha.css')}}" />
    <link rel="stylesheet" href="{{('/frontEnd/css/khamphachitiet.css')}}" />
    <link rel="stylesheet" href="{{('/frontEnd/css/vechitiet.css')}}" />
    <link rel="stylesheet" href="{{('/frontEnd/css/sukien.css')}}" />
    <link rel="stylesheet" href="{{('/frontEnd/css/sukienchitiet.css')}}" />
    <link rel="stylesheet" href="{{('/frontEnd/css/thanhvien.css')}}" />
    <link rel="stylesheet" href="{{('/frontEnd/css/thucvat.css')}}" />

    {{-- ---------------------------JS--------------------------------- --}}
    <script src="{{ asset('frontEnd/js/header.js') }}" defer></script>
    <script src="{{ asset('frontEnd/js/khampha.js') }}" defer></script>


    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bangers:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;800&display=swap"
    />
    {{-- @stack('scripts') --}}
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
                      <a class="active" href="{{URL::to('/trangchu')}}">
                          <span>Trang chủ</span>
                      </a>
                  </li>
                   
                  <li class="sub-menu">
                      <a href="{{URL::to('/khampha')}}">Khám Phá</a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{URL::to('/gioithieu')}}">Giới thiệu </a>
                      <ul class="sub" style="left: 185px; top: -33px;">
                        <li><a href="{{URL::to('/lichsuhinhthanh')}}">Lịch sử hình thành</a></li>
                        <li><a href="{{URL::to('/thanhvien')}}">Thành viên</a></li>
                        <li><a href="{{URL::to('/chinhsachbaomat')}}">Chính sách bảo mật</a></li>    
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">Giá vé </a>
                      <ul class="sub" style="will-change: top, left; left: 187px; top: -55px;">
                          <li><a href="{{URL::to('/vechitiet/1')}}">Vé trong công viên</a></li>
                          <li><a href="{{URL::to('/vechitiet/2')}}">Vé tập thể dục</a></li>  
                          <li><a href="{{URL::to('/vechitiet/3')}}">Vé dịch vụ</a></li>  
                          <li><a href="{{URL::to('/vechitiet/4')}}">Vé tập thể</a></li>
                                                  
                                                  
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="{{URL::to('/sukien')}}">Sự Kiện </a>
                </li>
                <div class="image-containerHeader">
                  <img class="damSenPark" loading="lazy" alt="" src="{{ ('/frontEnd/img/damSenPark.png') }}">
                  <img class="logoDamSen" style="position: relative; left: -7px; top: -3px;" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoDamSen.png') }}">
                  <div class="social-logosHeader">
                    <img class="logoFb" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoFb.png') }}">
                    <img class="logoIg" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoIg.png') }}">
                    <img class="logoYoutube" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoYoutube.png') }}">
                
                </div>
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/admin') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        admin
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
              </div>
                    
                  

            </ul>     
          <!-- sidebar menu end-->

          
      </div>
  </aside>   
  <section class="contentBody">
    {{-- <h1>content body</h1> --}}
    @yield('content')
  </section>

  <section class="overlay hidden" id="overlay">

    <div class="show">
      {{-- <p>Map List</p>   --}}
      <div class="centered-box">
        <div class="areaBox">
          @foreach ($all_area ?? [] as $area)
            <p class="area-item">{{ $area -> areaName }}</p>
          @endforeach
            <div class="line"></div>
        </div>

        {{-- ---------------------------------------- --}}
        <div class="list-location-TroChoi">
          <div class="column col-1">
            
            <p class="categoryName">{{ $categorizedLocations[1]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[1]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
              @endforeach
            </a>
          {{-- ------------ --}}
          </div>

          <div class="column col-2">
            <p class="categoryName">{{ $categorizedLocations[2]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[2]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
              @endforeach
            </a>
            
          </div>

          <div class="column col-3">
            <p class="categoryName">{{ $categorizedLocations[4]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[4]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
              @endforeach
            </a>
          </div>

          <div class="column col-4">
            <p class="categoryName">{{ $categorizedLocations[5]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[5]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
              @endforeach
            </a>
          </div>

        </div>



        {{----------------------------------------------------  --}}
        {{-- ---------------------------------------- -------------}}
        <div class="list-location-VuonThu">
          <div class="column col-1">
            <p class="categoryName">{{ $categorizedLocations[6]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[6]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
            </a>
            @endforeach
          </div>

          <div class="column col-2">
            {{-- <p class="categoryName"></p>
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>  
            </div> --}}
          </div>

          <div class="column col-3">
            {{-- <p class="categoryName"></p> 
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>
            </div> --}}
          </div>

          <div class="column col-4">
            {{-- <p class="categoryName"></p> 
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>
            </div> --}}
          </div>
        </div>


        {{-- ---------------------------------------- -------------}}
        <div class="list-location-CanhDep">
          <div class="column col-1">
            <p class="categoryName">{{ $categorizedLocations[7]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[7]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
            </a>
            @endforeach
          </div>

          <div class="column col-2">
            {{-- <p class="categoryName"></p>
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>
            </div> --}}
          </div>

          <div class="column col-3">
            {{-- <p class="categoryName"></p> 
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>
            </div> --}}
          </div>

          <div class="column col-4">
            {{-- <p class="categoryName"></p> 
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>
            </div> --}}
          </div>
        </div>



        {{----------------------------------------------------  --}}
        {{----------------------------------------------------  --}}
        {{-- ---------------------------------------- -------------}}
        <div class="list-location-SanKhau">
          <div class="column col-1">
            <p class="categoryName">{{ $categorizedLocations[8]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[8]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
            </a>
            @endforeach
          </div>

          <div class="column col-2">
            {{-- <p class="categoryName"></p> 
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>
            </div> --}}
          </div>

          <div class="column col-3">
            {{-- <p class="categoryName"></p> 
            <div class="item-location">
              <div class="circle-location"></div>
              <span class="item-location-text"></span>
            </div> --}}
          </div>

          <div class="column col-4">
            {{-- <p class="categoryName"></p>
            <div class="item-location">
              <div class="circle-location">23</div>
              <div class="item-location-text">San khau</div>
            </div> --}}
          </div>
        </div>



        {{----------------------------------------------------  --}}
        {{-- ---------------------------------------- -------------}}
        <div class="list-location-GiaoDuc">
          <div class="column col-1">
            <p class="categoryName">{{ $categorizedLocations[9]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[9]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
            </a>
            @endforeach
          </div>

          <div class="column col-2">
            {{-- <p class="categoryName"> </p>
            <div class="item-location">
              <div class="circle-location">14</div>
              <span class="item-location-text">Xem Phim Cinemax 8D</span>  
            </div> --}}
          </div>

          <div class="column col-3">
            {{-- <p class="categoryName"> </p>
            <div class="item-location">
              <div class="circle-location">19</div>
              <span class="item-location-text">Băng Đăng</span>
            </div> --}}
          </div>

          <div class="column col-4">
            {{-- <p class="categoryName"> </p>
            <div class="item-location">
              <div class="circle-location">23</div>
              <div class="item-location-text">Ếch nhảy</div>
            </div> --}}
          </div>
        </div>



        {{----------------------------------------------------  --}}
        {{-- ---------------------------------------- -------------}}
        <div class="list-location-AmThuc">
          <div class="column col-1">
            <p class="categoryName">{{ $categorizedLocations[10]['categoryName'] }}</p>
            {{-- --@foreach ---- --}}
            @foreach($categorizedLocations[10]['locations'] as $location)
            <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
              <div class="item-location">
                <div class="circle-location">{{ $location->loID }}</div>
                <span class="item-location-text">{{ $location->loName }}</span>
              </div>
            </a>
            @endforeach
          </div>

          <div class="column col-2">
            {{-- <p class="categoryName"> </p>
            <div class="item-location">
              <div class="circle-location">14</div>
              <span class="item-location-text">Xem Phim Cinemax 8D</span>  
            </div> --}}
          </div>

          <div class="column col-3">
            {{-- <p class="categoryName"> </p>
            <div class="item-location">
              <div class="circle-location">19</div>
              <span class="item-location-text">Băng Đăng</span>
            </div> --}}
          </div>

          <div class="column col-4">
            {{-- <p class="categoryName"> </p>
            <div class="item-location">
              <div class="circle-location">23</div>
              <div class="item-location-text">Ca chien</div>
            </div> --}}
          </div>
        </div>



        {{----------------------------------------------------  --}}
      </div>
    </div>

  </section>




  {{-- --------------SCRIPT ---------------------------------}}
  <script> 
    // const menuMap = document.getElementById('menuMap');
    // const overlay = document.getElementById('overlay');

    // menuMap.addEventListener('click', function() {
    //   const svgElement = menuMap.querySelector('svg');
    //   if (overlay.classList.contains('hidden')) {
    //     overlay.classList.remove('hidden');
    //     overlay.classList.add('visible');
    //     menuMap.classList.add('active');
    //     svgElement.outerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    //       <path d="M2 2L18 18M18 2L2 18" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    //     </svg>`;
    //   } else {
    //     overlay.classList.remove('visible');
    //     setTimeout(() => {
    //       overlay.classList.add('hidden');
    //     }, 500); // Time should match the duration of the transition
    //     menuMap.classList.remove('active');
    //     svgElement.outerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
    //       <path d="M2.5 10H23.5M2.5 2.5H23.5M2.5 17.5H13" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    //     </svg>`;
    //   }
    // });


    // document.querySelectorAll('.area-item').forEach(item => {
    //     item.addEventListener('click', function() {
    //         // Xóa màu nền của đường kẻ
    //         const line = document.querySelector('.line');
    //         line.style.width = '0'; // Reset chiều rộng về 0

    //         // Lấy chiều rộng của phần tử văn bản hiện tại
    //         const itemWidth = this.offsetWidth;
    //         const itemLeft = this.offsetLeft;

    //         // Cập nhật đường kẻ để hiển thị màu nền
    //         line.style.width = `${itemWidth}px`;
    //         line.style.left = `${itemLeft}px`;
    //         line.style.backgroundColor = '#EC008C'; // Màu khi chọn

    //         // Đặt lại màu nền về mặc định sau một khoảng thời gian
    //         setTimeout(() => {
    //             line.style.backgroundColor = 'rgba(238, 205, 224, 1)'; // Quay lại màu mặc định
    //         }, 1000);
    //     });
    // });

    // --------------- ấn vào area-----------------------
    // document.addEventListener("DOMContentLoaded", function() {
    //       // Lấy các phần tử cần thiết
    //       const areaItems = document.querySelectorAll(".area-item");
    //       const listLocationTroChoi = document.querySelector(".list-location-TroChoi");
    //       const listLocationVuonThu = document.querySelector(".list-location-VuonThu");
    //       const listLocationSanKhau = document.querySelector(".list-location-SanKhau");
    //       const listLocationGiaoDuc = document.querySelector(".list-location-GiaoDuc");
    //       const listLocationAmThuc = document.querySelector(".list-location-AmThuc");

    //       // Thêm lớp hidden ban đầu
    //       listLocationTroChoi.classList.add("hidden");
    //       listLocationVuonThu.classList.add("hidden");
    //       listLocationSanKhau.classList.add("hidden");
    //       listLocationGiaoDuc.classList.add("hidden");
    //       listLocationAmThuc.classList.add("hidden");
          
    //       // Thêm sự kiện click cho từng mục
    //       areaItems.forEach(function(item) {
    //           item.addEventListener("click", function() {
    //               // Ẩn tất cả các phần tử danh sách vị trí
    //               listLocationTroChoi.classList.add("hidden");
    //               listLocationVuonThu.classList.add("hidden");
    //               listLocationSanKhau.classList.add("hidden");
    //               listLocationGiaoDuc.classList.add("hidden");
    //               listLocationAmThuc.classList.add("hidden");

    //               // Hiển thị phần tử tương ứng
    //               if (item.textContent === "Trò chơi") {
    //                   listLocationTroChoi.classList.remove("hidden");
    //               } else if (item.textContent === "Vườn thú") {
    //                   listLocationVuonThu.classList.remove("hidden");
    //               } else if (item.textContent === "Cảnh Đẹp Sân Khấu") {
    //                   listLocationSanKhau.classList.remove("hidden");
    //               } else if (item.textContent === "Giáo Dục Trải Nghiệm") {
    //                 listLocationGiaoDuc.classList.remove("hidden");
    //               } else if (item.textContent === "Ẩm Thực") {
    //                 listLocationAmThuc.classList.remove("hidden");
    //               }
    //           });
    //       });
    //   });
//     document.addEventListener("DOMContentLoaded", function() {
//     // Lấy các phần tử cần thiết
//     const areaItems = document.querySelectorAll(".area-item");
//     const listLocations = {
//         "Trò chơi": document.querySelector(".list-location-TroChoi"),
//         "Vườn thú": document.querySelector(".list-location-VuonThu"),
//         "Cảnh đẹp": document.querySelector(".list-location-CanhDep"),
//         "Sân khấu": document.querySelector(".list-location-SanKhau"),
//         "Giáo dục trải nghiệm": document.querySelector(".list-location-GiaoDuc"),
//         "Ẩm thực": document.querySelector(".list-location-AmThuc")
//     };

//     // Thêm lớp hidden ban đầu cho tất cả các danh sách
//     Object.values(listLocations).forEach(location => location.classList.add("hidden"));

//     // Thêm sự kiện click cho từng mục
//     areaItems.forEach(function(item) {
//         item.addEventListener("click", function() {
//             // Ẩn tất cả các phần tử danh sách vị trí
//             Object.values(listLocations).forEach(location => location.classList.add("hidden"));

//             // Hiển thị phần tử tương ứng
//             const selectedLocation = listLocations[item.textContent];
//             if (selectedLocation) {
//                 selectedLocation.classList.remove("hidden");
//             }
//         });
//     });
// });
</script>

</body>
{{-- --------------------- End Body ----------------------}}

