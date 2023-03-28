<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Tüm Branşlar</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Branş Adı</th>
                                        <th>Durum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($args['allBranches'] as $branch) {  
                                        switch ($branch['status']) {
                                            case 'ACTIVE':
                                                $label = "label bg-green";
                                                break;
                                            case 'PASSIVE':
                                                $label = "label bg-red";
                                                break;
                                        }
                                    ?>
                                    <tr>
                                        <td><?=$branch['id']?></td>
                                        <td><?=$branch['name']?></td>
                                        <td><span class="<?=$label?>"><?=$branch['status']?></span></td>
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