<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\SocialAuthorizationRequest;
use Illuminate\Http\Request;
use App\Models\User;
class AuthorizationsController extends Controller
{
    public function  socialStore($type,SocialAuthorizationRequest $request){
        if(!in_array($type,['weixin'])){
            return $this->response->errorBadRequest();
        }
        $driver = \Socialite::driver($type);//实例化登陆
        try{
            if ($code = $request->code) {//通过code获取access_token
                $response = $driver->getAccessTokenResponse($code);
              //  return $this->response->array($response);
                $token = array_get($response, 'access_token');
                if ($type == 'weixin') {
                    $driver->setOpenId(array_get($response, 'openid'));
                }
            } else {//通过直接传递access_token到服务端如果是微信的化还需要传递openid的参数
                $token = $request->access_token;
                if ($type == 'weixin') {
                    $driver->setOpenId($request->openid);
                }
            }
            $oauthUser = $driver->userFromToken($token);//获取用户的信息
        }catch(\Exception $e){
            return $this->response->errorUnauthorized('参数错误，未获取用户信息');
        }
        switch ($type) {
            case 'weixin':
                $unionid = $oauthUser->offsetExists('unionid') ? $oauthUser->offsetGet('unionid') : null;
                if ($unionid) {
                    $user = User::where('weixin_unionid', $unionid)->first();
                } else {
                    $user = User::where('weixin_openid', $oauthUser->getId())->first();
                }
                // 没有用户，默认创建一个用户
                if (!$user) {
                    $user = User::create([
                        'name' => $oauthUser->getNickname(),
                       // 'avatar' => $oauthUser->getAvatar(),
                        'weixin_openid' => $oauthUser->getId(),
                        'weixin_unionid' => $unionid,
                    ]);
                }
                break;
        }
        return $this->response->array(['token' => $user->id]);
    }
}
