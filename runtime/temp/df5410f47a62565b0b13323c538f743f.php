<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"C:\workplace\Document\Richard\template\temp8/application/admin\view\system\config.html";i:1528624850;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\head.html";i:1522563358;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\foot.html";i:1526046066;}*/ ?>
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
                <li class="layui-this">基本设置</li>
                <li>性能优化</li>
                <li>预留参数</li>
                <li>会员设置</li>
                <li>评论留言</li>
                <li>附件设置</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">
                <div class="layui-form-item">
                    <label class="layui-form-label">网站名称：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_name]" placeholder="xxx在线视频网站" value="<?php echo $config['site']['site_name']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">网站域名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_url]" placeholder="如：www.maccms.com,不要加http://" value="<?php echo $config['site']['site_url']; ?>" class="layui-input">
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">WAP站域名：</label>
                        <div class="layui-input-block">
                            <input type="text" name="site[site_wapurl]" placeholder="如：www.maccms.com,不要加http://" value="<?php echo $config['site']['site_wapurl']; ?>" class="layui-input">
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">关键字：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_keywords]" placeholder="一般不超过100个字符" value="<?php echo $config['site']['site_keywords']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">描述信息：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_description]" placeholder="一般不超过200个字符" value="<?php echo $config['site']['site_description']; ?>" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">备案号：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_icp]" placeholder="京ICP备00000000号" value="<?php echo $config['site']['site_icp']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">QQ号码：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_qq]" placeholder="站长客服qq号码" value="<?php echo $config['site']['site_qq']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">Email邮箱：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_email]" placeholder="站长客服邮箱" value="<?php echo $config['site']['site_email']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">安装目录：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[install_dir]" placeholder="根目录 ＂/＂，二级目录 ＂/maccms/＂以此类推" value="<?php echo $config['site']['install_dir']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">网站模板：</label>
                    <div class="layui-input-inline" >
                            <select class="w150" name="site[template_dir]">
                                <?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo; ?>" <?php if($config['site']['template_dir'] == $vo): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                    </div>
                    <label class="layui-form-label">模板目录：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="site[html_dir]" placeholder="" value="<?php echo $config['site']['html_dir']; ?>" class="layui-input w150" >
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">自适应手机：</label>
                    <div class="layui-input-inline w300">
                        <input type="radio" name="site[mob_status]" value="0" title="关闭" <?php if($config['site']['mob_status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="site[mob_status]" value="1" title="多域" <?php if($config['site']['mob_status'] == 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="site[mob_status]" value="2" title="单域" <?php if($config['site']['mob_status'] == 2): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">多域名：访问wap域名会自动使用手机模板；单域名：手机访问会自动使用手机模板；</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">手机模板：</label>
                    <div class="layui-input-inline">
                            <select class="w150" name="site[mob_template_dir]">
                                <?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo; ?>" <?php if($config['site']['mob_template_dir'] == $vo): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                    </div>
                    <label class="layui-form-label">模板目录：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="site[mob_html_dir]" placeholder="" value="<?php echo $config['site']['mob_html_dir']; ?>" class="layui-input w150" >
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">统计代码：</label>
                    <div class="layui-input-block">
                        <textarea name="site[site_tj]" class="layui-textarea"  placeholder="请输入第三方网站统计代码"><?php echo $config['site']['site_tj']; ?></textarea>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">站点状态：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="site[site_status]" value="0" title="关闭" <?php if($config['site']['site_status'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="site[site_status]" value="1" title="开启" <?php if($config['site']['site_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关闭提示：</label>
                        <div class="layui-input-block">
                            <textarea name="site[site_close_tip]" class="layui-textarea"  placeholder="请输入站点关闭后的提示信息"><?php echo $config['site']['site_close_tip']; ?></textarea>
                        </div>
                    </div>
            </div>

                <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label">缓存方式：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="app[cache_type]" lay-filter="cache_type" value="0" title="file" <?php if($config['app']['cache_type'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[cache_type]" lay-filter="cache_type" value="1" title="memcache" <?php if($config['app']['cache_type'] == 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[cache_type]" lay-filter="cache_type" value="2" title="redis" <?php if($config['app']['cache_type'] == 2): ?>checked <?php endif; ?>>
                        </div>
                    </div>

                    <div class="layui-form-item row_cache_server" <?php if($config['app']['cache_type'] == 0): ?> style="display:none;" <?php endif; ?>>
                        <label class="layui-form-label">服务器：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="app[cache_host]" placeholder="缓存服务器IP" value="<?php echo $config['app']['cache_host']; ?>" class="layui-input" >
                        </div>
                        <label class="layui-form-label">端口：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="app[cache_port]" placeholder="缓存服务器端口" value="<?php echo $config['app']['cache_port']; ?>" class="layui-input" >
                        </div>
                        <label class="layui-form-label">密码：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="app[cache_password]" placeholder="缓存服务器密码,没有请留空" value="<?php echo $config['app']['cache_password']; ?>" class="layui-input" >
                        </div>
                        <button type="button" class="layui-btn layui-btn-normal" onclick="test_cache()">测试连接</button>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">缓存标识：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[cache_flag]" placeholder="留空将自动生成" value="<?php echo $config['app']['cache_flag']; ?>" class="layui-input w150" >
                    </div>
                    <div class="layui-form-mid layui-word-aux">多站共用一个服务器上memcache、redis时需区分开</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">数据缓存：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[cache_core]" value="0" title="关闭" <?php if($config['app']['cache_core'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[cache_core]" value="1" title="开启" <?php if($config['app']['cache_core'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">数据缓存时间：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[cache_time]" placeholder="建议设置为3600以上" value="<?php echo $config['app']['cache_time']; ?>" class="layui-input w150" >
                    </div>
                    <div class="layui-form-mid layui-word-aux">单位秒建议设置为3600以上</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">页面缓存：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[cache_page]" value="0" title="关闭" <?php if($config['app']['cache_page'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[cache_page]" value="1" title="开启" <?php if($config['app']['cache_page'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">页面缓存时间：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[cache_time_page]" placeholder="建议设置为3600以上" value="<?php echo $config['app']['cache_time_page']; ?>" class="layui-input w150" >
                    </div>
                    <div class="layui-form-mid layui-word-aux">单位秒建议设置为3600以上</div>
                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">压缩页面：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="app[compress]" value="0" title="关闭" <?php if($config['app']['compress'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[compress]" value="1" title="开启" <?php if($config['app']['compress'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">搜索开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[search]" value="0" title="关闭" <?php if($config['app']['search'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[search]" value="1" title="开启" <?php if($config['app']['search'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">搜索间隔：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[search_timespan]" placeholder="建议设置为3秒以上" value="<?php echo $config['app']['search_timespan']; ?>" class="layui-input w150">
                    </div>
                    <div class="layui-form-mid layui-word-aux">单位秒，建议设置为3秒以上</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">采集间隔：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[collect_timespan]" placeholder="建议设置为3秒以上" value="<?php echo $config['app']['collect_timespan']; ?>" class="layui-input w150">
                    </div>
                    <div class="layui-form-mid layui-word-aux">单位秒，建议设置为3秒以上</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">后台每页数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="app[pagesize]" placeholder="每页显示数据量、一般设置为20左右" value="<?php echo $config['app']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">生成每页数：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[makesize]" placeholder="批量生成每次生成都少页、一般设置为20左右" value="<?php echo $config['app']['makesize']; ?>" class="layui-input w150">
                        </div>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">页面后缀名：</label>
                    <div class="layui-input-inline">
                            <select style="width:150px;" name="app[suffix]">
		                        <option value="html" <?php if($config['app']['suffix'] == 'html'): ?>checked <?php endif; ?>>html</option>
		                        <option value="htm" <?php if($config['app']['suffix'] == 'htm'): ?>checked <?php endif; ?>>htm</option>
                            </select>
                    </div>
                </div>
            </div>

                <div class="layui-tab-item">

                    <div class="layui-form-item">
                        <label class="layui-form-label">搜索热词：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[search_hot]" placeholder="搜索热词多个请用,号分割" value="<?php echo $config['app']['search_hot']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">文章扩展分类：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[art_extend_class]" placeholder="文章扩展分类" value="<?php echo $config['app']['art_extend_class']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">视频扩展分类：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_class]" placeholder="视频扩展分类" value="<?php echo $config['app']['vod_extend_class']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">视频资源：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_state]" placeholder="" value="<?php echo $config['app']['vod_extend_state']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">视频版本：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_version]" placeholder="" value="<?php echo $config['app']['vod_extend_version']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">视频地区：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_area]" placeholder="" value="<?php echo $config['app']['vod_extend_area']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">视频语言：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_lang]" placeholder="" value="<?php echo $config['app']['vod_extend_lang']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">视频年代：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_year]" placeholder="" value="<?php echo $config['app']['vod_extend_year']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">视频周期：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_weekday]" placeholder="" value="<?php echo $config['app']['vod_extend_weekday']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">播放器顺序：</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="app[player_sort]" value="0" title="添加" <?php if($config['app']['player_sort'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[player_sort]" value="1" title="全局" <?php if($config['app']['player_sort'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">模板里展示的播放器排列顺序</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">加密地址：</label>
                        <div class="layui-input-inline">
                            <select style="width:150px;" name="app[encrypt]">
                                <option value="0">不加密</option>
                                <option value="1" <?php if($config['app']['encrypt'] == 1): ?>selected <?php endif; ?>>escape编码</option>
                                <option value="2" <?php if($config['app']['encrypt'] == 2): ?>selected <?php endif; ?>>base64编码</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="layui-tab-item">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        1.开启试看功能的话,播放窗口将采用iframe动态页面方式载入，可能影响性能哦; <br>
                    </blockquote>


                <div class="layui-form-item">
                    <label class="layui-form-label">会员模块：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="user[status]" value="0" title="关闭" <?php if($config['user']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[status]" value="1" title="开启" <?php if($config['user']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">是否开启会员模块</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">注册开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_open]" value="0" title="关闭" <?php if($config['user']['reg_open'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[reg_open]" value="1" title="开启" <?php if($config['user']['reg_open'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">注册状态：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_status]" value="0" title="未审" <?php if($config['user']['reg_status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[reg_status]" value="1" title="已审" <?php if($config['user']['reg_status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">注册赠分：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[reg_points]" placeholder="" value="<?php echo $config['user']['reg_points']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">用户注册成功后默认赠送积分</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">邀请得积分：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[invite_reg_points]" placeholder="" value="<?php echo $config['user']['invite_reg_points']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">成功邀请用户赚取奖励积分</div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">试看时长：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[trysee]" placeholder="" value="<?php echo $config['user']['trysee']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">全局设置无权限需要积分点播的试看时长，单位分钟；0表示关闭全局试看；</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">头像上传：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[portrait_status]" value="0" title="关闭" <?php if($config['user']['portrait_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[portrait_status]" value="1" title="开启" <?php if($config['user']['portrait_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">头像尺寸：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[portrait_size]" placeholder="" value="<?php echo $config['user']['portrait_size']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">尺寸建议100x100</div>
                    </div>
            </div>

                <div class="layui-tab-item">
                <div class="layui-form-item">
                    <label class="layui-form-label">留言本：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="gbook[status]" value="0" title="关闭" <?php if($config['gbook']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[status]" value="1" title="开启" <?php if($config['gbook']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">是否开启留言本</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">是否审核：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="gbook[audit]" value="0" title="关闭" <?php if($config['gbook']['audit'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[audit]" value="1" title="开启" <?php if($config['gbook']['audit'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">登录留言：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="gbook[login]" value="0" title="关闭" <?php if($config['gbook']['login'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="gbook[login]" value="1" title="开启" <?php if($config['gbook']['login'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">验证码：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="gbook[verify]" value="0" title="关闭" <?php if($config['gbook']['verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[verify]" value="1" title="开启" <?php if($config['gbook']['verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">每页个数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="gbook[pagesize]" placeholder="建议设置20以上" value="<?php echo $config['gbook']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">时间间隔：</label>
                    <div class="layui-input-block">
                        <input type="text" name="gbook[timespan]" placeholder="单位秒、建议3秒以上" value="<?php echo $config['gbook']['timespan']; ?>" class="layui-input w150">
                    </div>
                </div>


                <div class="layui-form-item">
                    <label class="layui-form-label">评论状态：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="comment[status]" value="0" title="关闭" <?php if($config['comment']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[status]" value="1" title="开启" <?php if($config['comment']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">是否开启评论</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">是否审核：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="comment[audit]" value="0" title="关闭" <?php if($config['comment']['audit'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[audit]" value="1" title="开启" <?php if($config['comment']['audit'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">登录评论：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="comment[login]" value="0" title="关闭" <?php if($config['comment']['login'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="comment[login]" value="1" title="开启" <?php if($config['comment']['login'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">验证码：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="comment[verify]" value="0" title="关闭" <?php if($config['comment']['verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[verify]" value="1" title="开启" <?php if($config['comment']['verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">每页个数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="comment[pagesize]" placeholder="建议设置20以上" value="<?php echo $config['comment']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">时间间隔：</label>
                    <div class="layui-input-block">
                        <input type="text" name="comment[timespan]" placeholder="单位秒、建议3秒以上" value="<?php echo $config['comment']['timespan']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">词语过滤：</label>
                    <div class="layui-input-block">
                        <textarea name="app[filter_words]" class="layui-textarea" placeholder="多个用,号分隔"><?php echo $config['app']['filter_words']; ?></textarea>
                    </div>
                </div>
            </div>

                <div class="layui-tab-item">
                <div class="layui-form-item">
                    <label class="layui-form-label">缩略图：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="upload[thumb]" value="0" title="关闭" <?php if($config['upload']['thumb'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="upload[thumb]" value="1" title="开启" <?php if($config['upload']['thumb'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">上传图片时是否自动生成缩略图</div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">尺寸大小：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[thumb_size]" placeholder="长x宽,例300x300" value="<?php echo $config['upload']['thumb_size']; ?>" class="layui-input w150">
                        </div>
                        <div class="layui-form-mid layui-word-aux">缩略图尺寸</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">裁剪方式：</label>
                        <div class="layui-input-inline">
                            <select class="w150" name="upload[thumb_type]">
                                <option value="1" <?php if($config['upload']['thumb_type'] == 1): ?>checked <?php endif; ?>>等比例缩放</option>
                                <option value="2" <?php if($config['upload']['thumb_type'] == 2): ?>checked <?php endif; ?>>缩放后填充</option>
                                <option value="3" <?php if($config['upload']['thumb_type'] == 3): ?>checked <?php endif; ?>>居中裁剪</option>
                                <option value="4" <?php if($config['upload']['thumb_type'] == 4): ?>checked <?php endif; ?>>左上角裁剪</option>
                                <option value="5" <?php if($config['upload']['thumb_type'] == 5): ?>checked <?php endif; ?>>右下角裁剪</option>
                                <option value="6" <?php if($config['upload']['thumb_type'] == 6): ?>checked <?php endif; ?>>固定尺寸缩放</option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux">缩略图裁剪方式</div>
                    </div>
                <div class="layui-form-item">
                        <label class="layui-form-label">文字水印：</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="upload[watermark]" value="0" title="关闭" <?php if($config['upload']['watermark'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="upload[watermark]" value="1" title="开启" <?php if($config['upload']['watermark'] == 1): ?>checked <?php endif; ?>>
                        </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">水印位置：</label>
                        <div class="layui-input-inline">
                            <select class="w150" name="upload[watermark_location]">
                                <option value="7" <?php if($config['upload']['watermark_location'] == 7): ?>checked <?php endif; ?>>左下角</option>
                                <option value="1" <?php if($config['upload']['watermark_location'] == 1): ?>checked <?php endif; ?>>左上角</option>
                                <option value="4" <?php if($config['upload']['watermark_location'] == 4): ?>checked <?php endif; ?>>左居中</option>
                                <option value="9" <?php if($config['upload']['watermark_location'] == 9): ?>checked <?php endif; ?>>右下角</option>
                                <option value="3" <?php if($config['upload']['watermark_location'] == 3): ?>checked <?php endif; ?>>右上角</option>
                                <option value="6" <?php if($config['upload']['watermark_location'] == 6): ?>checked <?php endif; ?>>右居中</option>
                                <option value="2" <?php if($config['upload']['watermark_location'] == 2): ?>checked <?php endif; ?>>上居中</option>
                                <option value="8" <?php if($config['upload']['watermark_location'] == 8): ?>checked <?php endif; ?>>下居中</option>
                                <option value="5" <?php if($config['upload']['watermark_location'] == 5): ?>checked <?php endif; ?>>居中</option>
                            </select>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">水印内容：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[watermark_content]" placeholder="" value="<?php echo $config['upload']['watermark_content']; ?>" class="layui-input w150"  >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">字体大小：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[watermark_size]" placeholder="单位：px(像素)" value="<?php echo $config['upload']['watermark_size']; ?>" class="layui-input w150"  >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">水印颜色：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[watermark_color]" placeholder="格式:#000000" value="<?php echo $config['upload']['watermark_color']; ?>" class="layui-input w150"  >
                        </div>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">保存方式：</label>
                    <div class="layui-input-inline">
                        <select class="w150" name="upload[mode]" lay-filter="upload[mode]">
                            <option value="0" <?php if($config['upload']['mode'] == 0): ?>selected <?php endif; ?>>本地保存</option>
                            <option value="1" <?php if($config['upload']['mode'] == 1): ?>selected <?php endif; ?>>远程访问</option>
                            <option value="2" <?php if($config['upload']['mode'] == 2): ?>selected <?php endif; ?>>又云拍</option>
                            <option value="3" <?php if($config['upload']['mode'] == 3): ?>selected <?php endif; ?>>七牛云</option>
                            <option value="4" <?php if($config['upload']['mode'] == 4): ?>selected <?php endif; ?>>FTP存储</option>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item upload_mode mode1" <?php if($config['upload']['mode'] != 1): ?>style="display:none;" <?php endif; ?>>
                    <label class="layui-form-label">图片远程URL：</label>
                    <div class="layui-input-block">
                        <input type="text" name="upload[remoteurl]" placeholder="本地图片如存在远程，可使用此功能" value="<?php echo $config['upload']['remoteurl']; ?>" class="layui-input w500">
                    </div>
                </div>

                    <div class="layui-form-item upload_mode mode2" <?php if($config['upload']['mode'] != 2): ?>style="display:none;" <?php endif; ?>>
                        <label class="layui-form-label">又云拍API：</label>
                        <div class="layui-input-block">
                            <a href="https://www.upyun.com/" target="_blank" class="layui-btn layui-btn-primary">点击申请 https://www.upyun.com/</a>
                        </div>
                    </div>
                    <div class="layui-form-item upload_mode mode2" <?php if($config['upload']['mode'] != 2): ?>style="display:none;" <?php endif; ?>>
                        <label class="layui-form-label">服务名：</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="upload[api][upyun][bucket]" placeholder="又云拍-服务名" value="<?php echo $config['upload']['api']['upyun']['bucket']; ?>" class="layui-input"  >
                        </div>
                        <label class="layui-form-label">操作员名：</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="upload[api][upyun][username]" placeholder="又云拍-操作员名" value="<?php echo $config['upload']['api']['upyun']['username']; ?>" class="layui-input"  >
                        </div>
                        <label class="layui-form-label">操作员密码：</label>
                        <div class="layui-input-inline w200">
                           <input type="text" name="upload[api][upyun][pwd]" placeholder="又云拍-操作员密码" value="<?php echo $config['upload']['api']['upyun']['pwd']; ?>" class="layui-input"  >
                        </div>
                        <label class="layui-form-label">外链URL：</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="upload[api][upyun][url]" placeholder="又云拍-外链URL" value="<?php echo $config['upload']['api']['upyun']['url']; ?>" class="layui-input"  >
                        </div>
                    </div>

                    <div class="layui-form-item upload_mode mode3" <?php if($config['upload']['mode'] != 3): ?>style="display:none;" <?php endif; ?>>
                        <label class="layui-form-label">七牛云API：</label>
                        <div class="layui-input-block">
                            <a href="https://www.qiniu.com/" target="_blank" class="layui-btn layui-btn-primary">点击申请 https://www.qiniu.com/</a>
                        </div>
                    </div>
                    <div class="layui-form-item upload_mode mode3" <?php if($config['upload']['mode'] != 3): ?>style="display:none;" <?php endif; ?>>
                        <label class="layui-form-label">服务名：</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="upload[api][qiniu][bucket]" placeholder="七牛云-服务名" value="<?php echo $config['upload']['api']['qiniu']['bucket']; ?>" class="layui-input"  >
                        </div>
                        <label class="layui-form-label">公钥：</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="upload[api][qiniu][accesskey]" placeholder="七牛云-公钥" value="<?php echo $config['upload']['api']['qiniu']['accesskey']; ?>" class="layui-input"  >
                        </div>
                        <label class="layui-form-label">私钥：</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="upload[api][qiniu][secretkey]" placeholder="七牛云-私钥" value="<?php echo $config['upload']['api']['qiniu']['secretkey']; ?>" class="layui-input"  >
                        </div>
                        <label class="layui-form-label">外链URL：</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="upload[api][qiniu][url]" placeholder="七牛云-外链URL" value="<?php echo $config['upload']['api']['qiniu']['url']; ?>" class="layui-input"  >
                        </div>
                    </div>

                    <div class="layui-form-item upload_mode mode4" <?php if($config['upload']['mode'] != 4): ?>style="display:none;" <?php endif; ?>>
                    <label class="layui-form-label">FTP存储：</label>
                    <div class="layui-input-block">
                        <a href="javascript:;" target="_blank" class="layui-btn layui-btn-primary">请确认FTP可以正常连接</a>
                    </div>
                    </div>
                    <div class="layui-form-item upload_mode mode4" <?php if($config['upload']['mode'] != 4): ?>style="display:none;" <?php endif; ?>>
                    <label class="layui-form-label">服务器：</label>
                    <div class="layui-input-inline w200">
                        <input type="text" name="upload[api][ftp][host]" placeholder="ip或域名" value="<?php echo $config['upload']['api']['ftp']['host']; ?>" class="layui-input" >
                    </div>
                    <label class="layui-form-label">端口：</label>
                    <div class="layui-input-inline w100">
                        <input type="text" name="upload[api][ftp][port]" placeholder="端口号" value="<?php echo $config['upload']['api']['ftp']['port']; ?>" class="layui-input" >
                    </div>
                    <label class="layui-form-label">账号：</label>
                    <div class="layui-input-inline w100">
                        <input type="text" name="upload[api][ftp][user]" placeholder="ftp账号" value="<?php echo $config['upload']['api']['ftp']['user']; ?>" class="layui-input" >
                    </div>
                    <label class="layui-form-label">密码：</label>
                    <div class="layui-input-inline w100">
                        <input type="text" name="upload[api][ftp][pwd]" placeholder="ftp密码" value="<?php echo $config['upload']['api']['ftp']['pwd']; ?>" class="layui-input" >
                    </div>
                    <label class="layui-form-label">路径：</label>
                    <div class="layui-input-inline w100">
                        <input type="text" name="upload[api][ftp][path]" placeholder="网站根路径" value="<?php echo $config['upload']['api']['ftp']['path']; ?>" class="layui-input" >
                    </div>
                    <label class="layui-form-label">外链URL：</label>
                    <div class="layui-input-inline w200">
                        <input type="text" name="upload[api][ftp][url]" placeholder="外链URL" value="<?php echo $config['upload']['api']['ftp']['url']; ?>" class="layui-input" >
                    </div>
                    </div>
                </div>


                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                        <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    layui.use(['form', 'layer'], function(){
        // 操作对象
        var form = layui.form
                , layer = layui.layer;

        form.on('select(upload[mode])', function(data){
            $('.upload_mode').hide();
            $('.mode'+ data.value).show();
        });

        form.on('radio(cache_type)',function(data){
            $('.row_cache_server').hide();
           if(data.value>0){
               $('.row_cache_server').show();
           }
        });

    });

    function test_cache(){
        var type = $("input[name='app[cache_type]']:checked").val();
        var host = $("input[name='app[cache_host]']").val();
        var port = $("input[name='app[cache_port]']").val();
        var password = $("input[name='app[cache_password]']").val();
        layer.msg('数据提交中...',{time:500000});
        $.ajax({
            url: "<?php echo url('system/test_cache'); ?>",
            type: "post",
            dataType: "json",
            data: {type:type,host:host,port:port,password:password},
            beforeSend: function () {
            },
            error:function(r){
                layer.msg('发生错误，请检查是否开启相应扩展库!',{time:1800});
            },
            success: function (r) {
                layer.msg(r.msg,{time:1800});
            },
            complete: function () {
            }
        });
    }


</script>

</body>
</html>