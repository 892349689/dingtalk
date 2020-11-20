<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\RoleInterface;

class Role implements RoleInterface
{
    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 获取角色列表
     * @param int|null $size
     * @param null $offset
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleList(int $size = null, $offset = null)
    {
        try {
            $data = [];
            if ($size != null && $offset != null){
                $data = [
                    "size"  => $size,
                    "offset"=> $offset
                ];
            }
            return Common::sendUrl(DingTalkUrl::ROLE_LIST_URL['url'].$this->access_token,DingTalkUrl::ROLE_LIST_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取角色下的员工列表
     * @param int $role_id
     * @param int|null $size
     * @param int|null $offset
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleSimpleList(int $role_id, int $size = null, int $offset = null)
    {
        try {
            if ($size != null && $offset != null){
                $data = [
                    "role_id" => $role_id,
                    "size"  => $size,
                    "offset"=> $offset
                ];
            }else{
                $data = [
                    "role_id" => $role_id
                ];
            }
            return Common::sendUrl(DingTalkUrl::ROLE_SIMPLE_LIST_URL['url'].$this->access_token,DingTalkUrl::ROLE_SIMPLE_LIST_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取角色组
     * @param int $group_id
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleGroup(int $group_id)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_GROUP_URL['url'].$this->access_token,DingTalkUrl::ROLE_GROUP_URL['method'],["group_id" => $group_id]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取角色详情
     * @param int $roleId
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleDetail(int $roleId)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_DETAIL_URL['url'].$this->access_token,DingTalkUrl::ROLE_DETAIL_URL['method'],["roleId" => $roleId]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 创建角色
     * @param string $roleName
     * @param int $groupId
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleCreate(string $roleName, int $groupId)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_CREATE_URL['url'].$this->access_token,DingTalkUrl::ROLE_CREATE_URL['method'],["roleName" => $roleName, "groupId" => $groupId]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 更新角色
     * @param string $roleName
     * @param int $roleId
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleUpdate(string $roleName, int $roleId)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_UPDATE_URL['url'].$this->access_token,DingTalkUrl::ROLE_UPDATE_URL['method'],["roleName" => $roleName, "roleId" => $roleId]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 删除角色
     * @param int $role_id
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleDelete(int $role_id)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_DELETE_URL['url'].$this->access_token,DingTalkUrl::ROLE_DELETE_URL['method'],["role_id" => $role_id]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 创建角色组
     * @param string $name
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleGroupCreate(string $name)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_GROUP_CREATE_URL['url'].$this->access_token,DingTalkUrl::ROLE_GROUP_CREATE_URL['method'],["name" => $name]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 批量增加员工角色
     * @param string $roleIds
     * @param string $userIds
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleFormapsCreate(string $roleIds, string $userIds)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_FORMAPS_CREATE_URL['url'].$this->access_token,DingTalkUrl::ROLE_FORMAPS_CREATE_URL['method'],["roleIds" => $roleIds, "userIds" => $userIds]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 批量删除员工角色
     * @param string $roleIds
     * @param string $userIds
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleFormapsDelete(string $roleIds, string $userIds)
    {
        try {
            return Common::sendUrl(DingTalkUrl::ROLE_FORMAPS_DELETE_URL['url'].$this->access_token,DingTalkUrl::ROLE_FORMAPS_DELETE_URL['method'],["roleIds" => $roleIds, "userIds" => $userIds]);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 设定角色成员管理范围
     * @param string $userid
     * @param int $role_id
     * @param string|null $dept_ids
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function roleScopeUpdate(string $userid, int $role_id, string $dept_ids = null)
    {
        try {
            if ($dept_ids != null){
                $data = [
                    "userid"    => $userid,
                    "role_id"   => $role_id,
                    "dept_ids"  => $dept_ids
                ];
            }else{
                $data = [
                    "userid"    => $userid,
                    "role_id"   => $role_id,
                ];
            }
            return Common::sendUrl(DingTalkUrl::ROLE_SCOPE_UPDATE_URL['url'].$this->access_token,DingTalkUrl::ROLE_SCOPE_UPDATE_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

}
