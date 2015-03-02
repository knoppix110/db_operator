<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>SQL登録画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
<script type="text/javascript">

function add_cond_record(row){

    var is_selected = function(name,value){
        if(row[name] === value){
            return 'selected'; 
        }else{
            return '';
        }
    }

    if( row == null ){
        row={"location_no":"","condition_name":"","column_name":"","type":"","removable":"","connector":""};
    }

    $("#condition:last").append('    <tr style="width:400px">');
    $("#condition tr:last").append('      <td><input type="text" class="input-medium" id="input_cond" name="location_no[]" value="'+row['location_no']+'" style="width:40px;height:20px"></td>');
    $("#condition tr:last").append('      <td><input type="text" class="input-medium" id="input_cond" name="condition_name[]" value="'+row['condition_name']+'" style="width:130px;height:20px">');
    $("#condition tr:last").append('      <td><input type="text" class="input-medium" id="column" name="column_name[]" value="'+row['column_name']+'" style="width:130px;height:20px">');

    $("#condition tr:last").append('      <td><select name="rel_operator[]" style="width:80px;">');
    $("#condition select:last").append('      <option value="eq" '+is_selected('rel_operator','eq')+'>=</option>');
    $("#condition select:last").append('      <option value="le" '+is_selected('rel_operator','le')+'>\<=</option>');
    $("#condition select:last").append('      <option value="ge" '+is_selected('rel_operator','ge')+'>\>=</option>');
    $("#condition tr:last").append('      <td><select name="type[]" style="width:70px;">');
    $("#condition select:last").append('      <option value="text" '+is_selected('type','text')+'>text</option>');
    $("#condition select:last").append('      <option value="num" '+is_selected('type','num')+'>numeric</option>');
    $("#condition tr:last").append('      <td align=center><select name="removable[]" style="width:70px;">');
    $("#condition select:last").append('      <option value="true" '+is_selected('removable','true')+'>true</option>');
    $("#condition select:last").append('      <option value="false" '+is_selected('removable','false')+'>false</option>');
    $("#condition tr:last").append('      <td align=center><select name="connector[]" style="width:70px;">');
    $("#condition select:last").append('      <option value="and" '+is_selected('connector','and')+'>and</option>');
    $("#condition select:last").append('      <option value="or" '+is_selected('connector','or')+'>or</option>');
    $("#condition select:last").append('      <option value="nothing" '+is_selected('connector','nothing')+'>なし</option>');
}

$(function(){
       
        var conditions=<?php echo (isset($conditions))?json_encode($conditions):0;?>;
        for(var i=0;i<conditions.length;i++){
            add_cond_record(conditions[i]);
        }
        
        $('#add_btn').click( function (){
            add_cond_record();
            i++;
        });

        $('#del_btn').click( function (){
            $("#condition tr:last").remove();
            if(i>1) i--;
        });

})

//var add_input=addInput();
</script>
</head>  
<body>  
<div class="container"> 
<form id="form1" class="thumbnail form-horizontal" style='width:800px;' action="<?php echo base_url($action)?>" method="post">  
        <input type="hidden" name="sql_id" value="<?php echo $sql_info['sql_id']; ?>">
        <fieldset>  
          <legend>SQL登録</legend>  
          <div class="control-group">  
            <label class="control-label" for="input00">カテゴリ</label>  
            <div class="controls">  
	          <select id="select_category" name="category_id">
	          	<?php foreach($category_list as $category):?>
	              <option value="<?php echo $category['category_id'];?>"<?php if($sql_info['category_id']==$category['category_id'])echo 'selected';?>><?php echo $category['category_name'];?></option>
	            <?php endforeach;?>
	          </select>
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input01">表示名（任意）(#1)</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01" name="display_name" style="width:400px;height:20px;" value="<?php echo $sql_info['display_name'];?>">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input02">SQLの説明</label>  
            <div class="controls">  
              <!-- <input type="text" class="input-xlarge" id="input02" name="description" style="width:400px;" value="<?php echo $sql_info['description'];?>"> --> 
              <textarea class="input-xlarge" rows="2" id="input02" name="description" style="width:400px;"><?php echo $sql_info['description'];?></textarea>
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="input03">SQL</label>  
            <div class="controls">  
              <textarea class="input-xlarge" rows="4" id="input03" name="sql_text" style="width:500px;height:150px"><?php echo $sql_info['sql_text'];?></textarea>
            </div>  
          </div>  

          <table id="condition" class="table table-bordered table-condensed" align='center' style="background-color:#eeeeee; border-color:#999;width: 90%;margin-bottom: 20px;empty-cells: show;" >
            <tr><th width="50px">位置No</th><th width="140px">項目名</th><th width="140px">カラム名</th><th width="90px">比較演算子</th><th width="80px">type</th><th>着脱可</th><th>連結</th></tr>
          </table>

          <div class="control-group">  
            <div class="controls">  
          	    <input type="button" id="add_btn" class="btn btn-primary" value="条件項目名追加"></input>
                <input type="button" id="del_btn" class="btn btn-primary" value="条件項目名削除"></input>
            </div>
          </div>
        <div class="control-group">
         	<label class="control-label" for="listbox01">SQL実行先DB (#2)</label>
            <br>
         	<div class="controls" style='width:400px;'>
                <select multiple="multiple" size="10" name="db_list[]" >
                <?php foreach($dblist as $row): ?>
                    <option value="<?php echo $row['db_display_name'];?>" <?php echo  $row['selected'];?>><?php echo $row['db_display_name'];?></option>
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
            <button formaction="<?php echo base_url('index.php')?>" class="btn">Cancel</button>  
        </div>  
      </fieldset>  
</form>  
</div>
</body>  
</html>  
              
