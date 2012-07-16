<div id="wrapper">
<div style="margin-left:30px;margin-top:8px;">Welcome!&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/admin/logout">登出</a>
</div>

<div id="content">
  <h1>替换Works图片后台</h1>
  <p>选择类别，图片编号后上传图片</p>
<form name="form" action="/admin/index" method="POST" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" class="tableForm">
<thead>
</thead>
<tbody>	
<tr>
<td><select name="category" style="width: 125px;margin-bottom:5px;" id="category" >
<option value=1>布上水墨</option>
<option value=2>纸上水墨</option>
<option value=3>荷花</option>
<option value=4>瓶花</option>
<option value=5>书法</option>
</select></td>
</tr>
<tr>
<td><select name="item" style="width: 125px;margin-bottom:5px;" id="item" >
</select></td>
</tr>
<tr>
	<th>选择图片后点击上传按钮</th>
</tr>
<tr>
  <td><input id="fileToUpload" type="file" size="45" name="fileToUpload" class="input"></td>		
</tr>
</tbody>
<tfoot>
<tr>
	<td><button class="button" id="buttonUpload" onclick="return ajaxFileUpload();">Upload</button></td>
</tr>
</tfoot>	
</table>
</form>  
<p><?php echo $msg ?></p>
<p><?php echo $error ?></p>
  	
</div>
</div>