<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Document</title>
</head>

<body>
  <header class="main-header">
    <div class="logo">
      Logo
    </div>
    <div class="header_title">
      Marmitas da Dna. Benta
    </div>
  </header>
  <main>
    <section class="recipe-list">
      <header>
        <h2>Pratos</h2>
      </header>
      <section class="recipe-items">
        <?php
        $preview_json = file_get_contents("./data/previews/previews.json");
        $preview_data = json_decode($preview_json, true);
        foreach ($preview_data as $data) {
        ?>
          <article  class="recipe-item">
            <a href="recipes.php?id=<?= $data['id']; ?>"><img src=<?= $data["image"]; ?> /></a>
            <h3><?= $data['name'] ?></h3>
            <p><?= $data['description'] ?></p>
          </article>
        <?php
        }
        ?>
      </section>
    </section>
  </main>
  <footer class="page-footer">
    Any Footer
  </footer>
</body>

</html>