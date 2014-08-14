<meta charset="utf-8" />
<?php include_once 'database.php'; ?>
<?php $conn = mysqli_connect(db_hostname, db_username, db_password, db_database) ?>

<?php if (!$conn): ?>
	<?php echo "Error"; ?>
<?php else: ?>
	<table border="1px" style="text-align:center;">
		<tr>
			<th class="tabela">DB_HOSTNAME</th>
			<th class="tabela">DB_USERNAME</th>
			<!-- <th class="tabela">DB_PASSWORD</th> -->
			<th class="tabela">DB_DATABASE</th>
		</tr>
		<tr>
			<td class="tabela"><?php echo db_hostname; ?></td>
			<td class="tabela"><?php echo db_username; ?></td>
			<!-- <td class="tabela"><?php // echo db_password; ?></td> -->
			<td class="tabela"><?php echo db_database; ?></td>
		</tr>
	</table>

<?php endif; ?>

<?php include_once 'closeconn.php'; ?>