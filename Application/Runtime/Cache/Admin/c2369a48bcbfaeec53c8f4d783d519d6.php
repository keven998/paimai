<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo C('WEB_SITE_TITLE');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/tablestyle.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/Public/Admin/js/jquery-1.4.2.min.js"></script>
<script language="javascript" src="/Public/Admin/js/js.js"></script>

</head>
<body>
<div class="container">
	<div class="head">
    	<div class="head1"><?php echo C('WEB_SITE_TITLE');?></div>
        <div class="head2">
			<a href="<?php echo (WEB_URL); ?>" target="_blank"><img src="/Public/Admin/images/ttb1.png" width="24" height="23" />网站首页</a>
        	<a href="<?php echo U('Index/deleteCache');?>" ><img src="/Public/Admin/images/ttb2.png" width="24" height="23" />更新缓存</a>
            <a href="<?php echo U('Config/index');?>"><img src="/Public/Admin/images/ttb2.png" width="24" height="23" />系统管理</a>
            <a href="<?php echo U('Index/help');?>"><img src="/Public/Admin/images/ttb3.png" width="24" height="23" />帮助中心</a>
            <a href="<?php echo U('Public/logout');?>"><img src="/Public/Admin/images/ttb4.png" width="24" height="23" />安全退出</a>
        </div>
    </div>
    <div class="main">
    	<div class="mleft">
        	<ul class="ul">
			<?php if(is_array($__MENU__)): $i = 0; $__LIST__ = $__MENU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($val['name']);?>"><?php echo ($val['title']); ?></a>
				<?php if(!empty($val['child'])): ?><ul class="ul1">
						<?php if(is_array($val['child'])): $i = 0; $__LIST__ = $val['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($__ACT__ == strtolower($v['name'])){echo 'class="xz"';}?>><a href="<?php echo U($v['name']);?>"><?php echo ($v['title']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="lt"></div>
                    </ul><?php endif; ?>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="mright">


        	<div class="mrtop">
            	<div class="breadCrumb">
                	您当前的位置： <a href="./admin.php">首页</a> &gt; <?php echo ($meta_head); ?> &gt; <?php echo ($meta_title); ?>
                </div>
                <div class="mrtr">
                	管理员：<?php echo get_username();?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="mrbot">
            	<div class="mrbot1">
                	<div class="mrbt1"><?php echo ($meta_title); ?></div>
                    <div class="mrnr1">
                    	<style media="screen">
    .ms select {
        padding:0px 10px;height:24px;border:solid 1px #d2d2d2;margin-right:10px; background:#fafafa
    }
    .select {width:400px;}
    .text1{height:100px;}
</style>

<form action="" method="post">
<table width="900" border="0" cellspacing="0" cellpadding="0" class="table">
    <tr>
        <td class="td1" align="right">用户名：</td>
        <td class="ms">
            <input type="text" name="user_name" value="<?php echo ((isset($info['user_name']) && ($info['user_name'] !== ""))?($info['user_name']):''); ?>" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td align="right">头像：</td>
        <td class="upload-row">
            <img src="<?php echo ($info['user_avatar']); ?>" width="100" height="100" alt="" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">等级：</td>
        <td class="ms">
            <select class="select" name="fx_group">
                <?php $_result=get_fx_group();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if(($key) == $info['fx_group']): ?>selected="selected"<?php endif; ?>><?php echo ($val['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">手机号：</td>
        <td class="ms">
            <input type="text" name="mobile" value="<?php echo ((isset($info['mobile']) && ($info['mobile'] !== ""))?($info['mobile']):''); ?>" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">微信号：</td>
        <td class="ms">
            <input type="text" name="wechat_number" value="<?php echo ((isset($info['wechat_number']) && ($info['wechat_number'] !== ""))?($info['wechat_number']):''); ?>" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">上级UID：</td>
        <td class="ms">
            <input type="text" name="fx_sup" value="<?php echo ((isset($info['fx_sup']) && ($info['fx_sup'] !== ""))?($info['fx_sup']):0.00); ?>" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td colspan="2"><hr></td>
    </tr>
    <tr>
        <td class="td1" align="right">分销资金：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_money']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">分销总累计：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_count']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">分销总累计：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_count']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">累计已领红包数：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_hb_lj']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">可领领红包数：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_hb']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">总消费累计：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_hb_zxf_lj']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">已领取红包消费累计：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_hb_ylqxf_lj']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">未领取红包消费累计：</td>
        <td class="ms">
            <input type="text" value="<?php echo ($info['fx_hb_wlqxf_lj']); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>

    <tr>
        <td class="td1" align="right">积分：</td>
        <td class="ms">
            <input type="text" value="<?php echo ((isset($info['fx_inter']) && ($info['fx_inter'] !== ""))?($info['fx_inter']):0.00); ?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td class="td1" align="right">更新时间：</td>
        <td class="ms">
            <input type="text" value="<?php echo date('Y-m-d H:i:s', $info['update_time']);?>" readonly="readonly" class="inputt input" />
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
             <input type="hidden" name="user_id" value="<?php echo ((isset($info["user_id"]) && ($info["user_id"] !== ""))?($info["user_id"]):''); ?>">
             <input type="submit" class="tjanniu cr" value="提 交" /><input type="reset" class="czanniu cr" value="重 置" />
        </td>
    </tr>
</table>
</form>

                    </div>
                </div>
            </div>



            <div class="copyRight">北京金方时代科技有限公司&nbsp;&nbsp;&nbsp;版权所有 Inc All Rights Reserved&nbsp;&nbsp;&nbsp;联系电话：朝阳运营中心：010-51654311&nbsp;&nbsp;&nbsp;丰台运营中心：010-51654321&nbsp;&nbsp;&nbsp;海淀运营中心：010-51654300
			</div>
        </div>

        <div class="clear"></div>
    </div>
</div>
</body>
</html>