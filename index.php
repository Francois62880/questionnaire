<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questionnaire - Ecole Claude Debussy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div class="container-fluid">
        <?php

    $error = null;
    $success = null;

    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Code PHP pour traiter l'envoi de l'email
        // $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
        // Définit toutes les erreurs possibles
              
        // if (!isset($_POST['nom_parent'])) {
        //   $nombreErreur++;
        //   $erreur1 = '<p>Il y a un problème avec la variable "message".</p>';
        // } else {
        //   if (empty($_POST['nom_parent'])) {
        //     $nombreErreur++;
        //     $erreur2 = '<p>Vous avez oublié de remplir le champs nom du parent.</p>';
        //   }
        // }

        // if ($nombreErreur==0) {
        // Récupération des variables et sécurisation des données
        $nomP = htmlentities($_POST['nom_parent']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $prenomP = htmlentities($_POST['prenom_parent']);
        $email = htmlentities($_POST['email']);
        $metier = htmlentities($_POST['metier1']);

        $nomP1 = htmlentities($_POST['nom_parent2']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $prenomP1 = htmlentities($_POST['prenom_parent2']);
        $email1 = htmlentities($_POST['email2']);
        $metier1 = htmlentities($_POST['metier2']);

        $nomE1 = htmlentities($_POST['nom_enfant_1']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $prenomE1 = htmlentities($_POST['prenom_enfant_1']);
        $classe1 = htmlentities($_POST['classe1']);
        $nomE2 = htmlentities($_POST['nom_enfant_2']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $prenomE2 = htmlentities($_POST['prenom_enfant_2']);
        $classe2 = htmlentities($_POST['classe2']);
        $nomE3 = htmlentities($_POST['nom_enfant_3']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $prenomE3 = htmlentities($_POST['prenom_enfant_3']);
        $classe3 = htmlentities($_POST['classe3']);

        $question = htmlentities($_POST['question1']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $cantine = htmlentities($_POST['cantine1']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $garderiematin = htmlentities($_POST['garderiematin1']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $garderiesoir = htmlentities($_POST['garderiesoir1']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML

        $question1 = htmlentities($_POST['question2']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $cantine1 = htmlentities($_POST['cantine2']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $garderiematin1 = htmlentities($_POST['garderiematin2']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $garderiesoir1 = htmlentities($_POST['garderiesoir2']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML

        $question2 = htmlentities($_POST['question3']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $cantine2 = htmlentities($_POST['cantine3']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $garderiematin2 = htmlentities($_POST['garderiematin3']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $garderiesoir2 = htmlentities($_POST['garderiesoir3']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML

        // Variables concernant l'email
        $destinataire = 'francois.cousin62880@gmail.com'; // Adresse email du webmaster

        $sujet = 'Response questionnaire'; // Titre de l'email
        $contenu = '<html><head><title>Reponse au question de déconfinement</title></head><body>';
        $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre questionnaire.</p>';
        $contenu .= '<table><thead><tr><th><strong>Nom enfant</strong></th><th><strong>Prenom enfant</strong></th><th><strong>Classe enfant</strong></th><th><strong>Nom du parent</strong></th><th><strong>Prenom du parent</strong></th><th><strong>L\'adresse mail de ce parent est </strong></th><th><strong>Profession du parent</strong></th><th><strong>Question</strong></th><th><strong>cantine</strong></th><th><strong>Garderie matin</strong></th><th><strong>Garderie soir</strong></th></tr></thead>';
        $contenu .= '<tbody><tr><td rowspan="2">' . $nomE1 . '</td><td rowspan="2">' . $prenomE1 . '</td><td rowspan="2">' .  $classe1 . '</td><td>' .  $nomP . '</td><td>' .  $prenomP . '</td><td> ' .  $email . '</td><td> ' .  $metier . '</td><td rowspan="2"> ' .  $question . '</td>';
      
        if (!empty($_POST['cantine1'])) {
            $contenu .= '<td rowspan="2"> ' .  $cantine . '</td>';
        }
        if (!empty($_POST['garderiematin1'])) {
            $contenu .= '<td rowspan="2"> ' .  $garderiematin . '</td>';
        }
        if (!empty($_POST['garderiesoir1'])) {
            $contenu .= '<td rowspan="2"> ' .  $garderiesoir . '</td> </tr>';
        }
        $contenu .= '</tr>';
        $contenu .= '<tr><td>' .  $nomP1 . '</td><td>' .  $prenomP1 . '</td><td> ' .  $email1 . '</td><td> ' .  $metier1 . '</td></tr>';

        if (!empty($_POST['nom_enfant_2'])) {
            $contenu .= '<tr><td rowspan="2">' . $nomE2 . '</td><td rowspan="2">' . $prenomE2 . '</td><td rowspan="2">' .  $classe2 . '</td><td>' .  $nomP . '</td><td>' .  $prenomP . '</td><td> ' .  $email . '</td><td> ' .  $metier . '</td><td rowspan="2"> ' .  $question1 . '</td>';

    
            if (!empty($_POST['cantine2'])) {
                $contenu .= '<td> ' .  $cantine1 . '</td>';
            }
            if (!empty($_POST['garderiematin2'])) {
                $contenu .= '<td> ' .  $garderiematin1 . '</td>';
            }
            if (!empty($_POST['garderiesoir2'])) {
                $contenu .= '<td> ' .  $garderiesoir1 . '</td> </tr>';
            }
            $contenu .= '</tr>';
            $contenu .= '<tr><td>' .  $nomP1 . '</td><td>' .  $prenomP1 . '</td><td> ' .  $email1 . '</td><td> ' .  $metier1 . '</td></tr>';
        }
        if (!empty($_POST['nom_enfant_3'])) {
            $contenu .= '<tr><td rowspan="2">' . $nomE3 . '</td><td rowspan="2">' . $prenomE3 . '</td><td rowspan="2">' .  $classe3 . '</td><td>' .  $nomP . '</td><td>' .  $prenomP . '</td><td> ' .  $email . '</td><td> ' .  $metier . '</td><td rowspan="2"> ' .  $question2 . '</td>';

            if (!empty($_POST['cantine3'])) {
                $contenu .= '<td> ' .  $cantine2 . '</td>';
            }
            if (!empty($_POST['garderie3'])) {
                $contenu .= '<td> ' .  $garderiematin2 . '</td>';
            }
            if (!empty($_POST['garderiesoir3'])) {
                $contenu .= '<td> ' .  $garderiesoir2 . '</td> </tr>';
            }
            $contenu .= '</tr>';
            $contenu .= '<tr><td>' .  $nomP1 . '</td><td>' .  $prenomP1 . '</td><td> ' .  $email1 . '</td><td> ' .  $metier1 . '</td></tr>';
        }
        $contenu .= '</tr></tbody></table>';
    
        $contenu .= '</body></html>'; // Contenu du message de l'email

        // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=\"/utf-8\"";
        $headers .= "Content-transfert-Encoding:8bit";

        @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email

        $success = 'Message envoyé!'; // Afficher un message pour indiquer que le message a été envoyé
    // } else { // S'il y a un moins une erreur
        // $error = 'Désolé, il y a eu '.$nombreErreur.' erreur(s).' .$erreur7;
        // if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
        // if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
        //if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
        //if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
        //if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
        // if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
        // if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
    //   }
    }
    ?>

        <!-- Début contact -->
        <div class="space30"></div>
        <h2 class="text-center" style="text-decoration: underline">Questionnaire concernant l'école maternelle Claude
            Debussy</h2>
        <div class="space30"></div>
        <div class="row">



            <div class="offset-1 col-10 offset-lg-1 col-lg-10" id="blockContact">
                <div class="section noprint">
                    <h2 class="section-title ct1">Dans l'éventualité d'une réouverture des écoles avant la fin de
                        l'année
                        scolaire, souhaiteriez-vous que votre enfant revienne à l'école ?</h2>
                    <div class="space30"></div>
                    <h3 class="title" style=" text-align: center;font-style: italic;color: blue;">Les niveaux d'élèves
                        qui
                        seraient accueillis ne sont pas encore définis et peuvent
                        évoluer en fonction des protocoles qui seront établis.</h3>
                    <div class="space30"></div>
                    <form method="post" action="https://ecolejeanjaures.000webhostapp.com/" class="well form-horizontal"
                        id="contact-form">
                        <fieldset>
                            <legend>
                                <h4 class="ct1"> Adressez-moi un message en utilisant le formulaire ci-dessous :
                                </h4>
                            </legend>
                            <?php if ($success) : ?>
                            <div class="alert alert-success">
                                <?= $success ?>
                            </div>
                            <?php endif; ?>
                            <?php if ($error) : ?>
                            <div class="alert alert-danger">
                                <?= $error ?>
                            </div>
                            <?php endif; ?>

                            <div class="controls">
                                <h3>Enfant :</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputName" class="ct2">Nom </label>
                                        <input type="text" name="nom_enfant_1" class="form-control" id="name1"
                                            placeholder="Tapez votre Nom" required="required"
                                            data-error="Nom is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname">Prénom</label>
                                            <input id="prenom1" type="text" name="prenom_enfant_1" class="form-control"
                                                placeholder="Tapez votre Prenom *" required="required"
                                                data-error="Prenom is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname">Classe</label>
                                            <select class="form-control" id="classe1" name="classe1"
                                                placeholder="Choix de la classe *" required="required"
                                                data-error="classe is required.">

                                                <option value="Mme Cousin ps">Mme Cousin PS</option>
                                                <option value="Mme Sandt PS">Mme Sandt PS</option>
                                                <option value="Mme Czuba MS">Mme Czuba MS</option>
                                                <option value="Mme Jessenne MS">Mme Jessenne MS</option>
                                                <option value="Mme Morand GS">Mme Morand GS</option>
                                                <option value="Mr Berten GS">Mr Berten GS</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="space30"></div>

                                    <div class="offset-md-4 col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname"></label>
                                            <select class="form-control" id="question1" name="question1"
                                                required="required" data-error="choix is required.">
                                                <option value="">choix</option>
                                                <option value="oui">Oui, mon enfant reviendra</option>
                                                <option value="non">Non, il ne reviendra pas</option>
                                            
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="space30"></div>
                                    <div class="offset-xl-4 col-xl-6 cantine" style="display:none">
                                        <h4>Est-ce que votre enfant viendra :</h4>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Oui" id="cantine1"
                                                name="cantine1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cantine
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="oui" id="garderiematin1"
                                                name="garderiematin1">
                                            <label class="form-check-label" for="defaultCheck2">
                                                Garderie matin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="oui"
                                                id="garderiesoir1" name="garderiesoir1">
                                            <label class="form-check-label" for="defaultCheck3">
                                                Garderie soir
                                            </label>
                                        </div>
                                    </div>
                                    <div class="space30"></div>

                                </div>
                                <p class="btn_rajout">Rajout d'un enfant</p>
                                <div class="form-row rajout" style="display: none">
                                    <div class="form-group col-md-4">
                                        <label for="inputName" class="ct2">Nom </label>
                                        <input type="text" name="nom_enfant_2" class="form-control" id="name2"
                                            placeholder="Tapez votre Nom">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname">Prénom</label>
                                            <input id="prenom2" type="text" name="prenom_enfant_2" class="form-control"
                                                placeholder="Tapez votre Prenom *">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname">Classe</label>
                                            <select class="form-control" id="classe2" name="classe2"
                                                placeholder="Classe *">

                                                <option value="Mme Cousin ps">Mme Cousin PS</option>
                                                <option value="Mme Sandt PS">Mme Sandt PS</option>
                                                <option value="Mme Czuba MS">Mme Czuba MS</option>
                                                <option value="Mme Jessenne MS">Mme Jessenne MS</option>
                                                <option value="Mme Morand GS">Mme Morand GS</option>
                                                <option value="Mr Berten GS">Mr Berten GS</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="space30"></div>

                                    <div class="offset-md-4 col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname"></label>
                                            <select class="form-control" id="question2" name="question2">
                                                <option value="">choix</option>
                                                <option value="oui">Oui, mon enfant reviendra</option>
                                                <option value="non">Non, il ne reviendra pas</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="space30"></div>
                                    <div class="offset-xl-4 col-xl-6 cantine2" style="display:none">
                                        <h4>Est-ce que votre enfant viendra :</h4>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Oui" id="cantine2"
                                                name="cantine2">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cantine
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="oui" id="garderiematin2"
                                                name="garderiematin2">
                                            <label class="form-check-label" for="defaultCheck2">
                                                Garderie matin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="oui"
                                                id="garderiesoir2" name="garderiesoir2">
                                            <label class="form-check-label" for="defaultCheck3">
                                                Garderie soir
                                            </label>
                                        </div>
                                    </div>
                                    <div class="space30"></div>

                                </div>
                                <p class="btn_retirer" style="display: none">Retirer un enfant</p>
                                <p class="btn_rajout1" style="display: none">Rajout d'un enfant</p>
                                <div class="form-row rajout1" style="display: none">
                                    <div class="form-group col-md-4">
                                        <label for="inputName" class="ct2">Nom </label>
                                        <input type="text" name="nom_enfant_3" class="form-control" id="name3"
                                            placeholder="Tapez votre Nom">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname">Prénom</label>
                                            <input id="prenom3" type="text" name="prenom_enfant_3" class="form-control"
                                                placeholder="Tapez votre Prenom *">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname">Classe</label>
                                            <select class="form-control" id="classe3" name="classe3"
                                                placeholder="Tapez votre Prenom *">

                                                <option value="Mme Cousin ps">Mme Cousin PS</option>
                                                <option value="Mme Sandt PS">Mme Sandt PS</option>
                                                <option value="Mme Czuba MS">Mme Czuba MS</option>
                                                <option value="Mme Jessenne MS">Mme Jessenne MS</option>
                                                <option value="Mme Morand GS">Mme Morand GS</option>
                                                <option value="Mr Berten GS">Mr Berten GS</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="space30"></div>

                                    <div class="offset-md-4 col-md-4">
                                        <div class="form-group">
                                            <label for="inputLastname"></label>
                                            <select class="form-control" id="question3" name="question3">
                                                <option value="">choix</option>
                                                <option value="oui">Oui, mon enfant reviendra</option>
                                                <option value="non">Non, il ne reviendra pas</option>                                            
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="space30"></div>
                                    <div class="offset-xl-4 col-xl-6 cantine3" style="display:none">
                                        <h4>Est-ce que votre enfant viendra :</h4>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Oui" id="cantine3"
                                                name="cantine3">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Cantine
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="oui" id="garderiematin3"
                                                name="garderiematin3">
                                            <label class="form-check-label" for="defaultCheck2">
                                                Garderie
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="oui"
                                                id="garderiesoir3" name="garderiesoir3">
                                            <label class="form-check-label" for="defaultCheck3">
                                                Garderie soir
                                            </label>
                                        </div>
                                    </div>
                                    <div class="space30"></div>
                                </div>
                                <p class="btn_retirer1" style="display: none">Retirer un enfant</p>
                                <h3>Parent 1 :</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName" class="ct2">Nom </label>
                                        <input type="text" name="nom_parent" class="form-control" id="inputName"
                                            placeholder="Tapez votre Nom" required="required"
                                            data-error="Nom is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputLastname">Prénom</label>
                                            <input id="inputLastname" type="text" name="prenom_parent"
                                                class="form-control" placeholder="Tapez votre Prenom *"
                                                required="required" data-error="Prenom is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Votre email</label>
                                            <input id="email" type="email" name="email" class="form-control"
                                                placeholder="Tapez votre email *" required="required"
                                                data-error="Email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="inputLastname">Situation professionnelle</label>
                                            <select class="form-control" id="metier1" name="metier1" placeholder="">
                                                <option class="item" value="Personnel des établissements de santé">
                                                    Personnel des établissements de santé</option>
                                                <option class="item" value="Professionnel de santé liberal">
                                                    Professionnel de santé liberal</option>
                                                <option class="item"
                                                    value="Personnel des établissements et services sociaux et médico-sociaux">
                                                    Personnel des établissements et services sociaux et médico-sociaux
                                                </option>
                                                <option class="item"
                                                    value="Personnels affectés aux missions d'aide sociale à l'enfance et de PMI relevant des conseils départementaux">
                                                    Personnels affectés aux missions d'aide sociale à l'enfance et de
                                                    PMI relevant des conseils départementaux</option>
                                                <option class="item"
                                                    value="Professionnel exerçant dans les structures AHI">Professionnel
                                                    exerçant dans les structures AHI</option>
                                                <option class="item"
                                                    value="Agent des services de l'état chargé de la gestion des la crise au sein des préfectures, des agences régionales de santé et des administrations centrales">
                                                    Agent des services de l'état chargé de la gestion des la crise au
                                                    sein des préfectures, des agences régionales de santé et des
                                                    administrations centrales</option>
                                                <option class="item"
                                                    value="Personnel des services départemantaux d'incendie/de secours et de sécurité publique, des gendarmerie, de la police aux frontieres, des Douanes ainsi que les personnes relevant des services pénitenciers">
                                                    Personnel des services départemantaux d'incendie/de secours et
                                                    sécurité publique, Gendarmerie, Police aux frontieres, Douanes ainsi
                                                    que personne relevant des services pénitenciers</option>
                                                <option class="item"
                                                    value="Professionnel et bénévoles de la filière de dépistage(professionnel en charge du contact-tracing, centes de dépistage, laboratoires d'analyse, ect...)">
                                                    Professionnel et bénévoles de la filière de dépistage(professionnel
                                                    en charge du contact-tracing, centes de dépistage, laboratoires
                                                    d'analyse, ect...)</option>
                                                <option class="item"
                                                    value="Enseignant et professionnel des établissements et des services périscolaires">
                                                    Enseignant et professionnel des établissements et des services
                                                    périscolaires</option>
                                                <option class="item" value="autre">Autre situation</option>

                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Parent 2 :</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName" class="ct2">Nom </label>
                                        <input type="text" name="nom_parent2" class="form-control" id="inputName2"
                                            placeholder="Tapez votre Nom" required="required"
                                            data-error="Nom is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputLastname">Prénom</label>
                                            <input id="inputLastname2" type="text" name="prenom_parent2"
                                                class="form-control" placeholder="Tapez votre Prenom *"
                                                required="required" data-error="Prenom is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Votre email</label>
                                            <input id="email2" type="email" name="email2" class="form-control"
                                                placeholder="Tapez votre email *" required="required"
                                                data-error="Email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputLastname">Situation professionnelle</label>
                                            <select class="form-control" id="metier2" name="metier2" placeholder="">

                                            <option class="item" value="Personnel des établissements de santé">
                                                    Personnel des établissements de santé</option>
                                                <option class="item" value="Professionnel de santé liberal">
                                                    Professionnel de santé liberal</option>
                                                <option class="item"
                                                    value="Personnel des établissements et services sociaux et médico-sociaux">
                                                    Personnel des établissements et services sociaux et médico-sociaux
                                                </option>
                                                <option class="item"
                                                    value="Personnels affectés aux missions d'aide sociale à l'enfance et de PMI relevant des conseils départementaux">
                                                    Personnels affectés aux missions d'aide sociale à l'enfance et de
                                                    PMI relevant des conseils départementaux</option>
                                                <option class="item"
                                                    value="Professionnel exerçant dans les structures AHI">Professionnel
                                                    exerçant dans les structures AHI</option>
                                                <option class="item"
                                                    value="Agent des services de l'état chargé de la gestion des la crise au sein des préfectures, des agences régionales de santé et des administrations centrales">
                                                    Agent des services de l'état chargé de la gestion des la crise au
                                                    sein des préfectures, des agences régionales de santé et des
                                                    administrations centrales</option>
                                                <option class="item"
                                                    value="Personnel des services départemantaux d'incendie/de secours et de sécurité publique, des gendarmerie, de la police aux frontieres, des Douanes ainsi que les personnes relevant des services pénitenciers">
                                                    Personnel des services départemantaux d'incendie/de secours et
                                                    sécurité publique, Gendarmerie, Police aux frontieres, Douanes ainsi
                                                    que personne relevant des services pénitenciers</option>
                                                <option class="item"
                                                    value="Professionnel et bénévoles de la filière de dépistage(professionnel en charge du contact-tracing, centes de dépistage, laboratoires d'analyse, ect...)">
                                                    Professionnel et bénévoles de la filière de dépistage(professionnel
                                                    en charge du contact-tracing, centes de dépistage, laboratoires
                                                    d'analyse, ect...)</option>
                                                <option class="item"
                                                    value="Enseignant et professionnel des établissements et des services périscolaires">
                                                    Enseignant et professionnel des établissements et des services
                                                    périscolaires</option>
                                                <option class="item" value="autre">Autre situation</option>

                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="offset-xl-0 col-xl-12 button-envoi" style="  text-align: center;">
                                        <button class="btn btn-primary" id="button">envoyer</button>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                </div>
                </form>

            </div>
        </div>


        <div class="space30"></div>
        <hr>
        <div class="row offset-1 col-10 offset-lg-2 col-lg-8" id="footer" style="height: 200px;">

            <p class="ft" style=" width: 100%;text-align: center;padding: 50px;">Copyright 2020 - Réalisé par <a
                    href="https://francoiscousin.000webhostapp.com/" target="_blank" class="lien"> François Cousin</a>
            </p>
        </div>
    </div>
</body>
<script src="script.js"></script>