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
                                Branş Ekle
                            </h2>
                        </div>
                        <div class="body">
                            <form action="/admin/branch/add" method="POST">
                                <div class="row clearfix">
                                    <div class="col-md-1 form-control-label">
                                        <label for="title">Branş Başlığı</label>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="body col-md-12">
                                            <textarea id="tinymce" name="content"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <?php if (isset($args['response']) && $args['response']) { ?>
                                    <div class="alert alert-success">
                                        <p> Branş başarıyla eklendi </p>
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
</section>
    <!-- TinyMCE -->
    <script src="admin/plugins/tinymce/tinymce.js"></script>
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
