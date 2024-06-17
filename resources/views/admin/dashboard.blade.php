@extends('layouts.admin')

@section('title', '
    Tableau de Board
')

@section('content')
<div class="row justify-content-center">
    <div class="col-xxl-3 col-sm-6 col-xxxl-6">
        <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition">
                            <i class="flaticon-donut-chart"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                        <span class="fs-15 fw-semibold">Due Tasks</span>
                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                            <h3 class="body-font fw-bold fs-3 mb-0">41</h3>
                            <span
                                class="bg-success text-success bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">5.80%
                                <i class="flaticon-arrow-up fs-13 fw-normal ms-1"></i></span>
                        </div>
                        <p class="fs-15">Completed projects this month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6 col-xxxl-6">
        <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition">
                            <i class="flaticon-goal"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                        <span class="fs-15 fw-semibold">Active Projects</span>
                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                            <h3 class="body-font fw-bold fs-3 mb-0">65</h3>
                            <span
                                class="bg-danger text-danger bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">1.04%
                                <i
                                    class="flaticon-down-filled-triangular-arrow fs-13 fw-normal ms-1"></i></span>
                        </div>
                        <p class="fs-15">Projects this month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6 col-xxxl-6">
        <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition">
                            <i class="flaticon-timer"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                        <span class="fs-15 fw-semibold">Total Hours</span>
                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                            <h3 class="body-font fw-bold fs-3 mb-0">801:30 Hr</h3>
                            <span
                                class="bg-success text-success bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">5.80%
                                <i class="flaticon-arrow-up fs-13 fw-normal ms-1"></i></span>
                        </div>
                        <p class="fs-15">Projects this month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6 col-xxxl-6">
        <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition">
                            <i class="flaticon-award"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                        <span class="fs-15 fw-semibold">Total Projects</span>
                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                            <h3 class="body-font fw-bold fs-3 mb-0">24k</h3>
                            <span
                                class="bg-success text-success bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">5.80%
                                <i class="flaticon-arrow-up fs-13 fw-normal ms-1"></i></span>
                        </div>
                        <p class="fs-15">Projects this month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection