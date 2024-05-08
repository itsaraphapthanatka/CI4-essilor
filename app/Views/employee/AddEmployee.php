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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">New Employee</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Form-->
				<form id="kt_ecommerce_add_product_form" action="/CrateProject" method="post" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row">
					<!--begin::Aside column-->
					<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
						<!--begin::Thumbnail settings-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Picture</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body text-center pt-0">
								<!--begin::Image input-->
								<!--begin::Image input placeholder-->
								<style>.image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image-dark.svg'); }</style>
								<!--end::Image input placeholder-->
								<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
									<!--begin::Preview existing avatar-->
									<div class="image-input-wrapper w-150px h-150px"></div>
									<!--end::Preview existing avatar-->
									<!--begin::Label-->
									<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
										<i class="ki-duotone ki-pencil fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<!--begin::Inputs-->
										<input type="file" name="userfile" accept=".png, .jpg, .jpeg" />
										<input type="hidden" name="avatar_remove" />
										<!--end::Inputs-->
									</label>
									<!--end::Label-->
									<!--begin::Cancel-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Cancel-->
									<!--begin::Remove-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Remove-->
								</div>
								<!--end::Image input-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the Project image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
								<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Thumbnail settings-->
						<!--begin::Status-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Employee Status</h2>
								</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
								</div>
								<!--begin::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Select2-->
								<select class="form-select mb-2" name="project_status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
									<option></option>
									<option value="0" selected="selected">Active</option>
									<option value="1">In Active</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Status-->
					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<div class="d-flex flex-column gap-7 gap-lg-10">
							<!--begin::Inventory-->
							<div class="card card-flush py-4">
								<!--begin::Card header-->
								<div class="card-header">
									<div class="card-title">
										<h2>Employee Details</h2>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body">
									<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-10 fs-3 fw-bold">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Account</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
											<div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Employee Code</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" id="employee_code" name="employee_code" class="form-control mb-2" placeholder="Employee Code" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Employee Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="employee_name" class="form-control mb-2" placeholder="Employee Name" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Email Address</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="email" class="form-control mb-2" placeholder="Email" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Contact Phone</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="mobile" class="form-control mb-2" placeholder="Contact Phone" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                                 <!--begin::Input group-->
                                                 <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Project</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="project" aria-label="Select a Project" data-control="select2" data-hide-search="false" data-allow-clear="true" data-placeholder="Select a Project..." class="form-select mb-2">
														<option></option>
														
													</select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Position</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="position" aria-label="Select a Position" data-control="select2" data-hide-search="false" data-allow-clear="true" data-placeholder="Select a Position..." class="form-select mb-2">
														<option></option>
														
													</select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                   
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">User Type</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="user_type" aria-label="Select a User Type" data-control="select2" data-hide-search="true" data-placeholder="Select a User Type..." class="form-select mb-2">
                                                        <option value="employee">Employee</option>
                                                        <option value="external">External</option>
													</select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Show Dashboard</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="mdash" aria-label="Select a Show Dashboard" data-control="select2" data-hide-search="true" data-placeholder="Select a Show Dashboard..." class="form-select mb-2">
                                                        <option></option>
                                                        <option value="1">PM</option>
                                                        <option value="2">GM</option>
													</select>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="mb-10 fv-row w-100 flex-md-root">

                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
										</div>
										<div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                             <!--begin::Heading-->
                                            <div class="row">
                                                <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                    <h3 class="font-size-h6 mb-5">Change Or Recover Your Password:</h3>
                                                </div>
                                            </div>
                                            <!--end::Heading-->
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">Username:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<!--begin::Input-->
													<input type="text" name="username" class="form-control mb-2" value="" />
													<!--end::Input-->
												</div>
												<!--end::Col-->
											</div>
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">Password:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9" data-kt-password-meter="true">
													<!--begin::Input wrapper-->
                                                    <div class="position-relative mb-3">
                                                        <input class="form-control form-control-lg form-control-solid"
                                                            type="password" placeholder="" name="new_password" autocomplete="off" />

                                                        <!--begin::Visibility toggle-->
                                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                            data-kt-password-meter-control="visibility">
                                                                <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                                <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                        </span>
                                                        <!--end::Visibility toggle-->
                                                    </div>
                                                    <!--end::Input wrapper-->
												</div>
												<!--end::Col-->
											</div>
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">Line ID:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<!--begin::Input-->
													<div class="input-group">
                                                        <input type="text" class="form-control" id="lineid" name="lineid" aria-label=""/>
                                                        <!-- <span class="input-group-text">Amount</span> -->
                                                    </div>
													<!--end::Input-->
												</div>
												<!--end::Col-->
											</div>
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">User Role:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<!--begin::Input-->
													<div class="input-group">
                                                        <select name="userrole" aria-label="Select a User Role" data-control="select2" data-hide-search="false" data-placeholder="Select a User Role..." class="form-select mb-2">
                                                            <option></option>
                                                            <option value="1">Addministrator</option>
                                                            <option value="2">User</option>
                                                        </select>
                                                    </div>
													<!--end::Input-->
												</div>
												<!--end::Col-->
											</div>
										</div>
									</div>
								</div>
								<!--end::Card header-->
							</div>
							<!--end::Inventory-->
						</div>
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="/setupProject/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="button" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
								<span class="indicator-label">Confirm</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
					</div>
					<!--end::Main column-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>

