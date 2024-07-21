@extends('Client.block.master')

@section('title')
    Xác nhận mật khẩu mới
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin: 40px 0 80px 0;">
            <div class="col-md-12" style="display: flex; justify-content: center">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center alert">Xác nhận mật khẩu mới</h1>
                    </div>

                    <div class="card-body">
                        <form method="POST" id="confirmResetPassword" action="{{ route('password.update') }}">
                            @csrf

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="password">Mật khẩu mới</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="password-confirm">Xác nhận mật khẩu mới</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        Xác nhận đổi mật khẩu
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#confirmResetPassword').on('submit', function(e) {
                e.preventDefault();
                console.log(this)
            })
        })
    </script>
@endsection
