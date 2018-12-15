<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute 必须被接受.',
    'active_url' => ':attribute 不是有效的URL.',
    'after' => ':attribute 必须是日期之后的日期.',
    'after_or_equal' => ':attribute 必须是日期之后或等于：日期.',
    'alpha' => ':attribute 可能只包含字母.',
    'alpha_dash' => ':attribute 可能只包含字母，数字，短划线和下划线.',
    'alpha_num' => ':attribute 可能只包含字母和数字.',
    'array' => ':attribute 必须是一个数组.',
    'before' => ':attribute 必须是日期之前的日期：日期.',
    'before_or_equal' => ':attribute 必须是日期之前或之前的日期：日期.',
    'between' => [
        'numeric' => ':attribute 必须介于：min和：max.',
        'file' => ':attribute 必须介于：min和：max kilobytes之间.',
        'string' => ':attribute 必须介于：min和：max characters之间.',
        'array' => ':attribute 必须介于：min和：max items之间.',
    ],
    'boolean' => ':attribute 字段必须是真或假.',
    'confirmed' => ':attribute 确认不符合.',
    'date' => ':attribute 不是有效日期.',
    'date_equals' => ':attribute 必须是等于：date的日期.',
    'date_format' => ':attribute 与格式不匹配：格式.',
    'different' => ':attribute 并且：其他必须是不同的.',
    'digits' => ':attribute 必须是：数字数字.',
    'digits_between' => ':attribute 必须介于：min和：max digits之间.',
    'dimensions' => ':attribute 图像尺寸无效.',
    'distinct' => ':attribute 字段具有重复值.',
    'email' => ':attribute 必须是一个有效的E-mail地址.',
    'exists' => 'selected :attribute 是无效的.',
    'file' => ':attribute 必须是一个文件.',
    'filled' => ':attribute 字段必须具有值.',
    'gt' => [
        'numeric' => ':attribute 必须大于：值.',
        'file' => ':attribute 必须大于：值千字节.',
        'string' => ':attribute 必须大于：值字符.',
        'array' => ':attribute 必须拥有超过：价值物品.',
    ],
    'gte' => [
        'numeric' => ':attribute 必须大于或等于：值.',
        'file' => ':attribute 必须大于或等于：值千字节.',
        'string' => ':attribute 必须大于或等于：值字符.',
        'array' => ':attribute 必须具有：价值物品或更多.',
    ],
    'image' => ':attribute 必须是一个形象.',
    'in' => 'selected :attribute 是无效的.',
    'in_array' => ':attribute 字段不存在于：其他.',
    'integer' => ':attribute 必须是整数.',
    'ip' => ':attribute 必须是有效的IP地址.',
    'ipv4' => ':attribute 必须是有效的IPv4地址.',
    'ipv6' => ':attribute 必须是有效的ipv6地址.',
    'json' => ':attribute 必须是有效的JSON字符串.',
    'lt' => [
        'numeric' => ':attribute 必须小于：值.',
        'file' => ':attribute 必须小于：值千字节.',
        'string' => ':attribute 必须小于：值字符.',
        'array' => ':attribute 必须少于：值项目.',
    ],
    'lte' => [
        'numeric' => ':attribute must be less than or equal :value.',
        'file' => ':attribute must be less than or equal :value kilobytes.',
        'string' => ':attribute must be less than or equal :value characters.',
        'array' => ':attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute may not be greater than :max.',
        'file' => ':attribute may not be greater than :max kilobytes.',
        'string' => ':attribute may not be greater than :max characters.',
        'array' => ':attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute must be a file of type: :values.',
    'mimetypes' => ':attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute must be at least :min.',
        'file' => ':attribute must be at least :min kilobytes.',
        'string' => ':attribute 必须至少 :min 字符.',
        'array' => ':attribute must have at least :min items.',
    ],
    'not_in' => 'selected :attribute is invalid.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute must be a number.',
    'present' => ':attribute field must be present.',
    'regex' => ':attribute format is invalid.',
    'required' => '字段是必需的.',
    'required_if' => ':attribute field is required when :other is :value.',
    'required_unless' => ':attribute field is required unless :other is in :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'numeric' => ':attribute must be :size.',
        'file' => ':attribute must be :size kilobytes.',
        'string' => ':attribute must be :size characters.',
        'array' => ':attribute must contain :size items.',
    ],
    'string' => ':attribute must be a string.',
    'timezone' => ':attribute must be a valid zone.',
    'unique' => ':attribute has already been taken.',
    'uploaded' => ':attribute failed to upload.',
    'url' => ':attribute format is invalid.',
    'uuid' => ':attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
