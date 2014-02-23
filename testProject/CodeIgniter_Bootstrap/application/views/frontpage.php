
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <ul class="nav">
	  <li class="active"> <a href="./frontpage">Home</a></li>
	  <li><a href="./db_registration">DB登録</a></li>
	  <li><a href="./sql_registration">SQL登録</a></li>
	  <li><a href="./auth_edit">権限編集</a></li>
	  <li><a href="./auth_registration">権限登録</a></li>
    </ul>
  </div>
</div>

<div class="btn-group">
  <button class="btn">Action</button>
  <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <!-- dropdown menu links -->
  </ul>
</div>
<table class="table table-bordered table-striped
table-hover 
table-bordered
table-condensed">
<?php 
$cnt=1;
foreach($sql_list as $sql_info){
	echo "<tr>";
	if($cnt==1){
		foreach($sql_info as $key => $value){
			echo "<th>$key</th>";
		}
		echo "<th></th>";
		echo "<th></th>";
	}else{
		foreach($sql_info as $key => $value){
			echo "<td>$value </td>";
		}
		echo "<td>";
       	echo "<a class='btn btn-primary btn-small' href='./execution'>実行画面へ</a>";
		echo "</td>";
		echo "<td>";
       	echo "<a class='btn btn-secondary btn-small' href='https://github.com/sjlu/CodeIgniter-Bootstrap'>編集</a>";
		echo "</td>";
	}
	echo "</tr>";
    $cnt++;
}
?>
</table>