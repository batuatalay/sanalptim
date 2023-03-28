<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Hocalar</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ad</th>
                                        <th>Kullanıcı Adı</th>
                                        <th>Telefon</th>
                                        <th>Son Aktivite</th>
                                        <th>Durum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($args['allPts'] as $key => $pt) {  
                                        switch ($pt['status']) {
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
                                        <td><?=$key?></td>
                                        <td><?=$pt['name']?></td>
                                        <td><?=$pt['username']?></td>
                                        <td><?=$pt['phone']?></td>
                                        <td><?=$pt['lastLogin']?></td>
                                        <td><span class="<?=$label?>"><?=$pt['status']?></span></td>
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