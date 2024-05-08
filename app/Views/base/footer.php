		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo base_url();?>theme/dist/assets/";</script>
		
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo base_url();?>theme/dist/assets/js/widgets.bundle.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/widgets.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/type.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/budget.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/settings.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/team.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/targets.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/files.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/complete.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-project/main.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/new-address.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/custom/utilities/modals/users-search.js"></script>
		
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		<script>
			$(function() {
				time=setInterval(function(){
					$.ajax({
						url: '<?php echo base_url(); ?>jsondata/checkonline',
						type: 'get',
						success: function(result) {
							var json = result;
							if (json.status == 0) {
								Swal.fire({
									text: "Sign Out "+json.uid+" by Administrator!.",
									icon: "error",
									buttonsStyling: false,
									allowOutsideClick: false,
									allowEscapeKey: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn fw-bold btn-danger",
									}
								}).then(function () {
									window.location="/logout";
								});
							}
						}
					});
				},9000);
				

			// Idle timeout
				$.sessionTimeout({
					heading: "h5",
					title: "Session Timeout",
					message: "Your session is about to expire. Do you want to stay connected?",
					keepBtnText: "Stay connected",
        			keepBtnClass: "btn btn-primary",
					logoutBtnText: "Logout",
					logoutBtnClass: "btn btn-danger",
					keepAliveUrl: "/",
					// warnAfter: 10000, // (1.40 minutes)
					// redirAfter: 12000, // ((1.40 hours))
					warnAfter: 1800000, // (30 minutes)
					redirAfter: 2700000, // ((45 minutes))
					redirUrl: "/logout",
					logoutUrl: "<?php echo base_url();?>logout"
				});
			});
			// Make the DIV element draggable:
			
			


		</script>
	</body>
	<!--end::Body-->
</html>