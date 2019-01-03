<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2019/1/2
 * Time: 17:05
 * file: UserTransformer.php
 * email:yll1024335892@163.com
 */

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user){
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
           // 'avatar' => $user->avatar,
           // 'introduction' => $user->introduction,
            'bound_phone' => $user->phone ? true : false,
            'bound_wechat' => ($user->weixin_unionid || $user->weixin_openid) ? true : false,
         //   'last_actived_at' => $user->last_actived_at->toDateTimeString(),
            'created_at' => $user->created_at->toDateTimeString(),
            'updated_at' => $user->updated_at->toDateTimeString(),
        ];
    }
}