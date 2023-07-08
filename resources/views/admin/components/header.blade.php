<!DOCTYPE html>
<html lang="en"
      <?php $Is_Rtl=env('admin_is_rtl',true);?>
      <?php if($Is_Rtl): ?> direction="rtl" style="direction: rtl;"   <?php endif; ?>>
<!--begin::Head-->
	<head>
        {{--  Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="{{url('/')}}/Admin/assets/media/logos/favicon.ico"/>

        <title>{{$meta_title ?? ''}}</title>

        @include('admin.components.header.header_components')
        @stack('custom-css')
	</head>

<!--end::Head-->
