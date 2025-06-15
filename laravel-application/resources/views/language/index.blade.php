@extends('layouts2.app')

@section('content')
    <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
                <div class="col-md">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-header-title">Users</h4>

                        <!-- Datatable Info -->
                        <div id="datatableCounterInfo" style="display: none;">
                            <div class="d-flex align-items-center">
                    <span class="fs-6 me-3">
                      <span id="datatableCounter">0</span>
                      Selected
                    </span>
                                <a class="btn btn-outline-danger btn-sm" href="{{asset('javascript:;')}}">
                                    <i class="tio-delete-outlined"></i> Delete
                                </a>
                            </div>
                        </div>
                        <!-- End Datatable Info -->
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                    <!-- Filter -->
                    <div class="row align-items-sm-center">
                        <div class="col-sm-auto">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <span class="text-secondary me-2">Status:</span>
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                    <!-- Select -->
                                    <div class="tom-select-custom tom-select-custom-end">
                                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="2" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "10rem"
                                }'>
                                            <option value="null" selected="">All</option>
                                            <option value="successful">Successful</option>
                                            <option value="overdue">Overdue</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                    <!-- End Select -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <span class="text-secondary me-2">Signed up:</span>
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                    <!-- Select -->
                                    <div class="tom-select-custom tom-select-custom-end">
                                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="5" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "10rem"
                                }'>
                                            <option value="null" selected="">All</option>
                                            <option value="1 year ago">1 year ago</option>
                                            <option value="6 months ago">6 months ago</option>
                                        </select>
                                    </div>
                                    <!-- End Select -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Col -->

                        <div class="col-md">
                            <form>
                                <!-- Search -->
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-search"></i>
                                    </div>
                                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                                </div>
                                <!-- End Search -->
                            </form>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Filter -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- Table -->
        <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 1, 4],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
                <thead class="thead-light">
                <tr>
                    <th >#</th>
                    <th>Name</th>

                </tr>
                </thead>

                <tbody>
                @foreach($languages as $language)
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td>{{$language->name}}</td>
                        <td>
                            <a href="{{route('language.edit',$language)}}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{route('language.destroy',$language)}}" style="display: inline-block;" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection
