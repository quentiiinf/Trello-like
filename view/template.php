<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= (isset($_content_title)) ? $_content_title : 'Trello en mieux' ?></title>

    <meta name="Description" content="<?= (isset($_content_description)) ? $_content_description : 'Mieux.... ou pas' ?>">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="<?= $this->app->url('css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= $this->app->url('css/mdb.css') ?>" rel="stylesheet">
    <link href="<?= $this->app->url('css/style.css') ?>" rel="stylesheet">
</head>

<body>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark elegant-color" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000;">
    
    
    <a class="navbar-brand" href="<?= $this->route->showPath('home') ?>"><h3 style="margin-right: 20px">Home</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicExampleModal">
    Features
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
    
    <?php 

    if(!empty($_COOKIE['username']) && !empty($_COOKIE['password'])) {

        ?>

        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item waves-effect waves-light" href="<?= $this->route->showPath('deco') ?>">Se déconnecter de <?= $_COOKIE['username'] ?></a>
            </div>
            </li>
        </ul>

        <?php

    } else {

        ?>

        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item waves-effect waves-light" href="<?= $this->route->showPath('register') ?>">S'inscrire</a>
                <a class="dropdown-item waves-effect waves-light" href="<?= $this->route->showPath('login') ?>">Se connecter</a>
            </div>
            </li>
        </ul>

        <?php

    }

    ?>

    </div>
</nav>

<div style="height: 50px;"></div>
<div id="errors"></div>

<!-- ** Affichage des erreurs ** -->
<?= (isset($_content_errors)) ? $_content_errors : '' ?>

<!-- ** Affichage des vues HTML ** -->
<?= (isset($_content_body)) ? $_content_body : '' ?>

<!-- ** Pop-up features ** -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
          Features
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color: white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5" style="text-align: justify;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> • Les mots de passes envoyés à l'API sont hashés en sha256.</li>
            <li class="list-group-item"> • Possibilité d'ajouter des ToDoList.</li>
            <li class="list-group-item"> • Possibilité d'ajouter des tâches dans les ToDoList</li>
            <li class="list-group-item"> • La connexion au site est permanante jusqu'à la déconnexion, pas besoin de se reconnecter à chaque actualisation grâce au backend.</li>
            <li class="list-group-item"> • Le backend utilise un framework maison.</li>
            <li class="list-group-item"> • Les pages d'inscriptions et de connexion ne sont pas accessible si on est déjà authentifié.
                 Nous sommes automatiquement redirigé vers la page d'accueil si on tent d'y accéder
                  (middleware backend du framework).</li>
            <li class="list-group-item"> • Les pages de déconnexion et la page d'accueil permettant d'afficher les ToDoList ne sont pas accessible. 
                Nous sommes automatiquement redirigé vers la page de login si on tente d'y accéder
                (middleware backend du framework)
            </li>
            <li class="list-group-item"> • Possibilité de modifier le nom des ToDoList ou des tâches.</li>
            <li class="list-group-item"> • Possibilité de supprimer les tâches ou ToDoList.</li>
            <li class="list-group-item"> • Possibilité de déplacer les tâches et les ToDoList pour changer l'ordre d'affichage.</li>
            <li class="list-group-item"> • On peut également déplacer des tâches d'une ToDoList à une autre.</li>
            <li class="list-group-item"> • Une fois la modification de l'ordre effectué (features précédent), un bouton de sauvegarde permet de rendre le changement persistant
                même après une actualisation</li>
            <li class="list-group-item"> • Pour annuler la modification de l'ordre des éléments qu'on vient de modifier,
                 il existe également un bouton "annuler"</li>
            <li class="list-group-item"> • Les boutons "annuler" et "sauvegarder" n'apparaissent que si on à modifié l'odre.</li>
            <li class="list-group-item"> • Animation : animation lors de la connexion ou l'inscription un smiley apparait (de bas en haut) avant d'être redirigé</li>

        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?= $this->app->url('js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/popper.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/mdb.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/jquery.cookie.js') ?>"></script>

