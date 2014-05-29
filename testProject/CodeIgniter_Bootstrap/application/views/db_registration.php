<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>DB登録画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
<link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
</head>  
<body>  
<form class="well form-horizontal" style='width:800px;' action="db_registration/register" method="post">  
        <fieldset>  
          <legend>DB登録画面</legend>  
           <div class="control-group">  
            <label class="control-label" for="input00">カテゴリ</label>  
            <div class="controls">  
	          <select id="select_category" name="category_name">
	          	<?php foreach($category_list as $category):?>
	              <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name;?></option>
	            <?php endforeach;?>
	          </select>
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input01">表示名（任意）</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01" name="display_name" >  
              <p class="help-block">※DB一覧で表示される名称です</p>  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input02">接続先のホスト名（IP）</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input02" name="host_name">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input03">DB接続ユーザー名</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input03" name="user_name">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input04">DB接続パスワード</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input04" name="password">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input05">DB Name</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input05" name="db_name">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="select01">DBMS</label>  
            <div class="controls">  
              <select id="select01" name="dbms">  
                <option>mysql</option>  
                <option>mssql</option>  
              </select>  
            </div>  
          </div>  
          <div class="form-actions">  
            <button type="submit" class="btn btn-primary" >Save</button>  
            <button formaction="./" class="btn">Cancel</button>  
          </div>  
        </fieldset>  
</form>  
</body>  
</html>  
              