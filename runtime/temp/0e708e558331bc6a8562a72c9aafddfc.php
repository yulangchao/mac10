<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:95:"C:\workplace\Document\Richard\template\temp8/application/admin\view\system\configinterface.html";i:1522331336;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\head.html";i:1522563358;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\foot.html";i:1526046066;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>

<div class="page-container">
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">站外入库设置</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        1.转换分类每个各占一行;<br>
                        2.本地分类在前,采集分类在后(动作片=动作);<br>
                        3.不要有多余的空行;<br>
                        4.视频播放器、备注、地址、服务器组、文章分页等多页数据连接符都是$$$<br>
                        4.视频入库接口地址/api.php/receive/vod；文章入库接口地址/api.php/receive/art

                    </blockquote>

                <div class="layui-form-item">
                    <label class="layui-form-label">接口开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="interface[status]" value="0" title="关闭" <?php if($config['interface']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="interface[status]" value="1" title="开启" <?php if($config['interface']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">入库免登录密码：</label>
                    <div class="layui-input-block">
                        <input type="text" name="interface[pass]" placeholder="数据每页显示量，不建议超过50" value="<?php echo $config['interface']['pass']; ?>" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">视频分类转换：</label>
                    <div class="layui-input-inline" style="width:400px;!important;">
                        <textarea name="interface[vodtype]" class="layui-textarea" rows="20" ><?php echo mac_replace_text($config['interface']['vodtype']); ?></textarea>
                    </div>
                    <label class="layui-form-label">文章分类转换：</label>
                    <div class="layui-input-inline" style="width:400px;!important;">
                        <textarea name="interface[arttype]" class="layui-textarea" rows="20" ><?php echo mac_replace_text($config['interface']['arttype']); ?></textarea>
                    </div>
                </div>

                <div class="layui-form-item">

                </div>
            </div>
            </div>
        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">

</script>

</body>
</html>