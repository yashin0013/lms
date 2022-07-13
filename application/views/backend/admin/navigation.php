<?php
$status_wise_courses = $this->crud_model->get_status_wise_courses();
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu left-side-menu-detached">
	<div class="leftbar-user">
		<a href="javascript: void(0);">
			<img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="user-image" height="42" class="rounded-circle shadow-sm">
			<?php
			$admin_details = $this->user_model->get_all_user($this->session->userdata('user_id'))->row_array();
			?>
			<span class="leftbar-user-name"><?php echo $admin_details['first_name'] . ' ' . $admin_details['last_name']; ?></span>
		</a>
	</div>

	<!--- Sidemenu -->
	<ul class="metismenu side-nav side-nav-light">

		<li class="side-nav-title side-nav-item"><?php echo get_phrase('navigation'); ?></li>

		<li class="side-nav-item <?php if ($page_name == 'dashboard') echo 'active'; ?>">
			<a href="<?php echo site_url('admin/dashboard'); ?>" class="side-nav-link">
				<i class="dripicons-view-apps"></i>
				<span><?php echo get_phrase('dashboard'); ?></span>
			</a>
		</li>
			<li class="side-nav-item <?php if ($page_name == 'Demo_class') echo 'active'; ?>">
			<a href="<?php echo site_url('admin/demo_class'); ?>" class="side-nav-link">
				<i class="dripicons-network-3"></i>
				<span><?php echo get_phrase('Demo_Class'); ?></span>
			</a>
		</li>
			<li class="side-nav-item <?php if ($page_name == 'Support') echo 'active'; ?>">
			<a href="<?php echo site_url('admin/support'); ?>" class="side-nav-link">
				<i class="fas fa-ticket-alt"></i>
				<span><?php echo get_phrase('Support'); ?></span>
			</a>
		</li>
		
		<!--	<?php if (has_permission('live')) : ?>-->
		<!--	<li class="side-nav-item <?php if ($page_name == 'add_city' || $page_name == 'add_institute' || $page_name == 'manage_institute') : ?> active <?php endif; ?>">-->
		<!--		<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'add_city' || $page_name == 'add_institute'|| $page_name == 'manage_institute') : ?> active <?php endif; ?>">-->
		<!--			<i class="dripicons-network-3"></i>-->
		<!--			<span> <?php echo get_phrase('Webinar'); ?> </span>-->
		<!--			<span class="menu-arrow"></span>-->
		<!--		</a>-->
		<!--		<ul class="side-nav-second-level" aria-expanded="false">-->
					<!--<li class="<?php if ($page_name == 'Add_Webinar') echo 'active'; ?>">-->
					<!--	<a href="<?php echo site_url('admin/add_webinar'); ?>"><?php echo get_phrase('Add_Webinar'); ?></a>-->
					<!--</li>-->
		<!--			 <li class="<?php if ($page_name == 'Add_Webinar') echo 'active'; ?>">-->
		<!--				<a href="<?php echo site_url('admin/add_webinar'); ?>"><?php echo get_phrase('Add_webianr'); ?></a>-->
		<!--			</li>-->
		<!--		    <li class="<?php if ($page_name == 'Manage_webinar') echo 'active'; ?>">-->
		<!--				<a href="<?php echo site_url('admin/manage_webinar'); ?>"><?php echo get_phrase('Manage_webinar'); ?></a>-->
		<!--			</li>-->
					<!--edit by gunjan-->
		<!--			<li class="<?php if ($page_name == 'Webinar_info') echo 'active'; ?>">-->
		<!--				<a href="<?php echo site_url('admin/webinar_info '); ?>"><?php echo get_phrase('Webinar_info'); ?></a>-->
		<!--		    </li>-->
		<!--		</ul>-->
		<!--	</li>-->
		<!--<?php endif; ?>	-->
		
		<?php if (has_permission('course')) : ?>
			<li class="side-nav-item <?php if ($page_name == 'courses' || $page_name == 'course_add' || $page_name == 'course_edit' || $page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit' || $page_name == 'coupons' || $page_name == 'coupon_add' || $page_name == 'coupon_edit' || $page_name == 'add_bundle' || $page_name == 'manage_course_bundle' || $page_name == 'edit_bundle' || $page_name == 'active_bundle_subscription_report' || $page_name == 'expire_bundle_subscription_report' || $page_name == 'bundle_invoice') echo 'active'; ?>">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'courses' || $page_name == 'course_add' || $page_name == 'course_edit' || $page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit' || $page_name == 'coupons' || $page_name == 'coupon_add' || $page_name == 'coupon_edit') : ?> active <?php endif; ?>">
					<i class="dripicons-archive"></i>
					<span> <?php echo get_phrase('courses'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<?php if (has_permission('course')) : ?>
						<li class="<?php if ($page_name == 'courses' || $page_name == 'course_edit') echo 'active'; ?>">
							<a href="<?php echo site_url('admin/courses'); ?>"><?php echo get_phrase('manage_courses'); ?></a>
						</li>
					<?php endif; ?>

					<?php if (has_permission('course')) : ?>
						<li class="<?php if ($page_name == 'course_add') echo 'active'; ?>">
							<a href="<?php echo site_url('admin/course_form/add_course'); ?>"><?php echo get_phrase('add_new_course'); ?></a>
						</li>
					<?php endif; ?>
						<?php// if (has_permission('course')) : ?>
						<!--<li class="<?php if ($page_name == 'live_course_add') echo 'active'; ?>">-->
						<!--	<a href="<?php echo site_url('admin/course_form/live_course_add'); ?>"><?php echo get_phrase('add_live_course'); ?></a>-->
						<!--</li>-->
					<?php //endif; ?>

					<?php if (has_permission('category')) : ?>
						<li class="<?php if ($page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit') echo 'active'; ?>">
							<a href="<?php echo site_url('admin/categories'); ?>"><?php echo get_phrase('course_category'); ?></a>
						</li>
					<?php endif; ?>
					<?php if (has_permission('addon')) : ?>
						<li class="<?php if ($page_name == 'Addon_Course_Category')  echo 'active'; ?>">
							<a href="<?php echo site_url('admin/addon_course_category'); ?>"><?php echo get_phrase('Addon_Course_Category'); ?></a>
						</li>
					<?php endif; ?>
					<?php if (has_permission('coupon')) : ?>
						<li class="<?php if ($page_name == 'coupons' || $page_name == 'coupon_add' || $page_name == 'coupon_edit') echo 'active'; ?>">
							<a href="<?php echo site_url('admin/coupons'); ?>">
								<?php echo get_phrase('coupons'); ?>
							</a>
						</li>
					<?php endif; ?>

					<?php if (addon_status('course_bundle')) : ?>
						<li class="side-nav-item">
							<a href="javascript: void(0);" aria-expanded="false"><?php echo get_phrase('course_bundle'); ?>
								<span class="menu-arrow"></span>
							</a>
							<ul class="side-nav-third-level" aria-expanded="false">
								<li class="<?php if ($page_name == 'add_bundle') echo 'active'; ?>">
									<a href="<?php echo site_url('addons/bundle/add_bundle_form'); ?>"><?php echo get_phrase('add_new_bundle'); ?></a>
								</li>
								<li class="<?php if ($page_name == 'manage_course_bundle') echo 'active'; ?>">
									<a href="<?php echo site_url('addons/bundle/manage_bundle'); ?>"><?php echo get_phrase('manage_bundle'); ?></a>
								</li>
								<li class="<?php if ($page_name == 'active_bundle_subscription_report' || $page_name == 'expire_bundle_subscription_report' || $page_name == 'bundle_invoice') echo 'active'; ?>">
									<a href="<?php echo site_url('addons/bundle/subscription_report/active'); ?>"><?php echo get_phrase('subscription_report'); ?></a>
								</li>
							</ul>
						</li>
					<?php endif; ?>
				</ul>
			</li>
		<?php endif; ?>

		<?php if (has_permission('enrolment')) : ?>
			<li class="side-nav-item <?php if ($page_name == 'enrol_history' || $page_name == 'enrol_student' || $page_name == 'enrol_multiple_students' || $page_name == 'enrol_multiple_courses' || $page_name == 'enrol_multiple_instructors') : ?> active <?php endif; ?>">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'enrol_history' || $page_name == 'enrol_student'|| $page_name == 'enrol_multiple_students'|| $page_name == 'enrol_multiple_courses' || $page_name == 'enrol_multiple_instructors') : ?> active <?php endif; ?>">
					<i class="dripicons-network-3"></i>
					<span> <?php echo get_phrase('enrolment'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class="<?php if ($page_name == 'enrol_history') echo 'active'; ?>">
						<a href="<?php echo site_url('admin/enrol_history'); ?>"><?php echo get_phrase('enrol_history'); ?></a>
					</li>

					<li class="<?php if ($page_name == 'enrol_student') echo 'active'; ?>">
						<a href="<?php echo site_url('admin/enrol_student'); ?>"><?php echo get_phrase('enrol_a_student'); ?></a>
					</li>
					<!--<li class="<?php if ($page_name == 'enrol_multiple_students') echo 'active'; ?>">-->
					<!--	<a href="<?php echo site_url('admin/enrol_multiple_students'); ?>"><?php echo get_phrase('enrol_multiple_students'); ?></a>-->
				 <!--   </li>-->
					<!--<li class="<?php if ($page_name == 'enrol_multiple_courses') echo 'active'; ?>">-->
					<!--	<a href="<?php echo site_url('admin/enrol_multiple_courses'); ?>"><?php echo get_phrase('enrol_for_multiple_courses'); ?></a>-->
					<!--</li>-->
					<!--<li class="<?php if ($page_name == 'enrol_multiple_instructors') echo 'active'; ?>">-->
					<!--	<a href="<?php echo site_url('admin/enrol_multiple_instructors'); ?>"><?php echo get_phrase('enrol_multiple_instructors'); ?></a>-->
				 <!--   </li>-->
				</ul>
			</li>
		<?php endif; ?>

		<?php if (has_permission('revenue')) : ?>
			<li class="side-nav-item">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'admin_revenue' || $page_name == 'instructor_revenue' || $page_name == 'invoice') : ?> active <?php endif; ?>">
					<i class="dripicons-box"></i>
					<span> <?php echo get_phrase('report'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class="<?php if ($page_name == 'admin_revenue') echo 'active'; ?>"> <a href="<?php echo site_url('admin/admin_revenue'); ?>"><?php echo get_phrase('admin_revenue'); ?></a> </li>
					<?php if (get_settings('allow_instructor') == 1) : ?>
						<li class="<?php if ($page_name == 'instructor_revenue') echo 'active'; ?>">
							<a href="<?php echo site_url('admin/instructor_revenue'); ?>"><?php echo get_phrase('instructor_revenue'); ?></a>
						</li>
					<li class="<?php if ($page_name == 'purchase_report') echo 'active'; ?>">
					     <!--<a href="<?php echo site_url('admin/purchase_report'); ?>"><?php echo get_phrase('purchase_report'); ?></a> 					-->
					    
					    
					     <a onclick="myFunction()" href="#"> <?php echo get_phrase('purchase_report'); ?> </a> </li> 
						
						
						<li class="<?php if ($page_name == 'course_list') echo 'active'; ?>"> <a href="<?php echo site_url('admin/course_list'); ?>"><?php echo get_phrase('course_list'); ?></a> </li>
					<?php endif; ?>
						<!--<li class="<?php if ($page_name == 'User_program_report') echo 'active'; ?>"> <a href="<?php echo site_url('admin/user_report'); ?>"><?php echo get_phrase('User_program_report'); ?></a> </li>-->
				</ul>
			</li>
		<?php endif; ?>

		<?php if (has_permission('user')) : ?>
			<li class="side-nav-item <?php if ($page_name == 'admins' || $page_name == 'admin_add' || $page_name == 'admin_edit' || $page_name == 'admin_permission' || $page_name == 'instructors' || $page_name == 'instructor_add' || $page_name == 'instructor_edit' || $page_name == 'instructor_payout' || $page_name == 'instructor_settings' || $page_name == 'application_list' || $page_name == 'users' || $page_name == 'user_add' || $page_name == 'user_edit') : ?> active <?php endif; ?>">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'admins' || $page_name == 'admin_add' || $page_name == 'admin_edit' || $page_name == 'admin_permission' || $page_name == 'instructors' || $page_name == 'instructor_add' || $page_name == 'instructor_edit' || $page_name == 'instructor_payout' || $page_name == 'instructor_settings' || $page_name == 'application_list' || $page_name == 'users' || $page_name == 'user_add' || $page_name == 'user_edit') : ?> active <?php endif; ?>">
					<i class="dripicons-box"></i>
					<span> <?php echo get_phrase('users'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<?php if (has_permission('admins')) : ?>
						<li class="side-nav-item <?php if ($page_name == 'admins' || $page_name == 'admin_add' || $page_name == 'admin_edit' || $page_name == 'admin_permission') : ?> active <?php endif; ?>">
							<a href="javascript: void(0);" class="<?php if ($page_name == 'admins' || $page_name == 'admin_add' || $page_name == 'admin_edit' || $page_name == 'admin_permission') : ?> active <?php endif; ?>" aria-expanded="false"><?php echo get_phrase('admins'); ?>
								<span class="menu-arrow"></span>
							</a>
							<ul class="side-nav-third-level" aria-expanded="false">
								<li class="<?php if ($page_name == 'admins' || $page_name == 'admin_edit' || $page_name == 'admin_permission') : ?> active <?php endif; ?>">
									<a href="<?php echo site_url('admin/admins'); ?>" class="<?php if ($page_name == 'admins' || $page_name == 'admin_edit' || $page_name == 'admin_permission') : ?> active <?php endif; ?>"><?php echo get_phrase('manage_admins'); ?></a>
								</li>
								<li class="<?php if ($page_name == 'admin_add') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/admin_form/add_admin_form'); ?>"><?php echo get_phrase('add_new_admin'); ?></a>
								</li>
							</ul>
						</li>
					<?php endif; ?>

					<?php if (has_permission('instructor')) : ?>
						<li class="side-nav-item <?php if ($page_name == 'instructors' || $page_name == 'instructor_edit') : ?> active <?php endif; ?>">
							<a href="javascript: void(0);" aria-expanded="false" class="<?php if ($page_name == 'instructors' || $page_name == 'instructor_edit') : ?> active <?php endif; ?>">
								<?php echo get_phrase('instructors'); ?>
								<span class="menu-arrow"></span>
							</a>
							<ul class="side-nav-third-level" aria-expanded="false">
								<li class="<?php if ($page_name == 'instructors' || $page_name == 'instructor_edit') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/instructors'); ?>"><?php echo get_phrase('manage_instructors'); ?></a>
								</li>
								<li class="<?php if ($page_name == 'instructor_add') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/instructor_form/add_instructor_form'); ?>"><?php echo get_phrase('add_new_instructor'); ?></a>
								</li>
								<li class="<?php if ($page_name == 'instructor_payout') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/instructor_payout'); ?>">
										<?php echo get_phrase('instructor_payout'); ?>
										<span class="badge badge-danger-lighten"><?php echo $this->crud_model->get_pending_payouts()->num_rows(); ?></span>
									</a>
								</li>
								<li class="<?php if ($page_name == 'instructor_settings') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/instructor_settings'); ?>"><?php echo get_phrase('instructor_settings'); ?></a>
								</li>
								<li class="<?php if ($page_name == 'application_list') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/instructor_application'); ?>">
										<?php echo get_phrase('applications'); ?>
										<span class="badge badge-danger-lighten"><?php echo $this->user_model->get_pending_applications()->num_rows(); ?></span>
									</a>
								</li>
							</ul>
						</li>
					<?php endif; ?>

					<?php if (has_permission('student')) : ?>
						<li class="side-nav-item <?php if ($page_name == 'users' || $page_name == 'user_add' || $page_name == 'user_edit') : ?> active <?php endif; ?>">
							<a href="javascript: void(0);" aria-expanded="false" class="<?php if ($page_name == 'users' || $page_name == 'user_add' || $page_name == 'user_edit') : ?> active <?php endif; ?>"><?php echo get_phrase('students'); ?>
								<span class="menu-arrow"></span>
							</a>
							<ul class="side-nav-third-level" aria-expanded="false">
								<li class="<?php if ($page_name == 'users' || $page_name == 'user_edit') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/users'); ?>"><?php echo get_phrase('manage_students'); ?></a>
								</li>
								<li class="<?php if ($page_name == 'user_add') echo 'active'; ?>">
									<a href="<?php echo site_url('admin/user_form/add_user_form'); ?>"><?php echo get_phrase('add_new_student'); ?></a>
								</li>
							</ul>
						</li>
					<?php endif; ?>
				</ul>
			</li>
		<?php endif; ?>

		<?php if (addon_status('offline_payment')) : ?>
			<li class="side-nav-item">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'offline_payment_pending' || $page_name == 'offline_payment_approve' || $page_name == 'offline_payment_suspended') : ?> active <?php endif; ?>">
					<i class="dripicons-box"></i>
					<span> <?php echo get_phrase('offline_payment'); ?></span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class="<?php if ($page_name == 'offline_payment_pending') echo 'active'; ?>">
						<a href="<?php echo site_url('addons/offline_payment/pending'); ?>">
							<?php echo get_phrase('pending_request'); ?>
							<span class="badge badge-danger-lighten badge-pill float-right"><?php echo get_pending_offline_payment(); ?></span></span>
						</a>
					</li>
					<li class="<?php if ($page_name == 'offline_payment_approve') echo 'active'; ?>">
						<a href="<?php echo site_url('addons/offline_payment/approve'); ?>"><?php echo get_phrase('accepted_request'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'offline_payment_suspended') echo 'active'; ?>">
						<a href="<?php echo site_url('addons/offline_payment/suspended'); ?>"><?php echo get_phrase('suspended_request'); ?></a>
					</li>
				</ul>
			</li>
		<?php endif; ?>



