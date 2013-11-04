<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>DB登録画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
<link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
</head>  
<script type="text/javascript">  
window.onload = function() {  
  document.getElementById("btnMoveRight").onclick = moveItems;  
  document.getElementById("btnMoveLeft").onclick = moveItems;  
}  
function moveItems() {  
  var leftBox = document.getElementById("ListBox1");  
  var rightBox = document.getElementById("ListBox2");   
  var fromBox, toBox;  
    
  if (this.value == "→") {  
    fromBox = leftBox; toBox = rightBox;  
  }   
  else if (this.value == "←") {  
    fromBox = rightBox; toBox = leftBox;  
  }  
    
  if ((fromBox != null) && (toBox != null)) {   
    if(fromBox.length < 1) {  
      alert("リストボックスにアイテムがありません!");  
      return false;  
    }  
    if(fromBox.selectedIndex == -1) {  
      alert("移動するアイテムを選択してください!");  
      return false;  
    }  
    while ( fromBox.selectedIndex >= 0 ) {   
      var newOption = new Option();   
      newOption.text = fromBox.options[fromBox.selectedIndex].text;   
      newOption.value = fromBox.options[fromBox.selectedIndex].value;   
      toBox.options[toBox.length] = newOption;  
      fromBox.remove(fromBox.selectedIndex);   
    }   
  }  
  return false;   
}  
</script>  
<body>  
<form class="form-horizontal" action="db_registration/register" method="post">  
        <fieldset>  
          <legend>SQL登録画面</legend>  
          <div class="control-group">  
            <label class="control-label" for="input01">表示名（任意）</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01" name="display_name" >  
              <p class="help-block">※SQL一覧で表示される名称です</p>  
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
              <input type="text" class="input-xlarge" id="input03" name="sql_text">  
            </div>  
          </div>  
          <div class="control-group">
         	 <label class="control-label" for="listbox01">実行可能DB</label>
         	 <div class="controls">
         		<select id="listbox01" name="executable_db">
         			<option>ここは自動表示</option>	
         		</select> 
         		<select id="listbox02" name="executable_db">
         			<option>ここは自動表示</option>	
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
              