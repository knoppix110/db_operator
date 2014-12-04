<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>DB登録画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
</head>  
<body>  
<div class="container">
<form class="thumbnail form-horizontal" style='width:800px;' action="<?php echo base_url($action)?>" method="post">  
        <input type="hidden" name="db_id" value="<?php echo $db_info['db_id']; ?>">
        <fieldset>  
          <legend>DB登録画面</legend>  
           <div class="control-group">  
            <label class="control-label" for="input00">カテゴリ</label>  
            <div class="controls">  
	          <select id="select_category" name="category_id">
	          	<?php foreach($category_list as $category):?>
	              <option value="<?php echo $category['category_id'];?>" <?php if($db_info['category_id']==$category['category_id'])echo 'selected';?> ><?php echo $category['category_name'];?></option>
	            <?php endforeach;?>
	          </select>
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input01">表示名（任意）</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01" name="display_name" value="<?php echo $db_info['display_name'];?>">  
              <p class="help-block">※このツール内でDBをユニーク識別する為の名称です</br>&nbsp&nbsp他のDB Nameと重複しなければ、DB Nameと同一名で構いません。</p>  
              </br>
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input02">接続先のホスト名（IP）</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input02" name="host_name" value="<?php echo $db_info['db_host'];?>">  
            </div>  
          </div>  

          <div class="control-group">  
            <label class="control-label" for="input03">接続先Port</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input03" name="port" value="<?php echo $db_info['db_port'];?>">  
            </div>  
          </div>  

          <div class="control-group">  
            <label class="control-label" for="input04">DB接続ユーザー名</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input04" name="user_name" value="<?php echo $db_info['db_user'];?>">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input05">DB接続パスワード</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input05" name="password" value="<?php echo $db_info['db_passwd'];?>">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input06">DB Name</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input06" name="db_name" value="<?php echo $db_info['db_name'];?>">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="select01">DBMS</label>  
            <div class="controls">  
              <select id="select01" name="dbms">  
                <option value="mysql" <?php if($db_info['dbms']=='mysql')echo 'selected';?> >mysql</option>  
                <option value="mssql" <?php if($db_info['dbms']=='mssql')echo 'selected';?>>mssql</option>  
              </select>  
            </div>  
          </div>  
          <div class="form-actions">  
            <button type="submit" class="btn btn-primary" >Save</button>  
            <button formaction="<?php echo base_url('index.php')?>" class="btn">Cancel</button>  
          </div>  
        </fieldset>  
</form>  
</div>
</body>  
</html>  
              
