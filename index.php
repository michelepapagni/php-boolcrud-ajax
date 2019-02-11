<?php include 'partials/header.php'; ?>

    <div class="container index">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli ospiti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Vedi</th>
                            <th>Cancella</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script id="row-ospite" type="text/x-handlebars-template">
      <tr>
          <td>{{id}}</td>
          <td>{{name}}</td>
          <td>{{lastname}}</td>
          <td>
              <a href="http://localhost/Boolean/ospiti-crud-ajax/show.php?id={{id}}" class="btn btn-primary">Vedi</a>
          </td>
          <td>
              <button class="btn btn-danger delete-button" data-id="{{id}}">Cancella</button>
          </td>
      </tr>
    </script>

<?php include 'partials/footer.php'; ?>
