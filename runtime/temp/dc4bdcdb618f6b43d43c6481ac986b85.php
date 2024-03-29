<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"C:\workplace\Document\Richard\template\temp8/application/admin\view\system\configplay.html";i:1523622363;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\head.html";i:1522563358;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\foot.html";i:1526046066;}*/ ?>
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
                <li class="layui-this">播放器设置</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">

                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">播放器宽度：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="play[width]" placeholder="例如: 540 或 0自适应" value="<?php echo $play['width']; ?>" class="layui-input ">
                    </div>
                    <div class="layui-form-mid layui-word-aux">例如: 540 或 0自适应，不要填写百分号</div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">播放器高度：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[height]" placeholder="例如: 460，必须大于0" value="<?php echo $play['height']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">手机播放宽度：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="play[widthmob]" placeholder="例如: 540 或 0自适应" value="<?php echo $play['widthmob']; ?>" class="layui-input ">
                    </div>
                    <div class="layui-form-mid layui-word-aux">例如: 540 或 0自适应，不要填写百分号</div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">手机播放高度：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[heightmob]" placeholder="例如: 460，必须大于0" value="<?php echo $play['heightmob']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">弹窗口宽度：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[widthpop]" placeholder="例如: 500，必须大于0" value="<?php echo $play['widthpop']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">弹窗口高度：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[heightpop]" placeholder="例如: 460，必须大于0" value="<?php echo $play['heightpop']; ?>" class="layui-input w150">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">预加载时间：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[second]" placeholder="例如: 5，单位是秒" value="<?php echo $play['second']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">预加载广告：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[prestrain]" placeholder="不要出现双引号、单引号等特殊字符号" value="<?php echo $play['prestrain']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">缓冲广告：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[buffer]" placeholder="不要出现双引号、单引号等特殊字符号" value="<?php echo $play['buffer']; ?>" class="layui-input">
                    </div>
                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">解析地址：</label>
                        <div class="layui-input-block">
                            <input type="text" name="play[parse]" placeholder="第三方解析接口" value="<?php echo $play['parse']; ?>" class="layui-input">
                        </div>
                    </div>


                <div class="layui-form-item">
                    <label class="layui-form-label">自动全屏：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[autofull]" value="0" title="关闭" <?php if($play['autofull'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="play[autofull]" value="1" title="开启" <?php if($play['autofull'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">头部开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[showtop]" value="0" title="关闭" <?php if($play['showtop'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="play[showtop]" value="1" title="开启" <?php if($play['showtop'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">列表开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[showlist]" value="0" title="关闭" <?php if($play['showlist'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="play[showlist]" value="1" title="开启" <?php if($play['showlist'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">播放器文件：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[flag]" value="0" title="本地播放器" checked >
                    </div>
                </div>

                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label">播放器颜色：</label>
                    <div class="layui-input-block">
                        <input type="text" id="mac_colors" name="play[colors]" placeholder="" value="<?php echo $play['colors']; ?>" class="layui-input">
                    </div>
                </div>
                    <div class="layui-form-item" style="display:none;">
                        <label class="layui-form-label">选择颜色：</label>
                        <div class="layui-input-block">
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(1);return false;" style="background-color: #000000"> 全黑色</button>
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(2);return false;" style="background-color: #EFF4F7"> 浅蓝色</button>
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(3);return false;" style="background-color: #D8CFDF"> 浅紫色</button>
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(4);return false;" style="background-color: #D7E7B6"> 浅绿色</button>
                        </div>
                    </div>

                    <blockquote class="layui-elem-quote layui-quote-nm" style="display:none;">
                        颜色使用16进制表示法，不带#号，以逗号分割，一共15个可配置颜色!
                        <br>依次是：背景色，文字颜色，链接颜色，分组标题背景色，分组标题颜色，当前分组标题颜色，当前集数颜色，集数列表滚动条凸出部分的颜色，滚动条上下按钮上三角箭头的颜色，滚动条的背景颜色，滚动条空白部分的颜色，滚动条立体滚动条阴影的颜色 ，滚动条亮边的颜色，滚动条强阴影的颜色，滚动条的基本颜色
                    </blockquote>

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
    function setColor(v) {
        switch (v) {
            case 2:
                v = "EFF4F7,000000,666666,E4E4E4,000000,FF0000,FF0000,DBEBFE,458CE4,DBEBFE,FFFFFF,458CE4,DBEBFE,DBEBFE,fcfcfc";
                break;
            case 3:
                v = "D8CFDF,000000,666666,E4E4E4,000000,FF0000,FF0000,D8CFDF,926C92,BEAFC9,FFFFFF,926C92,BEAFC9,BEAFC9,fcfcfc";
                break;
            case 4:
                v = "D7E7B6,000000,666666,E4E4E4,000000,FF0000,FF0000,9EC14C,A3C656,BAD480,FFFFFF,A3C656,BAD480,BAD480,fcfcfc";
                break;
            default:
                v = "000000,F6F6F6,F6F6F6,333333,666666,FFFFF,FF0000,2c2c2c,ffffff,a3a3a3,2c2c2c,adadad,adadad,48486c,fcfcfc";
                break;
        }
        $("#mac_colors").val(v);
    }
</script>

</body>
</html>