<?php


namespace Layman\DingTalk\Officer;


interface AttendanceApprovalInterface
{
    /**
     * Notes: 查询请假状态
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/chhwzv
     * @return mixed
     */
    public function attendanceLeaveStatus(array $data);
}
