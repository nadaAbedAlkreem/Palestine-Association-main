<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
 		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
 		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{url('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{url('assets/js/custom/widgets.js')}}"></script>
		<script src="{{url('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/users-search.js')}}"></script>	
		<script src="{{url('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{url('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
 
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
 		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
 		<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<!-- <script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script> -->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>






<!-- test -->



		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{url('assets/js/scripts.bundle.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
 		<script src="{{url('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{url('assets/js/custom/widgets.js')}}"></script>
		<script src="{{url('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/users-search.js')}}"></script>
        @push('scripts')
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		<script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });		
       </script>