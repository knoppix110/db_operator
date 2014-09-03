<br><br>
<script type="text/javascript">
</script>
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php var_dump($category_list); ?>
<th>カテゴリ</th>
<?php foreach($category_list as $category_info): ?>
    <tr>
    <td><?php echo $category_info['category_name'] ?></td>
    <td>
    </td>
    <td>
    <a class='btn  btn-danger  btn-small'  href='javascript:void(0)' 
        onclick='var ok=confirm("本当に削除しますか？"); 
        if(ok){location.href="<?php echo base_url('index.php')."/category_registration/delete?category_id=".$category_info['category_id']?>";} return false';>削除</a>
    </td>
    </tr>
<?php endforeach; ?>
</table>


