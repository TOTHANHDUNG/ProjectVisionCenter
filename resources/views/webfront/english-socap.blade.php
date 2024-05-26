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
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			background-color: #0d1018;
			font-size: 18px;
		}
        .navbar-brand {
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-brand img {
            height: 50px;
            width: auto;
        }

		.navbar-nav a{
			color: aliceblue;
			font-weight: 700;
		}
		.container-navbar .navbar{
			position: fixed;
			top: 0;
			width: 100%;
			z-index: 1000; /* Để header luôn ở trên cùng */
			background: #82009f;
			background: -moz-linear-gradient(left, #82009f 0%, #5d34af 50%, #00ceab 100%);
			background: -webkit-linear-gradient(left, #82009f 0%, #5d34af 50%, #00ceab 100%);
			background: linear-gradient(to right, #82009f 0%, #5d34af 50%, #00ceab 100%);
			box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
			right: 0;
    		left: 0;
			margin: 0;
			}
		
		.content-infor{
			margin-top: 90px;
			color: aliceblue;
		}

		.content-infor h1{
			font-size: 60px;
			font-weight: 700;
		}
		.content-infor span{
			color: #f7345e;
			background: linear-gradient(-107deg, #82009f 0%, #f7345e 100%);
			transform: skewX(-10deg);
			position: relative;
			display: inline-block;
			font-weight: 700;
			text-transform: capitalize;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
		}

		.content-infor .btn-hocthu {
			background-color: aliceblue;
			border-radius: 20px;
		}

		.content-infor .btn-hocthu a,	
		.content-infor .btn-muakhoahoc a{
			text-decoration: none;
			color: #0d1018;
			font-weight: 700;

		}

		.content-infor .btn-muakhoahoc{
			background-color: transparent;
			border-radius: 20px;
			border: 1px solid #82009f;
		}

		.content-infor .btn-muakhoahoc a{
			color: aliceblue;
		}
    </style>
</head>

<body>
    {{-- header  --}}
	<div class="container container-navbar">
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<a href="/home" class="navbar-brand"><img src="/images/logo1.png"></a>  		
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Collection of nav links, forms, and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse justify-content-center">
				<div class="navbar-nav">
					<a href="" class="nav-item nav-link header-home ">Nội dung</a>
					<a href="" class="nav-item nav-link header-course ">Điểm khác biệt</a>
					<a href="#card_wrapper" class="nav-item nav-link">Giáo viên</a>			
					<a href="#" class="nav-item nav-link ">Đánh giá</a>
					<a href="#" class="nav-item nav-link">Liên hệ</a>
					<a href="#" class="nav-item nav-link">VI</a>
				</div>
			</div>
			</div>
			
		</nav>
	</div>

    {{-- center  --}}
    <div class="container content-infor">
        <div class="container mt-5">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Mẹo học tiếng anh siêu nhanh qua <span>Phim</span></h1>
					<p class="text-center">Khóa học <span>đặc biệt</span> được thiết kế nhằm giúp bạn <span>nâng cao</span> kỹ năng tiếng Anh.</p>
					<div class="text-center d-flex justify-content-center">
						<button class="btn btn-hocthu mr-3">
							<a href="/try-learning">Học thử miễn phí</a>
							<lord-icon src="https://cdn.lordicon.com/aklfruoc.json" trigger="hover" style="width:20px;height:20px; padding-top: 3px"></lord-icon>
						</button>
						<button class="btn btn-muakhoahoc ml-3">
							<a href="">Mua khóa học</a>
							<lord-icon src="https://cdn.lordicon.com/mfmkufkr.json" trigger="hover" colors="primary:#ffffff" style="width:20px;height:20px; padding-top: 3px"></lord-icon>
						</button>
					</div>
					
				</div>
			</div>
		</div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
	<script src="https://cdn.lordicon.com/lordicon.js"></script>

</body>
</html>