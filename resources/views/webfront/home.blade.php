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
  <link rel="stylesheet" href="/css/home-style.css">
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

</head>
<body>
    @include('header')
    @include('slider')
 <!-- slider -->
<!-- introduce  -->
<div id="introduce">
  <div class="container py-5">
    <div class="row welcome text-center">
      <div class="col-12">
        <div class="title-center display-4">
          Trung Tâm Đào Tạo Ngoại Ngữ Vision
        </div>

      </div>
      <div class="col-12">
        <p>Vision Languge Center tự hào là đơn vị đào tạo ngoại ngữ hàng đầu tại Việt Nam . </p>
      </div>
    </div>
    <div class="introduce-sub row text-center padding">
      <div class="item-introduce col-xs-12 col-sm-6 col-md-3 ">
        <img src="/images/online-graduation.png" class="img-fluid bg-transparent" alt="">
        <h3>Lịch sử</h3>
        <p>Với hơn 10 năm nghiên cứu và phát triển, Vision Languge Center đã đào tạo trên 
          hàng nghìn học viên đạt thành quả vượt trội về khả năng sử dụng tiếng Hàn và tiếng Anh 
          sở hữu những số điểm đáng mơ ước và giao tiếp một cách thành thạo.</p>					
      </div>
      <div class="item-introduce col-xs-12 col-sm-6 col-md-3">
        <img src="/images/online-exam.png" class="img-fluid bg-transparent" alt="">		
        <h3>Mục tiêu</h3>
        <p>Bứ mệnh hàng đầu mà Vision Language Center hướng đến là giúp đỡ 
          thế hệ trẻ Việt Nam phát triển toàn diện cả về khả năng ngoại ngữ và kỹ năng hội nhập quốc tế.</p>
      </div>
      <div class="item-introduce col-sm-6 col-md-3">
        <img src="/images/self-learning.png" class="img-fluid bg-transparent" alt="">		
        <h3>Phương pháp</h3>
        <p>Rèn luyện khả năng ứng dụng tự học từ vựng. Linh hoạt xử lý các chủ đề giao tiếp một cách rõ ràng, chủ động, sáng tạo</p>
      </div>
      <div class="item-introduce col-sm-6 col-md-3">
        <img src="/images/exchange.png" class="img-fluid bg-transparent" alt="">	
        <h3>Đội ngũ giáo viên</h3>
        <p>Đội ngũ giáo viên chất lượng, có kinh nghiệm và trình độ chuyên môn cao trong việc giảng dạy tiếng Anh.
          Thông tin về quá trình tuyển chọn giáo viên, bao gồm các tiêu chí và quy trình đánh giá.</p>
      </div>
    </div>	
  </div>
</div>


<div id="card_wrapper">
  <div class="container">
      <div class="container-content row">
          <div class="title-content col-12 text-center">
              <h2 class="head_text">Đội ngũ <span>Giáo viên</span></h2>
              <p class="head_para">"Đội ngũ giáo viên chất lượng, có kinh nghiệm và trình độ chuyên môn cao trong việc giảng dạy."</p>
          </div>
          <div class="col-12">
              <div class="owl-carousel slider_carousel">
                @foreach ($teacher_english as $teacher)
                  <div class="card_box">
                      <img class="img w-100 avatar-teacher" src="{{ asset('photodata/' . $teacher->photo) }}" alt="">
                      <div class="card_text">
                          <h4>Name: {{$teacher->name}}</h4>
                          <p>Mô tả: {{$teacher->description}}</p>
                      </div>
                  </div>
                  @endforeach
              </div>
            </div>
      </div>
    </div>
</div>
{{-- maketing course --}}
<div class="container">
  <div class="container container-youtube1">
    <div class="row container-content d-flex">
      <div class="col-xl-6 col-lg-6 align-items-center text-center">
        <div class="col-xl-12 align-items-center">
          <h2>Một lớp học</br> <span>Đặc biệt</span>
          </br>được thiết kế theo kiểu </br><span>Team Building</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quia maiores ducimus reiciendis modi inventore labore fugiat?</p>
          <p> Accusantium culpa labore libero illo earum repudiandae quidem doloribus atque voluptas, minima perferendis!</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="300px" height="169px" src="https://www.youtube.com/embed/I1XBZADuWnQ?si=izbh7e-syhC543Ey" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container container-youtube1">
    <div class="row container-content d-flex">
      <div class="col-xl-6 col-lg-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/AXYmL-vv84w?si=EYEzxTDM62oiziv_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 align-items-center text-center">
        <div class="col-xl-12 align-items-center">
          <h2>Một lớp học</br> <span>Đặc biệt</span>
          </br>được thiết kế theo kiểu </br><span>Team Building</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quia maiores ducimus reiciendis modi inventore labore fugiat?</p>
          <p> Accusantium culpa labore libero illo earum repudiandae quidem doloribus atque voluptas, minima perferendis!</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container container-youtube1">
    <div class="row container-content d-flex">
      <div class="col-xl-6 col-lg-6 align-items-center text-center">
        <div class="col-xl-12 align-items-center">
          <h2>Một lớp học</br> <span>Đặc biệt</span>
          </br>được thiết kế theo kiểu </br><span>Team Building</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quia maiores ducimus reiciendis modi inventore labore fugiat?</p>
          <p> Accusantium culpa labore libero illo earum repudiandae quidem doloribus atque voluptas, minima perferendis!</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="300px" height="169px" src="https://www.youtube.com/embed/I1XBZADuWnQ?si=izbh7e-syhC543Ey" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  {{-- register  --}}
  <div class="form-register">
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

document.addEventListener("DOMContentLoaded", function() {
    // Kiểm tra xem trang hiện tại có phải là trang "course" không
    if (window.location.href.includes("/home")) {
        // Nếu là trang "course", thêm lớp "active" cho mục "course" trong header
        var courseItem = document.querySelector('.header-home');
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
</body>
</html>


