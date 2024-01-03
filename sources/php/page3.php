<?php
require_once ('./../../vendor/autoload.php');
use Symfony\Component\Yaml\Yaml;

$yamlContents = file_get_contents('./../YAML/page3.yaml');
$yamlData = Yaml::parse($yamlContents);
$sectionKey = key($yamlData);
$sectionData = $yamlData[$sectionKey];
?>

<div id="competences" class="section competences">
    <h1>Mes compétences</h1>
    <h4>Développement</h4>
    <?php foreach ($yamlData['Mes compétences'] as $dev): ?>
        <div class="comp" data-progress="<?= $dev['data'] ?>">
            <div class="nom-comp"><?= $dev['nom'] ?></div>
            <div class="barre-progres">a</div>
        </div>
    <?php endforeach; ?>

    <h4>Langues</h4>

    <?php foreach ($yamlData['Développement'] as $lang): ?>
    <div class="comp" data-progress="<?= $lang['data'] ?>">
        <div class="nom-comp"><?= $lang['nom'] ?></div>
        <div class="barre-progres"></div>
    </div>
    <?php endforeach; ?>


</div>
