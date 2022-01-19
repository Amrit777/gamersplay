<style>
    .img-modal-login-center {
        width: 200px;
        height: auto;
        margin-left: 115px;
    }

    .header-img-modal-login-center {
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
    }

    .modal-close-btn {
        margin-bottom: 63px !important;
    }

</style>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true"
    style="margin-top:125px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header header-page rounded-top">
                <div class="header-img-modal-login-center">
                    <img class="img-modal-login-center"
                        src="data:image/png;base64,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">
                </div>
                {{-- <h4>Login</h4> --}}

                {{-- <div>
                    <img src="/imgs/logo.svg" alt="" srcset="" style="height:32px; margin-right:25px;">
                </div>
                <h5 class="modal-title" id="loginModal">{{ __('Login') }}</h5> --}}
                <div class="modal-close-btn">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

            </div>

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab">
                            Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab">
                            Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <div class="modal-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif


                                        @error('email')

                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>

                                        @enderror
                                        @error('password')

                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>

                                        @enderror
                                        <p class="card-text">Email</p>
                                        <input id="login-email" type="email" class=" @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="new-email"
                                            autofocus>
                                        <br>
                                        <br>
                                        <p class="card-text">Password</p>
                                        <input id="login-password" type="password"
                                            class="@error('password') is-invalid @enderror" name="password" required
                                            autocomplete="login-current-password">

                                        <br>
                                        <br>
                                        <div style="display:flex; align-items:center;">
                                            <input type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}
                                                style="width:initial; margin-right:10px; ">
                                            <p class="card-text">Remember me? </p>

                                        </div>

                                        <div style="padding-top:30px; text-align:center;">
                                            <button class="btn button-primary" id="login-submit-btn"
                                                style="padding:5px 20px; widtH:100%;">Login</button>
                                            <br>
                                            <br>
                                            {{-- <div style="margin:5px 0;">
                                    <small>or login with</small>
                                </div>


                                <div class="row" style="justify-content: center">
                                    <a href="/auth/discord"><img src="{{ asset('imgs/auth/discord.jpg') }}" alt=""
                                            style="height:28px;"></a>
                                </div> --}}
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div style="text-align:center;">
                                <p>Or log in with</p>
                                <a href="/auth/discord"><img src="{{ asset('imgs/auth/discord.jpg') }}" alt=""
                                        style="height:32px;"></a>
                            </div>


                        </div>
                    </div>
                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row" style="padding-bottom:40px">


                                    <div class="col-md-12">

                                        <br>
                                        <div class="row">
                                            @error('email')
                                                <div class="col-md-12">

                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                            @error('name')
                                                <div class="col-md-12">

                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                            @error('password')
                                                <div class="col-md-12">

                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6>Nickname</h6>

                                                    <input id="name" type="text"
                                                        class="@error('name') is-invalid @enderror" name="name"
                                                        value="{{ old('name') }}" required autocomplete="name"
                                                        autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6>Full Name</h6>

                                                    <input id="real_name" type="text"
                                                        class="@error('real_name') is-invalid @enderror"
                                                        name="real_name" value="{{ old('real_name') }}" required
                                                        autocomplete="real_name" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6>Email</h6>

                                                    <input id="email" type="email"
                                                        class="@error('email') is-invalid @enderror" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6>Password</h6>
                                                    <input id="password" type="password"
                                                        class=" @error('password') is-invalid @enderror" name="password"
                                                        required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6>Confirm</h6>
                                                    <input id="reg-password-confirm" type="password"
                                                        name="password_confirmation" required
                                                        autocomplete="new-cnf-password">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="button-primary" style="width:100%;" type="submit">Create
                                                    Account</button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div style="text-align:center;">
                                <p>Or log in with</p>
                                <a href="/auth/discord"><img src="{{ asset('imgs/auth/discord.jpg') }}" alt=""
                                        style="height:32px;"></a>
                            </div>


                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent

    @if ($errors->has('email') || $errors->has('password'))
        <script>
            $(function() {
                $('#loginModal').modal({
                    show: true
                });
            });
        </script>
    @endif
@endsection
