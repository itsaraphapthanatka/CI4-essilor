<div class="row g-6 g-xl-9">
	<?php foreach($company as $comp){?>
	<!--begin::Col-->
	<div class="col-md-6 col-xl-3">
		<!--begin::Card-->
		<a href="/home/<?=$comp['compcode'];?>" class="card border-hover-primary">
			<!--begin::Card header-->
			<div class="card-header border-0 pt-9">
				<!--begin::Card Title-->
				<div class="card-title m-0">
					<!--begin::Avatar-->
					<div class="symbol symbol-50px w-50px bg-light">
						<img src="<?php echo base_url();?>comp/<?php echo $comp['comp_img'];?>" alt="image" />
					</div>
					<!--end::Avatar-->
				</div>
				<!--end::Car Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end:: Card header-->
			<!--begin:: Card body-->
			<div class="card-body p-9">
				<!--begin::Name-->
				<div class="fs-3 fw-bold text-dark"><?php echo $comp['company_name'];?></div>
				<!--end::Name-->
				<!--begin::Description-->
				<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7"><?php echo $comp['company_nameth'];?></p>
				<!--end::Description-->
				<!--begin::Info-->
				<div class="d-flex flex-wrap mb-5">
					<!--begin::Due-->
					<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
						<div class="fs-6 text-gray-800 fw-bold"><?php echo $comp['company_taxnum'];?></div>
						<div class="fw-semibold text-gray-400">Tax ID</div>
					</div>
					<!--end::Due-->
					<!--begin::Budget-->
					<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
						<div class="fs-6 text-gray-800 fw-bold"><?php echo $comp['company_tel'];?></div>
						<div class="fw-semibold text-gray-400">Tel</div>
					</div>
					<!--end::Budget-->
				</div>
				<!--end::Info-->
				<!--begin::Progress-->
				<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
					<div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<!--end::Progress-->
				<!--begin::Users-->
				<div class="symbol-group symbol-hover">
					<!--begin::User-->
					<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
						<img alt="Pic" src="<?php echo base_url();?>theme/dist/assets/media/avatars/300-6.jpg" />
					</div>
					<!--begin::User-->
					<!--begin::User-->
					<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rudy Stone">
						<img alt="Pic" src="<?php echo base_url();?>theme/dist/assets/media/avatars/300-1.jpg" />
					</div>
					<!--begin::User-->
					<!--begin::User-->
					<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
						<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
					</div>
					<!--begin::User-->
				</div>
				<!--end::Users-->
			</div>
			<!--end:: Card body-->
		</a>
		<!--end::Card-->
	</div>
	<!--end::Col-->
	<?php } ?>
</div>