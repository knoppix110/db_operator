<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>カテゴリ登録画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
</head>  
<body>  
<div class="container">
<form class="thumbnail form-horizontal" style='width:800px;' action="<?php echo base_url('index.php/category_registration/register')?>" method="post">  
        <fieldset>  
          <legend>カテゴリ登録画面</legend>  
          <div class="control-group">  
            <label class="control-label" for="input01">カテゴリ名（タイトル名の略称）</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01" name="category_name" >  
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

