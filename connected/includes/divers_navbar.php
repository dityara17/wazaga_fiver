<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><img src="./images/server-icon.png" style="width: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <button type="button" class="btn btn-light" data-toggle="modal" data-target="#">Boutique</button>
      <button type="button" class="btn btn-light" data-toggle="modal" data-target="#">Mon profil</button>
    </ul>
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#parametres">Paramètres</button> &nbsp;
    <a href="index.php?logout" class="btn btn-warning">Logout</a>
    <?php include('modal_parametres.php'); ?>
  </div>
</nav>