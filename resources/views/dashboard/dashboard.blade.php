@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">Disini tampilan dashboard untuk Admin</p>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2 d-flex justify-content-between'>
                                    <h3 class='card-title'>Data Buku</h3>
                                </div>
                                <div class="chart-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2 d-flex justify-content-between'>
                                    <h3 class='card-title'>Data Peminjaman</h3>
                                </div>
                                <div class="chart-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2 d-flex justify-content-between'>
                                    <h3 class='card-title'>Data User</h3>
                                </div>
                                <div class="chart-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Peminjaman</h4>
                            <div class="d-flex ">
                                <i data-feather="download"></i>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Buku</th>
                                            <th>Status</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Graiden</td>
                                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                                            <td>076 4820 8838</td>
                                            <td>Offenburg</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dale</td>
                                            <td>fringilla.euismod.enim@quam.ca</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nathaniel</td>
                                            <td>mi.Duis@diam.edu</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Darius</td>
                                            <td>velit@nec.com</td>
                                            <td>0309 690 7871</td>
                                            <td>Ways</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ganteng</td>
                                            <td>velit@nec.com</td>
                                            <td>0309 690 7871</td>
                                            <td>Ways</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oleg</td>
                                            <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                            <td>0500 441046</td>
                                            <td>Rossignol</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kermit</td>
                                            <td>diam.Sed.diam@anteVivamusnon.org</td>
                                            <td>(01653) 27844</td>
                                            <td>Patna</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header">
                            <h4>Your Earnings</h4>
                        </div>
                        <div class="card-body">
                            <div id="radialBars"></div>
                            <div class="text-center mb-5">
                                <h6>From last month</h6>
                                <h1 class='text-green'>+$2,134</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card widget-todo">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h4 class="card-title d-flex">
                                <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progress
                            </h4>

                        </div>
                        <div class="card-body px-0 py-1">
                            <table class='table table-borderless'>
                                <tr>
                                    <td class='col-3'>UI Design</td>
                                    <td class='col-6'>
                                        <div class="progress progress-info">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>60%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>VueJS</td>
                                    <td class='col-6'>
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" style="width: 35%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>30%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>Laravel</td>
                                    <td class='col-6'>
                                        <div class="progress progress-danger">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>50%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>ReactJS</td>
                                    <td class='col-6'>
                                        <div class="progress progress-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>80%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>Go</td>
                                    <td class='col-6'>
                                        <div class="progress progress-secondary">
                                            <div class="progress-bar" role="progressbar" style="width: 65%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>65%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection