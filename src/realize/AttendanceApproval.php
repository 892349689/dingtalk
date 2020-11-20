<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\AttendanceApprovalInterface;

class AttendanceApproval implements AttendanceApprovalInterface
{
    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 查询请假状态
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceLeaveStatus(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_LEAVE_STATUS_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_LEAVE_STATUS_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }
}
