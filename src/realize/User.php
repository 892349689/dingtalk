<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\UserInterface;

class User implements UserInterface
{
    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 创建用户
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userCreate(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_CREATE_UTL['url'].$this->access_token,DingTalkUrl::USER_CREATE_UTL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 更新用户
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userUpdate(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_UPDATE_UTL['url'].$this->access_token,DingTalkUrl::USER_UPDATE_UTL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 删除用户
     * @param string $userid
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userDelete(string $userid)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_DELETE_UTL['url'].$this->access_token."&userid=".$userid,DingTalkUrl::USER_DELETE_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取用户详情
     * @param string $userid
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userDetail(string $userid)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_DETAIL_UTL['url'].$this->access_token."&userid=".$userid,DingTalkUrl::USER_DETAIL_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取部门用户userid列表
     * @param string $deptId
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userDeptMember(string $deptId)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_DEPT_MEMBER_UTL['url'].$this->access_token."&deptId=".$deptId,DingTalkUrl::USER_DEPT_MEMBER_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取部门用户
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userSimpleList(array $data)
    {
        try {
            $url = $this->userSimpleListAndByPage($data,DingTalkUrl::USER_SIMPLE_LIST_UTL['url']);
            return Common::sendUrl($url,DingTalkUrl::USER_SIMPLE_LIST_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取部门用户详情
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userListByPage(array $data)
    {
        try {
            $url = $this->userSimpleListAndByPage($data,DingTalkUrl::USER_LIST_BY_PAGE_UTL['url']);
            return Common::sendUrl($url,DingTalkUrl::USER_LIST_BY_PAGE_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取部门用户与获取部门用户详情 url 参数封装
     * @param array $data
     * @param string $classifyUrl
     * @return string
     */
    private function userSimpleListAndByPage(array $data,string $classifyUrl)
    {
        if (isset($data['order'])){
            $url = $classifyUrl.$this->access_token."&department_id=".$data['department_id']."&order=".$data['order'];
        }elseif (isset($data['offset']) && isset($data['size'])){
            $url = $classifyUrl.$this->access_token."&department_id=".$data['department_id']."&offset=".$data['offset']."&size=".$data['size'];
        }elseif (isset($data['offset']) && isset($data['size']) && isset($data['order'])){
            $url = $classifyUrl.$this->access_token."&department_id=".$data['department_id']."&offset=".$data['offset']."&size=".$data['size']."&order=".$data['order'];
        }else{
            $url = $classifyUrl.$this->access_token."&department_id=".$data['department_id'];
        }
        return $url;
    }

    /**
     * Notes: 获取管理员列表
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userAdmin()
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_ADMIN_UTL['url'].$this->access_token,DingTalkUrl::USER_ADMIN_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取管理员通讯录权限范围
     * @param string $userid
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userAdminScope(string $userid)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_ADMIN_SCOPE_UTL['url'].$this->access_token."&userid=".$userid,DingTalkUrl::USER_ADMIN_SCOPE_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 根据unionid获取userid
     * @param string $unionid
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userByUnionid(string $unionid)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_BY_UNIONID_UTL['url'].$this->access_token."&unionid=".$unionid,DingTalkUrl::USER_BY_UNIONID_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 根据手机号获取userid
     * @param string $mobile
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userByMobile(string $mobile)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_BY_MOBILE_UTL['url'].$this->access_token."&mobile=".$mobile,DingTalkUrl::USER_BY_MOBILE_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取企业员工人数
     * @param int $onlyActive
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userOrgCount(int $onlyActive)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_ORG_COUNT_UTL['url'].$this->access_token."&onlyActive=".$onlyActive,DingTalkUrl::USER_ORG_COUNT_UTL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 未登录钉钉的员工列表
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function userInactive(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::USER_INACTIVE_UTL['url'].$this->access_token,DingTalkUrl::USER_INACTIVE_UTL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }
}
