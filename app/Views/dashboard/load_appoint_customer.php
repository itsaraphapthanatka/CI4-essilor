<table id="kt_widget_table_2" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3" data-kt-table-widget-2="all">
	<thead>
		<tr>
			<th>ลำดับ</th>
			<th>สาขา/Room</th>
			<th>วันที่</th>
			<th>จำนวน</th>
			<!-- <th>เดือน</th> -->
		</tr>
	</thead>
	
	<tbody>
		
		<?php $i=1; foreach($res as $val){?>
		<tr>
			<td><?=$i;?></td>
			<td class="min-w-100px"><?=$val->branch_name;?></td>
			<td><?=date('d/m/Y',strtotime($val->dates));?></td>
			<td><?=$val->count_branch;?></td>
		</tr>
		<?php $i++; } ?>
	</tbody>
	<!--end::Table-->
</table>