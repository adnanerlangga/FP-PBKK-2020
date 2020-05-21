<?php $this->load->view('_design/_head'); ?>
<?php $this->load->view('dashboard/v1_link'); ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-white sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <?php $this->load->view('_design/main_header'); ?>  
        </header>


        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php $this->load->view('_design/main_sidebar'); ?>  
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php $this->load->view('_design/breadcrumb'); ?>  
            


        
            <!-- <div class="col-md-6"> -->
                <!-- <div class="box box-solid"> -->
                    <!-- <div class="box-header with-border">
                        <h3 class="box-title">Carousel</h3>
                    </div> -->
                    <!-- /.box-header -->
                    <!-- <div class="box-body"> -->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="center-block" src="<?php echo base_url() . 'assets/dist/img/1.png'; ?>" alt="Apa itu virus Corona?">

                                    <div class="carousel-caption">
                                    <p style="color:black;">Apa itu virus Corona?</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="center-block" src="<?php echo base_url() . 'assets/dist/img/2.png'; ?>" alt="Apa itu COVID-19?">

                                    <div class="carousel-caption">
                                    <p style="color:black;">Apa itu COVID-19?</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="center-block" src="<?php echo base_url() . 'assets/dist/img/3.png'; ?>" alt="Gejala COVID-19">

                                    <div class="carousel-caption">
                                    <p style="color:black;">Gejala COVID-19</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="center-block" src="<?php echo base_url() . 'assets/dist/img/4.png'; ?>" alt="Hentikan Penyebaran">

                                    <div class="carousel-caption">
                                    <p style="color:black;">Hentikan Penyebaran</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="center-block" src="<?php echo base_url() . 'assets/dist/img/corona1.png'; ?>" alt="Prosedur Karantina Diri">

                                    <div class="carousel-caption">
                                    <p style="color:black;">Prosedur Karantina Diri</p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                            </a>
                        </div>
                    <!-- </div> -->
                    <!-- /.box-body -->
                <!-- </div> -->
                <!-- /.box -->
            <!-- </div> -->
            <!-- /.col -->
            





        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('_design/footer'); ?>  

    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('_design/_end'); ?>  
    <?php $this->load->view('dashboard/v1_end'); ?>  

</body>
</html>
