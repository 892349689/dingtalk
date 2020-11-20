<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\AttendanceSchedulingInterface;

class AttendanceScheduling implements AttendanceSchedulingInterface
{
    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 查询企业考勤排班详情
     * @param string $workDate
     * @param int|null $offset
     * @param int|null $size
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceListSchedule(string $workDate, int $offset = null, int $size = null)
    {
        try {
            $data = [
                "workDate"  => $workDate,
                "offset"    => $offset,
                "size"      => $size
            ];
            if ($offset == null && $size == null) {
                unset($data['offset'],$data['size']);
            }
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_LIST_SCHEDULE_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_LIST_SCHEDULE_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 查询成员排班信息
     * @param string $op_user_id
     * @param string $user_id
     * @param int $date_time
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceScheduleListByDay(string $op_user_id, string $user_id, int $date_time)
    {
        try {
            $data = [
                "op_user_id"  => $op_user_id,
                "user_id"    => $user_id,
                "date_time"      => $date_time
            ];
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_SCHEDULE_LIST_BY_DAY_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_SCHEDULE_LIST_BY_DAY_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 批量查询成员排班信息
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceScheduleListByUsers(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_SCHEDULE_LIST_BY_USERS_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_SCHEDULE_LIST_BY_USERS_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 排班制考勤组排班
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceGroupScheduleAsync(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_GROUP_SCHEDULE_ASYNC_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_GROUP_SCHEDULE_ASYNC_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 查询排班打卡结果
     * @param string $op_user_id
     * @param array $schedule_ids
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceScheduleResultByIds(string $op_user_id, array $schedule_ids)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_SCHEDULE_RESULT_LIST_BY_IDS_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_SCHEDULE_RESULT_LIST_BY_IDS_URL['method'],["op_user_id" => $op_user_id, "schedule_ids" => $schedule_ids]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }
}
