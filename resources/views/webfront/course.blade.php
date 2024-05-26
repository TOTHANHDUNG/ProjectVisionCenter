<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vision Foreign Language Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="description" content="">
  <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
  <meta name="author" content="web-themes">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/course.css">
  <link rel="icon" type="image/png" href="/images/Backup_of_logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="/css/fontawesome.min.css" rel="stylesheet" type="text/css" />
  <link href="/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    @include('header')
  {{-- register  --}}
  <div class="container-course">
    <div class="container-content-course">
        <div class="container">
            <div class="section-title">
                <h2>Khóa học Giao tiếp</h2>
                <p>Qua Phim</p>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-statistical-english">
                    <lord-icon class="d-inline-block align-middle"
                        src="https://cdn.lordicon.com/hqymfzvj.json"
                        trigger="loop"
                        delay="1500"
                        state="in-add-card"
                        style="width:40px;height:40px">
                    </lord-icon><a href="">Gồm có {{count($course_english)}} khóa học</a>
                  </div>
                <div class="col-12 text-sub-english">
                    <lord-icon class="d-inline-block align-middle"
                        src="https://cdn.lordicon.com/jkzgajyr.json"
                        trigger="loop"
                        delay="2000"
                        style="width:40px;height:40px">
                    </lord-icon><a href="">Khóa học Tiếng Anh</a>
                  </div>
                @foreach ($course_english as $course)
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6 mt-3" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                        <div class="single-demo-item on-hover">
                            <div class="cover-course">
                                <div class="image-container">
                                    <img src="{{ asset('photodata/' . $course->photo) }}" alt="">
                                </div>
                                <div class="overlay">
                                    <button class="btn-view-course"><a href="/english-socap">Xem khóa học</a></button>
                                </div>
                            </div>
                            <div class="container content-des-course">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h4>{{$course->name}}</h4>
                                    </div>
                                    <div class="col-6">
                                        <p><i class="fa-regular fa-clock"></i><span> 3 tháng</span></p>
                                    </div>
                                    <div class="col-6">
                                        <p><i class="fa-solid fa-quote-left"></i><span> {{$course->type}}</span></p>
                                    </div>
                                    <div class="col-6">
                                        <span class="text-with-solid-line-through">499.000 VND</span>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="price-text">{{$course->price}} VND</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                @endforeach
                <div class="col-12 text-statistical-english">
                  <lord-icon class="d-inline-block align-middle"
                      src="https://cdn.lordicon.com/hqymfzvj.json"
                      trigger="loop"
                      delay="1500"
                      state="in-add-card"
                      style="width:40px;height:40px">
                  </lord-icon><a href="">Gồm có {{count($course_korean)}} khóa học</a>
                </div>
              <div class="col-12 text-sub-english">
                  <lord-icon class="d-inline-block align-middle"
                      src="https://cdn.lordicon.com/jkzgajyr.json"
                      trigger="loop"
                      delay="2000"
                      style="width:40px;height:40px">
                  </lord-icon><a href="">Khóa học Tiếng Hàn</a>
                </div>
                @foreach ($course_korean as $course)
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                        <div class="single-demo-item on-hover">
                            <div class="cover-course">
                                <div class="image-container">
                                    <img src="{{ asset('photodata/' . $course->photo) }}" alt="">
                                </div>
                                <div class="overlay">
                                    <button class="btn-view-course"><a href="/english-socap">Xem khóa học</a></button>
                                </div>
                            </div>
                            <div class="container content-des-course">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h4>{{$course->name}}</h4>
                                    </div>
                                    <div class="col-6">
                                        <p><i class="fa-regular fa-clock"></i><span> 3 tháng</span></p>
                                    </div>
                                    <div class="col-6">
                                        <p><i class="fa-solid fa-quote-left"></i><span> {{$course->type}}</span></p>
                                    </div>
                                    <div class="col-6">
                                        <span class="text-with-solid-line-through">499.000 VND</span>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="price-text">{{$course->price}} VND</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="form-register container">
  <div class="align-items-center text-center">
    <button id="showFormButton" class="btn btn-register mb-3"><a href="https://docs.google.com/forms/d/15UKsgs0jwwZVSIMVj_TeBMvcogushZhcctAxjSNiyM0/edit" target="_blank">Đăng Ký để được Tư Vấn Miễn phí ngay!</a> </button>
  </div>
  {{-- <div id="container-register">
    <div class="row container-content-resgister align-items-center d-flex">
      <div class="col-xl-6 col-lg-6 align-items-center text-center">
        <div class="col-xl-12 align-items-center">
          <form id="registrationForm" class="form">
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="courses" placeholder="Khoá học cần tư vấn">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" rows="4" placeholder="Nhập lời nhắn của bạn..."></textarea>
          </div>
            <button type="submit" class="btn btn-success">Đăng ký</button>
          </form>
        </div>
      </div>
      <div class="container-img-resgister col-xl-6 col-lg-6">
        <img src="/images/back-to-school.png" alt="">
      </div>
    </div>
  </div> --}}
</div>
{{-- review  --}}
<div class="reviews-container">
  <div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="https://images.unsplash.com/photo-1569124589354-615739ae007b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
        <div class="rating">
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
        </div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="https://images.unsplash.com/photo-1595868228899-abc8fabb3447?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
        <div class="rating">
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
        </div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="https://images.unsplash.com/photo-1524638431109-93d95c968f03?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
        <div class="rating">
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
        </div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>
    
  </div>
  <div class="blog-slider__pagination"></div>
</div>
</div>
</div>
@include('answer-question')
@include('footer')
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/myscript.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>

    <script>
      function slider_carouselInit() {
    $('.owl-carousel.slider_carousel').owlCarousel({
        dots: false,
        loop: true,
        margin: 30,
        stagePadding: 2,
        autoplay: false,
        nav: true,
        navText: ["<i class='fa-solid fa-caret-left'></i>","<i class='fa-solid fa-caret-right'></i>"],
        autoplayTimeout: 1500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            992: {
                items: 5
            }
        }
    });
}
slider_carouselInit();

// Đảm bảo tất cả các phần tử HTML đã được tải xong trước khi chạy mã JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Kiểm tra xem trang hiện tại có phải là trang "home" không
    if (window.location.href.endsWith("/home") || window.location.href.endsWith("/")) {
        // Nếu là trang "home", loại bỏ lớp "active" khỏi mục "home" trong header
        var homeItem = document.querySelector('.header-home');
        if (homeItem) {
            homeItem.classList.remove('active');
        }
    }

    // Kiểm tra xem trang hiện tại có phải là trang "course" không
    if (window.location.href.includes("/course")) {
        // Nếu là trang "course", thêm lớp "active" cho mục "course" trong header
        var courseItem = document.querySelector('.header-course');
        if (courseItem) {
            courseItem.classList.add('active');
        }
    }
});


    </script>
   <script>
    // Tạo một trình quan sát với các tùy chọn
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    });

    // Theo dõi các phần tử có lớp "lazy-load"
    const lazyLoadElements = document.querySelectorAll('.lazy-load');
    lazyLoadElements.forEach(element => {
      observer.observe(element);
    });
  </script>

  <script>
    // Thêm sự kiện click cho nút "Đăng Ký"
    document.getElementById("showFormButton").addEventListener("click", function () {
        // Hiển thị form đăng ký thông tin
        document.getElementById("container-register").style.display = "block";
    });
  </script>

  <script type="" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
  <script type="" src="/js/slider-swiper-script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="/js/aos.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>
</html>


