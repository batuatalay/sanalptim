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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Son 50 kullanıcı</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ad-Soyad</th>
                                        <th>Kullanıcı Adı</th>
                                        <th>Telefon</th>
                                        <th>Üyelik Tipi</th>
                                        <th>Durum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($args['allClients'] as $client) {  
                                        switch ($client['status']) {
                                            case 'ACTIVE':
                                                $label = "label bg-green";
                                                break;
                                            case 'WAITING':
                                                $label = "label bg-orange";
                                                break;
                                            case 'PASSIVE':
                                                $label = "label bg-red";
                                                break;
                                        }
                                    ?>
                                    <tr>
                                        <td><?=$client['id']?></td>
                                        <td><?=ucfirst($client['name']) . ' ' . ucfirst($client['surname'])?></td>
                                        <td><?=$client['username']?></td>
                                        <td><?=$client['phone']?></td>
                                        <td><?=$client['type']?></td>
                                        <td><span class="<?=$label?>"><?=$client['status']?></span></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>