<?php
namespace Layman\DingTalk\Officer;

interface DingTalkInterface
{
    /**
     * Notes: 部门相关接口总入口
     * @return mixed
     * @return DepartmentInterface
     */
    public function department();

    /**
     * Notes: 用户相关总入口
     * @return mixed
     * @return UserInterface
     */
    public function user();

    /**
     * Notes: 角色相关入口
     * @return mixed
     * @return RoleInterface
     */
    public function role();

    /**
     * Notes: 考勤排班相关入口
     * @return mixed
     * @return AttendanceSchedulingInterface
     */
    public function attendanceScheduling();

    /**
     * Notes: 考情班次相关入口
     * @return mixed
     * @return AttendanceShiftInterface
     */
    public function attendanceShift();

    /**
     * Notes: 考勤打卡相关入口
     * @return mixed
     * @return AttendanceClockInterface
     */
    public function attendanceClock();

    /**
     * Notes: 假勤审批相关入口
     * @return mixed
     * @return AttendanceApprovalInterface
     */
    public function attendanceApproval();

    /**
     * Notes: 考勤统计报表相关入口
     * @return mixed
     * @return AttendanceStatisticsTableInterface
     */
    public function attendanceStatisticsTable();








}
