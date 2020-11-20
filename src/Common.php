<?php


namespace Layman\DingTalk;


class Common
{
    /**
     * Notes: curl请求
     * @param $url
     * @param string $method
     * @param array $data
     * @param array $header
     * @param bool $ssl
     * @return bool|string
     */
    public static function sendUrl($url, $method = 'GET', $data = [], $header = [], $ssl = true)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);  //设置请求方式为POST
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);  //设置请求发送参数内容,参数值为关联数组
        }
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header );  //设置请求报头的请求格式为json, 参数值为非关联数组
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1); // 连接最大等待时间
        curl_setopt($curl, CURLOPT_TIMEOUT, 15); // 执行超时时间
        if($ssl){
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   //服务器要求使用安全链接https请求时，不验证证书和hosts
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        $result = curl_exec($curl);  //发送请求并获取结果
        curl_close($curl); //关闭curl
        return $result;
    }

    /**
     * Notes: json 转数组
     * User: chenwei
     * @return array|mixed
     */
    public static function jsonTwo($data)
    {
        if (is_array($data)){
            return $data;
        }
        return json_decode($data,true);
    }

}
