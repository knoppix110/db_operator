<br><br>
<script type="text/javascript">
</script>
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php var_dump($auth_list); ?>
<th>User</th>
<th>カテゴリ</th>
<th>認証レベル</th>
<?php foreach($auth_list as $auth_info): ?>
    <tr>
    <td><?php echo $auth_info['username'] ?></td>
    <td><?php echo $auth_info['category_name'] ?></td>
    <td><?php echo $auth_info['auth_level'] ?></td>
    <td>
    </td>
    <td>
    <a class='btn  btn-danger  btn-small'  href='javascript:void(0)' 
        onclick='var ok=confirm("本当に削除しますか？"); 
        if(ok){location.href="<?php echo base_url('index.php')."/auth_registration/delete?user_id=".$auth_info['user_id']."&category_id=".$auth_info['category_id']?>";} return false';>削除</a>
    </td>
    </tr>
<?php endforeach; ?>
</table>


