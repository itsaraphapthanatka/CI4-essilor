<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
	<!--begin::Table head-->
	<thead>
		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
			<th class="p-0 pb-3 min-w-175px text-start"></th>
			<th class="p-0 pb-3 min-w-100px text-end">วันนี้</th>
			<th class="p-0 pb-3 min-w-100px text-end">สัปดาห์</th>
			<th class="p-0 pb-3 min-w-100px text-end pe-12">เดือน</th>
		</tr>
	</thead>
	<!--end::Table head-->
	<!--begin::Table body-->
	<tbody>
		<?php $i=1; foreach($res as $val){?>
		<tr>
			<td>
				<div class="d-flex align-items-center">
					<div class="symbol symbol-50px me-3">
						<img src="<?= base_url();?>profile/<?=$val->user_img;?>" class="" alt="" />
					</div>
					<div class="d-flex justify-content-start flex-column">
						<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6"><?=$val->user_name;?></a>
					</div>
				</div>
			</td>
			<td class="text-end pe-0">
				<span class="text-gray-600 fw-bold fs-6"><?=$val->today;?></span>
			</td>
			<td class="text-end pe-0">
				<span class="text-gray-600 fw-bold fs-6"><?=$val->week;?></span>
			</td>
			<td class="text-end pe-12">
				<span class="text-gray-600 fw-bold fs-6"><?=$val->month;?></span>
			</td>
		</tr>
		<?php $i++; } ?>
	</tbody>
	<!--end::Table body-->
</table>