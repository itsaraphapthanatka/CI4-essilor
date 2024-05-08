<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-white fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="/home" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Dashboard</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-2 gap-lg-3">
					<!-- <a href="/userwork" class="btn btn-sm fw-bold btn-secondary">งานของฉัน</a>
					<a href="/userworks" class="btn btn-sm fw-bold btn-primary">ลงเวลาทำงาน</a> -->
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Row-->
				<!-- <div class="row g-5 g-xl-10 mb-xl-10">
					<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
						<h1><?=$compcode;?></h1>
						<img src="<?php echo base_url();?>comp/<?=session()->get('comp_img');?>" alt="image" />
					</div>
				</div> -->
				<!--end::Row-->
				<div class="card mb-6 mb-xl-9">
					<div class="card-body pt-9 pb-0">
						<!--begin::Details-->
						<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
							<!--begin::Image-->
							<div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
								<img class="mw-50px mw-lg-75px" src="<?php echo base_url();?>comp/<?=session()->get('comp_img');?>" alt="image" />
							</div>
							<!--end::Image-->
							<!--begin::Wrapper-->
							<div class="flex-grow-1">
								<!--begin::Head-->
								<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
									<!--begin::Details-->
									<div class="d-flex flex-column">
										<!--begin::Status-->
										<div class="d-flex align-items-center mb-1">
											<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3"><?=session()->get('comp_name');?></a>
											<span class="badge badge-light-success me-auto">In Progress</span>
										</div>
										<!--end::Status-->
										<!--begin::Description-->
										<div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400"><?=session()->get('comp_nameth');?></div>
										<!--end::Description-->
									</div>
									<!--end::Details-->
									
								</div>
								<!--end::Head-->
								<!--begin::Info-->
								<div class="d-flex flex-wrap justify-content-start">
									<!--begin::Stats-->
									<div class="d-flex flex-wrap">
										<!--begin::Stat-->
										<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
											<!--begin::Number-->
											<div class="d-flex align-items-center">
												<div class="fs-4 fw-bold">29 Jan, 2023</div>
											</div>
											<!--end::Number-->
											<!--begin::Label-->
											<div class="fw-semibold fs-6 text-gray-400">Due Date</div>
											<!--end::Label-->
										</div>
										<!--end::Stat-->
										<!--begin::Stat-->
										<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
											<!--begin::Number-->
											<div class="d-flex align-items-center">
												<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
											</div>
											<!--end::Number-->
											<!--begin::Label-->
											<div class="fw-semibold fs-6 text-gray-400">All Project</div>
											<!--end::Label-->
										</div>
										<!--end::Stat-->
										<!--begin::Stat-->
										<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
											<!--begin::Number-->
											<div class="d-flex align-items-center">
												<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="15000000" data-kt-countup-prefix="฿">0</div>
											</div>
											<!--end::Number-->
											<!--begin::Label-->
											<div class="fw-semibold fs-6 text-gray-400">project value</div>
											<!--end::Label-->
										</div>
										<!--end::Stat-->
									</div>
									<!--end::Stats-->
									<!--begin::Users-->
									<div class="symbol-group symbol-hover mb-3">
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
											<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
											<img alt="Pic" src="<?=base_url();?>theme/dist/assets/media/avatars/300-11.jpg" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
											<img alt="Pic" src="<?=base_url();?>theme/dist/assets/media/avatars/300-7.jpg" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
											<img alt="Pic" src="<?=base_url();?>theme/dist/assets/media/avatars/300-20.jpg" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
											<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
											<img alt="Pic" src="<?=base_url();?>theme/dist/assets/media/avatars/300-2.jpg" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
											<span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
											<img alt="Pic" src="<?=base_url();?>theme/dist/assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::User-->
										<!--begin::All users-->
										<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
											<span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
										</a>
										<!--end::All users-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Details-->
					</div>
				</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->
<!-- <script src="<?php echo base_url();?>theme/src/js/widgets/charts/widget-30.js"></script> -->
<script>
	 $("#tab_home").addClass('show');
	 $("#tab_dashboard").addClass('active');
</script>