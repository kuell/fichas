<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		@if (Session::has('message'))
		<div class="alert alert-warning fade in">
			<button type="button" class="btn close" data-dismiss="alert" aria-hidden="true">
				×
			</button> 
			<strong>
				{{ Session::get('message') }}
			</strong>
			@if ($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>')) }}
				</ul>
			@endif
		</div>
		@endif
		<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->@yield('main')</div>
</div>
<!-- END CONTENT -->