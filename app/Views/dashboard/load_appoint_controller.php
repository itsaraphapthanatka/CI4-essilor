<table id="kt_widget_table_3" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3" data-kt-table-widget-3="all">
	<thead>
		<tr>
			<th>ลำดับ</th>
			<th>สาขา/Room</th>
			<th>วันที่</th>
			<th>จำนวน</th>
			<!-- <th>เดือน</th> -->
			<!-- <th>ยกเลิก</th> -->
		</tr>
	</thead>
	<tbody>
		
		<?php $i=1; foreach($res as $val){?>
		<tr>
			<td><?=$i;?></td>
			<td class="min-w-100px"><?=$val->branch_name;?></td>
			<td><?=date('d/m/Y',strtotime($val->datei));?></td>
			<!-- <td><?=date("W", strtotime($val->datei));?></td> -->
			<td><?=$val->count_branch;?></td>
			<!-- <td class="text-center">
				<button type="button" class="btn btn-icon btn-sm btn-light-danger btn-active-danger w-25px h-25px">
					<span class="svg-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
							<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
							<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
						</svg>
					</span>
				</button>
			</td> -->
		</tr>
		<?php $i++; } ?>
	</tbody>
	<!--end::Table-->
</table>