<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\VerificationCodeRequest;
use Illuminate\Http\Request;
use Overtrue\EasySms\EasySms;

class VerificationCodesController extends Controller
{
    public function store(VerificationCodeRequest $request,EasySms $easySms)
    {
        $captchData=\Cache::get($request->captcha_key);
        if(!$captchData){
            return $this->response->error("图片验证码失效",422);
        }
        if(!hash_equals($captchData['code'],$request->captcha_code)){
            \Cache::forget($request->captcha_key);
            return $this->response->errorUnauthorized("验证码错误");
        }

        $phone=$captchData['phone'];//获取手机号
        if(!app()->environment('production')){
            $code="12345";
        }else{//现实版才发送验证码
            try {
                $code=str_pad(random_int(1,99999),5,0,STR_PAD_LEFT);
                $result = $easySms->send($phone, [
                    'content'  =>  "【阿翼网】您的验证码是{$code}。如非本人操作，请忽略本短信"
                ]);
            } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
                $message = $exception->getException('yunpian')->getMessage();
                return $this->response->errorInternal($message ?: '短信发送异常');
            }
        }
        $key = 'verificationCode_'.str_random(15);
        $expiredAt = now()->addMinutes(10);
        // 缓存验证码 10分钟过期。
        \Cache::put($key, ['phone' => $phone, 'code' => $code], $expiredAt);
        //清除图片验证码缓存
        \Cache::forget($request->captcha_key);
        return $this->response->array([
            'key' => $key,
            'expired_at' => $expiredAt->toDateTimeString(),
        ])->setStatusCode(201);
    }

    public  function store1(){


    }
}
