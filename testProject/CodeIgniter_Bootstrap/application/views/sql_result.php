<br><br>
<script type="text/javascript">
</script>
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php foreach($fields as $field): ?>
    <th><?php echo $field; ?></th>
<?php endforeach; ?>

<?php foreach($result as $record): ?>
    <tr>
    <?php foreach($fields as $field): ?>
        <td><?php echo $record[$field] ?></td>
    <?php endforeach; ?>
    </tr>
<?php endforeach; ?>
</table>