<script>
	$("#tab_<?= $seq1; ?>").addClass('show');
	$("#tab_group_<?= $seq2; ?>").addClass('show');
	$("#tab_sub_<?= $seq3; ?>").addClass('active');
	 
	 $('#finished_date').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 $('#kt_date_start').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	  
 	$('#kt_date_end').flatpickr({
	  	altInput: true,
	  	altFormat: "d/m/Y",
	  	dateFormat: "Y-m-d",
  	});
	 
	 var KTAppEcommerceSaveProduct = function () {
		 
	 	const initChannal = () => {
		 	// Tnit new repeating condition types
		 	const allConditionTypes = document.querySelectorAll('[data-kt-channal="channal_name"]');
		 	allConditionTypes.forEach(type => {
			 	if ($(type).hasClass("select2-hidden-accessible")) {
				 	return;
			 	} else {
				 	$(type).select2({
					 	minimumResultsForSearch: -1
				 	});
			 	}
		 	});
	 	}
	 	
		const initConditionsSelect2 = () => {
			// Tnit new repeating condition types
			const allConditionTypes = document.querySelectorAll('[data-kt-add-project="project_option"]');
			allConditionTypes.forEach(type => {
				if ($(type).hasClass("select2-hidden-accessible")) {
					return;
				} else {
					$(type).select2({
						minimumResultsForSearch: -1
					});
				}
			});
		}
		const handleStatus = () => {
			const target = document.getElementById('kt_ecommerce_add_product_status');
			const select = document.getElementById('kt_ecommerce_add_product_status_select');
			const statusClasses = ['bg-success', 'bg-danger'];
		
			$(select).on('change', function (e) {
				const value = e.target.value;
		
				switch (value) {
					case "0": {
						target.classList.remove(...statusClasses);
						target.classList.add('bg-success');
						// hideDatepicker();
						break;
					}
					case "1": {
						target.classList.remove(...statusClasses);
						target.classList.add('bg-danger');
						// showDatepicker();
						break;
					}
					default:
						break;
				}
			});
		}
		const handleSubmit = () => {
			// Define variables
			let validator;
		
			// Get elements
			const form = document.getElementById('kt_ecommerce_add_product_form');
			const submitButton = document.getElementById('kt_ecommerce_add_product_submit');
		
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
			validator = FormValidation.formValidation(
				form,
				{
					fields: {
						'project_name': {
							validators: {
								notEmpty: {
									message: 'Project name is required'
								}
							}
						},
						'yearpc': {
							validators: {
								notEmpty: {
									message: 'Year is required'
								}
							}
						},
						'projectcode2pc': {
							validators: {
								notEmpty: {
									message: 'Running No. is required'
								}
							}
						},
						'shot_project_code': {
							validators: {
								notEmpty: {
									message: 'Shot Project Code is required'
								}
							}
						},
						'project_code': {
							validators: {
								notEmpty: {
									message: 'Project Code is required'
								}
							}
						},
						'typejob': {
							validators: {
								notEmpty: {
									message: 'Job Type is required'
								}
							}
						},
						'channel_id': {
							validators: {
								notEmpty: {
									message: 'Channel Name is required'
								}
							}
						},
						'cast': {
							validators: {
								notEmpty: {
									message: 'Cast is required'
								}
							}
						},
						'client_name': {
							validators: {
								notEmpty: {
									message: 'Client Name is required'
								}
							}
						},
						'start_date': {
							validators: {
								notEmpty: {
									message: 'Start Date is required'
								}
							}
						},
						'on_set_date': {
							validators: {
								notEmpty: {
									message: 'On Set Date is required'
								}
							}
						},
						'finished_date': {
							validators: {
								notEmpty: {
									message: 'Finished Date is required'
								}
							}
						},
						'total_time': {
							validators: {
								notEmpty: {
									message: 'Total Time is required'
								}
							}
						},
						'total_time': {
							validators: {
								notEmpty: {
									message: 'Total Time is required'
								}
							}
						},
						'project': {
							validators: {
								notEmpty: {
									message: 'Shot Project Code is required'
								}
							}
						},
						'producer_name': {
							validators: {
								notEmpty: {
									message: 'Producer Name is required'
								}
							}
						},
						'creative': {
							validators: {
								notEmpty: {
									message: 'creative Name is required'
								}
							}
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						bootstrap: new FormValidation.plugins.Bootstrap5({
							rowSelector: '.fv-row',
							eleInvalidClass: '',
							eleValidClass: ''
						})
					}
				}
			);
		
			// Handle submit button
			submitButton.addEventListener('click', e => {
				// e.preventDefault();
		
				// Validate form before submit
				if (validator) {
					validator.validate().then(function (status) {
						console.log('validated!');
		
						if (status == 'Valid') {
							submitButton.setAttribute('data-kt-indicator', 'on');
		
							// Disable submit button whilst loading
							submitButton.disabled = true;
							var frm = $('#kt_ecommerce_add_product_form');
							frm.submit(function (ev) {
								$.ajax({
									type: frm.attr('method'),
									url: frm.attr('action'),
									data: frm.serialize(),
										success: function (data) {
											console.log(data);

											setTimeout(function () {
											submitButton.removeAttribute('data-kt-indicator');
					
											Swal.fire({
												text: "Form has been successfully submitted!",
												icon: "success",
												buttonsStyling: false,
												confirmButtonText: "Ok, got it!",
												customClass: {
													confirmButton: "btn btn-primary"
												}
											}).then(function (result) {
												if (result.isConfirmed) {
													// Enable submit button after loading
													submitButton.disabled = false;
					
													// Redirect to customers list page
													window.location.href = "/project/";
												}
											});
										}, 2000);
									}
								});
								ev.preventDefault();

							});
							$("#kt_ecommerce_add_product_form").submit();
						} else {
							Swal.fire({
								html: "กรุณากรอกข้อมูลที่กำหนด",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn btn-primary"
								}
							});
						}
					});
				}
			})
		}
		
	 	// Public methods
	 	return {
	 		init: function () {
		 		initChannal();
		 		
				initConditionsSelect2();
				handleStatus();
				handleSubmit();
				$('[data-kt-repeater="select2"]').select2();
	 		}
	 	};
	 	
	 }();
	 // On document ready
	 KTUtil.onDOMContentLoaded(function () {
		 KTAppEcommerceSaveProduct.init();
	 });

	
