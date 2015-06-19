<?php

require(__DIR__.'/vendor/autoload.php');

$text = isset($_POST['text']) ? $_POST['text'] : '';

$client = new Isometriks\Grammar\Client\GuzzleClient('http://localhost:8080');
$analyzer = new \Isometriks\Grammar\Analyze\Analyzer($client);
$analysis = $analyzer->analyze($text);

?>

<h3>Errors</h3>

<ol>
    <?php foreach ($analysis->getErrors() as $error): ?>
    <li>
        <ul>
            <li>
                <?php echo nl2br($error->getTextBefore()); ?>
                <strong><?php echo nl2br($error->getSubstring()); ?></strong>
                <?php echo nl2br($error->getTextAfter()); ?>
            </li>
            <li><?php echo $error->getMessage(); ?></li>
        </ul>
    </li>
    <?php endforeach; ?>
</ol>

<h3>Value</h3>
<form method="post">
    <textarea style="width:100%; height: 300px" name="text"><?php echo htmlentities($text); ?></textarea>
    <br/> <br/>
    <button type="submit">Analyze</button>
</form>
