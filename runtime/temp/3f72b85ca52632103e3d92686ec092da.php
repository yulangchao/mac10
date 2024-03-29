<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:89:"C:\workplace\Document\Richard\template\temp8/application/admin\view\system\configpay.html";i:1528719656;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\head.html";i:1522563358;s:84:"C:\workplace\Document\Richard\template\temp8\application\admin\view\public\foot.html";i:1526046066;}*/ ?>
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
                <li class="layui-this">在线支付设置</li>
                <li class="">卡密</li>
                <li class="">支付宝</li>
                <li class="">微信</li>
                <li class="">码支付</li>
                <li class="">幻兮支付</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>支付设置</legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">回调通知地址：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" readonly="readonly" value="http://<?php echo $config['site']['site_url']; ?>/index.php/payment/notify.html" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">支付接口通知回调地址</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">最小充值金额：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[min]" placeholder="单位RMB元，最低1元" value="<?php echo $config['pay']['min']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">最小充值金额</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">兑换比例：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[scale]" placeholder="1元RMB兑换多少个积分" value="<?php echo $config['pay']['scale']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">1元人民币等于多少积分</div>
                    </div>
                </div>

                <div class="layui-tab-item ">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>卡密设置</legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">销售网址：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[card][url]" placeholder="" value="<?php echo $config['pay']['card']['url']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">第三方卡密平台</div>
                    </div>
                </div>

                <div class="layui-tab-item ">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>支付宝设置 <a target="_blank" href="https://open.alipay.com/?maccms" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">收款账号：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[alipay][account]" placeholder="" value="<?php echo $config['pay']['alipay']['account']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">合作者身份：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[alipay][appid]" placeholder="" value="<?php echo $config['pay']['alipay']['appid']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">appid</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">安全校验码：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[alipay][appkey]" placeholder="" value="<?php echo $config['pay']['alipay']['appkey']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">appkey</div>
                    </div>
                </div>

                <div class="layui-tab-item">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>微信设置 <a target="_blank" href="https://pay.weixin.qq.com/?maccms" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">APPID：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[weixin][appid]" placeholder="" value="<?php echo $config['pay']['weixin']['appid']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">商户号：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[weixin][mchid]" placeholder="" value="<?php echo $config['pay']['weixin']['mchid']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">商户密钥：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[weixin][appkey]" placeholder="" value="<?php echo $config['pay']['weixin']['appkey']; ?>" class="layui-input">
                        </div>
                    </div>

                </div>

                <div class="layui-tab-item">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>码支付设置 <a target="_blank" href="https://codepay.fateqq.com/i/40625" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">支付商家编号：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[codepay][appid]" placeholder="" value="<?php echo $config['pay']['codepay']['appid']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">支付商家密钥：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[codepay][appkey]" placeholder="" value="<?php echo $config['pay']['codepay']['appkey']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">商家收款平台：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[codepay][type]" placeholder="" value="<?php echo $config['pay']['codepay']['type']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">1：支付宝；2：QQ钱包；3：微信（多个用逗号分隔）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">收款通知类型：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[codepay][act]" placeholder="" value="<?php echo $config['pay']['codepay']['act']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">0表示及时到账 1则为商家代收款</div>
                    </div>
                </div>

                <div class="layui-tab-item">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>幻兮支付设置 <a target="_blank" href="https://www.zhapay.com/ad_8rRGj4nN.html" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">支付商家编号：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[zhapay][appid]" placeholder="" value="<?php echo $config['pay']['zhapay']['appid']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">支付商家密钥：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[zhapay][appkey]" placeholder="" value="<?php echo $config['pay']['zhapay']['appkey']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">商家收款平台：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[zhapay][type]" placeholder="" value="<?php echo $config['pay']['zhapay']['type']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">1：微信；2：支付宝；（多个用逗号分隔）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">收款通知类型：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[zhapay][act]" placeholder="" value="<?php echo $config['pay']['zhapay']['act']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">2表示及时到账 1则为商家代收款</div>
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
    $(function(){

    });
</script>

</body>
</html>