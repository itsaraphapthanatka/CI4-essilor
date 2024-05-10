<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../" />
        <title>Essilor</title>
		<meta charset="utf-8" />
		<meta name="description" content="Essilor" />
		<meta name="keywords" content="essilor" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://essilor.com/" />
		<meta property="og:site_name" content="essilor" />
		<link rel="canonical" href="https://essilor.com" />
		<link rel="shortcut icon" href="#" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?php echo base_url();?>theme/demo20/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url();?>theme/demo20/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>theme/demo20/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
		<!--begin::Theme mode setup on page load-->
		<script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
        </script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header bg-gray-700">
						<!--begin::Header top-->
						<div class="header-top d-flex align-items-stretch flex-grow-1">
							<!--begin::Container-->
							<div class="d-flex container-xxl align-items-stretch">
								<!--begin::Brand-->
								<div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
									<!--begin::Heaeder navs toggle-->
									<button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2" id="kt_header_navs_toggle">
										<i class="ki-duotone ki-abstract-14 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</button>
									<!--end::Heaeder navs toggle-->
									<!--begin::Logo-->
									<a href="/home/level" class="d-flex align-items-center">
										<!-- <img alt="Logo" src="<?php echo base_url();?>theme/demo20/assets/media/logos/demo20.svg" class="h-25px h-lg-30px" /> -->
									</a>
									<!--end::Logo-->
									<!--begin::Tabs wrapper-->
									<div class="align-self-end overflow-auto" id="kt_brand_tabs">
										<!--begin::Header tabs wrapper-->
										<div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
											<!--begin::Header tabs-->
											<ul class="nav flex-nowrap text-nowrap">
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_1">Dashboards/Reports</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#kt_header_navs_tab_2">ECP Creation</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_3">Setting</a>
												</li>
											</ul>
											<!--begin::Header tabs-->
										</div>
										<!--end::Header tabs wrapper-->
									</div>
									<!--end::Tabs wrapper-->
								</div>
								<!--end::Brand-->
								<!--begin::Topbar-->
								<div class="d-flex align-items-center flex-row-auto">
									<!--begin::User-->
									<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
										<!--begin::User info-->
										<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<!--begin::Name-->
											<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
												<span class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1"><?=session()->get('m_name');?></span>
												<span class="text-white fs-8 fw-bold lh-1"><?=session()->get('mtype');?></span>
											</div>
											<!--end::Name-->
											<!--begin::Symbol-->
											<div class="symbol symbol-30px symbol-md-40px">
												<img src="<?php echo base_url();?>theme/demo20/assets/media/avatars/300-1.jpg" alt="image" />
											</div>
											<!--end::Symbol-->
										</div>
										<!--end::User info-->
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="<?php echo base_url();?>theme/demo20/assets/media/avatars/300-1.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bold d-flex align-items-center fs-5"><?=session()->get('m_name');?></div>
														<a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?=session()->get('mtype');?></a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											  
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="/logout" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
									</div>
									<!--end::User -->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Header top-->
						<!--begin::Header navs-->
						<div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
							<!--begin::Container-->
							<div class="d-lg-flex container-xxl w-100">
								<!--begin::Wrapper-->
								<div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
									<!--begin::Header tab content-->
									<div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_header_navs_tab_1">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
												<div class="d-flex flex-column flex-lg-row gap-2">
													<a class="btn btn-sm btn-light fw-bold" href="documentation/base/forms/controls.html">OVERVIEW</a>
												</div>
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade active show" id="kt_header_navs_tab_2">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
												<div class="d-flex flex-column flex-lg-row gap-2">
													<a class="btn btn-sm btn-light text-primary fw-bold" id="list_ecp_view">LIST ECP VIEW</a>
													<a class="btn btn-sm btn-light fw-bold" href="documentation/base/forms/advanced.html">Create New ECP</a>
												</div>
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_header_navs_tab_3">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
												<div class="d-flex flex-column flex-lg-row gap-2">
													<a class="btn btn-sm btn-light fw-bold" href="apps/user-management/users/list.html">Tag Listview</a>
													<a class="btn btn-sm btn-light fw-bold" href="apps/inbox/listing.html">Tag Category Setting</a>
												</div>
												<div class="d-flex flex-column flex-lg-row gap-2">
													<a class="btn btn-sm btn-light-info fw-bold" href="apps/subscriptions/view.html">More Apps</a>
												</div>
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab panel-->
									</div>
									<!--end::Header tab content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Header navs-->
					</div>
					<!--end::Header-->
					<div id="details"></div>
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							
							<!--end::Copyright-->
							<!--begin::Menu-->
							
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo base_url();?>theme/demo20/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo base_url();?>theme/demo20/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?php echo base_url();?>theme/demo20/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<!-- <script src="<?php echo base_url();?>theme/demo20/assets/js/custom/apps/user-management/users/list/table.js"></script> -->
		<script src="<?php echo base_url();?>theme/demo20/assets/js/widgets.bundle.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/widgets.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script>
            $("#details").load('<?php echo base_url()?>load_list_ecp_view');
            $("#list_ecp_view").on('click',function(){
                $("#details").load('<?php echo base_url()?>load_list_ecp_view');
            });
        </script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>