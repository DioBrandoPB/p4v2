<?php $this->title = 'Mon profil'; ?>
<h1>Mon blog</h1>
<p>En construction</p>
<?= $this->session->show('update_password'); ?>
<div>
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <p><?= $this->session->get('id'); ?></p>
    <a href="index.php?route=updatePassword">Modifier son mot de passe</a>
</div>
<br>
<a href="index.php">Retour à l'accueil</a>