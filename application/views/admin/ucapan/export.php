<?php 
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/vnd-ms-excel");
    header ("Content-Disposition: attachment; filename=".$nama_file.".xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" width="100%">
	<thead>
		<tr>
			<th colspan="16" style="font-size:24px;" align="center"><?= ucwords($headline)?></th>
		</tr>
		<tr>
            <th>No.</th>
		 	<th>Nama</th>
		 	<th>Kehadiran</th>
		 	<th>Ucapan & Doa</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; foreach($data AS $row) : ?>
			<tr>
                <td><?= $no++; ?></td>
				<td><?= $row->nama?></td>
				<td><?php if ($row->status == 'Hadir') {
                    echo '<div class="text-success" style="color: green;">Hadir</div>';
                }else if($row->status == 'Belum Pasti') {
                    echo '<div class="text-info" style="color: blue;">Belum Pasti</div>';
                }else{
                    echo '<div class="text-danger" style="color: red;">Tidak Hadir</div>';
                }
                ?></td>
				<td><?= $row->ucapan_doa; ?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>
</body>
</html>