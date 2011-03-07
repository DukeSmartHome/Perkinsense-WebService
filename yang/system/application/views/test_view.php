<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="<?php echo base_url();?>JavaScript/jquery-1.4.4.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>JavaScript/jquery.tablesorter.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>untitled</title>
</head>
<body>	
	<table id="myTable" class="tablesorter">
		<thead>
			<tr>
				<?php foreach($rows[1] as $key =>$value):?>
					<th><?php echo $key;?></th>
				<?php endforeach?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($rows as $row): ?>
			<tr>
				<?php foreach ($row as $key => $value):?>
				<td>
				<?php echo $value;?>
				</td>
				<?php endforeach;?>
				<td> <?php echo anchor('receiver/delete/'.$row->id,'delete '.$row->id );?></button></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
	<script type="text/javascript">
	$(document).ready(function() 
	{
		$("#myTable").tablesorter(); 
	} 
	); 
	</script>
</body>
</html> 