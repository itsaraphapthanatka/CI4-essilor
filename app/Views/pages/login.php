<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?php echo base_url();?>theme/dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url();?>theme/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>theme/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>
            var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
        </script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center bg-gray-700">
						<!--begin::Header-->
						<div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
							
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="d-flex flex-row-fluid justify-content-center p-10">
							<!--begin::Nav-->
							<div class="stepper-nav">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Account Type</h3>
											<div class="stepper-desc fw-normal">Select your account type</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Account Detail</h3>
											<div class="stepper-desc fw-normal">Select your account Details</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Completed</h3>
											<div class="stepper-desc fw-normal">Setup Your Account Details</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
					</div>
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" action="/loginLevel" method="post" enctype="multipart/form-data">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-dark">Select Account Type To Login
											<span class="ms-1" data-bs-toggle="tooltip" title="Billing is issued based on your selected account typ">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-12">
													<!--begin::Option-->
													<input type="radio" class="btn-check chktype" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<i class="ki-duotone ki-badge fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-dark fw-bold d-block fs-4 mb-2">Manager Login</span>
															<span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-12">
													<!--begin::Option-->
													<input type="radio" class="btn-check chktype" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-dark fw-bold d-block fs-4 mb-2">CS Teams Login</span>
															<span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="" data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
									<div data-kt-stepper-action="acctypeposonal">
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-10 pb-lg-15">
												<!--begin::Title-->
												<h2 class="fw-bold text-dark">Input Your Manager Username</h2>
												<!--end::Title-->
												<!--begin::Notice-->
												<div class="text-muted fw-semibold fs-6">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Notice-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">Username</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" id="account_name" name="account_name" placeholder="" value="" data-kt-stepper-action="acc"/>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">Password</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="password" class="form-control form-control-lg form-control-solid" id="password" name="password" placeholder="" value="" data-kt-stepper-action="pss"/>
												<!--end::Input-->
											</div>
										</div>
									</div>
									<div data-kt-stepper-action="acctypecoperate">
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-10 pb-lg-15">
												<!--begin::Title-->
												<h2 class="fw-bold text-dark">Input Your Manager Username</h2>
												<!--end::Title-->
												<!--begin::Notice-->
												<div class="text-muted fw-semibold fs-6">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Notice-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<h3>User Level</h3>
												<div class="col-lg-12 fv-row fv-plugins-icon-container">
													<!--begin::Options-->
													<div class="d-flex align-items-center mt-3">
														<!--begin::Option-->
														<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
															<input class="form-check-input" name="leveltype[]" type="checkbox" value="1">
															<span class="fw-semibold ps-2 fs-6">
																Task Creator
															</span>
														</label>
														<!--end::Option-->

														<!--begin::Option-->
														<label class="form-check form-check-custom form-check-inline form-check-solid">
															<input class="form-check-input" name="leveltype[]" type="checkbox" value="2">
															<span class="fw-semibold ps-2 fs-6">
																Keyin
															</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label class="form-check form-check-custom form-check-inline form-check-solid">
															<input class="form-check-input" name="leveltype[]" type="checkbox" value="3">
															<span class="fw-semibold ps-2 fs-6">
																Support
															</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label class="form-check form-check-custom form-check-inline form-check-solid">
															<input class="form-check-input" name="leveltype[]" type="checkbox" value="4">
															<span class="fw-semibold ps-2 fs-6">
																Feedback
															</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Options-->
												<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
											</div>
											<!--end::Input group-->
										</div>
									</div>
                                    <!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 5-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-8 pb-lg-10">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Your Are Done!</h2>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="mb-0">
											<!--begin::Alert-->
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-success rounded border-success border border-dashed p-6">
												<!--begin::Icon-->
												<i class="ki-duotone ki-check-circle fs-2tx text-success me-4">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-semibold">
														<h4 class="text-gray-900 fw-bold">Thank You.</h4>
														<div class="fs-6 text-gray-700">You are Login to Your Personal Account User Level</div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--end::Alert-->
                                            <!-- <div class="pt-15 text-center">
                                                <a href="#" type="button" class="btn btn-lg btn-primary me-3">GO</a>
                                            </div> -->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-duotone ki-arrow-left fs-4 me-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>Back</button>
									</div>
									<div>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Complete
											<i class="ki-duotone ki-arrow-right fs-4 ms-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Account Settings
										<i class="ki-duotone ki-arrow-right fs-4 ms-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></button>
									</div>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo base_url();?>theme/dist/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo base_url();?>theme/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-account.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>