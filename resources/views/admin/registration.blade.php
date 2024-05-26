@extends('admin.layout')
@section('title','Registration')
@section('content')
    <div class="container">
        <div class="mt-5">
            <div class="container-fluid registration-container">
                <form action="{{ route('registration.post') }}" method="POST" class="ms-auto me-auto">
                    @csrf
                    <h4 class="text-center">Sign up</h4>

                    <!-- Error and Success Messages -->
                    <div class="mt-3">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>

                    <div class="mb-3 mt-5">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" required name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" required name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" required name="password">
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">Đăng ký</button>
                    <div class="mt-3 d-flex justify-content-between">
                        <div>
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fa-brands fa-facebook me-2"></i> Facebook
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
