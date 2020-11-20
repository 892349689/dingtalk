<?php


namespace Layman\DingTalk\Officer;


interface AttendanceShiftInterface
{
    /**
     * Notes: 批量查询班次摘要信息
     * @param string $op_user_id 操作人userId
     * @param int|null $cursor 游标id，起始传0
     * @return mixed
     */
    public function attendanceShiftList(string $op_user_id, int $cursor = null);

    /**
     * Notes: 查询班次详情
     * @param string $op_user_id 操作人userId
     * @param int $shift_id 班次id
     * @return mixed
     */
    public function attendanceShiftQuery(string $op_user_id, int $shift_id);

    /**
     * Notes: 按名称搜索班次
     * @param string $op_user_id 操作人userId
     * @param string $shift_name 班次名称
     * @return mixed
     */
    public function attendanceShiftSearch(string $op_user_id, string $shift_name);
}
