<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Header</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}

.container-navbar .navbar{
	position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* Để header luôn ở trên cùng */
	padding: 10px 0;
    background: #82009f;
    background: -moz-linear-gradient(left, #82009f 0%, #5d34af 50%, #00ceab 100%);
    background: -webkit-linear-gradient(left, #82009f 0%, #5d34af 50%, #00ceab 100%);
    background: linear-gradient(to right, #82009f 0%, #5d34af 50%, #00ceab 100%);	padding-left: 16px;
	padding-right: 16px;
	border-radius: 0;
	box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
.navbar-nav .nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}

.container-navbar .navbar .form-inline {
	display: inline-block;
}

.form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.container-navbar .navbar a {
	font-weight: 500;
	font-size: 15px;
}
.container-navbar .search-box {
	position: relative;
}	
.container-navbar .search-box input {
	padding-right: 35px;
	border-color: #dfe3e8;
	border-radius: 4px !important;
	box-shadow: none
}
.container-navbar .search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.container-navbar .search-box i {
	color: #a0a5b1;
	font-size: 16px;
}

.container-navbar .navbar-nav a{
	white-space: nowrap;
}


.navbar-nav .nav-link{
  color: #fff;
  font-weight: 700;
  position: relative;
}

.container-navbar .navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}

.container-navbar .navbar .navbar-form {
	border: none;
}
.container-navbar .navbar .action-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.container-navbar .navbar .action-form a {		
	color: #33cabb;
	padding: 0 !important;
	font-size: 14px;
}
.container-navbar .navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}


.container-navbar .navbar-btn .nav-item .btn-login{
	background-color: #22c8e5;
	color: #fff;
	transition: 0.3s ease-in
}

.container-navbar .navbar-btn .nav-item .btn-login:hover{
	background-color: #f7345e;
	scale: 1.05;
	transition: 0.3s ease-in-out
}

.container-navbar .navbar-btn .nav-item .sign-up-btn{
	background-color: transparent;
	border: 1px solid #22c8e5;
	color: #fff;
}

.container-navbar .navbar-btn .nav-item .sign-up-btn:hover{
	color: rgb(236, 236, 236);
}

.container-navbar .navbar-btn .nav-item .cover-avatar{
    border-radius: 50%;
}
@media (min-width: 1305px){
	.container-navbar .form-inline .input-group {
		width: 100%;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.container-navbar .navbar .dropdown-menu.action-form {
		width: 100%;
		padding: 10px 15px;
		background: transparent;
		border: none;
	}
	.container-navbar .navbar .form-inline {
		display: block;
	}
	.container-navbar .navbar-btn .nav-item{
		margin-top: 10px;
}
}


@media (min-width: 991px){
	.navbar-nav .nav-link::before{
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background-color: #ffffff;
    visibility: hidden;
    transition: 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover::before, .navbar-nav .nav-link:hover{
  width: 100%;
  visibility: visible;
}
}





/* Thumbnail Section  */
.container-slider .thumbnail{
    position: absolute;
    bottom: 50px;
    left: 50%;
    width: max-content;
    z-index: 100;
    display: flex;
    gap: 20px;
}

.container-slider .thumbnail .item{
    width: 150px;
    height: 220px;
    flex-shrink: 0;
    position: relative;
}

.container-slider .thumbnail .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 5px 0 15px rgba(0, 0, 0, 0.3);
}


/* nextPrevArrows Section  */
.container-slider .nextPrevArrows{
    position: absolute;
    top: 80%;
    right: 52%;
    z-index: 100;
    width: 300px;
    max-width: 30%;
    display: flex;
    gap: 10px;
    align-items: center;
}
.container-slider .nextPrevArrows button{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #14ff72cb;
    border: none;
    color: #fff;
    font-family: monospace;
    font-weight: bold;
    transition: .5s;
    cursor: pointer;
}
.container-slider .nextPrevArrows button:hover{
    background-color: #fff;
    color: #000;
}

/* Animation Part */
.container-slider .list .item:nth-child(1){
    z-index: 1;
}


/* animation text in first item */
.container-slider .list .item:nth-child(1) .content .title,
.container-slider .list .item:nth-child(1) .content .type,
.container-slider .list .item:nth-child(1) .content .description,
.container-slider .list .item:nth-child(1) .content .buttons
{
    transform: translateY(50px);
    filter: blur(20px);
    opacity: 0;
    animation: showContent .5s 1s linear 1 forwards;
}
@keyframes showContent{
    to{
        transform: translateY(0px);
        filter: blur(0px);
        opacity: 1;
    }
}
.container-slider .list .item:nth-child(1) .content .title{
    animation-delay: 0.4s !important;
}
.container-slider .list .item:nth-child(1) .content .type{
    animation-delay: 0.6s !important;
}
.container-slider .list .item:nth-child(1) .content .description{
    animation-delay: 0.8s !important;
}
.container-slider .list .item:nth-child(1) .content .buttons{
    animation-delay: 1s !important;
}




/* Animation for next button click */
.container-slider.next .list .item:nth-child(1) img{
    width: 150px;
    height: 220px;
    position: absolute;
    bottom: 50px;
    left: 50%;
    border-radius: 30px;
    animation: showImage .5s linear 1 forwards;
}

@keyframes showImage{
    to{
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 0;
    }
}

.container-slider.next .thumbnail .item:nth-last-child(1){
    overflow: hidden;
    animation: showThumbnail .5s linear 1 forwards;
}
.container-slider.prev .list .item img{
    z-index: 100;
}


@keyframes showThumbnail{
    from{
        width: 0;
        opacity: 0;
    }
}


.container-slider.next .thumbnail{
    animation: effectNext .5s linear 1 forwards;
}

@keyframes effectNext{
    from{
        transform: translateX(150px);
    }
}



/* Animation for prev button click */
.container-slider.prev .list .item:nth-child(2){
    z-index: 2;
}

.container-slider.prev .list .item:nth-child(2) img{
    animation: outFrame 0.5s linear 1 forwards;
    position: absolute;
    bottom: 0;
    left: 0;
}
@keyframes outFrame{
    to{
        width: 150px;
        height: 220px;
        bottom: 50px;
        left: 50%;
        border-radius: 20px;
    }
}

.container-slider.prev .thumbnail .item:nth-child(1){
    overflow: hidden;
    opacity: 0;
    animation: showThumbnail .5s linear 1 forwards;
}
.container-slider.next .nextPrevArrows button,
.container-slider.prev .nextPrevArrows button{
    pointer-events: none;
}


.container-slider.prev .list .item:nth-child(2) .content .title,
.container-slider.prev .list .item:nth-child(2) .content .type,
.container-slider.prev .list .item:nth-child(2) .content .description,
.container-slider.prev .list .item:nth-child(2) .content .buttons
{
    animation: contentOut 1.5s linear 1 forwards!important;
}

@keyframes contentOut{
    to{
        transform: translateY(-150px);
        filter: blur(20px);
        opacity: 0;
    }
}
@media screen and (max-width: 678px) {
    .slider .list .item .content{
        padding-right: 0;
    }
    .slider .list .item .content .title{
        font-size: 50px;
    }
}
</style>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
</head> 
<body>
	<div class="container-fuild container-navbar">
		<nav class="navbar navbar-expand-xl ">
			<a href="/home" class="navbar-brand"><img src="/images/logo1.png" style="width: 70px"></a>  		
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Collection of nav links, forms, and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse justify-content-center">
				<div class="navbar-nav">
					<a href="/home" class="nav-item nav-link header-home ">Trang chủ</a>
					<a href="/course" class="nav-item nav-link header-course ">Khóa học</a>
					<a href="#card_wrapper" class="nav-item nav-link">Giáo viên</a>			
					<div class="nav-item dropdown">
						<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Lịch câu lạc bộ</a>
						<div class="dropdown-menu">					
							<a href="#" class="dropdown-item">Tiếng Anh</a>
							<a href="#" class="dropdown-item">Tiếng Hàn</a>
							<a href="#" class="dropdown-item">Graphic Design</a>
							<a href="#" class="dropdown-item">Digital Marketing</a>
						</div>
					</div>
					<a href="#" class="nav-item nav-link ">Tin tức</a>
					<a href="#" class="nav-item nav-link">Liên hệ</a>
					<a href="#" class="nav-item nav-link">VI</a>
				</div>
				<form class="navbar-form form-inline">
					<div class="input-group search-box">								
						<input type="text" id="search" class="form-control" placeholder="Nhập từ khóa...">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="material-icons">&#xE8B6;</i>
							</span>
						</div>
					</div>
				</form>
				<div class="navbar-btn ml-auto action-buttons d-flex justify-content-center">
                    @guest
                        <div class="nav-item ml-auto action-buttons">
                            <a href="/login" class="btn btn-login">Đăng nhập</a>
                            <a href="/registration" class="btn sign-up-btn">Đăng ký</a>
                        </div>
                    @else
                        <div class="nav-item ml-auto action-buttons">
                            <div class="dropdown mr-5">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ Auth::user()->photo ? asset('photodata/' . Auth::user()->photo) : asset('photodata/ba.png') }}" alt="Avatar" class="cover-avatar me-2" style="width: 60px">
                                    <span>{{ Auth::user()->name }}</span> <!-- Hiển thị tên người dùng -->
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/profile">Xem Hồ Sơ Cá Nhân</a></li>
                                    <li><a class="dropdown-item" href="#">Cài Đặt</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <!-- Sử dụng onclick để gọi hàm confirmLogout() khi nhấp vào nút Logout -->
                                            <button type="submit" class="dropdown-item" onclick="return confirmLogout()">Đăng Xuất</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                                                    
                        </div>
                        
                    @endguest
                </div>
			</div>
		</nav>
	</div>
    <script>
        function confirmLogout() {
            if (confirm('Bạn có chắc chắn muốn đăng xuất không?')) {
                // Nếu người dùng nhấn OK, chuyển hướng đến trang logout
                window.location.href = "{{ route('logout') }}";
            } else {
                // Nếu người dùng nhấn Cancel, không làm gì cả
                return false;
            }
        }
    </script>
    
</body>
</html>