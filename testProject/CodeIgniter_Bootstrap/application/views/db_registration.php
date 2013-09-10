<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>DB登録画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
<link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
</head>  
<body>  
<form class="form-horizontal" action="./db_registration/register" method="post">  
        <fieldset>  
          <legend>DB登録画面</legend>  
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
              <input type="text" class="input-xlarge" id="input03">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input04">DB接続パスワード</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input04">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input05">DB Name</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input05">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="select01">DBMS</label>  
            <div class="controls">  
              <select id="select01">  
                <option>MySQL</option>  
                <option>MSSQL</option>  
              </select>  
            </div>  
          </div>  
          <div class="form-actions">  
            <button type="submit" class="btn btn-primary" >Save changes</button>  
            <button class="btn">Cancel</button>  
          </div>  
        </fieldset>  
</form>  
</body>  
</html>  
              