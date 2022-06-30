###################
安裝
###################

1. 從github載下來後，.env.example.php 複製為 .env.php 並設定資料庫IP、資料庫名稱、資料庫帳號、資料庫密碼
2. 將專案中 Test-202206.sql 匯入自訂的資料庫
3. 於 application/cache 新增目錄: sess

*******************
API 說明文件
*******************

新增
==================
API URL: announce/add
------------------
API 呼叫方式: POST
------------------
+------------+-------------------+
|傳送方式    |範例               |
+------------+-------------------+
|query string|參數A=值A&參數B=值B|
+------------+-------------------+

+------------+---------+---------+----------------------------+
|Body 參數   |格式     |必填     |說明                        |
+------------+---------+---------+----------------------------+
|title       |string   |Required |標題                        |
+------------+---------+---------+----------------------------+
|content     |string   |Required |內容                        |
+------------+---------+---------+----------------------------+

回傳 格式:JSON
------------------
{
> "status": true,
> "m": "處理完成"
}

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
