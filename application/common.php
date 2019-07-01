<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------


use think\response\Json;


/**
 * success json
 * @param $msg
 * @param array $data
 * @return Json
 */
function successJson($msg, $data=array()){
    return json(['code' => 0, 'msg' => $msg, '$data' => $data]);
}

/**
 * error json
 * @param $msg
 * @return Json
 */
function errorJson($msg){
    return json(['code' => 1, 'msg' => $msg]);
}

/**
 * 随机字符串
 * @return string
 */
function randChar()
{
    return uniqid(rand(10, 99));
}

/**
 * 密码加密
 * @param $name
 * @param $char
 * @param $password
 * @return string
 */
function passwordHash($name, $char, $password)
{
    return hash('sha512', hash('md5', hash('sha256', $name . $char . $password)));
}

/**
 * dd debug
 * @param $val
 */
function dd($val){
    dump($val);
    die();
}

/**
 * 去掉不需要入库的数据
 * @param $data
 * @param $array
 * @return mixed
 */
function unsetData($data, $array)
{
    foreach ($array as $key => $value){
        unset($data[$value]);
    }
    return $data;
}

/**
 * 去掉首位空格
 * @param $data
 * @return array
 */
function charTrim($data)
{
    $tmp = array();
    foreach ($data as $key => $val) {
        $tmp[$key] = trim($val);
    }
    return $tmp;
}