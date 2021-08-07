<div class="row">

  <!-- Editor de texto -->
  <div class="col-md-10">

    <h4> Teste form </h4>

    <form action="" method="post" accept-charset="utf-8">
      <div class="form-floating panel-body">
        <textarea name="editor1"></textarea>
      </div>


      <script>
        CKEDITOR.replace('editor1', {
          extraPlugins: 'embed,autoembed, easyimage,editorplaceholder',
          removePlugins: 'image',
          editorplaceholder: '<h1>Start typing here...</h1>',
          height: 500,

          // Load the default contents.css file plus customizations for this sample.
          contentsCss: [
            'http://cdn.ckeditor.com/4.16.1/full-all/contents.css',
            'https://ckeditor.com/docs/ckeditor4/4.16.1/examples/assets/css/widgetstyles.css'
          ],
          // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
          embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',


        });
      </script>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
    </form>

  </div>


</div>