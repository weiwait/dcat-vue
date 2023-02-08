<style>
    .login-box {
        margin-top: -10rem;
        padding: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex-grow: 1;
    }

    .login-card-body {
        padding: 1.5rem 1.8rem 1.6rem;
    }

    .card, .card-body {
        width: inherit;
        border-radius: .25rem
    }

    .login-btn {
        padding-left: 2rem !important;;
        padding-right: 1.5rem !important;
    }

    .content {
        overflow-x: hidden;
    }

    .form-group .control-label {
        text-align: left;
    }

    #auth-captcha {
        width: 100%;
        border-radius: 4px;
        cursor: pointer;
    }

    .auth-page {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 100vh;
        background: none !important;
    }

    .auth-footer {
        width: 100vw;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgba(1, 1, 1, 0.2);
        padding: 10px 0;
    }

    .auth-footer a {
        color: #d3d3d3;
        font-size: 16px;
        line-height: 24px;
    }

    body {
        min-height: 720px!important;
    }

    @if($config->get('background'))
    body {
        background-image: url("{{ \Illuminate\Support\Facades\Storage::url($config->get('background')) }}");
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 720px!important;
    }
    @endif
</style>

<div class="auth-page">
    <div class="login-box">
        <div class="login-logo mb-2">
            {{ config('admin.name') }}
        </div>
        <div class="card">
            <div class="card-body login-card-body shadow-100">
                <p class="login-box-msg mt-1 mb-1">{{ __('admin.welcome_back') }}</p>

                <form id="login-form" method="POST" action="{{ admin_url('auth/login') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                        <input
                            type="text"
                            class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
                            name="username"
                            placeholder="{{ trans('admin.username') }}"
                            value="{{ old('username') }}"
                            required
                            autofocus
                        >

                        <div class="form-control-position">
                            <i class="feather icon-user"></i>
                        </div>

                        <label for="email">{{ trans('admin.username') }}</label>

                        <div class="help-block with-errors"></div>
                        @if($errors->has('username'))
                            <span class="invalid-feedback text-danger" role="alert">
                                            @foreach($errors->get('username') as $message)
                                    <span class="control-label" for="inputError"><i
                                            class="feather icon-x-circle"></i> {{$message}}</span><br>
                                @endforeach
                                        </span>
                        @endif
                    </fieldset>

                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                        <input
                            minlength="5"
                            maxlength="20"
                            id="password"
                            type="password"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            name="password"
                            placeholder="{{ trans('admin.password') }}"
                            required
                            autocomplete="current-password"
                        >

                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>
                        <label for="password">{{ trans('admin.password') }}</label>

                        <div class="help-block with-errors"></div>
                        @if($errors->has('password'))
                            <span class="invalid-feedback text-danger" role="alert">
                                            @foreach($errors->get('password') as $message)
                                    <span class="control-label" for="inputError"><i
                                            class="feather icon-x-circle"></i> {{$message}}</span><br>
                                @endforeach
                                            </span>
                        @endif

                    </fieldset>

                    @if($config->get('enable_captcha'))
                        <fieldset class="row">
                            <div class="col-8 form-label-group form-group position-relative has-icon-left">
                                <input
                                    minlength="4"
                                    maxlength="4"
                                    id="captcha"
                                    type="text"
                                    class="form-control {{ $errors->has('captcha') ? 'is-invalid' : '' }}"
                                    name="captcha"
                                    placeholder="{{ \Weiwait\DcatVue\DcatVueServiceProvider::trans('auth.captcha') }}"
                                    required
                                >

                                <div class="form-control-position">
                                    <i class="feather icon-feather"></i>
                                </div>

                                <label class="pl-1"
                                       for="captcha">{{ \Weiwait\DcatVue\DcatVueServiceProvider::trans('auth.captcha') }}</label>

                                <div class="help-block with-errors"></div>
                                @if($errors->has('captcha'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                            @foreach($errors->get('captcha') as $message)
                                            <span class="control-label" for="inputError"><i
                                                    class="feather icon-x-circle"></i> {{$message}}</span><br>
                                        @endforeach
                                            </span>
                                @endif
                            </div>

                            <div class="col-4 pl-0">
                                <img src="{{ captcha_src() }}" alt=""
                                     onclick="this.src = '{{ captcha_src() }}' + Math.random()"
                                     id="auth-captcha">
                            </div>
                        </fieldset>
                    @endif

                    <div class="form-group d-flex justify-content-between align-items-center">
                        <div class="text-left">
                            @if(config('admin.auth.remember'))
                                <fieldset class="checkbox">
                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                        <input id="remember" name="remember" value="1"
                                               type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                          <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                        <span> {{ trans('admin.remember_me') }}</span>
                                    </div>
                                </fieldset>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right login-btn">

                        {{ __('admin.login') }}
                        &nbsp;
                        <i class="feather icon-arrow-right"></i>
                    </button>
                </form>

            </div>
        </div>
    </div>

    @if($config->get('footer'))
        <div class="auth-footer">
            @foreach($config->get('footer') as $item)
                <a href="{{ $item['path'] }}">{{$item['name']}}</a>
            @endforeach
        </div>
    @endif
</div>

<script>
    Dcat.ready(function () {
        // ajax表单提交
        $('#login-form').form({
            validate: true,
            error() {
                document.querySelector('#auth-captcha').src = '{{ captcha_src() }}' + Math.random()
            }
        });
    });
</script>
