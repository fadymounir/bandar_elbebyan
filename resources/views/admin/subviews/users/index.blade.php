@extends('admin.main_layout')
@section('header_title',__('admin.users'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">{{__('admin.users')}}</h3>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-striped">
                            <thead>
                            <tr>
                                <td>{{__('admin.name')}}</td>
                                <td>{{__('admin.phone')}}</td>
                                <td>{{__('admin.email')}}</td>
                                <td>{{__('admin.avatar')}}</td>
                                <td>{{__('admin.status')}}</td>
                                <td>{{__('admin.created_at')}}</td>
                                <td>{{__('admin.actions')}}</td>
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
    @include('admin.subviews.users.scripts')
@endsection
