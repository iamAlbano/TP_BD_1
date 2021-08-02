<div class="row">

  <!-- Editor de texto -->
  <div class="col-md-10">

    <h2> Teste editor de texto</h2>

    <textarea id="editor">This is some sample content.</textarea>
    <script>
      ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
          console.log(editor);
        })
        .catch(error => {
          console.error(error);
        });
    </script>

  </div>

</div>