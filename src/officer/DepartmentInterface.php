<?php


namespace Layman\DingTalk\Officer;


interface DepartmentInterface
{
    /***
     * Notes:
     * @param array $data
     * data参数详见钉钉部门管理-创建部门接口-https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq
     * @return mixed
     */
    public function departmentCreate(array $data);

    /**
     * Notes: 更新部门
     * @param array $data
     * data参数详见钉钉部门管理-更新部门接口-https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq
     * @return mixed
     */
    public function departmentUpdate(array $data);

    /**
     * Notes: 删除部门
     * @param string $id 部门id (注：不能删除根部门；当部门里有员工，或者部门的子部门里有员工，也不能删除)
     * 返回详情见-https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq
     * @return mixed
     */
    public function departmentDelete(string $id);

    /**
     * Notes: 获取子部门ID列表
     * @param string $id 父部门id。根部门的话传1
     * 返回详情见-https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq
     * @return mixed
     */
    public function departmentListIds(string $id);

    /**
     * Notes: 获取部门列表
     * @param string $id 父部门id（如果不传，默认部门为根部门，根部门ID为1）
     * @param bool $fetch_child 是否递归部门的全部子部门 true （默认）递归获取 false 不递归获取， 接口测试默认是true
     * 返回详情见-https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq
     * @return mixed
     */
    public function departmentList(string $id = '1',bool $fetch_child = true);

    /**
     * Notes:获取部门详情
     * @param string $id 部门id
     * 返回详情见-https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq
     * @return mixed
     */
    public function departmentDetail(string $id);

    /**
     * Notes: 查询部门的所有上级父部门路径 【注意】此接口不受授权范围的限制
     * @param string $id 希望查询的部门的id，包含查询的部门本身
     * 返回详情见-https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq
     * @return mixed
     */
    public function departmentListParentDeptByDept(string $id);
}
