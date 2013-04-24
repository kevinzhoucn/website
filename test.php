<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
        <head>
                <title>梦之都框架页示例</title>
        </head>
        <frameset rows="120, *, 80">
                <frame src="http://www.dreamdu.com/xhtml/" />
                <frame src="http://www.dreamdu.com/css/" />
                <frame src="http://www.dreamdu.com/javascript/" />
                <noframes>
                        <body>
                                梦之都使用了框架技术，但是您的浏览器不支持框架，
                                请升级您的浏览器以便正常访问梦之都。
                        </body>
                </noframes>
        </frameset>
</html>

<?php 
print_r(getdate());
echo "\n";
print_r(getdate(date("U")));

$str = "user/test";
//$last_item = end(explode('/', $str));

//phpinfo();

?>