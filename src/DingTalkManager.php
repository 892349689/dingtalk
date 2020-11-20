<?php


namespace Layman\DingTalk;

use Illuminate\Support\Facades\Cache;
use Layman\DingTalk\Officer\DingTalkInterface;
use Layman\DingTalk\Realize\AccessToken;
use Layman\DingTalk\Realize\AttendanceApproval;
use Layman\DingTalk\Realize\AttendanceClock;
use Layman\DingTalk\Realize\AttendanceScheduling;
use Layman\DingTalk\Realize\AttendanceShift;
use Layman\DingTalk\Realize\AttendanceStatisticsTable;
use Layman\DingTalk\Realize\Department;
use Layman\DingTalk\Realize\Role;
use Layman\DingTalk\Realize\User;

class DingTalkManager implements DingTalkInterface
{
    /**
     * access_token 缓存键名
     * @var string
     */
    protected $name = "dingtalk";

    /**
     * 验证密钥
     * @var \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    protected $secret;

    /**
     * 获取的access_token
     * @var mixed
     */
    protected $accessToken;

    /**
     * 部门相关
     * @var Department
     */
    protected $department;

    /**
     * 用户相关
     * @var User
     */
    protected $user;

    /**
     * 角色相关
     * @var Role
     */
    protected $role;

    /**
     * 考情排班相关
     * @var AttendanceScheduling
     */
    protected $attendanceScheduling;

    /**
     * 考勤班次相关
     * @var AttendanceShift
     */
    protected $attendanceShift;

    /**
     * 考情打卡相关
     * @var AttendanceClock
     */
    protected $attendanceClock;

    /**
     * 假勤审批相关
     * @var AttendanceApproval
     */
    protected $attendanceApproval;

    /**
     * 考勤统计报表相关
     * @var AttendanceStatisticsTable
     */
    protected $attendanceStatisticsTable;

    public function __construct()
    {
        $this->secret = config('dingtalk.secret');
        if (Cache::has($this->name)){
            $this->accessToken = Cache::get($this->name);
        }else{
            $this->accessToken = $this->accessToken();
        }
        if ($this->accessToken) {
            $this->department = new Department($this->accessToken);
            $this->user = new User($this->accessToken);
            $this->role = new Role($this->accessToken);
            $this->attendanceScheduling = new AttendanceScheduling($this->accessToken);
            $this->attendanceShift = new AttendanceShift($this->accessToken);
            $this->attendanceClock = new AttendanceClock($this->accessToken);
            $this->attendanceApproval = new AttendanceApproval($this->accessToken);
            $this->attendanceStatisticsTable = new AttendanceStatisticsTable($this->accessToken);
        }else{
            throw new \Exception('为获取到认证的access_token,请重试');
        }
    }

    /**
     * Notes: 钉钉access_token 并存入缓存 有效期110分钟
     * @return mixed
     * @throws \Exception
     */
    public function accessToken()
    {
        $accessToken = (new AccessToken($this->secret))->accessToken();
        Cache::put($this->name,$accessToken,110);
        return $accessToken;
    }

    /**
     * Notes: 部门相关实体
     * @return mixed
     * @throws \Exception
     */
    public function department()
    {
        return $this->department;
    }

    /**
     * Notes: 用户相关实体
     * @return User|mixed
     */
    public function user()
    {
        return $this->user;
    }

    /**
     * Notes: 角色相关实体
     * @return Role
     */
    public function role()
    {
        return $this->role;
    }

    /**
     * Notes: 考勤排班相关实体
     * @return AttendanceScheduling
     */
    public function attendanceScheduling()
    {
        return $this->attendanceScheduling;
    }

    /**
     * Notes: 考勤班次相关实体
     * @return AttendanceShift|mixed
     */
    public function attendanceShift()
    {
        return $this->attendanceShift;
    }

    /**
     * Notes: 考勤打卡相关实体
     * @return AttendanceClock|mixed
     */
    public function attendanceClock()
    {
        return $this->attendanceClock;
    }

    /**
     * Notes: 假勤审批相关实体
     * @return AttendanceApproval|mixed
     */
    public function attendanceApproval()
    {
        return $this->attendanceApproval;
    }

    /**
     * Notes: 考勤统计报表相关实体
     * @return AttendanceStatisticsTable
     */
    public function attendanceStatisticsTable()
    {
        return $this->attendanceStatisticsTable;
    }


}
