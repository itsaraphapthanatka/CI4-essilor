<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-4 py-lg-8">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
				<!--begin::Toolbar wrapper-->
				<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
						<!--begin::Title-->
						<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0"></h1>
						<!--end::Title-->
					</div>
					<!--end::Page title-->
				</div>
				<!--end::Toolbar wrapper-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-fluid">
				<div class="card card-flush h-md-100">
					<!--begin::Header-->
					<div class="card-header pt-7">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bold text-gray-800">รายงานการไม่ว่าง</span>
						</h3>
						<!--end::Title-->
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-6">
						<div class="input-group mb-5 py-7">
							   <!--begin::Input-->
							   <input class="form-control form-control-solid" name="calendar_event_between_date" placeholder="Pick a start date" id="kt_calendar_datepicker_between_date" />
							   <button class="btn btn-primary" id="findb">ค้นหา</button>
							   <!--end::Input-->
						   </div>
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<div class="loadtableb">
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
							</div>
						</div>
						<!--end::Table-->
					</div>
					<!--end: Card Body-->
				</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>

<script>
	$("#tab_dashboard").addClass('active');
	$("#kt_app_sidebar_secondary_dahsboard").addClass('show active');
	$("#kt_calendar_datepicker_between_date").flatpickr({
		altInput: true,
		altFormat: "Y-m-d",
		dateFormat: "Y-m-d",
		mode: "range"
	});
	$("#findb").on('click',function(){
		var date = $("#kt_calendar_datepicker_between_date").val();
		var start = date.substring(0,10);
		var end = date.substring(14,24);
		$(".loadtableb").html(`<div class="progress">
				<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Loading...</div>
			</div>`);
		$(".loadtableb").load("/loadleave?start="+start+"&end="+end);
	});
</script>