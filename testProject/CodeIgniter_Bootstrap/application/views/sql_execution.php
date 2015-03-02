<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>SQL実行画面</title>   
<meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
<script type="text/javascript">
$(function() {

    $("#condition :checkbox").click(function() {
        text=$(this).parent().parent().find(":text");
        if( !$(this).prop('checked') ) {
            $(text).attr("disabled",false);
        } else {
            $(text).attr("disabled",true);
        }
    });
});

</script>
</head>  
<body>  
<div class="container">
        <fieldset>  
            <form class="thumbnail form-horizontal" style="padding:30px; width:840px;" action="<?= base_url('index.php/sql_execution/execute')?>" method="post"> 
                <legend>SQL実行画面</legend>  
                <table class="table table-bordered table-striped
                 table-hover 
                 table-bordered
                 table-condensed"
                 style='width:830px;' >
                    <tr>
                        <td width=100;><div align=center>SQL名</div></td> 
                     <td><?= $sql_info['display_name'];?></td>
                    </tr>
                    <tr>
                        <td><div align=center>説明</div></td> 
                        <td><?= $sql_info['description'];?></td>
                    </tr>
                    <tr>
                        <td><div align=center>SQL</div></td> 
                        <td><?= $sql_info['sql_text'];?></td>
                    </tr>
                    <tr>
                        <td><div align=center>実行DB</div></td> 
                        <td>
                            <select id="select01" name="db_id">  
                                <?php foreach($db_info_list as $db_info):?>
                                   <option value="<?= $db_info->db_id;?>"><?= $db_info->display_name;?></option>  
                                <?php endforeach;?>
                            </select>  
                        </td>
                    </tr>
                </table>
                <input type="hidden" name='sql_id' value='<?= $sql_info['sql_id'] ?>'>
                <table id="condition" 
                 class="table table-bordered table-striped
                 table-hover 
                 table-bordered
                 table-condensed"
                 style='width:600px;' >
                <tr>
                    <th width="60px">条件項目</th> 
                    <th width="60px">比較演算子</th> 
                    <th width="30px">条件値</th>
                    <th width="60px">条件追加</th>
                    <th width="60px">検索条件から除外</th>
                </tr>
                <?php 
                    if(count($conditions)>0):
                    foreach($conditions as $condition):
                ?>
                <tr>
                    <td width="60px"><?= $condition['condition_name']; ?></td> 
                    <td width="60px"><?= $condition['rel_operator']; ?></td> 
                    <td width="60px"><input type="text" class="input-medium" name="conditions[<?=$condition['condition_id']?>][value]"></td>
                    <td width="60px">
                        <select name="conditions[<?=$condition['condition_id']?>][connector]" style="width:60px">  
                            <?php 
                                if($condition['connector']!='nothing'){
                                    echo sprintf('<option value="%s">%s</option>',$condition['connector'],$condition['connector']);
                                }
                                echo sprintf('<option value="%s">%s</option>','nothing','なし');
                            ?>
                        </select>  
                    </td>
                    <td width="60px">
                    <?php 
                        $name="conditions[".$condition['condition_id']."][disable]";
                        if($condition['removable']=='true'){ 
                            print '<input type="checkbox" name="'.$name.'" value="true">';
                        }else{ 
                            print '';
                        }
                    ?>
                    </td>
                </tr>
                <?php
                    endforeach;
                    endif;
                ?>
                </table>
                <div class="form-actions">  
                <button type="submit" class="btn btn-primary" >実行!</button>  
                <button formaction="<?= base_url('index.php')?>" class="btn">Cancel</button>  
                </div>  
            </form>  
        </fieldset>  
</div>
</body>  
</html>  

