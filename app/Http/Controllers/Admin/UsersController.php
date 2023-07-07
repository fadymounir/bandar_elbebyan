<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Exceptions\Exception;

class UsersController extends Dashboard
{
    /**
     * @throws Exception
     */
    public function index(Request $request)
    {
        if (\request()->ajax()) {
            $users = User::query()->where('type', 'user');
            return datatables($users)
                ->addColumn('name', function () {
                    return $this->componentsPath('spanTag');
                })
                ->addColumn('email', function () {

                })
                ->addColumn('phone', function () {

                })
                ->addColumn('avatar', function () {

                })
                ->addColumn('is_active', function () {

                })
                ->make();
        }
        return view('admin.subviews.users.index');
    }
}
