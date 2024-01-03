<?php
require_once ('./../../vendor/autoload.php');
use Symfony\Component\Yaml\Yaml;

$yamlContents = file_get_contents('./../YAML/page4.yaml');
$yamlData = Yaml::parse($yamlContents);
?>

<div id="experiences" class="section experiences">
    <h1>Mes expériences</h1>
    <div class="experience">
        <?php foreach ($yamlData['experiences'] as $exp): ?>
            <h2><?= $exp['h2'] ?? '' ?></h2>
            <p><?= $exp['p1'] ?? '' ?></p>
            <p><?= $exp['p2'] ?? '' ?></p>
        <?php endforeach; ?>
    </div>
</div>
