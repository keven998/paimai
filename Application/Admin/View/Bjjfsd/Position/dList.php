	<div class="hdtop">
    	<a href="{:U('index')}" class="tja">返回列表</a>
        <div class="clear"></div>
    </div>
    <div class="hdbot">
    <style media="screen">
        .head910 td {
            background-color:#08a3bb;
            line-height: 33px;
            color: #fff;
            font-size: 14px;
        }
    </style>
    <table width="910" border="0" cellspacing="1" cellpadding="0" class="table1 tab">
        <tr class="head910">
            <td align="center">ID</td>
            <td align="center">名称</td>
            <td align="center">操作</td>
        </tr>
        <volist name="list" id="v">
            <tr>
                <td align="center">{$v['id']}</td>
                <td align="center">{$v['title']}</td>
                <td align="center">
                    <a href="javascript:if(confirm('确认要执行该操作吗?')){location.href='{:U('dDel?pid='.$info['id'].'&id='. $v['id'])}'}" class="xga">移除</a>
                </td>
            </tr>
        </volist>
    </table>
	<style media="screen">
		.special {
			margin-top: 12px;
			height: 25px;
			background-color: #FF9A1A;
			border: 1px solid #E5EB1B;
			color: #FFF;
		}
	</style>
    <div class="tableb">
		<div class="tablebnr page">
        	{$_page}
        </div>
    </div>
</div>
<script type="text/javascript">
	var Tool = {};
	$(function(){
		$("#del").click(function(){
			var xx = confirm('是否确认操作！');
			if(xx){
				var ids = [];
				$("[name=id]:checkbox:checked").each(function(){
					ids.push($(this).val());
				});
				if (ids.length == 0) {
					alert('请选择操作对象');
					return false;
				}
				$.ajax({
					url: '{:U('del')}',
					type: 'post',
					data: {id: ids},
					dataType: 'json',
					success: function(data){
						if (data.status) {
							alert(data.info);
							location.reload();
						} else {
							alert(data.info);
						}
					},
					error: function(){
						alert('网络异常...');
					}
				});
			}
		});
	})
</script>
