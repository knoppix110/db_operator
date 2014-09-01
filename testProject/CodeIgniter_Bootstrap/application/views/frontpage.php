<br><br>
<script type="text/javascript">
<!--
$(document).ready(function(){
	$("#pulldown").change( function(){
	    $('table#list thead td').remove();
	});
});
//-->
</script>
<div class="controls">  
  <select id="pulldown" name="dbms">  
    <option>mysql</option>  
    <option>mssql</option>  
  </select>  
</div>  
<table id="list" class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php 
//var_dump($sql_list);
echo "<th>カテゴリ</th>";
echo "<th>SQL_Name</th>";
echo "<th></th>";
foreach($sql_list as $sql_info){
	echo "<tr>";
	echo "<td>" .$sql_info['category_name'] ."</td>";
	echo "<td>" .$sql_info['sql_display_name'] ."</td>";
	echo "<td>";
    echo "<a class='btn btn-primary btn-small' href='".base_url('index.php')."/sql_execution?sql_id=".$sql_info['sql_id']."'>実行画面へ</a>";
	echo "</td>";
	echo "</tr>";
}
?>
</table>
