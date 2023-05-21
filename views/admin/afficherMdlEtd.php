<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Scolarité</title>
    </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-primary px-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <i class="fas fa-graduation-cap" style="color: #ffffff;"></i> Scolarité
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gestionEtd.html">Gestion Etudiant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gestionMdl.html">Gestion Modules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listeEval.html">Gestion Evaluation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listeNotes.html">Gestion Notes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li class="dropdown-item">Name pre</li>
                <li><a class="dropdown-item" href="#">Modifier profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Se Deconnecter</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

    <div class="container" style="padding: 20px;">
        <div class="d-flex justify-content-between align-items-end mb-3">
          <h1>Module d'etudiant:</h1>
          <div>
            <button id="afficherEtd" class="btn btn-dark">
              <a class="text-reset text-decoration-none" href="gestionMdl.html"><i class="fas fa-list"></i> Gerer les modules</a>
            </button>
          </div>
        </div>      
        <table id="personnes" class="table table-bordered border-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Description</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody id="listStudent">
            <tr>
              <th scope="row">1</th>
              <td>JS</td>
              <td class="w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nulla ullam. Aspernatur animi consequuntur quod numquam laudantium dicta harum, autem possimus nulla quae tenetur. Dolore earum sunt ratione. Fugit, commodi.</td>
              <td>
                <button class="btn btn-light btn-outline-secondary mx-1">
                  <i class="fas fa-pencil-alt"></i> Modifier
                </button>
                <button class="btn btn-danger">
                  <i class="fas fa-trash"></i> Supprimer
                </button>
              </td>
              
            </tr>
          </tbody>
        </table>
      </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>