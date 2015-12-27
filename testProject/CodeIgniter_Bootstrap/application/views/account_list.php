<br><br>
<script type="text/javascript">
$(function(){
    $('#submit').click(function() {
        $(this).parents('form').attr('action', $(this).data('action'));
        $(this).parents('form').submit();
    });
});
</script>
<form method="post">  
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
    <th></th>
    <?php foreach($account_list as $account_info): ?>
    <tr>
        <td> <input type="text" class="input-small" name="id" value="<?php echo $account_info['id'];?>">  </td>
        <td> <input type="text" class="input-large" name="username" value="<?php echo $account_info['username'];?>">  </td>
        <td> <input type="text" class="input-large" name="email" value="<?php echo $account_info['email'];?>">  </td>
        <td> <?php echo $account_info['last_login'];?></td>
        <td> <?php echo $account_info['created'];?></td>
        <td> <input type="text" class="input-small" name="role" value="<?php echo $account_info['role'];?>">  </td>
        <td>
        <a class='btn  btn-danger  btn-small'  href='javascript:void(0)' 
            onclick='var ok=confirm("本当に削除しますか？"); 
            if(ok){location.href="<?php echo base_url('index.php')."/auth/delete?user_id=".$account_info['id']?>";} return false';>削除</a>
        </td>
        <td>
        <a id='submit' class='btn  btn-success  btn-small'  href='javascript:void(0)' data-action="/auth/modify.php"
            onclick='var ok=confirm("本当に変更しますか？"); if(!ok){return false;}';>編集</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</form>


