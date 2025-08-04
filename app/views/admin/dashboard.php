<h2>Dashboard</h2>
<p>Total utilisateurs : <?= $total_users ?></p>
<p>Joueurs validés : <?= $total_joueurs ?></p>

<h3>Joueurs en attente</h3>
<?php foreach ($joueurs_en_attente as $j): ?>
    <p><?= $j['pseudo'] ?> - 
       <a href="/admin/validerJoueur/<?= $j['id'] ?>">Valider</a></p>
<?php endforeach; ?>
