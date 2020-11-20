<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\AttendanceClockInterface;

class AttendanceClock implements AttendanceClockInterface
{
    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 获取打卡详情
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceListRecord(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_LIST_RECORD_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_LIST_RECORD_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取打卡结果
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceListResult(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_LIST_RESULT_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_LIST_RESULT_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }
}
