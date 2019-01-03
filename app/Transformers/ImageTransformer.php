<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2019/1/3
 * Time: 14:27
 * file: ImageTransformer.php
 * email:yll1024335892@163.com
 */

namespace App\Transformers;


use App\Models\Image;
use League\Fractal\TransformerAbstract;

class ImageTransformer extends TransformerAbstract
{
    public function transform(Image $image){
        return [
            'id' => $image->id,
            'user_id' => $image->user_id,
            'type' => $image->type,
            'path' => $image->path,
            'created_at' => $image->created_at->toDateTimeString(),
            'updated_at' => $image->updated_at->toDateTimeString()
        ];
    }
}