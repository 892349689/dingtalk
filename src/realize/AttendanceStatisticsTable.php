<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\AttendanceStatisticsTableInterface;

class AttendanceStatisticsTable implements AttendanceStatisticsTableInterface
{
    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 是否启用智能统计报表
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceIsOpenSmartReport()
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_IS_OPEN_SMART_REPORT_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_IS_OPEN_SMART_REPORT_URL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取报表列定义
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceGetattColumns()
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_GETATT_COLUMNS_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_GETATT_COLUMNS_URL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取报表列值
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceColumnVal(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_COLUMN_VAL_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_COLUMN_VAL_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取报表假期数据
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceLeaveTimeByNames(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_LEAVE_TIME_BY_NAMES_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_LEAVE_TIME_BY_NAMES_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }
}
