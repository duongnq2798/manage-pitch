@extends('Layout.Admin.User.master')

@push('css')
    <title>
        {{ __('Trang chủ') }}
    </title>
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-warning text-center">
                                        <i class="ti-server"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Capacity</p>
                                        105GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-reload"></i> Updated now
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-success text-center">
                                        <i class="ti-wallet"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Revenue</p>
                                        $1,345
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-calendar"></i> Last day
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-danger text-center">
                                        <i class="ti-pulse"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Errors</p>
                                        23
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-timer"></i> In the last hour
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-info text-center">
                                        <i class="ti-twitter-alt"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>Followers</p>
                                        +45
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-reload"></i> Updated now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-7">
                                    <div class="numbers pull-left">
                                        {{ __('Khách hàng') }}
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="pull-right">
                                        <span class="label label-success">
                                            ? %
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <h6 class="big-title">{{ __('Tổng số') }} <span class="text-muted">{{ __('khách hàng') }}</span> {{ __($customer_statistical['count']) }}</h6>
                            <div class="card-title">
                                <div class="d-flex justify-content-between col-md-6 col-md-offset-3">
                                    <div>{{ __('Hoạt động: '.$customer_statistical['count_acitve']) }}</div>
                                    -
                                    <div>{{ __('Khóa: '.$customer_statistical['count_lock']) }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                {{ __('Chi tiết') }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('admin.customer') }}" class="btn btn-info btn-fill btn-icon btn-sm">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-7">
                                    <div class="numbers pull-left">
                                        {{ __('Sân bóng') }}
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="pull-right">
                                        {{-- <span class="label label-danger">
                                            -14%
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                            <h6 class="big-title">{{ __('Tổng số') }} <span class="text-muted">{{ __('sân bóng') }}</span> {{ __($pitch_statistical['count']) }}</h6>
                            <div class="card-title">
                                <div class="d-flex justify-content-between col-md-6 col-md-offset-3">
                                    <div>{{ __('Hoạt động: '.$pitch_statistical['count_acitve']) }}</div>
                                    -
                                    <div>{{ __('Khóa: '.$pitch_statistical['count_lock']) }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                {{ __('Chi tiết') }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('admin.pitch') }}" class="btn btn-info btn-fill btn-icon btn-sm">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-7">
                                    <div class="numbers pull-left">
                                        {{ __('Khung giờ') }}
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="pull-right">
                                        {{-- <span class="label label-warning">
                                            ~51%
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                            <h6 class="big-title">{{ __('Tổng số') }} <span class="text-muted">{{ __('khung giờ') }}</span> {{ __($time_slots_statistical['count']) }}</h6>
                            <div class="card-title">
                                <div class="d-flex justify-content-between col-md-6 col-md-offset-3">
                                    <div>{{ __('Hoạt động: '.$time_slots_statistical['count_acitve']) }}</div>
                                    -
                                    <div>{{ __('Khóa: '.$time_slots_statistical['count_lock']) }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                                {{ __('Chi tiết') }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('admin.time') }}" class="btn btn-info btn-fill btn-icon btn-sm">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-circle-chart" data-background-color="blue">
                        <div class="card-header text-center">
                            <h5 class="card-title">Dashboard</h5>
                            <p class="description">Monthly sales target</p>
                        </div>
                        <div class="card-content">
                            <div id="chartDashboard" class="chart-circle" data-percent="70">70%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-circle-chart" data-background-color="green">
                        <div class="card-header text-center">
                            <h5 class="card-title">Orders</h5>
                            <p class="description">Completed</p>
                        </div>
                        <div class="card-content">
                            <div id="chartOrders" class="chart-circle" data-percent="34">34%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-circle-chart" data-background-color="orange">
                        <div class="card-header text-center">
                            <h5 class="card-title">New Visitors</h5>
                            <p class="description">Out of total number</p>
                        </div>
                        <div class="card-content">
                            <div id="chartNewVisitors" class="chart-circle" data-percent="62">62%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-circle-chart" data-background-color="brown">
                        <div class="card-header text-center">
                            <h5 class="card-title">Subscriptions</h5>
                            <p class="description">Monthly newsletter</p>
                        </div>
                        <div class="card-content">
                            <div id="chartSubscriptions" class="chart-circle" data-percent="10">10%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function(){
            demo.initOverviewDashboard();
            demo.initCirclePercentage();

        });
    </script>
@endpush