<?php


namespace Layman\DingTalk\Officer;


interface AttendanceStatisticsTableInterface
{
    /**
     * Notes: 是否启用智能统计报表
     * @return mixed
     */
    public function attendanceIsOpenSmartReport();

    /**
     * Notes: 获取报表列定义
     * @return mixed
     */
    public function attendanceGetattColumns();

    /**
     * Notes: 获取报表列值 注意：不支持获取离职人员的考勤信息，离职人员的考勤数据可以在OA管理后台查询。
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/vg7ned
     * @return mixed
     */
    public function attendanceColumnVal(array $data);

    /**
     * Notes: 获取报表假期数据
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/vg7ned
     * @return mixed
     */
    public function attendanceLeaveTimeByNames(array $data);
}
