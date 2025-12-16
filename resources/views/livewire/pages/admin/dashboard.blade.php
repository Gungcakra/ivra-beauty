<x-slot:title>Ivira Beauty - Dashboard</x-slot:title>

<div class="flex container flex-col">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    {{-- <li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Dashboards</li> --}}
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl" style="min-height: 100vh">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                                <i class="ki-duotone ki-call text-white fs-2qx lh-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end mb-3">
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fs-3hx text-white fw-bold me-6">Rp {{ number_format($thisMonthIncome, 0, ',', '.') }}</span>
                                {{-- <div class="fw-bold fs-6 text-white">
									<span class="d-block">This Month</span>
									<span class="">Income</span>
								</div> --}}
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                            <!--begin::Progress-->
                            <div class="fw-bold text-white py-2">
                                <span class="fs-1 d-block">Total Pemasukan</span>
                                <span class="d-block">Bulan {{ \Carbon\Carbon::now()->translatedFormat('F') }}</span>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                                <i class="ki-duotone ki-call text-white fs-2qx lh-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end mb-3">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="fs-3hx text-white fw-bold me-6">{{ $thisMonthReservasiCount }}</span>
                                {{-- <div class="fw-bold fs-6 text-white">
									<span class="d-block">Outbound</span>
									<span class="">Calls</span>
								</div> --}}
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                            <!--begin::Progress-->
                            <div class="fw-bold text-white py-2">
                                <span class="fs-1 d-block">Total Reservasi</span>
                                <span class="d-block">Bulan {{ \Carbon\Carbon::now()->translatedFormat('F') }}</span>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->
            </div>
        </div>
        <!--end::Content container-->
    </div>

</div>
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function() {
        $('input[id="range"]').daterangepicker({
            opens: "left",
            locale: {
                format: "MM/DD/YYYY"
            }
        });


        $("#range").on("apply.daterangepicker", function(event, picker) {
            $(this).val(
                picker.startDate.format("MM/DD/YYYY") +
                " - " +
                picker.endDate.format("MM/DD/YYYY")
            );
            Livewire.dispatch('loadData', {
                startDate: picker.startDate.format("YYYY-MM-DD"),
                endDate: picker.endDate.format("YYYY-MM-DD")
            });
        });


        $("#range").on("cancel.daterangepicker", function() {
            $(this).val('');
        });
    });




    // (function () {
    //     var e = document.getElementById("kt_charts_widget_3_chart");
    //     if (e) {
    //     var t = { self: null, rendered: false };

    //     var renderChart = function () {
    //         var chartHeight = parseInt(KTUtil.css(e, "height"));
    //         var gray500 = KTUtil.getCssVariableValue("--bs-gray-500");
    //         var gray200 = KTUtil.getCssVariableValue("--bs-gray-200");
    //         var infoColor = KTUtil.getCssVariableValue("--bs-info");

    //         var options = {
    //         series: [
    //             {
    //             name: "Monthly Service",
    //             data: window.incomeChartData.map(item => item.income),
    //             },
    //         ],
    //         chart: {
    //             fontFamily: "inherit",
    //             type: "area",
    //             height: chartHeight,
    //             toolbar: { show: false },
    //         },
    //         plotOptions: {},
    //         legend: { show: false },
    //         dataLabels: { enabled: false },
    //         fill: { type: "solid", opacity: 1 },
    //         stroke: {
    //             curve: "smooth",
    //             show: true,
    //             width: 3,
    //             colors: [infoColor],
    //         },
    //         xaxis: {
    //             categories: window.incomeChartData.map(item => item.hour),
    //             axisBorder: { show: false },
    //             axisTicks: { show: false },
    //             labels: {
    //             style: {
    //                 colors: gray500,
    //                 fontSize: "12px",
    //             },
    //             },
    //             crosshairs: {
    //             position: "front",
    //             stroke: {
    //                 color: infoColor,
    //                 width: 1,
    //                 dashArray: 3,
    //             },
    //             },
    //             tooltip: {
    //             enabled: true,
    //             offsetY: 0,
    //             style: { fontSize: "12px" },
    //             },
    //         },
    //         yaxis: {
    //             labels: {
    //             style: {
    //                 colors: gray500,
    //                 fontSize: "12px",
    //             },
    //             },
    //         },
    //         states: {
    //             normal: { filter: { type: "none", value: 0 } },
    //             hover: { filter: { type: "none", value: 0 } },
    //             active: {
    //             allowMultipleDataPointsSelection: false,
    //             filter: { type: "none", value: 0 },
    //             },
    //         },
    //         tooltip: {
    //             style: { fontSize: "12px" },
    //             y: {
    //             formatter: function (value) {
    //                 return "Rp " + value + "K";
    //             },
    //             },
    //         },
    //         colors: [
    //             KTUtil.getCssVariableValue("--bs-info-light"),
    //         ],
    //         grid: {
    //             borderColor: gray200,
    //             strokeDashArray: 4,
    //             yaxis: { lines: { show: true } },
    //         },
    //         markers: { strokeColor: infoColor, strokeWidth: 3 },
    //         };

    //         t.self = new ApexCharts(e, options);
    //         t.self.render();
    //         t.rendered = true;
    //     };

    //     renderChart();

    //     KTThemeMode.on("kt.thememode.change", function () {
    //         if (t.rendered) {
    //         t.self.destroy();
    //         }
    //         renderChart();
    //     });
    //     }
    // })();
</script>
@endpush