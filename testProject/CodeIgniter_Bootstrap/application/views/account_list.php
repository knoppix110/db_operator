<br><br>
<script type="text/javascript">
</script>
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php //var_dump($account_list); ?>
<th>ID</th>
<th>UserName</th>
<th>Email</th>
<th>LastLogin</th>
<th>Created</th>
<th>Role</th>
<?php foreach($account_list as $account_info): ?>
    <tr>
    <td><?php echo $account_info['id'] ?></td>
    <td><?php echo $account_info['username'] ?></td>
    <td><?php echo $account_info['email'] ?></td>
    <td><?php echo $account_info['last_login'] ?></td>
    <td><?php echo $account_info['created'] ?></td>
    <td><?php echo $account_info['role'] ?></td>
    <td>
    </td>
    <td>
    <a class='btn  btn-danger  btn-small'  href='javascript:void(0)' 
        onclick='var ok=confirm("本当に削除しますか？"); 
        if(ok){location.href="<?php echo base_url('index.php')."/auth/delete?user_id=".$account_info['id']?>";} return false';>削除</a>
    </td>
    </tr>
<?php endforeach; ?>
</table>


