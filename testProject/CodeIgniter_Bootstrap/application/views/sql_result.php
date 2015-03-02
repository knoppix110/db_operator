<script type="text/javascript">
</script>
<div style="margin-left:30px">
<div class="alert alert-success">TargetDB  :  
<b><?php echo $target_db; ?></b>
</div>
<b>入力</b>
<table class="table table-bordered" style="width:400px">
<tr>
    <th>条件名</th>
    <th>入力値</th>
</tr>
<?php 
    if(count($your_inputs)>0):
    foreach($your_inputs as $name=>$value): 
?>

<tr>
    <td><?php print($name);?></td>
    <td><?php print($value);?></td>
</tr>
<?php 
    endforeach; 
    endif;
?>
</table>

<b>結果</b>
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php if($result): ?>
    <?php foreach($fields as $field): ?>
        <th><?php echo $field; ?></th>
    <?php endforeach; ?>
    <?php foreach($records as $record): ?>
        <tr>
        <?php foreach($fields as $field): ?>
            <td><?php echo $record[$field] ?></td>
        <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <div class="alert alert-danger">Error  :  
        <b><?php echo $records; ?></b>
    </div>
<?php endif; ?>
</table>


</div>