<!-- ** Méthode permettant le hashage des mots de passe ** -->
<script type="text/javascript">
  var sha256 = function sha256(ascii) {
    function rightRotate(value, amount) {
      return (value>>>amount) | (value<<(32 - amount));
    };
    
    var mathPow = Math.pow;
    var maxWord = mathPow(2, 32);
    var lengthProperty = 'length'
    var i, j; // Used as a counter across the whole file
    var result = ''

    var words = [];
    var asciiBitLength = ascii[lengthProperty]*8;
    
    //* caching results is optional - remove/add slash from front of this line to toggle
    // Initial hash value: first 32 bits of the fractional parts of the square roots of the first 8 primes
    // (we actually calculate the first 64, but extra values are just ignored)
    var hash = sha256.h = sha256.h || [];
    // Round constants: first 32 bits of the fractional parts of the cube roots of the first 64 primes
    var k = sha256.k = sha256.k || [];
    var primeCounter = k[lengthProperty];
    /*/
    var hash = [], k = [];
    var primeCounter = 0;
    //*/

    var isComposite = {};
    for (var candidate = 2; primeCounter < 64; candidate++) {
      if (!isComposite[candidate]) {
        for (i = 0; i < 313; i += candidate) {
          isComposite[i] = candidate;
        }
        hash[primeCounter] = (mathPow(candidate, .5)*maxWord)|0;
        k[primeCounter++] = (mathPow(candidate, 1/3)*maxWord)|0;
      }
    }
    
    ascii += '\x80' // Append Ƈ' bit (plus zero padding)
    while (ascii[lengthProperty]%64 - 56) ascii += '\x00' // More zero padding
    for (i = 0; i < ascii[lengthProperty]; i++) {
      j = ascii.charCodeAt(i);
      if (j>>8) return; // ASCII check: only accept characters in range 0-255
      words[i>>2] |= j << ((3 - i)%4)*8;
    }
    words[words[lengthProperty]] = ((asciiBitLength/maxWord)|0);
    words[words[lengthProperty]] = (asciiBitLength)
    
    // process each chunk
    for (j = 0; j < words[lengthProperty];) {
      var w = words.slice(j, j += 16); // The message is expanded into 64 words as part of the iteration
      var oldHash = hash;
      // This is now the undefinedworking hash", often labelled as variables a...g
      // (we have to truncate as well, otherwise extra entries at the end accumulate
      hash = hash.slice(0, 8);
      
      for (i = 0; i < 64; i++) {
        var i2 = i + j;
        // Expand the message into 64 words
        // Used below if 
        var w15 = w[i - 15], w2 = w[i - 2];

        // Iterate
        var a = hash[0], e = hash[4];
        var temp1 = hash[7]
          + (rightRotate(e, 6) ^ rightRotate(e, 11) ^ rightRotate(e, 25)) // S1
          + ((e&hash[5])^((~e)&hash[6])) // ch
          + k[i]
          // Expand the message schedule if needed
          + (w[i] = (i < 16) ? w[i] : (
              w[i - 16]
              + (rightRotate(w15, 7) ^ rightRotate(w15, 18) ^ (w15>>>3)) // s0
              + w[i - 7]
              + (rightRotate(w2, 17) ^ rightRotate(w2, 19) ^ (w2>>>10)) // s1
            )|0
          );
        // This is only used once, so *could* be moved below, but it only saves 4 bytes and makes things unreadble
        var temp2 = (rightRotate(a, 2) ^ rightRotate(a, 13) ^ rightRotate(a, 22)) // S0
          + ((a&hash[1])^(a&hash[2])^(hash[1]&hash[2])); // maj
        
        hash = [(temp1 + temp2)|0].concat(hash); // We don't bother trimming off the extra ones, they're harmless as long as we're truncating when we do the slice()
        hash[4] = (hash[4] + temp1)|0;
      }
      
      for (i = 0; i < 8; i++) {
        hash[i] = (hash[i] + oldHash[i])|0;
      }
    }
    
    for (i = 0; i < 8; i++) {
      for (j = 3; j + 1; j--) {
        var b = (hash[i]>>(j*8))&255;
        result += ((b < 16) ? 0 : '') + b.toString(16);
      }
    }
    return result;
  };
</script>

<!-- ** Inclusions des scripts que l'on souhaite inclure depuis les autres fichiers de vue ** -->
<?= (isset($_content_scripts)) ? $_content_scripts : '' ?>

</body>

</html>