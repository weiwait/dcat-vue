<?php

namespace Weiwait\DcatVue\Http\Controllers;

use Dcat\Admin\Http\Controllers\AuthController;
use Dcat\Admin\Layout\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;

class DcatAuthController extends AuthController
{
    protected Collection $config;

    public function __construct()
    {
        $this->config = collect(admin_setting()->getArray('weiwait_auth'));
    }

    public function getLogin(Content $content)
    {
        if ($this->guard()->check()) {
            return redirect($this->getRedirectPath());
        }

        return $content->full()->body(view('weiwait.dcat-vue::login', ['config' => $this->config]));
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only([$this->username(), 'password']);
        $remember = (bool) $request->input('remember', false);

        $rules = [
            $this->username() => 'required',
            'password' => 'required',
        ];

        if ($this->config->get('enable_captcha')) {
            $rules['captcha'] = 'required|captcha';
        }

        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($request->all(), $rules, ['captcha.captcha' => '验证码错误']);

        if ($validator->fails()) {
            return $this->validationErrorsResponse($validator);
        }

        if ($this->guard()->attempt($credentials, $remember)) {
            return $this->sendLoginResponse($request);
        }

        return $this->validationErrorsResponse([
            $this->username() => $this->getFailedLoginMessage(),
        ]);
    }
}
