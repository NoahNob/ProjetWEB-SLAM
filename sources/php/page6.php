<?php
require_once ('./../../vendor/autoload.php');
use Symfony\Component\Yaml\Yaml;

$yamlContents = file_get_contents('./../YAML/page6.yaml');
$yamlData = Yaml::parse($yamlContents);
$sectionKey = key($yamlData);
$sectionData = $yamlData[$sectionKey];
?>



<div id="<?= $sectionKey ?>" class="section <?= $sectionKey ?>"> 
    <h1><?= ucfirst($sectionKey) ?></h1>
    <div class="texte-centre">
        <?php foreach ($sectionData as $key => $value): ?>
            <?php if (is_array($value)): ?>
                <?php foreach ($value as $nestedValue): ?>
                    <div><?= $nestedValue ?></div>
                <?php endforeach; ?>
            <?php else: ?>
                <div><?= $value ?></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<h1>Envoyez-moi un mail !</h1>
    <form action="contact.php" method="post">
    <input type="text" name="to" placeholder="Votre adresse ici !">
    <input type="text" name="subject" placeholder="Le sujet">
    <textarea name="body"></textarea>
    <button type="submit">Envoyer mail</button>
</form>
</div>
