<?php


namespace Layman\DingTalk\Officer;


interface AttendanceClockInterface
{
    /**
     * Notes: 获取打卡详情
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/potcn9
     * @return mixed
     */
    public function attendanceListRecord(array $data);

    /**
     * Notes: 获取打卡结果
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ul33mm
     * @return mixed
     */
    public function attendanceListResult(array $data);
}
