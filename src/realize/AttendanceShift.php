<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\AttendanceShiftInterface;

class AttendanceShift implements AttendanceShiftInterface
{
    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 批量查询班次摘要信息
     * @param string $op_user_id
     * @param int|null $cursor
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceShiftList(string $op_user_id, int $cursor = null)
    {
        try {
            $data = [
                "op_user_id"    => $op_user_id,
                "cursor"        => $cursor
            ];
            if ($cursor == null){
                unset($data['cursor']);
            }
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_SHIFT_LIST_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_SHIFT_LIST_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 查询班次详情
     * @param string $op_user_id
     * @param int $shift_id
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceShiftQuery(string $op_user_id, int $shift_id)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_SHIFT_QUERY_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_SHIFT_QUERY_URL['method'],["op_user_id" => $op_user_id, "shift_id" => $shift_id]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 按名称搜索班次
     * @param string $op_user_id
     * @param string $shift_name
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function attendanceShiftSearch(string $op_user_id, string $shift_name)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ATTENDANCE_SHIFT_SEARCH_URL['url'].$this->access_token,DingTalkUrl::ATTENDANCE_SHIFT_SEARCH_URL['method'],["op_user_id" => $op_user_id, "shift_name" => $shift_name]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }
}
