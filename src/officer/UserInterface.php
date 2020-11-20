<?php


namespace Layman\DingTalk\Officer;


interface UserInterface
{
    /**
     * Notes: 创建用户
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ege851
     * @return mixed
     */
    public function userCreate(array $data);

    /**
    * Notes: 更新用户
    * @param array $data
    * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ege851
    */
    public function userUpdate(array $data);

    /**
     * Notes: 删除用户
     * @param string $userid 员工id
     * @return mixed
     */
    public function userDelete(string $userid);

    /**
     * Notes: 获取用户详情
     * @param string $userid
     * @return mixed
     */
    public function userDetail(string $userid);

    /**
     * Notes: 获取部门用户userid列表
     * @param string $deptId 部门id
     * @return mixed
     */
    public function userDeptMember(string $deptId);

    /**
     * Notes: 获取部门用户
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ege851
     * @return mixed
     */
    public function userSimpleList(array $data);

    /**
     * Notes: 获取部门用户详情
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ege851
     * @return mixed
     */
    public function userListByPage(array $data);

    /**
     * Notes: 获取管理员列表
     * @return mixed
     */
    public function userAdmin();

    /**
     * Notes: 获取管理员通讯录权限范围
     * @param string $userid 员工id
     * @return mixed
     */
    public function userAdminScope(string $userid);

    /**
     * Notes: 根据unionid获取userid
     * @param string $unionid 员工在当前开发者企业账号范围内的唯一标识，系统生成，固定值，不会改变
     * @return mixed
     */
    public function userByUnionid(string $unionid);

    /**
     * Notes: 根据手机号获取userid
     * @param string $mobile 手机号码
     * @return mixed
     */
    public function userByMobile(string $mobile);

    /**
     * Notes: 获取企业员工人数
     * @param int $onlyActive 0：包含未激活钉钉的人员数量 1：不包含未激活钉钉的人员数量
     * @return mixed
     */
    public function userOrgCount(int $onlyActive);

    /**
     * Notes: 未登录钉钉的员工列表
     * @param array $data
     * data参数详见-https://ding-doc.dingtalk.com/doc#/serverapi2/ege851
     * @return mixed
     */
    public function userInactive(array $data);
}
