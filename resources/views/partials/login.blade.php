<style>
    .header-img-modal-login-center.custom-set {
        /* display: inline-flex;
        height: 128px; */
        display: inline-flex;
        height: 120px;
        padding: 20px;
        margin-left: 120px;
        margin-right: 120px;
        text-align: center;
    }

    h1.login-heading {
        margin-left: -31px;
        margin-top: 50px;
        font-size: 25px;
    }

    .img-modal-login-center {
        height: 110px !important;
        margin-top: -14px !important;
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

    .login-modal-tabs li.nav-item a.nav-link.active {
        background: #7E22CE !important;
        color: #fff !important;
    }

    .login-modal-tabs {
        border-bottom: 2px dashed var(--color-background);
    }

    .login-modal-tabs .nav-link:hover,
    .login-modal-tabs .nav-link:focus {
        border-color: unset;
    }

    .login-modal-tabs .nav-link {
        border: unset;
    }

    li.nav-item {
        margin-top: 6px !important;
    }

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
        z-index: 9999;
        margin-left: 17px;
    }

    button.close {
        color: #fff;
    }

    @media screen and (max-width: 768px) {
        .img-modal-login-center {
            /* margin-left: 0px; */
        }
    }

    .discord-img-height {
        height: 32px;
    }

    .login-checkbox-gp {
        width: initial !important;
    }

    .link-forget-pwd a {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        font-weight: 400;
        color: var(--font-color-4);
        line-height: 0px;
        margin-top: 0px;
        cursor: pointer;
        padding: 0px;
    }


    .navs-icons-modal {
        width: 20px;
        height: 20px;
    }

</style>


