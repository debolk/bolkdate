<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-20 00:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-20 00:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\bolkdate\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bolkdate\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-20 00:17:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\application.php [ 15 ]
2012-05-20 00:17:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layouts\application.php [ 15 ]
--
#0 C:\xampp\htdocs\bolkdate\application\views\layouts\application.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\bolkdate\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\bolkdate\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\bolkdate\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\bolkdate\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Mobile))
#6 C:\xampp\htdocs\bolkdate\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\bolkdate\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#9 {main}
2012-05-20 00:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 00:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 00:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 00:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 00:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 00:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 00:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 00:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/application.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:28:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::slider() ~ APPPATH\views\mobile\beauty.php [ 17 ]
2012-05-20 16:28:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::slider() ~ APPPATH\views\mobile\beauty.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-20 16:38:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::slider() ~ APPPATH\views\mobile\beauty.php [ 17 ]
2012-05-20 16:38:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::slider() ~ APPPATH\views\mobile\beauty.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-20 16:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:47:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::slider() ~ APPPATH\views\mobile\beauty.php [ 17 ]
2012-05-20 16:47:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::slider() ~ APPPATH\views\mobile\beauty.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-20 16:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 16:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 16:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL match was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-05-20 17:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL match was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\bolkdate\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\bolkdate\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-20 17:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:17:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: mobile_theme ~ APPPATH\views\layouts\mobile.php [ 19 ]
2012-05-20 17:17:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: mobile_theme ~ APPPATH\views\layouts\mobile.php [ 19 ]
--
#0 C:\xampp\htdocs\bolkdate\application\views\layouts\mobile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\bolkdate\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\bolkdate\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\bolkdate\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\bolkdate\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Mobile))
#6 C:\xampp\htdocs\bolkdate\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\bolkdate\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#9 {main}
2012-05-20 17:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:19:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::input() ~ APPPATH\classes\controller\mobile.php [ 23 ]
2012-05-20 17:19:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::input() ~ APPPATH\classes\controller\mobile.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-20 17:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-20 17:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-20 17:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/mobile.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\bolkdate\public\index.php(109): Kohana_Request->execute()
#1 {main}