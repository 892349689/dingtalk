<?php
namespace Layman\DingTalk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string accessToken()
 * @method static \Layman\DingTalk\Officer\DepartmentInterface department()
 * @method static \Layman\DingTalk\Officer\UserInterface user()
 * @method static \Layman\DingTalk\Officer\RoleInterface role()
 * @method static \Layman\DingTalk\Officer\AttendanceSchedulingInterface attendanceScheduling()
 * @method static \Layman\DingTalk\Officer\AttendanceClockInterface attendanceClock()
 * @method static \Layman\DingTalk\Officer\AttendanceApprovalInterface attendanceApproval()
 * @method static \Layman\DingTalk\Officer\AttendanceStatisticsTableInterface attendanceStatisticsTable()
 * Class DingTalk
 * @see \Layman\DingTalk\DingTalkManager
 * @see \Layman\DingTalk\Officer\DingTalkInterface
 */
class DingTalk extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'dingtalk';
    }
}
