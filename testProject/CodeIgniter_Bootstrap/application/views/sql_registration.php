<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>DB登録画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
</head>  
<body>  
<form class="well form-horizontal" style='width:800px;' action="sql_registration/register" method="post">  
        <fieldset>  
          <legend>SQL</legend>  
          <div class="control-group">  
            <label class="control-label" for="input01">表示名（任意）(#1)</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01" name="display_name" >  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input02">SQLの説明</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input02" name="description">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input03">SQL</label>  
            <div class="controls">  
              <textarea class="input-xlarge" rows="4" id="input03" name="sql_text"></textarea>
            </div>  
          </div>  
          <div class="control-group">
         	 <label class="control-label" for="listbox01">SQL実行先DB (#2)</label>
             <br>
         	 <div class="controls" style='width:400px;'>
                <select multiple="multiple" size="6" name="db_list[]" >
                <?php foreach($dblist as $row): ?>
                    <option value="<?php echo $row['db_name'];?>" <?php echo  $row['selected'];?>><?php echo $row['db_name'];?></option>
                <?php endforeach; ?>
                </select>
                <br>
                <script>
                     var duallistbox1 = $('[name="db_list[]"]').bootstrapDualListbox({
                    	    bootstrap2compatible: true,
                    	    nonselectedlistlabel: '選択可能DBリスト',
                    	    selectedlistlabel: 'SQL実行先DBリスト',
                     });
                </script>
			 </div>
          </div>
          <div class="controls" style="line-height:200%;">#1 ... SQL一覧で表示される名称です</div>  
          <div class="controls" style="line-height:200%;">#2 ... [SQL]と[DB]の紐付けを行います</div>  
          <div class="form-actions">  
          <button type="submit" class="btn btn-primary" >Submit data</button>  
          <button class="btn">Cancel</button>  
          </div>  
      </fieldset>  
</form>  
</body>  
</html>  
              