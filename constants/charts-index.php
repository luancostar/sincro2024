<div class="row">
                    <div class="col-xl-7 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Análise de Vendas</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Mês
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a id="time-a-period" href="javascript:void(0);" class="dropdown-item">Weekly</a>
                                            </li>
                                            <li>
                                                <a id="time-a-period" href="javascript:void(0);" class="dropdown-item">Monthly</a>
                                            </li>
                                            <li>
                                                <a id="time-a-period" href="javascript:void(0);" class="dropdown-item">Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                </div>
                                <div id="sales_chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Maiores Despesas por Setor</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Mês
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a id="time-a-period" href="javascript:void(0);" class="dropdown-item">Weekly</a>
                                            </li>
                                            <li>
                                                <a id="time-a-period" href="javascript:void(0);" class="dropdown-item">Monthly</a>
                                            </li>
                                            <li>
                                                <a id="time-a-period" href="javascript:void(0);" class="dropdown-item">Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="invoice_chart"></div>
                                <div class="text-center text-muted">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mt-4">
                                                <p class="mb-2 text-truncate"><i
                                                        class="fas fa-circle text-primary me-1"></i> Administrativo</p>
                                                <h5>$2,132</h5>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-4">
                                                <p class="mb-2 text-truncate"><i
                                                        class="fas fa-circle text-success me-1"></i> Frota</p>
                                                <h5>$1,763</h5>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-4">
                                                <p class="mb-2 text-truncate"><i
                                                        class="fas fa-circle text-danger me-1"></i> Operacional</p>
                                                <h5>$973</h5>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-4">
                                                <p class="mb-2 text-truncate"><i
                                                        class="fas fa-circle text-purple me-1"></i> Financeiro</p>
                                                <h5>$973</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>