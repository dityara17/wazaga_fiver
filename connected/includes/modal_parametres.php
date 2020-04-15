<div class="modal fade" id="parametres" tabindex="-1" role="dialog" aria-labelledby="parametres" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header danger">
        <h5 class="modal-title" id="exampleModalLabel">Paramètres</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-Moncompte-tab" data-toggle="tab" href="#nav-Moncompte" role="tab" aria-controls="nav-Moncompte" aria-selected="true">Mon compte</a>
            <a class="nav-item nav-link" id="nav-codeami-tab" data-toggle="tab" href="#nav-codeami" role="tab" aria-controls="nav-codeami" aria-selected="false">Code Ami</a>
            <a class="nav-item nav-link" id="nav-mdp-tab" data-toggle="tab" href="#nav-mdp" role="tab" aria-controls="nav-mdp" aria-selected="false">Mot de passe</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-Moncompte" role="tabpanel" aria-labelledby="nav-Moncompte-tab">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Pseudo :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?=$_SESSION['user']['username'] ?>" id="inputpseudo" placeholder="<!-- Display actual pseudo -->">
              </div>
              <label class="col-sm-2 col-form-label">Email :</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$_SESSION['user']['email'] ?>">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-codeami" role="tabpanel" aria-labelledby="nav-codeami-tab">
            <br/><center><h1>XXXXX - XXXXX - XXXXX</h1><center>
          </div>
          <div class="tab-pane fade" id="nav-mdp" role="tabpanel" aria-labelledby="nav-mdp-tab">
            <div class="form-group row">
              <br/><label for="inputPassword" class="col-sm-2 col-form-label">Actuel :</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Nouveau :</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Sauvegarder</button>
      </div>
    </div>
  </div>
</div>