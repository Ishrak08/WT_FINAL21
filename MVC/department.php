<?php include 'main_header.php';
include 'controllers/dept_controller.php';
	$departments= getAllDepartment();
	$i=1;
	$foreach ($departments as $d)
	{
		echo "<tr>";
		echo "<td> $i </td>";
		echo "<td>. $c["std name"] </td>";
		echo '<td> <a href="edit_dept.php> edit </a> </td>">';
		echo '<td> <a> delete </a> </td>';
		echo "</tr>";
		$i++;
	}
?>
<h1>
	All Department
</h1>
<?php include 'main_footer.php';

?>