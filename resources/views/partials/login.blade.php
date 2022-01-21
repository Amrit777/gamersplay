<style>
    .header-img-modal-login-center.custom-set {
        display: inline-flex;
        height: 128px;
    }

    h1.login-heading {
        margin-left: -31px;
        margin-top: 50px;
        font-size: 25px;
    }

    .img-modal-login-center {
        width: 149px;
        height: auto;
        margin-left: 71px;
    }

    ul.nav.nav-tabs.md-tabs.tabs-2.light-blue.darken-3 {
        height: 47px;
        /* margin-top: -26px; */
        margin-bottom: 0;

    }

    ul.nav.nav-tabs.md-tabs.tabs-2.light-blue.darken-3 li {
        width: 50%;
        padding-right: 0px;

    }

    a.nav-link.active {
        background: #7E22CE !important;
        color: #fff !important;
    }

    li.nav-item {
        /* margin-bottom: 3px !important; */
        margin-top: 6px !important;
    }

    /* .header-img-modal-login-center {
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
    } */

    .modal-close-btn {
        margin-bottom: 63px !important;
    }


    .modal-header.header-page.login-header.rounded-top {
        padding: 0px;
        padding-bottom: 0;
    }

    p.card-text {
        color: #000;
    }

    .login-body .form-group h6 {
        color: #000;
    }

    .modal-close-btn {
        margin-bottom: -4px !important;
        font-size: 33px;
        /* width: 0; */
        z-index: 9999;
        margin-left: 17px;
    }

    button.close {
        color: #fff;
        font-size: 29px;
    }

</style>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true"
    style="margin-top:125px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-close-btn">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-header header-page login-header rounded-top">
                <div class="header-img-modal-login-center custom-set">
                    <img class="img-modal-login-center"
                        src="{{ asset('temp-services/images/gamersplay-transparent.png') }}">
                    <h1 class="login-heading"> GamersPlay </h1>
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
                        <div class="modal-body login-body">
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
                                        <div class="form-group">
                                            <h6>Email</h6>
                                            <input id="login-email" type="email"
                                                class=" @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="new-email"
                                                autofocus>
                                        </div>
                                        <div class="form-group">
                                            <h6>Password</h6>
                                            <input id="login-password" type="password"
                                                class="@error('password') is-invalid @enderror" name="password" required
                                                autocomplete="login-current-password">
                                        </div>
                                        <div class="form-group">
                                            <div style="display:flex; align-items:center;">
                                                <input type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }} style="width:initial; margin-right:10px;     margin-bottom: 7px;
                                                    ">
                                                <h6>Remember me? </h6>
                                            </div>
                                        </div>

                                        <div style="padding-top:10px; text-align:center;">
                                            <button class="btn button-primary" id="login-submit-btn"
                                                style="padding:5px 20px; widtH:100%;">Login</button>
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
                        <div class="modal-body login-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row" style="padding-bottom:40px">
                                    <div class="col-md-12">
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
