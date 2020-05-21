<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-lg-12 col-sm-6">
            <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-group"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"></span>
                        <center><h4><b>TERKONFIRMASI</h4></b></center>
                    <?php //echo $datasumpositif['value'].['0']; ?>
                    <span class="info-box-number">
                        <center><h4><?php echo $recSumPositif['value']; ?></h4></center>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-12 col-sm-6">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-smile-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"></span>
                        <center><h4><b>SEMBUH</h4></b></center>
                    <span class="info-box-number">
                        <center><h4><?php echo $recSumSembuh['value']; ?></h4></center>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-12 col-sm-6">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-ambulance"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"></span>
                        <center><h4><b>MENINGGAL</h4></b></center>
                    <span class="info-box-number">
                        <center><h4><?php echo $recSumMeninggal['value']; ?></h4></center></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-default">
                <div class="box-header">
                    <center><h3 class="box-title"><b>Informasi Penyebaran COVID-19</br> <?php echo $sub_title; ?></b></h3></center>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="internasional" class="table w-50 table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Confirmed</th>
                                <th>Active</th>
                                <th>Recovered</th>
                                <th>Deaths</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php foreach ($recDetails as $datadetails) : ?>
                            <tr>
                                <td><?php echo $datadetails['attributes']['Country_Region']; ?></td>
                                <td><?php echo $datadetails['attributes']['Confirmed']; ?></td>
                                <td><?php echo $datadetails['attributes']['Active']; ?></td>
                                <td><?php echo $datadetails['attributes']['Recovered']; ?></td>
                                <td><?php echo $datadetails['attributes']['Deaths']; ?></td>
                            </tr>
                <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->