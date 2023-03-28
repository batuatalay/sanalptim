<!-- Multi Select Css -->
<link href="/admin/plugins/multi-select/css/multi-select.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PT Ekle
                            </h2>
                        </div>
                        <div class="body">
                            <form action="/admin/pt/add" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Ad</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Soyad</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="" name="surname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Kullanıcı Adı</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="" name="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Şifre</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control" placeholder="" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Resim</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" placeholder="" name="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Branşlar</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="select" multiple data-mdb-filter="true" name="branches[]">
                                            <?php foreach ($args['branches'] as $id => $branch) { ?>
                                                <option value="<?=$id?>"><?=$branch?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Telefon</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="" name="properties[phone]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Eposta</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="" name="properties[mail]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Adres</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" placeholder="" name="properties[address]"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if (isset($args['response']) && $args['response']) { ?>
                                    <div class="alert alert-success">
                                        <p> Pt başarıyla eklendi </p>
                                    </div>

                                <?php } ?>
                                <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">Kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
