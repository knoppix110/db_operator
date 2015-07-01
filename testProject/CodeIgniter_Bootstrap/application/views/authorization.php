<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>権限付与画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
</head>  
<body>  
<div class="container">
<form class="ghumbnail form-horizontal" style='width:800px;' action="<?php echo base_url('index.php/authorization/register')?>" method="post">  
        <fieldset>  
          <legend>権限付与画面</legend>  
          カテゴリ単位で他ユーザに権限付与する事が出来ます。</br>
          権限付与する為には、そのカテゴリへの管理者権限を持っている事が条件です。</br></br>
          <legend></legend>  
          <div class="control-group">
              <label class="control-label" for="listbox01">対象ユーザー</label>
              <br>
              <div class="controls" style='width:400px;'>
                  <select multiple="multiple" size="10" name="user_list[]" >
                  <?php foreach($users as $user):?>
                    <option value="<?php echo $user['id'];?>"><?php echo $user['username'];?></option>
                  <?php endforeach;?>
                  </select>
                  <br>
                  <script>
                      var duallistbox1 = $('[name="user_list[]"]').bootstrapDualListbox({
                          bootstrap2compatible: true,
                          nonselectedlistlabel: '選択可能ユーザー',
                          selectedlistlabel: '対象ユーザー',
                      });
                  </script>
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="listbox01">対象カテゴリ</label>
              <br>
              <div class="controls" style='width:400px;'>
                  <select multiple="multiple" size="10" name="category_list[]" >
                  <?php foreach($categories as $category):?>
                    <option value="<?php echo $category['category_id'];?>"><?php echo $category['category_name'];?></option>
                  <?php endforeach;?>
                  </select>
                  <br>
                  <script>
                      var duallistbox1 = $('[name="category_list[]"]').bootstrapDualListbox({
                          bootstrap2compatible: true,
                          nonselectedlistlabel: '選択可能カテゴリ',
                          selectedlistlabel: '対象カテゴリ',
                      });
                  </script>
              </div>
          </div>

          <div class="control-group">  
            <label class="control-label" for="input00">付与権限</label>  
            <div class="controls">  
	          <select id="input00" name="auth_level">
	              <option value="1" selected>SQL実行権限</option>
	              <option value="2">管理者権限</option>
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

