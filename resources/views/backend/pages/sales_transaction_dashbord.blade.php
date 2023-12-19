@extends('backend.layouts.master')

@section('contents')

    <div class="card_box">
<div class="row">
    <div class="col-md-6 mt-5 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <div class="avatar-lg">
                            <i class="fa-solid fa-comment-dollar"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$todayTotalSales}}</span>TK
                            </h3>
                            <p class="text-muted mb-1 text-truncate">Today Sales</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 mt-5 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <div class="avatar-lg">
                            <i class="fa-solid fa-coins"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$yesterdayTotalSales}}</span>TK
                            </h3>
                            <p class="text-muted mb-1 text-truncate">Yesterday Sales</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 mt-5 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <div class="avatar-lg">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$thisMonthTotalSales}}</span>TK
                            </h3>
                            <p class="text-muted mb-1 text-truncate">This Month Sales</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 mt-5 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <div class="avatar-lg">
                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$lastMonthTotalSales}}</span>Tk
                            </h3>
                            <p class="text-muted mb-1 text-truncate">Last Month Sales</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
</div>
@endsection