</script>
<script>
	$("#year").on('change',function(){
		const type = '';
		const year = document.getElementById('year').value;
		const project = document.getElementById('project').value;
		const channelcode = document.getElementById('channel_code').value;
		// alert(type+'-'+project+'-'+year);
		$.ajax({
			url: '<?php echo base_url(); ?>jsondata/getnumberruning',
			type: 'POST',
			data: {
				'year': year,
				'type': type,
				'project': project
			},
			success: function(result) {
				var json = result;
				if (json<=9) {
					var x1 = "000"+json;
				}
				else if (json<=99) {
					var x1 = "00"+json;
				}
				else if (json<=999) {
					var x1 = "0"+json;
				}
				$('#runno').val(x1);
				console.log(x1);
				$("#project_code").val(type+"-"+project+"-"+year+"-"+x1);
				// console.log(json.project);
				// if(!json){
				// 	var channelcode = '-';
				// }else{
				// 	var channelcode = json.code;
				// }
				// $("#project_code").val(type.value+"-"+channelcode+"-"+year.value+"-"+runno.value);
				// $("#channel_code").val(channelcode);
			}
		});
	});


	Inputmask("decimal", {
    	"rightAlignNumerics": false
	}).mask("#wtper,#vatper,#insuranceContract,#contractAmount,#systemtypevalue");
</script>
