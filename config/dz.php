<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Name
	|--------------------------------------------------------------------------
	|
	| This value is the name of your application. This value is used when the
	| framework needs to place the application's name in a notification or
	| any other location as required by the application or its packages.
	|
	*/

	'name' => env('APP_NAME', 'Ventic Laravel'),

	'public' => [
		'global' => [
			'css' => [
					'vendor/bootstrap-select/css/bootstrap-select.min.css',
			],
			'js' => [
				'top'=> [
					'vendor/global/global.min.js',
					'vendor/bootstrap-select/js/bootstrap-select.min.js',
				],
				'bottom'=> [
					'js/custom.min.js',
					'js/deznav-init.js',
				],
			],
		],
		'pagelevel' => [
			'css' => [
				'VenticAdminController_dashboard' => [
					'vendor/chartist/css/chartist.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					
				],
				'VenticAdminController_dashboard_2' => [
					'vendor/chartist/css/chartist.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'VenticAdminController_order_list' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'VenticAdminController_event' => [
					'vendor/chartist/css/chartist.min.css',
					'vendor/owl-carousel/owl.carousel.css',
				],
				'VenticAdminController_analytics' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/analytics.js',
				],
				'VenticAdminController_reviews' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
				],
				
				'VenticAdminController_customer' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css',
				],
				'VenticAdminController_customer_list' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'VenticAdminController_content_add' => [
					'vendor/select2/css/select2.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'VenticAdminController_add_email' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/select2/css/select2.min.css',
				],
				'VenticAdminController_menu' => [
					'vendor/nestable2/css/jquery.nestable.min.css',
					
				],
				'VenticAdminController_app_calender' => [
					'vendor/fullcalendar/css/main.min.css'
				],
				'VenticAdminController_app_profile' => [
					'vendor/lightgallery/dist/css/lightgallery.css',
					'vendor/lightgallery/dist/css/lg-thumbnail.css',
					'vendor/lightgallery/dist/css/lg-zoom.css',
				],
				
				'VenticAdminController_post_details' => [
					'vendor/lightgallery/dist/css/lightgallery.css',
					'vendor/lightgallery/dist/css/lg-thumbnail.css',
					'vendor/lightgallery/dist/css/lg-zoom.css',
					'vendor/lightgallery/dist/css/lg-zoom.css',
				],
				'VenticAdminController_add_blog' => [
					'vendor/tagify/tagify.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/select2/css/select2.min.css',
					
				],
				'VenticAdminController_blog_category' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					
				],

				'VenticAdminController_chart_chartist' => [
					'vendor/chartist/css/chartist.min.css'
				],
				'VenticAdminController_chart_chartjs' => [
				],
				'VenticAdminController_chart_flot' => [
				],
				'VenticAdminController_chart_morris' => [
				],
				'VenticAdminController_chart_peity' => [
				],
				'VenticAdminController_chart_sparkline' => [
				],
				'VenticAdminController_ecom_checkout' => [
				],
				'VenticAdminController_ecom_customers' => [
				],
				'VenticAdminController_ecom_invoice' => [
					
				],
				'VenticAdminController_ecom_product_detail' => [
					'vendor/star-rating/star-rating-svg.css',
					'vendor/owl-carousel/owl.carousel.css',
				],
				'VenticAdminController_ecom_product_grid' => [
				],
				'VenticAdminController_ecom_product_list' => [
					'vendor/star-rating/star-rating-svg.css'
				],
				'VenticAdminController_ecom_product_order' => [
				],
				'VenticAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.css'
				],
				'VenticAdminController_email_inbox' => [
					
				],
				'VenticAdminController_email_read' => [
				],
				'VenticAdminController_form_ckeditor' => [
					
				],
				'VenticAdminController_form_element' => [
				],
				'VenticAdminController_form_pickers' => [
					'vendor/bootstrap-daterangepicker/daterangepicker.css',
					'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
					'vendor/jquery-asColorPicker/css/asColorPicker.min.css',
					'vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
					'vendor/pickadate/themes/default.css',
					'vendor/pickadate/themes/default.date.css',
					'https://fonts.googleapis.com/icon?family=Material+Icons',
				],
				'VenticAdminController_email_template' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css',
				],
				'VenticAdminController_blog' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css',
				],
				'VenticAdminController_content' => [
					'vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css',
					'vendor/select2/css/select2.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					
					
				],
				'VenticAdminController_form_validation_jquery' => [
				],
				'VenticAdminController_form_wizard' => [
					'vendor/jquery-smartwizard/dist/css/smart_wizard.min.css',
				],
				'VenticAdminController_map_jqvmap' => [
					'vendor/jqvmap/css/jqvmap.min.css'
				],
				'VenticAdminController_page_error_400' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css'
				],
				'VenticAdminController_table_bootstrap_basic' => [
				],
				'VenticAdminController_table_datatable_basic' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/datatables/responsive/responsive.css'
				],
				'VenticAdminController_uc_lightgallery' => [
					'vendor/lightgallery/dist/css/lightgallery.css',
					'vendor/lightgallery/dist/css/lg-thumbnail.css',
					'vendor/lightgallery/dist/css/lg-zoom.css',
					'vendor/lightgallery/dist/css/lg-zoom.css',
				],
				'VenticAdminController_uc_nestable' => [
					'vendor/nestable2/css/jquery.nestable.min.css'
				],
				'VenticAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.css'
				],
				'VenticAdminController_uc_select2' => [
					'vendor/select2/css/select2.min.css'
				],
				'VenticAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/sweetalert2.min.css'
				],
				'VenticAdminController_uc_toastr' => [
					'vendor/toastr/css/toastr.min.css'
				],
				
				'VenticAdminController_ui_accordion' => [
				],
				'VenticAdminController_ui_alert' => [
				],
				'VenticAdminController_ui_badge' => [
				],
				'VenticAdminController_ui_button' => [
				],
				'VenticAdminController_ui_button_group' => [
				],
				'VenticAdminController_ui_card' => [
				],
				'VenticAdminController_ui_carousel' => [
				],
				'VenticAdminController_ui_dropdown' => [
				],
				'VenticAdminController_ui_grid' => [
				],
				'VenticAdminController_ui_list_group' => [
				],
				'VenticAdminController_ui_media_object' => [
				],
				'VenticAdminController_ui_modal' => [
				],
				'VenticAdminController_ui_pagination' => [
				],
				'VenticAdminController_ui_popover' => [
				],
				'VenticAdminController_ui_progressbar' => [
				],
				'VenticAdminController_ui_tab' => [
				],
				'VenticAdminController_ui_typography' => [
				],
				'VenticAdminController_widget_basic' => [
					'vendor/chartist/css/chartist.min.css',
				],
			],
			'js' => [
				'VenticAdminController_dashboard' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
					
				],
				'VenticAdminController_dashboard_2' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
				],
				'VenticAdminController_order_list' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					
				],
				'VenticAdminController_event' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/event.js',
					'vendor/owl-carousel/owl.carousel.js',
					
				],
				'VenticAdminController_customer' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
				],
				'VenticAdminController_analytics' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/analytics.js',
				],
				'VenticAdminController_content_add' => [
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
					'vendor/ckeditor/ckeditor.js',
				],

				'VenticAdminController_email_template' => [
					'js/dashboard/cms.js',
					'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
				],

				'VenticAdminController_content' => [
					'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
					'js/dashboard/cms.js',
					
				],
				'VenticAdminController_menu' => [
					'vendor/nestable2/js/jquery.nestable.min.js',
					'js/plugins-init/nestable-init.js',
					'js/dashboard/cms.js',
				],
				'VenticAdminController_add_email' => [
					'vendor/ckeditor/ckeditor.js',
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/dashboard/cms.js',
				],
				'VenticAdminController_blog' => [
					'js/dashboard/cms.js',
					'vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js',
				],
				'VenticAdminController_blog_category' => [
					'js/dashboard/cms.js',
				],
				'VenticAdminController_add_blog' => [
					'vendor/ckeditor/ckeditor.js',
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
					'vendor/tagify/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					
				],
				'VenticAdminController_order_detail' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
					'js/dashboard/order-detail.js',
					'vendor/apexchart/apexchart.js',
				],
				'VenticAdminController_customer_list' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'VenticAdminController_market_capital' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/peity/jquery.peity.min.js',
					'js/dashboard/market-capital.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'VenticAdminController_app_calender' => [
					'vendor/moment/moment.min.js',
					'vendor/fullcalendar/js/main.min.js',
					'js/plugins-init/fullcalendar-init.js',
				],
				'VenticAdminController_app_profile' => [
					'vendor/lightgallery/dist/lightgallery.min.js',
					'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
					'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
				],
				'VenticAdminController_post_details' => [
					'vendor/lightgallery/dist/lightgallery.min.js',
					'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
					'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
				],
				'VenticAdminController_chart_chartist' => [
					'vendor/apexchart/apexchart.js',
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'js/plugins-init/chartist-init.js',
				],
				'VenticAdminController_chart_chartjs' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/plugins-init/chartjs-init.js',
				],
				'VenticAdminController_chart_flot' => [
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'js/plugins-init/flot-init.js',
					
				],
				'VenticAdminController_chart_morris' => [
					
					'vendor/apexchart/apexchart.js',
					'vendor/raphael/raphael.min.js',
					'vendor/morris/morris.min.js',
					'js/plugins-init/morris-init.js',
				],
				'VenticAdminController_chart_peity' => [
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
				],
				'VenticAdminController_chart_sparkline' => [
					'vendor/apexchart/apexchart.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
				],
				'VenticAdminController_ecom_checkout' => [
				],
				'VenticAdminController_ecom_customers' => [
				],
				'VenticAdminController_ecom_invoice' => [

				],
				'VenticAdminController_ecom_product_detail' => [
					'vendor/star-rating/jquery.star-rating-svg.js',
					'vendor/owl-carousel/owl.carousel.js',
				],
				'VenticAdminController_ecom_product_grid' => [
				],
				'VenticAdminController_ecom_product_list' => [
					'vendor/star-rating/jquery.star-rating-svg.js'
				],
				'VenticAdminController_ecom_product_order' => [
				],
				'VenticAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.js'
				],
				'VenticAdminController_email_inbox' => [
					
				],
				'VenticAdminController_email_read' => [
				],
				'VenticAdminController_form_ckeditor' => [
					'vendor/ckeditor/ckeditor.js',
					
				],
				'VenticAdminController_form_element' => [
				],
				'VenticAdminController_form_pickers' => [
					'vendor/moment/moment.min.js',
					'vendor/bootstrap-daterangepicker/daterangepicker.js',
					'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
					'vendor/jquery-asColor/jquery-asColor.min.js',
					'vendor/jquery-asGradient/jquery-asGradient.min.js',
					'vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
					'vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
					'vendor/pickadate/picker.js',
					'vendor/pickadate/picker.time.js',
					'vendor/pickadate/picker.date.js',
					'js/plugins-init/bs-daterange-picker-init.js',
					'js/plugins-init/clock-picker-init.js',
					'js/plugins-init/jquery-asColorPicker.init.js',
					'js/plugins-init/material-date-picker-init.js',
					'js/plugins-init/pickadate-init.js',
				],
				'VenticAdminController_form_validation_jquery' => [
				],
				'VenticAdminController_form_wizard' => [
					'vendor/jquery-steps/build/jquery.steps.min.js',
					'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
					
					
				],
				'VenticAdminController_map_jqvmap' => [
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
					'js/plugins-init/jqvmap-init.js',
				],
				'VenticAdminController_page_error_400' => [
				],
				'VenticAdminController_page_error_403' => [
				],
				'VenticAdminController_page_error_404' => [
				],
				'VenticAdminController_page_error_500' => [
				],
				'VenticAdminController_page_error_503' => [
				],
				'VenticAdminController_page_forgot_password' => [
				],
				'VenticAdminController_page_lock_screen' => [
					'vendor/deznav/deznav.min.js'
				],
				'VenticAdminController_page_login' => [
				],
				'VenticAdminController_page_register' => [
				],
				'VenticAdminController_table_bootstrap_basic' => [
					

				],
				'VenticAdminController_table_datatable_basic' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/responsive/responsive.js',
					'js/plugins-init/datatables.init.js',
					
				],
				'VenticAdminController_uc_lightgallery' => [
					'vendor/lightgallery/dist/lightgallery.min.js',
					'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
					'vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js',
					'vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js',
				],
				'VenticAdminController_uc_nestable' => [
					'vendor/nestable2/js/jquery.nestable.min.js',
					'js/plugins-init/nestable-init.js',
				],
				'VenticAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.js',
					'vendor/wnumb/wNumb.js',
					'js/plugins-init/nouislider-init.js',
				],
				'VenticAdminController_uc_select2' => [
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
				],
				'VenticAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/sweetalert2.min.js',
					'js/plugins-init/sweetalert.init.js',
				],
				'VenticAdminController_uc_toastr' => [
					'vendor/toastr/js/toastr.min.js',
					'js/plugins-init/toastr-init.js',
				],
				'VenticAdminController_ui_accordion' => [
					
				],
				'VenticAdminController_ui_alert' => [
					
				],
				'VenticAdminController_ui_badge' => [
					
				],
				'VenticAdminController_ui_button' => [
					
				],
				'VenticAdminController_ui_button_group' => [
					
				],
				'VenticAdminController_ui_card' => [
					
				],
				'VenticAdminController_ui_carousel' => [
					
				],
				'VenticAdminController_ui_dropdown' => [
					
				],
				'VenticAdminController_ui_grid' => [
				],
				'VenticAdminController_ui_list_group' => [
				],
				'VenticAdminController_ui_media_object' => [
				],
				'VenticAdminController_ui_modal' => [
				],
				'VenticAdminController_ui_pagination' => [
					
				],
				'VenticAdminController_ui_popover' => [
				],
				'VenticAdminController_ui_progressbar' => [
					
				],
				'VenticAdminController_ui_tab' => [
					
				],
				'VenticAdminController_ui_typography' => [
				],
				'VenticAdminController_widget_basic' => [
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
					'vendor/chart.js/Chart.bundle.min.js',
					'js/plugins-init/widgets-script-init.js',
				],
			]
		],
	]
];