<div class="modal fade mt-4" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-close-btn">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-header header-page login-header rounded-top">
                <div class="header-img-modal-login-center custom-set">
                    <img class="img-modal-login-center" src="{{ asset('temp-services/images/newv3.png') }}">
                </div>
            </div>

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3 login-modal-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " data-toggle="tab" href="#loginPanel" role="tab">
                            <img class="navs-icons-modal"
                                src="{{ asset('temp-services/images/formslogo/login.png') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#registerPanel" role="tab">
                            <img class="navs-icons-modal"
                                src="{{ asset('temp-services/images/formslogo/register.png') }}">
                            Register
                        </a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="loginPanel" role="tabpanel">
                        <div class="modal-body login-body">
                            <span class="invalid-feedback" role="alert" id="messageErrorLogin">
                                <strong></strong>
                            </span>
                            <form method="POST" id="loginForm">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h6>Email</h6>
                                            <input id="login-email" type="email" name="email"
                                                value="{{ old('email') }}" required autocomplete="new-email"
                                                autofocus>
                                            <span class="invalid-feedback" role="alert" id="name-login-error">
                                                <strong></strong>
                                            </span>

                                        </div>
                                        <div class="form-group">
                                            <h6>Password</h6>
                                            <input id="login-password" type="password" name="password" required
                                                autocomplete="login-current-password">
                                        </div>
                                        <div class="link-forget-pwd">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        {{-- <div class="form-group">
                                            <div style="display:flex; align-items:center;">
                                                <input type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }} style="width:initial; margin-right:10px;     margin-bottom: 7px;
                                                    ">
                                                <h6>Remember me? </h6>
                                            </div>
                                        </div> --}}

                                        <div class="form-group mt-5 mb-4">
                                            <div class="captcha">
                                                <span>{!! captcha_img() !!}</span>
                                                <button type="button" class="btn btn-danger" class="reload"
                                                    id="reload">
                                                    ↻
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="captcha" type="text" class="form-control"
                                                placeholder="Enter Captcha" name="captcha">
                                            <span class="invalid-feedback" role="alert" id="captcha-login-error">
                                                <strong></strong>
                                            </span>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn button-primary w-100"
                                                id="login-submit-btn">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- <hr> --}}
                            <div class="text-center mt-4">
                                <p>Or log in with</p>
                                <a href="/auth/discord"><img class="discord-img-height"
                                        src="{{ asset('imgs/auth/discord.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--Panel 8-->
                    <div class="tab-pane fade" id="registerPanel" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body login-body">
                            <span class="invalid-feedback" role="alert" id="messageErrorRegister">
                                <strong></strong>
                            </span>
                            <form method="POST" id="registerFormModal">
                                @csrf
                                <div class="row pb-3" {{-- style="padding-bottom:20px" --}}>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6>Nickname</h6>
                                                    <input id="name-reg" type="text" name="name"
                                                        value="{{ old('name') }}" required autocomplete="name"
                                                        autofocus>
                                                    <span class="invalid-feedback" role="alert" id="name-reg-error">
                                                        <strong></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6>Full Name</h6>
                                                    <input id="real_name-reg" type="text" name="real_name"
                                                        value="{{ old('real_name') }}" required
                                                        autocomplete="real_name" autofocus>
                                                    <span class="invalid-feedback" role="alert"
                                                        id="real_name-reg-error">
                                                        <strong></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h6>Email</h6>
                                                    <input id="email-reg" type="email" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email">
                                                    <span class="invalid-feedback" role="alert" id="email-reg-error">
                                                        <strong></strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6>Password</h6>
                                                    <input id="password-reg" type="password" name="password" required
                                                        autocomplete="new-password">
                                                    <span class="invalid-feedback" role="alert" id="password-reg-error">
                                                        <strong></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6>Confirm</h6>
                                                    <input id="password-confirm-reg" type="password"
                                                        name="password_confirmation" required
                                                        autocomplete="new-cnf-password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row mt-3 mb-3">
                                            <div class="col-1 ">
                                                <input class="mb-1 mr-1" type="checkbox" name="tnc"
                                                    id="register-tnc" {{ old('tnc') ? 'checked' : '' }}
                                                    {{-- style="width:initial; margin-right:10px;margin-bottom: 7px;" --}}>
                                            </div>
                                            <div class="col-10">
                                                <div class="form-group">
                                                    <h6>After checking, you are indicating that you have read and
                                                        acknowledge the <a target="_blank" rel="noreferrer"
                                                            href="https://www.gamersplay.gg/terms-of-service">GamersPlay
                                                            Platform Terms of Service.</a></h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 ">
                                                <button class="button-primary w-100" type="submit"
                                                    id="reg-submit-btn">Create
                                                    Account</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <p>Or log in with</p>
                                <a href="/auth/discord"><img height="32px" src="{{ asset('imgs/auth/discord.jpg') }}"
                                        alt=""></a>
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

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("indidede");
            const regbutton = $('#reg-submit-btn'); // The submit input id 
            regbutton.attr('disabled', 'disabled');
            regbutton.css("cursor", "not-allowed");
            $('#register-tnc').change(function() { // The checkbox id 
                if (this.checked) {
                    regbutton.removeAttr('disabled')
                        .css("cursor", "pointer");
                } else {
                    regbutton.attr('disabled', 'disabled')
                        .css("cursor", "not-allowed");
                }
            });

            $(function() {
                $('#loginForm').submit(function(e) {
                    e.preventDefault();
                    let formData = $(this).serializeArray();
                    $(".invalid-feedback").children("strong").text("");
                    $("#loginForm input").removeClass("is-invalid");
                    $.ajax({
                        method: "POST",
                        headers: {
                            Accept: "application/json"
                        },
                        url: "{{ route('auth.login') }}",
                        data: formData,
                        success: (response) => {
                            if (response.code === 200) {
                                window.location.assign("{{ route('home') }}")
                            }
                        },
                        error: (response) => {
                            console.log("error1", response);
                            if (response.status === 401) {
                                $("#messageErrorLogin").addClass("is-invalid d-block")
                                    .children(
                                        "strong")
                                    .text(
                                        response.responseJSON.message);
                            } else if (response.status === 422) {
                                let errors = response.responseJSON.errors;
                                Object.keys(errors).forEach(function(key) {
                                    $("#" + key + "-login-error").addClass(
                                        "is-invalid d-block");
                                    $("#" + key + "-login-error").children(
                                        "strong").text(errors[key][0]);
                                });
                            } else {
                                // window.location.reload();
                            }
                        }
                    })
                });
                $('#registerFormModal').submit(function(e) {
                    e.preventDefault();
                    let formData = $(this).serializeArray();
                    $(".invalid-feedback").children("strong").text("");
                    $("#registerFormModal input").removeClass("is-invalid");
                    $.ajax({
                        method: "POST",
                        headers: {
                            Accept: "application/json"
                        },
                        url: "{{ route('auth.register') }}",
                        data: formData,
                        success: (response) => {
                            if (response.code === 200) {
                                window.location.assign("{{ route('home') }}")
                            }
                        },
                        error: (response) => {
                            if (response.status === 422) {
                                let errors = response.responseJSON.errors;
                                Object.keys(errors).forEach(function(key) {
                                    $("#" + key + "-reg-error").addClass(
                                        "is-invalid d-block");
                                    $("#" + key + "-reg-error").children(
                                        "strong").text(errors[key][0]);
                                });
                            }
                            console.log("errorrrr", response)
                            if (response.responseJSON.code === 401) {
                                $("#messageErrorRegister").addClass(
                                        "is-invalid d-block").children(
                                        "strong")
                                    .text(
                                        response.responseJSON.message);
                            } else {
                                window.location.reload();
                            }
                        }
                    })
                });
            })

            $('#reload').click(function() {
                $.ajax({
                    type: 'GET',
                    url: 'reload-captcha',
                    success: function(data) {
                        $(".captcha span").html(data.captcha);
                    }
                });
            });
        });
    </script>
@endsection
