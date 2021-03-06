<?php
// default library templates
$library = "vendor/bookdown/bookdown/templates";

// project-specific templates
$template_path = __DIR__;

// register the templates
$templates = $this->getViewRegistry();

$templates->set("head", "{$template_path}/head.php");
$templates->set("body", "{$library}/body.php");
$templates->set("core", "{$library}/core.php");
$templates->set("navheader", "{$template_path}/../navheader.php");
$templates->set("navfooter", "{$template_path}/../navfooter.php");
$templates->set("toc", "{$template_path}/../toc.php");
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <?php echo $this->render("head"); ?>
    <?php echo $this->render("body"); ?>
</html>
