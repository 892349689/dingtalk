<?php


namespace Layman\DingTalk\Officer;


interface AttendanceSchedulingInterface
{
    /**
     * Notes: 查询企业考勤排班详情
     * @param string $workDate 排班时间，只取年月日部分
     * @param int|null $offset 偏移位置，从0开始，后续传offset+size的值。当返回结果中的has_more为false时，表示没有多余的数据了。
     * @param int|null $size 分页大小，最大200，默认值：200
     * @return mixed
     */
    public function attendanceListSchedule(string $workDate, int $offset = null, int $size = null);

    /**
     * Notes: 查询成员排班信息
     * @param string $op_user_id 操作人userId
     * @param string $user_id 用户userId
     * @param int $date_time 查询某个工作日的数据，Unix时间戳
     * @return mixed
     */
    public function attendanceScheduleListByDay(string $op_user_id, string $user_id, int $date_time);

    /**
     * Notes: 批量查询成员排班信息
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ufc8dl
     * @return mixed
     */
    public function attendanceScheduleListByUsers(array $data);

    /**
     * Notes: 排班制考勤组排班
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ufc8dl
     * @return mixed
     */
    public function attendanceGroupScheduleAsync(array $data);

    /**
     * Notes: 查询排班打卡结果
     * @param string $op_user_id 操作人userId
     * @param array $schedule_ids 排班id 示例值 [1234,3214]
     * @return mixed
     */
    public function attendanceScheduleResultByIds(string $op_user_id, array $schedule_ids);
}
