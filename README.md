# dingtalk
钉钉第三方企业用户服务端API封装包-此包基于laravel框架开发

1. 此包目前包含以下模块:
   通讯录管理->用户管理-部门管理-角色管理
   考勤->考勤排班-考勤班次-考勤打卡-假勤审批-考勤统计报表 
2. 安装方法:composer require layman/dingtalk:dev-main
3. 在config下app.php的-providers数组添加Layman\DingTalk\DingTalkServiceProvider::class,
4. 在config下app.php的-aliases数组添加'Dingtalk' => Layman\DingTalk\Facades\DingTalk::class
5. 运行artisan命令php artisan vendor:publish --provider="Layman\DingTalk\DingTalkServiceProvider"

