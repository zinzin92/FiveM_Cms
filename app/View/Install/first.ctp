<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Installation - FiveM-Cms</title>

    <link rel="stylesheet" href="app/webroot/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css">
    <link rel="stylesheet" href="app/webroot/css/install/flat.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="app/webroot/css/install/animate.min.css">
    <link rel="stylesheet" href="app/webroot/css/install/install.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="app/webroot/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">

</head>
<body>

<div class="container" style="max-width:700px">
    <svg width='160px' height='160px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="loader">
        <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(0 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(30 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(60 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(90 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(120 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(150 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(180 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(210 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(240 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(270 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(300 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/>
        </rect>
        <rect  x='48.5' y='40' width='3' height='20' rx='5' ry='5' fill='#7c7e7f' transform='rotate(330 50 50) translate(0 -30)'>
            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/>
        </rect>
    </svg>

    <img src="/app/webroot/img/logo_mineweb.png" alt="Logo" class="logo">

    <div class="first center" style="display:none;">
        <h1>Bienvenue,</h1>
        <p>Dans l'installation de FiveM-Cms, merci d'avoir choisi notre CMS ! Vous allez maintenant pouvoir procéder à l'installation du site en toute simplicité.</p>
    </div>

    <div class="compatibilite" style="display:none;" data-need-to-display="<?= ($needAffichCompatibility) ? 'true' : 'false' ?>">
        <table class="table">
            <thead>
            <tr>
                <th>Fonctionnalité</th>
                <th>Installée</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Droits en écriture</td>
                <td><?= affichImg($compatible['chmod']) ?></td>
            </tr>
			<?php if(!$compatible['chmod'] && isset($help['chmod'])): ?>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-body"><?= $help['chmod']; ?></div>
                        </div>
                    </td>
                    <td></td>
                </tr>
			<?php endif; ?>
            <tr>
                <td>Version de PHP >= 5.6 <= 7.4</td>
                <td><?= affichImg($compatible['phpVersion']) ?></td>
            </tr>
			<?php if(!$compatible['phpVersion'] && isset($help['phpVersion'])): ?>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-body"><?= $help['phpVersion']; ?></div>
                        </div>
                    </td>
                    <td></td>
                </tr>
			<?php endif; ?>
            <tr>
                <td>PDO</td>
                <td><?= affichImg($compatible['pdo']) ?></td>
            </tr>
			<?php if(!$compatible['pdo'] && isset($help['pdo'])): ?>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-body"><?= $help['pdo']; ?></div>
                        </div>
                    </td>
                    <td></td>
                </tr>
			<?php endif; ?>
            <tr>
                <td>cURL (Extension PHP)</td>
                <td><?= affichImg($compatible['curl']) ?></td>
            </tr>
			<?php if(!$compatible['curl'] && isset($help['curl'])): ?>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-body"><?= $help['curl']; ?></div>
                        </div>
                    </td>
                    <td></td>
                </tr>
			<?php endif; ?>
            <tr>
                <td>Réécriture d'URL - .htaccess activés</td>
                <td><?= affichImg($compatible['rewriteUrl']) ?></td>
            </tr>
			<?php if(!$compatible['rewriteUrl'] && isset($help['rewriteUrl'])): ?>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-body"><?= $help['rewriteUrl']; ?></div>
                        </div>
                    </td>
                    <td></td>
                </tr>
			<?php endif; ?>
            <tr>
                <td>Librairie GD2 (captcha et image des utilisateurs)</td>
                <td><?= affichImg($compatible['gd2']) ?></td>
            </tr>
			<?php if(!$compatible['gd2'] && isset($help['gd2'])): ?>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-body"><?= $help['gd2']; ?></div>
                        </div>
                    </td>
                    <td></td>
                </tr>
			<?php endif; ?>
            <tr>
                <td>Ouverture d'un zip (mise à jour)</td>
                <td><?= affichImg($compatible['openZip']) ?></td>
            </tr>
			<?php if(!$compatible['openZip'] && isset($help['openZip'])): ?>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-body"><?= $help['openZip']; ?></div>
                        </div>
                    </td>
                    <td></td>
                </tr>
			<?php endif; ?>
            <tr>
                <td>OpenSSL</td>
                <td><?= affichImg($compatible['openSSL']) ?></td>
            </tr>
            <tr>
                <td>Ouverture d'un site à distance (mise à jour)</td>
                <td><?= affichImg($compatible['allowGetURL']) ?></td>
            </tr>

            </tbody>
        </table>
        <div class="alert alert-danger"><b>Erreur : </b>Votre hébergeur n'a pas les pré-requis.</div>
    </div>

    <div class="ajax-msg"></div>

    <div class="database" style="display:none;" data-need-to-display="<?= ($needDisplayDatabase) ? 'true' : 'false' ?>">
        <form id="saveDB">
            <div class="form-group">
                <label>Adresse de la base de données</label>
                <input type="text" class="form-control" name="host" placeholder="Ex: localhost">
            </div>
            <div class="form-group">
                <label>Nom de la base de données</label>
                <input type="text" class="form-control" name="database" placeholder="Ex: fivem-cms">
            </div>
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" class="form-control" name="login" placeholder="Ex: root">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Ex: root">
            </div>

            <button type="submit" class="btn btn-success saveDB pull-right">Tester et enregistrer</button>
        </form>
    </div>

    <button type="submit" class="btn btn-primary btn-block installSQL" style="display:none;">Installer la base de données</button>
    <div class="progress SQLprogress" style="display:none;">
        <div class="progress-bar progress-bar-info" style="width: 0%;"></div>
    </div>

    <div class="clearfix"></div>
</div>

<script src="app/webroot/js/jquery.1.12.0.js"></script>
<script>

    // Messages
    var TEXT__LOADING = "Chargement...";
    var TEXT__ERROR = "Erreur";
    var TEXT__INTERNAL_ERROR = "Une erreur interne est survenue";

</script>
<script src="app/webroot/js/install.js"></script>
</body>
</html>
