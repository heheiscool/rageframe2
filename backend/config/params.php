<?php

return [
    'adminEmail' => 'admin@example.com',
    'adminAcronym' => 'SF',
    'adminTitle' => 'SpringFrame',
    'adminDefaultHomePage' => ['main/system'], // 默认主页

    /** ------ 总管理员配置 ------ **/
    'adminAccount' => 1,// 系统管理员账号id
    'isMobile' => false, // 手机访问

    /** ------ 日志记录 ------ **/
    'user.log' => true,
    'user.log.level' => ['warning', 'error'], // 级别 ['success', 'info', 'warning', 'error']
    'user.log.except.code' => [404], // 不记录的code

    /** ------ 开发者信息 ------ **/
    'exploitDeveloper' => 'Day',
    'exploitFullName' => 'SpringFrame应用开发引擎',
    'exploitOfficialWebsite' => '<a href="" target="_blank"></a>',
    'exploitGitHub' => '<a href="" target="_blank"></a>',

    /**
     * 不需要验证的路由全称
     *
     * 注意: 前面以绝对路径/为开头
     */
    'noAuthRoute' => [
        '/main/index',// 系统主页
        '/main/system',// 系统首页
        '/main/member-between-count',
        '/main/member-credits-log-between-count',
    ],
];