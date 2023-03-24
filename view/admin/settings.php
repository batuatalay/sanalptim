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
                                Site Ayarları
                            </h2>
                        </div>
                        <div class="body">
                            <form action="/admin/settings" method="POST">
                                <div class="row clearfix">
                                    <?php foreach ($args['settings'] as $key => $value) { 
                                        if(in_array($key, ["contentMessage"])) { ?>
                                            <div class="col-md-12">
                                                <div class="col-md-1 form-control-label">
                                                    <label for="<?=$key?>"><?=ucfirst($key)?></label>
                                                </div>
                                                <div class="body col-md-12">
                                                    <textarea id="tinymce" name="<?=$key?>">
                                                        <?=$value?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        <?php } else {?>
                                            <div class="col-md-1 form-control-label">
                                                <label for="<?=$key?>"><?=ucfirst($key)?></label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="col-md-4" value="<?=$value?>" name="<?=$key?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php  } 
                                    } ?>
                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-success waves-effect">Kaydet</button>
                            </form>
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

    <!-- Ckeditor -->
    <script src="admin/plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="admin/plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="admin/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="admin/js/demo.js"></script>
    <script>
        tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = 'admin/plugins/tinymce';
    </script>
</body>

</html>
