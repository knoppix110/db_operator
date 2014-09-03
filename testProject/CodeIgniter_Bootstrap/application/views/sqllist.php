<br><br>
<script type="text/javascript">
</script>
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php var_dump($sql_list); ?>
<th>カテゴリ</th>
<th>SQL_Name</th>
<th></th>
<th></th>
<?php foreach($sql_list as $sql_info): ?>
    <tr>
    <td><?php echo $sql_info['category_name'] ?></td>
    <td><?php echo $sql_info['sql_display_name'] ?></td>
    <td>
    <a  class='btn  btn-success  btn-small'  href='<?php echo base_url('index.php')."/sql_registration/show_edit?sql_id=".$sql_info['sql_id'] ?>'>編集画面へ</a>
    </td>
    <td>
    <a  class='btn  btn-danger  btn-small'  href='javascript:void(0)' 
        onclick='var ok=confirm("本当に削除しますか？"); 
        if(ok){location.href="<?php echo base_url('index.php')."/sql_registration/delete?sql_id=".$sql_info['sql_id']?>";} return false';>削除</a>
    </td>
    </tr>
<?php endforeach; ?>
</table>


