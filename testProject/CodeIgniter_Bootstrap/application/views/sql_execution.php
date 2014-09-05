<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>SQL実行画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
</head>  
<body>  
<div class="container">
        <fieldset>  
            <legend>SQL実行画面</legend>  
            <table class="table table-bordered table-striped
             table-hover 
      	     table-bordered
      	     table-condensed"
             style='width:830px;' >
                <tr>
                    <td width=100;><div align=center>SQL名</div></td> 
                 <td><?php echo $sql_info['display_name'];?></td>
                </tr>
                <tr>
                    <td><div align=center>説明</div></td> 
                    <td><?php echo $sql_info['description'];?></td>
                </tr>
                <tr>
                    <td><div align=center>SQL</div></td> 
                    <td><?php echo $sql_info['sql_text'];?></td>
                </tr>
            </table>
            <form class="well form-horizontal" style='width:800px;' action="<?php echo base_url('index.php/sql_execution/execute')?>" method="post"> 
                <input type="hidden" name='sql_id' value='<?php echo $sql_info['sql_id'] ?>'>
                <div class="control-group">  
                    <label class="control-label" for="input01">実行DB</label>  
                    <div class="controls">  
                        <select id="select01" name="db_id">  
                            <?php foreach($db_info_list as $db_info):?>
                               <option value="<?php echo $db_info->db_id;?>"><?php echo $db_info->display_name;?></option>  
                            <?php endforeach;?>
                        </select>  
                    </div>  
                </div>  
                <?php 
                    if($conditions=json_decode($sql_info['conditions'])):
                    foreach($conditions as $condition):
                ?>
                <div class="control-group">  
                    <label class="control-label" for="condition"><?php echo $condition; ?></label>  
                    <div class="controls">  
                    <input type="text" class="input-xlarge" id="condition" name="condition[]"> 
                    </div>  
                </div>  
                <?php
                    endforeach;
                    endif;
                ?>
                <div class="form-actions">  
                <button type="submit" class="btn btn-primary" >実行!</button>  
                <button formaction="<?php echo base_url('index.php')?>" class="btn">Cancel</button>  
                </div>  
            </form>  
        </fieldset>  
</div>
</body>  
</html>  

