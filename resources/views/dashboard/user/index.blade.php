@extends('app.dashboard')
@section('title', 'Users')

@section('content')
    <div class="main-content">

        @include('partials.breadcrumb', [
            'page_title' => 'Table Users',
            'page_breadcrumb' => 'Users',
            'page_sub_breadcrumb' => 'Table',
            'form_page' => 'user.create',
        ])

        <div class="box">
            {{-- <div class="box-header">
                <h5 class="box-title">Overflow Tables</h5>
            </div> --}}
            <div class="box-body">
                <div class="flex flex-col">
                    <div class="flex justify-end items-center mb-4 space-x-3">
                        {{-- <h5 class="box-title">Users Table</h5> --}}
                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            <i class="ri-file-excel-2-fill ri-xl"></i>
                        </a>
                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            <i class="ri-file-pdf-fill ri-xl"></i>
                        </a>
                    </div>
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-auto table-bordered">
                                <table class="ti-custom-table ti-custom-table-head">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col" class="!text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-medium">John Brown</td>
                                            <td>Regional Paradigm Technician</td>
                                            <td>john@site.com</td>
                                            <td>45</td>
                                            <td>New York No. 1 Lake Park</td>
                                            <td class="text-end font-medium">
                                                <a class="text-warning hover:text-warning"
                                                    href="javascript:void(0);">Edit</a>
                                                |
                                                <a class="text-danger hover:text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-medium">Jim Green</td>
                                            <td>Forward Response Developer</td>
                                            <td>jim@site.com</td>
                                            <td>27</td>
                                            <td>London No. 1 Lake Park</td>
                                            <td class="text-end font-medium">
                                                <a class="text-warning hover:text-warning"
                                                    href="javascript:void(0);">Edit</a>
                                                |
                                                <a class="text-danger hover:text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-medium">Joe Black</td>
                                            <td>Product Directives Officer</td>
                                            <td>joe@site.com</td>
                                            <td>31</td>
                                            <td>Sidney No. 1 Lake Park</td>
                                            <td class="text-end font-medium">
                                                <a class="text-warning hover:text-warning"
                                                    href="javascript:void(0);">Edit</a>
                                                |
                                                <a class="text-danger hover:text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
