<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Anasayfa
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-pink hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">playlist_add_check</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Toplam Kullanıcı</div>
                                        <div class="number count-to" data-from="0" data-to="<?=count($args['activeClient'])+count($args['waitingClient'])?>" data-speed="15" data-fresh-interval="20"><?=count($args['activeClient'])+count($args['waitingClient'])?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-cyan hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">person_add</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Onay bekleyen kullanıcı</div>
                                        <div class="number count-to" data-from="0" data-to="<?=count($args['waitingClient'])?>" data-speed="1000" data-fresh-interval="20"><?=count($args['waitingClient'])?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-light-green hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">playlist_add_check</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Toplam Pt</div>
                                        <div class="number count-to" data-from="0" data-to="<?=count($args['activePt'])+count($args['waitingPt'])?>" data-speed="1000" data-fresh-interval="20"><?=count($args['activePt'])+count($args['waitingPt'])?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-orange hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">person_add</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Onay bekleyen pt</div>
                                        <div class="number count-to" data-from="0" data-to="<?=count($args['waitingPt'])?>" data-speed="1000" data-fresh-interval="20"><?=count($args['waitingPt'])?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Jquery Core Js -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="admin/plugins/node-waves/waves.js"></script>

    <!-- Editable Table Plugin Js -->
    <script src="admin/plugins/editable-table/mindmup-editabletable.js"></script>

    <!-- Custom Js -->
    <script src="admin/js/admin.js"></script>
    <script src="admin/js/pages/tables/editable-table.js"></script>

    <!-- Demo Js -->
    <script src="admin/js/demo.js"></script>
</body>

</html>
