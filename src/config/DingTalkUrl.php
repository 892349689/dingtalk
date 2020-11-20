<?php
namespace Layman\DingTalk\Config;

interface DingTalkUrl
{
    /**
     * 获取access_token-正常情况下access_token有效期为7200秒，有效期内重复获取返回相同结果，并自动续期。
     */
    const ACCESS_TOKEN_URL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/gettoken?"
    ];
    /***************用户相关 ***************/

    /**
     * 创建用户
     */
    const USER_CREATE_UTL = [
        "method" => "POST",
        "url"    => "https://oapi.dingtalk.com/user/create?access_token="
    ];

    /**
     * 更新用户
     */
    const USER_UPDATE_UTL = [
        "method" => "POST",
        "url"    => "https://oapi.dingtalk.com/user/update?access_token="
    ];

    /**
     * 删除用户
     */
    const USER_DELETE_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/delete?access_token="
    ];

    /**
     * 获取用户详情
     */
    const USER_DETAIL_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/get?access_token="
    ];

    /**
     * 获取部门用户userid列表
     */
    const USER_DEPT_MEMBER_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/getDeptMember?access_token="
    ];

    /**
     * 获取部门用户
     */
    const USER_SIMPLE_LIST_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/simplelist?access_token="
    ];

    /**
     * 获取部门用户详情
     */
    const USER_LIST_BY_PAGE_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/listbypage?access_token="
    ];

    /**
     * 获取管理员列表
     */
    const USER_ADMIN_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/get_admin?access_token="
    ];

    /**
     * 获取管理员通讯录权限范围
     */
    const USER_ADMIN_SCOPE_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/topapi/user/get_admin_scope?access_token="
    ];

    /**
     * 根据unionid获取userid
     */
    const USER_BY_UNIONID_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/getUseridByUnionid?access_token="
    ];

    /**
     * 根据手机号获取userid
     */
    const USER_BY_MOBILE_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/get_by_mobile?access_token="
    ];

    /**
     * 获取企业员工人数
     */
    const USER_ORG_COUNT_UTL = [
        "method" => "GET",
        "url"    => "https://oapi.dingtalk.com/user/get_org_user_count?access_token="
    ];

    /**
     * 未登录钉钉的员工列表
     */
    const USER_INACTIVE_UTL = [
        "method" => "POST",
        "url"    => "https://oapi.dingtalk.com/topapi/inactive/user/get?access_token="
    ];

    /***************用户相关 ***************/

    /***************部门相关 ***************/

    /**
     * 创建部门
     */
    const DEPARTMENT_CREATE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/department/create?access_token=",
    ];

    /**
     * 更新部门
     */
    const DEPARTMENT_UPDATE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/department/update?access_token=",
    ];

    /**
     * 删除部门
     */
    const DEPARTMENT_DELETE_URL = [
        "method"        => "GET",
        "url"           => "https://oapi.dingtalk.com/department/delete?access_token=",
    ];

    /**
     * 获取子部门ID列表
     */
    const DEPARTMENT_LIST_IDS_URL = [
        "method"        => "GET",
        "url"           => "https://oapi.dingtalk.com/department/list_ids?access_token=",
    ];

    /**
     * 获取部门列表
     */
    const DEPARTMENT_LIST_URL = [
        "method"        => "GET",
        "url"           => "https://oapi.dingtalk.com/department/list?access_token=",
    ];

    /**
     * 获取部门详情
     */
    const DEPARTMENT_DETAIL_URL = [
        "method"        => "GET",
        "url"           => "https://oapi.dingtalk.com/department/get?access_token=",
    ];

    /**
     * 查询部门的所有上级父部门路径 【注意】此接口不受授权范围的限制
     */
    const DEPARTMENT_LIST_PARENT_DEPT_BY_DEPT_URL = [
        "method"        => "GET",
        "url"           => "https://oapi.dingtalk.com/department/list_parent_depts_by_dept?access_token=",
    ];

    /***************部门相关 ***************/

    /***************角色相关 ***************/

    /**
     * 获取角色列表
     */
    const ROLE_LIST_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/list?access_token=",
    ];

    /**
     * 获取角色下的员工列表
     */
    const ROLE_SIMPLE_LIST_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/simplelist?access_token=",
    ];

    /**
     * 获取角色组
     */
    const ROLE_GROUP_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/getrolegroup?access_token=",
    ];

    /**
     * 获取角色详情
     */
    const ROLE_DETAIL_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/getrole?access_token=",
    ];

    /**
     * 创建角色
     */
    const ROLE_CREATE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/role/add_role?access_token=",
    ];

    /**
     * 更新角色
     */
    const ROLE_UPDATE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/role/update_role?access_token=",
    ];

    /**
     * 删除角色
     */
    const ROLE_DELETE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/deleterole?access_token=",
    ];

    /**
     * 创建角色组
     */
    const ROLE_GROUP_CREATE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/role/add_role_group?access_token=",
    ];

    /**
     * 批量增加员工角色
     */
    const ROLE_FORMAPS_CREATE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/addrolesforemps?access_token=",
    ];

    /**
     * 批量删除员工角色
     */
    const ROLE_FORMAPS_DELETE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/removerolesforemps?access_token=",
    ];

    /**
     * 设定角色成员管理范围
     */
    const ROLE_SCOPE_UPDATE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/role/scope/update?access_token=",
    ];

    /***************角色相关 ***************/

    /***************考勤相关 ***************/

    /**
     * 查询企业考勤排班详情
     */
    const ATTENDANCE_LIST_SCHEDULE_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/listschedule?access_token=",
    ];

    /**
     * 查询成员排班信息
     */
    const ATTENDANCE_SCHEDULE_LIST_BY_DAY_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/schedule/listbyday?access_token=",
    ];

    /**
     * 批量查询成员排班信息
     */
    const ATTENDANCE_SCHEDULE_LIST_BY_USERS_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/schedule/listbyusers?access_token=",
    ];

    /**
     * 排班制考勤组排班
     */
    const ATTENDANCE_GROUP_SCHEDULE_ASYNC_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/group/schedule/async?access_token=",
    ];

    /**
     * 查询排班打卡结果
     */
    const ATTENDANCE_SCHEDULE_RESULT_LIST_BY_IDS_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/schedule/result/listbyids?access_token=",
    ];

    /**
     * 批量查询班次摘要信息
     */
    const ATTENDANCE_SHIFT_LIST_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/shift/list?access_token=",
    ];

    /**
     * 查询班次详情
     */
    const ATTENDANCE_SHIFT_QUERY_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/shift/query?access_token=",
    ];

    /**
     * 按名称搜索班次
     */
    const ATTENDANCE_SHIFT_SEARCH_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/shift/search?access_token=",
    ];

    /**
     * 获取打卡详情
     */
    const ATTENDANCE_LIST_RECORD_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/attendance/listRecord?access_token=",
    ];

    /**
     * 获取打卡结果
     */
    const ATTENDANCE_LIST_RESULT_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/attendance/list?access_token=",
    ];

    /**
     * 查询请假状态
     */
    const ATTENDANCE_LEAVE_STATUS_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/getleavestatus?access_token=",
    ];

    /**
     * 是否启用智能统计报表
     */
    const ATTENDANCE_IS_OPEN_SMART_REPORT_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/isopensmartreport?access_token=",
    ];

    /**
     * 获取报表列定义
     */
    const ATTENDANCE_GETATT_COLUMNS_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/getattcolumns?access_token=",
    ];

    /**
     * 获取报表列值
     */
    const ATTENDANCE_COLUMN_VAL_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/getcolumnval?access_token=",
    ];

    /**
     * 获取报表假期数据
     */
    const ATTENDANCE_LEAVE_TIME_BY_NAMES_URL = [
        "method"        => "POST",
        "url"           => "https://oapi.dingtalk.com/topapi/attendance/getleavetimebynames?access_token=",
    ];



    /***************考勤相关 ***************/
}
