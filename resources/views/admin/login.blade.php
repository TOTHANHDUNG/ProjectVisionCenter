@extends('admin.layout')
@section('title','Login')
@section('content')
<div class="container">
    <div class="mt-5">
        <div class="container-fluid login-container">
            <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto">
                @csrf
                <h4 class="text-center">Login</h4>
                @if($errors->any() || session()->has('error') || session()->has('success'))
                <div class="alert alert-{{ $errors->any() || session()->has('error') ? 'danger' : 'success' }}">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @endif
            
                    @if(session()->has('error'))
                        <p>{{session('error')}}</p>
                    @endif
            
                    @if(session()->has('success'))
                        <p>{{session('success')}}</p>
                    @endif
                </div>
            @endif
            

                <div class="mb-3 mt-5">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" required name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" required name="password">
                    <div id="emailHelp" class="form-text mt-3">Quên mật khẩu?</div>
                </div>
              
                <button type="submit" class="btn btn-primary mt-5">Đăng nhập</button>
                <div class="mt-3 d-flex justify-content-between">
                    <div>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="fa-brands fa-facebook me-2"></i></i> Facebook
                        </a>
                    </div>
                    <div>
                        <a href="#" class="btn btn-outline-danger">
                            <i class="fab fa-google me-2"></i> Google
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection