

<div class="card card-signin my-2">
    <div class="card-body">
         <br>
        <div class="row" style="margin:3px">
            <div class ="col">
                <a href="../functions/home-gerente.php" class="float-left btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-arrow-left"></i></a>
            </div>
        </div>
        <h1>Reportes de ganancia</h1><br>

        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha</th>
                                <th>Ganancia por dia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach ($pordia as $pordias): ?>
                                <td>
                                    <?=htmlspecialchars($pordias['FECHA'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                        
                                <td>
                                    <?=htmlspecialchars(("$" .$pordias['TOTAL']), ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                                <tr>
                                    <td>PROMEDIO: </td>
                                <td>
                                    <?=htmlspecialchars("$" .$totalGanDia, ENT_QUOTES, 'UTF-8')?>
                                </td>
                                </tr>
                            <tr>
                                <th colspan="7" class="ts-pager">
                                    <div class="form-inline">
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary first" title="first">⇤</button>
                                        <button type="button" class="btn btn-secondary prev" title="previous">←</button>
                                    </div>
                                    <span class="pagedisplay"></span>
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary next" title="next">→</button>
                                        <button type="button" class="btn btn-secondary last" title="last">⇥</button>
                                    </div>
                                    <select class="form-control-sm custom-select px-1 pagesize" title="Select page size">
                                        <option selected="selected" value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="all">All Rows</option>
                                    </select>
                                    <select class="form-control-sm custom-select px-4 mx-1 pagenum" title="Select page number"></select>
                                    </div>
                                </th>   
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha</th>
                                <th>Ganancia por Mes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach ($pormes as $pormeses): ?>
                                <td>
                                    <?=htmlspecialchars($pormeses['FECHA'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                        
                                <td>
                                    <?=htmlspecialchars(("$" .$pormeses['TOTAL']), ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                                <tr>
                                    <td>PROMEDIO: </td>
                                <td>
                                    <?=htmlspecialchars("$" .$totalGanMes, ENT_QUOTES, 'UTF-8')?>
                                </td>
                                </tr>
                            <tr>
                                <th colspan="7" class="ts-pager">
                                    <div class="form-inline">
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary first" title="first">⇤</button>
                                        <button type="button" class="btn btn-secondary prev" title="previous">←</button>
                                    </div>
                                    <span class="pagedisplay"></span>
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary next" title="next">→</button>
                                        <button type="button" class="btn btn-secondary last" title="last">⇥</button>
                                    </div>
                                    <select class="form-control-sm custom-select px-1 pagesize" title="Select page size">
                                        <option selected="selected" value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="all">All Rows</option>
                                    </select>
                                    <select class="form-control-sm custom-select px-4 mx-1 pagenum" title="Select page number"></select>
                                    </div>
                                </th>   
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha</th>
                                <th>Ganancia por Año</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($foryear as $foryears): ?>
                            <tr>
                                <td>
                                    <?=htmlspecialchars($foryears['FECHA'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                                <td>
                                    <?=htmlspecialchars("$" .$foryears['TOTAL'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>PROMEDIO: </td>
                                <td>
                                    <?=htmlspecialchars("$" .$totalGanYear, ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="7" class="ts-pager">
                                    <div class="form-inline">
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary first" title="first">⇤</button>
                                        <button type="button" class="btn btn-secondary prev" title="previous">←</button>
                                    </div>
                                    <span class="pagedisplay"></span>
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary next" title="next">→</button>
                                        <button type="button" class="btn btn-secondary last" title="last">⇥</button>
                                    </div>
                                    <select class="form-control-sm custom-select px-1 pagesize" title="Select page size">
                                        <option selected="selected" value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="all">All Rows</option>
                                    </select>
                                    <select class="form-control-sm custom-select px-4 mx-1 pagenum" title="Select page number"></select>
                                    </div>
                                </th>   
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xs-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <th class="sorter-false filter-false">Ganancias Totales</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?=htmlspecialchars("$" .$gananciasTotales, ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
            <hr class="my-4">
            <div class="col-md-6 col-lg-12 col-xs-6">
                <h1>Clientes</h1><br>
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th class="filter-select filter-exact" data-placeholder="Tipo de Cliente">Tipo de Cliente</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($cliente as $clientes): ?>
                            <tr>
                                <td>
                                    <?=htmlspecialchars($clientes['DESCRIPCION'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                                <td>
                                    <?=htmlspecialchars($clientes['CANTIDAD'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>TOTAL: </td>
                                <td>
                                    <?=htmlspecialchars($cantCliente['TOTAL'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <br>
            <div class="col-md-6 col-lg-4 col-xs-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha</th>
                                <th>Pomedio Clientes por Dia</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($clientes_por_dia as $clientes_por_dias): ?>
                            <tr>
                                <td>
                                    <?=htmlspecialchars($clientes_por_dias['FECHA'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                                <td>
                                    <?=htmlspecialchars($clientes_por_dias['TOTAL'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>PROMEDIO: </td>
                                <td>
                                    <?=htmlspecialchars($totalDia, ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <th>Fecha</th>
                            <th>Pomedio Clientes por Mes</th>
                        </thead>
                        <tbody>
                        <?php foreach ($clientes_por_mes as $clientes_por_meses): ?>
                            <tr>
                                <td>
                                    <?=htmlspecialchars($clientes_por_meses['FECHA'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                                <td>
                                    <?=htmlspecialchars($clientes_por_meses['TOTAL'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>PROMEDIO: </td>
                                <td>
                                    <?=htmlspecialchars($totalMes, ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <th>Fecha</th>
                            <th>Pomedio Clientes por Año</th>
                        </thead>
                        <tbody>
                        <?php foreach ($clientes_por_year as $clientes_por_years): ?>
                            <tr>
                                <td>
                                    <?=htmlspecialchars($clientes_por_years['FECHA'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                                <td>
                                    <?=htmlspecialchars($clientes_por_years['TOTAL'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>PROMEDIO: </td>
                                <td>
                                    <?=htmlspecialchars($totalYear, ENT_QUOTES, 'UTF-8')?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <hr class="my-4">
            <div class="col-12">
                <h1>Lugares</h1><br><br>
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <th class="sorter-false filter-false">Lugares libres Actualmente</th>
                        </thead>
                        <tbody>
                        <?php foreach ($lugares_disponibles as $lugar): ?>
                                <td>
                                    <?=htmlspecialchars($lugar['CANTIDAD'], ENT_QUOTES, 'UTF-8')?>
                                </td>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

            
<script>
    activateTablesorter();
</script>