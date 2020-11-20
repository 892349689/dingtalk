# dingtalk
钉钉第三方企业用户服务端API封装包-此包基于laravel框架开发


1. 安装方法:composer require layman/dingtalk:dev-main
2. 在config下app.php的-providers数组添加Layman\DingTalk\DingTalkServiceProvider::class,
3. 在config下app.php的-aliases数组添加'Dingtalk' => Layman\DingTalk\Facades\DingTalk::class
4. 运行artisan命令php artisan vendor:publish --provider="Layman\DingTalk\DingTalkServiceProvider"

