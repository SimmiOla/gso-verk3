 <?php include './includes/title.php'; ?> 
 <?php include './includes/random_images.php'; ?>
<!DOCTYPE html>
<html lang="is">
  <head>
    <meta charset="utf-8">
    <title>Verkefni 3<?php echo "&#8212;{$title}"; ?></title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="stilsida.css">
  </head>
  <body>
    <?php require './includes/header.php'; ?>
    <section class="group">
        <article> 
            <h2>Article, Dedicated to the Craft of Building Boxes</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
        </article>
        <?php include './includes/images.php'; ?>
    </section>
    <?php include './includes/footer.php'; ?>
  </body>
</html>