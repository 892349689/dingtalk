<?php


namespace Layman\DingTalk\Officer;


interface RoleInterface
{
    /**
     * Notes: 获取角色列表
     * @param int|null $size 分页大小，默认值：20，最大值200
     * @param null $offset 分页偏移，默认值：0
     * @return mixed
     */
    public function roleList(int $size = null, $offset = null);

    /**
     * Notes: 获取角色下的员工列表
     * @param int $role_id 角色ID
     * @param int|null $size 分页大小，默认值：20，最大值200
     * @param int|null $offset 分页偏移，默认值：0
     * @return mixed
     */
    public function roleSimpleList(int $role_id, int $size = null, int $offset = null);

    /**
     * Notes: 获取角色组
     * @param int $group_id
     * @return mixed
     */
    public function roleGroup(int $group_id);

    /**
     * Notes: 获取角色详情
     * @param int $roleId 角色Id
     * @return mixed
     */
    public function roleDetail(int $roleId);

    /**
     * Notes: 创建角色
     * @param string $roleName  角色名称
     * @param int $groupId 角色组id
     * @return mixed
     */
    public function roleCreate(string $roleName, int $groupId);

    /**
     * Notes: 更新角色
     * @param string $roleName 角色名称
     * @param int $roleId 角色id。“默认”分组内的角色不支持修改，包括：负责人、主管、主管理员、子管理员
     * @return mixed
     */
    public function roleUpdate(string $roleName, int $roleId);

    /**
     * Notes: 删除角色
     * @param int $role_id 角色id。“默认”分组内的角色不支持修改，包括：负责人、主管、主管理员、子管理员
     * @return mixed
     */
    public function roleDelete(int $role_id);

    /**
     * Notes: 创建角色组
     * @param string $name 角色组名称
     * @return mixed
     */
    public function roleGroupCreate(string $name);

    /**
     * Notes: 批量增加员工角色
     * @param string $roleIds 角色id list，最大列表长度：20 示例值 1,2,3,4,5
     * @param string $userIds 员工id list，最大列表长度：20 示例值 a,b,c,d,e
     * @return mixed
     */
    public function roleFormapsCreate(string $roleIds, string $userIds);

    /**
     * Notes: 批量删除员工角色
     * @param string $roleIds 角色标签id，最大列表长度：20 示例值 1,2
     * @param string $userIds 用户userId，最大列表长度：100 示例值 a,b
     * @return mixed
     */
    public function roleFormapsDelete(string $roleIds, string $userIds);

    /**
     * Notes: 设定角色成员管理范围
     * @param string $userid 用户id
     * @param int $role_id 角色id，必须是用户已经加入的角色
     * @param string|null $dept_ids 部门id列表，最多50个，不传则设置范围为默认值：所有人 示例值 312,322,323
     * @return mixed
     */
    public function roleScopeUpdate(string $userid, int $role_id, string $dept_ids = null);
}
