<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Auth Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  
}

body{
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,14,154,1) 35%, rgba(0,212,255,1) 100%);

}

.login-container h4, .registration-container h4{
  color: #f7345e;
  background: linear-gradient(-107deg, #82009f 0%, #f7345e 100%);
  transform: skewX(-10deg);
  /* position: relative;
  display: inline-block; */
  font-weight: 700;
  text-transform: capitalize;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.login-container form, .registration-container form{
    border-radius: 20px;
    margin-top: 150px !important;
    width: 50% !important;
    background-color: white !important;
    padding: 50px;
}

.login-container .btn-primary, .registration-container .btn-primary{
    width: 100%;
    border: none;
    border-radius: 50px;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,14,154,1) 35%, rgba(0,212,255,1) 100%);
    
}

.login-container .form-control,.registration-container .form-control{
    color: rgba(0,0,0,.87);
    border-bottom-color: rgba(0,0,0,.42);
    box-shadow: none !important;
    border: none;
    border-bottom: 1px solid;
    border-radius: 4px 4px 0 0;
    }
.login-container  h4, .registration-container h4{
    font-size: 2rem !important;
    font-weight: 700;
 }  
.login-container .form-label, .registration-container .form-label{
    font-weight: 800 !important;
 }
@media(max-width: 1200px) {
    .login-container form, .registration-container form{
        width: 80% !important;
    }
  }

  #emailHelp{
    cursor: pointer;
  }

  #emailHelp:hover{
    color: #ccc;
  }
    </style>
  </head>
  <body>
    @include('header')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <script src="/js/bootstrap.min.js"></script>

</html>