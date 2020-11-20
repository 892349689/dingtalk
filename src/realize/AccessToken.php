<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;

class AccessToken
{
    protected $secret;

    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    /**
     * Notes: 获取钉钉access_token
     * @throws \Exception
     */
    public function accessToken()
    {
        try {
            $accessToken =  Common::sendUrl(DingTalkUrl::ACCESS_TOKEN_URL['url']."appkey=".$this->secret['appKey']."&appsecret=".$this->secret['appSecret'],DingTalkUrl::ACCESS_TOKEN_URL['method']);
            $accessToken = Common::jsonTwo($accessToken);
            return $accessToken['access_token'];
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }

    }
}
