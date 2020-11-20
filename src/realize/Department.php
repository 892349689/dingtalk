<?php


namespace Layman\DingTalk\Realize;


use Layman\DingTalk\Common;
use Layman\DingTalk\Config\DingTalkUrl;
use Layman\DingTalk\Officer\DepartmentInterface;

class Department implements DepartmentInterface
{

    protected $access_token;

    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Notes: 创建部门
     * @param array $data
     * @return bool|string
     * @throws \Exception
     */
    public function departmentCreate(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::DEPARTMENT_CREATE_URL['url'].$this->access_token,DingTalkUrl::DEPARTMENT_CREATE_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 更新部门
     * @param array $data
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function departmentUpdate(array $data)
    {
        try {
            return Common::sendUrl(DingTalkUrl::DEPARTMENT_UPDATE_URL['url'].$this->access_token,DingTalkUrl::DEPARTMENT_UPDATE_URL['method'],$data);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 删除部门
     * @param string $id
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function departmentDelete(string $id)
    {
        try {
            return Common::sendUrl(DingTalkUrl::DEPARTMENT_DELETE_URL['url'].$this->access_token."&id=".$id,DingTalkUrl::DEPARTMENT_DELETE_URL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取子部门ID列表
     * @param string $id
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function departmentListIds(string $id)
    {
        try {
            return Common::sendUrl(DingTalkUrl::DEPARTMENT_LIST_IDS_URL['url'].$this->access_token."&id=".$id,DingTalkUrl::DEPARTMENT_LIST_IDS_URL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取部门列表
     * @param string $id
     * @param bool $fetch_child
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function departmentList(string $id = '1', bool $fetch_child = true)
    {
        try {
            return Common::sendUrl(DingTalkUrl::DEPARTMENT_LIST_URL['url'].$this->access_token."&id=".$id."&fetch_child=".$fetch_child,DingTalkUrl::DEPARTMENT_LIST_URL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 获取部门详情
     * @param string $id
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function departmentDetail(string $id)
    {
        try {
            return Common::sendUrl(DingTalkUrl::DEPARTMENT_DETAIL_URL['url'].$this->access_token."&id=".$id,DingTalkUrl::DEPARTMENT_DETAIL_URL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Notes: 查询部门的所有上级父部门路径 【注意】此接口不受授权范围的限制
     * @param string $id
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function departmentListParentDeptByDept(string $id)
    {
        try {
            return Common::sendUrl(DingTalkUrl::DEPARTMENT_LIST_PARENT_DEPT_BY_DEPT_URL['url'].$this->access_token."&id=".$id,DingTalkUrl::DEPARTMENT_LIST_PARENT_DEPT_BY_DEPT_URL['method']);
        }catch (\Exception $exception){
            throw new \Exception($exception->getMessage());
        }
    }


}
