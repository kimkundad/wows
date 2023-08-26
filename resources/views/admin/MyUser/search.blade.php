@extends('admin.layouts.template')

@section('title')
<title>สูตรบาคาร่า5ดาว -สูตรบาร์ที่ดีที่สุดและแม่นยำที่สุดในไทย อันดับ 1</title>
    <meta name="description" content=" สูตรบาคาร่า5ดาว -สูตรบาร์ที่ดีที่สุดและแม่นยำที่สุดในไทย อันดับ 1">
@stop
@section('stylesheet')

@stop('stylesheet')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            จัดการผู้ใช้งานทั้งหมด</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">จัดการ</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">User</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="{{ url('admin/MyUser/create') }}" class="btn btn-sm fw-bold btn-primary" >
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/arrows/arr017.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-1hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M11 13H7C6.4 13 6 12.6 6 12C6 11.4 6.4 11 7 11H11V13ZM17 11H13V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="currentColor"/>
                            <path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM17 11H13V7C13 6.4 12.6 6 12 6C11.4 6 11 6.4 11 7V11H7C6.4 11 6 11.4 6 12C6 12.6 6.4 13 7 13H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="currentColor"/>
                            </svg>
                            </span>
                            <!--end::Svg Icon-->
                            สร้างใหม่
                        </a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <div class="d-flex">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">ผู้ใช้งาน {{ count($objs) }} / คน</span>
                                <span class="text-danger mt-1 fw-semibold fs-7">ไม่สามารถลบ superadmin ออกได้ </span>
                            </h3>
                        </div>
                        
                    </div>
                    
                        <div class="card-body py-3">
                            <form action="{{url('admin/users_search')}}" method="GET" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="d-flex">
                                    <input  type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" placeholder="ค้นหาบัญชีผู้ใช้งาน" value="{{$search}}" />
                                    <button type="submit" class="btn btn-light fw-bold flex-shrink-0" >ค้นหา</button>
                                </div>
                            </form>
                            <hr>
                            <br>

                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-3">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 "></th>
                                            <th class="p-0 ">ชื่อผู้ใช้งาน</th>
                                            <th class="p-0 ">password</th>
                                            <th class="p-0 ">หมดอายุ</th>
                                            <th class="p-0 ">วันที่สมัคร</th>
                                            <th class="p-0 "></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @isset($objs)
                                            @foreach ($objs as $item)
                                        
                                        <tr id="{{$item->id_q}}">
                                            <td>
                                                <div class="symbol symbol-50px">
                                                    <img src="{{ url('admin/assets/media/avatars/'.$item->avatar) }}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="text-dark text-hover-primary fs-6 fw-bold">{{ $item->name }}</a>
                                                    <a href="#" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                        <span class="text-dark">Role</span>: {{ $item->name1 }}
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $item->names }}
                                            </td>
                                            <td>
                                                {{ $item->code_user }}
                                            </td>
                                            @php

                                            $now = time(); // or your date as well
                                            $your_date = strtotime($item->birthday);
                                            $datediff = $your_date - $now;
                                            $sumday = round($datediff / (60 * 60 * 24));
                                            @endphp
                                            <td>
                                                @if($sumday <= 0)
                                                <b class="text-danger"> หมดอายุแล้ว </b>
                                                @elseif($sumday <= 7)
                                                <b class="text-warning"> {{ $item->birthday }}  ใกล้อายุแล้ว </b>
                                                @else
                                                {{ $item->birthday }}
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->created_ats }}
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="{{url('admin/MyUser/'.$item->id_q.'/edit')}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="{{ url('api/del_MyUser/'.$item->id_q) }}" onclick="return confirm('Are you sure?')" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                            @endforeach

                                        @endisset
                                       
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            @if(count($objs) > 10)
                            @include('admin.pagination.default', ['paginator' => $objs])
                            @endif
                        </div>
                    </div>
                    
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>

@endsection

@section('scripts')




@stop('scripts')