<!-- messaging code -->
	<!--	<?php if (has_permission('messaging')) : ?>
	<!--		<li class="side-nav-item">-->
	<!--			<a href="<?php echo site_url('admin/message'); ?>" class="side-nav-link <?php if ($page_name == 'message' || $page_name == 'message_new' || $page_name == 'message_read') echo 'active'; ?>">-->
	<!--				<i class="dripicons-message"></i>-->
	<!--				<span><?php echo get_phrase('message'); ?></span>-->
	<!--			</a>-->
				
				
	<!--		</li>-->
	<!--	<?php endif; ?>-->
		
		
			<?php if (has_permission('revenue')) : ?>
			<li class="side-nav-item">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'admin_revenue' || $page_name == 'instructor_revenue' || $page_name == 'invoice') : ?> active <?php endif; ?>">
					<i class="dripicons-message"></i>
					<span> <?php echo get_phrase('Marketing'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class="<?php if ($page_name == 'admin_revenue') echo 'active'; ?>"> <a href="<?php echo site_url('admin/message'); ?>"><?php echo get_phrase('In App'); ?></a> </li>
					<?php if (get_settings('allow_instructor') == 1) : ?>
						<li class="<?php if ($page_name == 'instructor_revenue') echo 'active'; ?>">
							<a href="<?php echo site_url('admin/email'); ?>">
								<?php echo get_phrase('email'); ?>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</li>
		<?php endif; ?>


		<?php if (addon_status('customer_support')) : ?>
			<li class="side-nav-item <?php if ($page_name == 'tickets' || $page_name == 'support_category' || $page_name == 'support_macro' || $page_name == 'create_ticket') : ?> active <?php endif; ?>">
				<a href="javascript: void(0);" class="side-nav-link">
					<i class="dripicons-help"></i>
					<span> <?php echo get_phrase('customer_support'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class="<?php if ($page_name == 'tickets') echo 'active'; ?>">
						<a href="<?php echo site_url('addons/customer_support/tickets/opened'); ?>"><?php echo get_phrase('ticket_list'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'support_category') echo 'active'; ?>">
						<a href="<?php echo site_url('addons/customer_support/get_support_categories'); ?>"><?php echo get_phrase('support_category'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'support_macro') echo 'active'; ?>">
						<a href="<?php echo site_url('addons/customer_support/get_support_macros'); ?>"><?php echo get_phrase('macro'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'create_ticket') echo 'active'; ?>">
						<a href="<?php echo site_url('addons/customer_support/create_support_ticket'); ?>"><?php echo get_phrase('create_ticket'); ?></a>
					</li>
				</ul>
			</li>
		<?php endif; ?>

<!--<?php if (has_permission('addon')) : ?>
		<li class="side-nav-item">
			<a href="<?php echo site_url('admin/addon'); ?>" class="side-nav-link <?php if ($page_name == 'addons' || $page_name == 'addon_add' || $page_name == 'available_addons') : ?> active <?php endif; ?>">
					<i class="dripicons-graph-pie"></i>
					<span><?php echo get_phrase('addons'); ?></span>
			</a>
			</li>
	<?php endif; ?>-->

	<!--	<?php if (has_permission('theme')) : ?>
			<li class="side-nav-item">
				<a href="<?php echo site_url('admin/theme_settings'); ?>" class="side-nav-link <?php if ($page_name == 'theme_settings') echo 'active'; ?>">
					<i class="dripicons-brush"></i>
					<span><?php echo get_phrase('themes'); ?></span>
				</a>
			</li>
		<?php endif; ?>
-->
		<?php if (has_permission('settings')) : ?>
			<li class="side-nav-item  <?php if ($page_name == 'system_settings' || $page_name == 'frontend_settings' || $page_name == 'payment_settings' || $page_name == 'smtp_settings' || $page_name == 'manage_language' || $page_name == 'about' || $page_name == 'themes') : ?> active <?php endif; ?>">
				<a href="javascript: void(0);" class="side-nav-link">
					<i class="dripicons-toggles"></i>
					<span> <?php echo get_phrase('settings'); ?> </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class="<?php if ($page_name == 'system_settings') echo 'active'; ?>">
						<a href="<?php echo site_url('admin/system_settings'); ?>"><?php echo get_phrase('system_settings'); ?></a>
					</li>

					<li class="<?php if ($page_name == 'frontend_settings') echo 'active'; ?>">
						<a href="<?php echo site_url('admin/frontend_settings'); ?>"><?php echo get_phrase('website_settings'); ?></a>
					</li>

					<?php if (addon_status('certificate')) : ?>
						<li class="<?php if ($page_name == 'certificate_settings') echo 'active'; ?>">
							<a href="<?php echo site_url('addons/certificate/settings'); ?>"><?php echo get_phrase('certificate_settings'); ?></a>
						</li>
					<?php endif; ?>

					<?php if (addon_status('amazon-s3')) : ?>
						<li class="<?php if ($page_name == 's3_settings') echo 'active'; ?>">
							<a href="<?php echo site_url('addons/amazons3/settings'); ?>"><?php echo get_phrase('s3_settings'); ?></a>
						</li>
					<?php endif; ?>

					<!--<?php if (addon_status('live-class')) : ?>-->
						<li class="<?php if ($page_name == 'live_class_settings') echo 'active'; ?>">
							<a href="<?php echo site_url('addons/liveclass/settings'); ?>"><?php echo get_phrase('live_class_settings'); ?></a>
						</li>
					<?php endif; ?>

					<!--<li class="<?php if ($page_name == 'payment_settings') echo 'active'; ?>">-->
					<!--	<a href="<?php echo site_url('admin/payment_settings'); ?>"><?php echo get_phrase('payment_settings'); ?></a>-->
					<!--</li>-->
				
					
					<!--<li class="<?php if ($page_name == 'manage_language') echo 'active'; ?>">-->
					<!--	<a href="<?php echo site_url('admin/manage_language'); ?>"><?php echo get_phrase('language_settings'); ?></a>-->
					<!--</li>-->
				<!--	<li class="<?php if ($page_name == 'smtp_settings') echo 'active'; ?>">
						<a href="<?php echo site_url('admin/smtp_settings'); ?>"><?php echo get_phrase('smtp_settings'); ?></a>
					</li>-->
					<!--<li class="<?php if ($page_name == 'about') echo 'active'; ?>">
						<a href="<?php echo site_url('admin/about'); ?>"><?php echo get_phrase('about'); ?></a>
					</li>-->
				</ul>
			</li>
		<?php endif; ?>

		<li class="side-nav-item <?php if ($page_name == 'manage_profile') echo 'active'; ?>">
			<a href="<?php echo site_url(strtolower($this->session->userdata('role')) . '/manage_profile'); ?>" class="side-nav-link">
				<i class="dripicons-user"></i>
				<span><?php echo get_phrase('manage_profile'); ?></span>
			</a>
		</li>
		<!--	<?php if (has_permission('directory')) : ?>-->
		<!--	<li class="side-nav-item <?php if ($page_name == 'add_city' || $page_name == 'add_institute' || $page_name == 'manage_institute') : ?> active <?php endif; ?>">-->
		<!--		<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'add_city' || $page_name == 'add_institute'|| $page_name == 'manage_institute') : ?> active <?php endif; ?>">-->
		<!--			<i class="dripicons-network-3"></i>-->
		<!--			<span> <?php echo get_phrase('IFA directory'); ?> </span>-->
		<!--			<span class="menu-arrow"></span>-->
		<!--		</a>-->
		<!--		<ul class="side-nav-second-level" aria-expanded="false">-->
		<!--			<li class="<?php if ($page_name == 'add_city') echo 'active'; ?>">-->
		<!--				<a href="<?php echo site_url('admin/add_city'); ?>"><?php echo get_phrase('Add_city'); ?></a>-->
		<!--			</li>-->

		<!--			<li class="<?php if ($page_name == 'add_institute') echo 'active'; ?>">-->
		<!--				<a href="<?php echo site_url('admin/add_institute'); ?>"><?php echo get_phrase('Add_institute'); ?></a>-->
		
		<script>
function myFunction() {
  var txt;
  if (confirm("Payment module not available!")) {
    txt = "You pressed OK!";
  } else {
    // txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

		<!--			</li>-->
		<!--			<li class="<?php if ($page_name == 'manage_institute') echo 'active'; ?>">-->
		<!--				<a href="<?php echo site_url('admin/manage_institute'); ?>"><?php echo get_phrase('Manage_institute'); ?></a>-->
		<!--		    </li>-->
		<!--		</ul>-->
		<!--	</li>-->
		<!--<?php endif; ?>	-->
	</ul>
</div>