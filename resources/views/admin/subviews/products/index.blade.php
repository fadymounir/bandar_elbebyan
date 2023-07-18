@extends('admin.main_layout')
@section('header_title',__('admin.products'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">{{__('admin.products')}}</h3>
                        <div>
                            <span class="btn btn-primary mt-5" onclick="refreshTable();"> <i class="fa fa-cogs"></i> Refresh Table</span>
                            <span class="btn btn-success mt-5 mr-1 addNewUser"> <i class="fa fa-user-plus"></i> {{__('admin.create_new_product')}} </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-striped">
                            <thead>
                            <tr>
                                <td>{{__('admin.name_ar')}}</td>
                                <td>{{__('admin.name_en')}}</td>
                                <td>{{__('admin.gold_weight')}}</td>
                                <td>{{__('admin.diamond_weight')}}</td>
                                <td>{{__('admin.default_image')}}</td>
                                <td>{{__('admin.price')}}</td>
                                <td>{{__('admin.is_discount')}}</td>
                                <td>{{__('admin.discount_value')}}</td>
                                <td>{{__('admin.discount_type')}}</td>
                                <td>{{__('admin.is_available')}}</td>
                                <td>{{__('admin.is_active')}}</td>
                                <td>{{__('admin.actions')}}</td>
                                <td>{{__('admin.created_at')}}</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('admin.subviews.products.scripts')
@endsection
