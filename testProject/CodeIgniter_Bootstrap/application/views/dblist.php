<br><br>
<script type="text/javascript">
</script>
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php var_dump($db_list); ?>
<th>カテゴリ</th>
<th>DB_Name</th>
<th></th>
<th></th>
<?php foreach($db_list as $db_info): ?>
    <tr>
    <td><?php echo $db_info['category_name'] ?></td>
    <td><?php echo $db_info['db_display_name'] ?></td>
    <td>
    <a  class='btn  btn-success  btn-small'  href='<?php echo base_url('index.php')."/db_registration/show_edit?db_id=".$db_info['db_id'] ?>'>編集画面へ</a>
    </td>
    <td>
    <a  class='btn  btn-danger  btn-small'  href='javascript:void(0)' 
        onclick='var ok=confirm("本当に削除しますか？"); 
        if(ok){location.href="<?php echo base_url('index.php')."/db_registration/delete?db_id=".$db_info['db_id']?>";} return false';>削除</a>
    </td>
    </tr>
<?php endforeach; ?>
</table>


