<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>访问禁止</title>
</head>
<body>
<style type="text/css">
    a {
        text-decoration: none;
        color: #FFF;
    }
    a:hover {
        text-decoration: none;
        color: #FF6600;
    }
    .title {
        color: #FFF;
        height: 35px;
        text-align: left;
        text-indent: 10px;
        font-weight: bold;
        line-height: 35px;
        background: #4B90B2;
        margin: 0 auto;
    }
</style>
<div style="width: 90%; margin:0 auto; font-size:12px; margin-left:5%; text-align:left">
    <div style="height: 30px; line-height: 30px; color: #FFF; background: #4B90B2; font-weight:bold; text-indent:10px; margin-top:10px;"><span class="title">检测到可疑访问</span></div>
    <div style="border: 1px solid #000; background: #E9F3FD; font-weight: bold; margin:10px auto; padding:10px 0;">
        <div style="padding-left:20px; line-height:25px;">事件编号：<?php echo $event_no; ?></div>
        <div style="padding-left:20px; line-height:25px;"><?php echo $event_msg; ?></div>
        <div style="padding-left:20px; line-height:25px;">确保浏览器的地址栏中的地址拼写和格式正确无误</div>
    </div>
    <div style="height: 30px; line-height: 30px; color: #FFF; background: #4B90B2; font-weight:bold; text-indent:10px; margin-top:10px; text-align: center;">Copyright (C) 2016 <a href="http://www.b.com">医讯网</a> All Rights Reserved.</div>
</div>
</body>