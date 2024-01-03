<?php
require_once ('./../../vendor/autoload.php');
use Symfony\Component\Yaml\Yaml;

$yamlContents = file_get_contents('./../YAML/page5.yaml');
$yamlData = Yaml::parse($yamlContents);
?>

<div id="parcours" class="section parcours">
    <h1>Ma formation</h1>
    <div class="experience">
        <?php foreach ($yamlData['diplomes'] as $dip): ?>
            <h2><?= $dip['nom'] ?? '' ?></h2>
            <p><?= $dip['p'] ?? '' ?></p>
        <?php endforeach; ?>
    </div>
</div>
