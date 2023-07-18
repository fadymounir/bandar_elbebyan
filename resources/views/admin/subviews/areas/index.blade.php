@extends('admin.main_layout')
@section('header_title',__('admin.area'))
@section('content')
    @include('admin.subviews.areas.addEditArea')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                        <div>
                            <span class="btn btn-primary mt-5" onclick="refreshTable();"> <i class="fa fa-cogs"></i> Refresh Table</span>
                            <span class="btn btn-success mt-5 mr-1 addNewArea"> <i class="fa fa-user-plus"></i> {{__('admin.create_new_area')}} </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-striped">
                            <thead>
                            <tr>
                                <td>{{__('admin.name_ar')}}</td>
                                <td>{{__('admin.name_en')}}</td>
                                <td>{{__('admin.city')}}</td>
                                <td>{{__('admin.status')}}</td>
                                <td>{{__('admin.update')}}</td>
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
    @include('admin.subviews.areas.scripts')
@endsection
