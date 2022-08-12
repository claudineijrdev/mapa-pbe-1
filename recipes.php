<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  function getRecipe($id, $recipes_array)
  {
    $index = array_search($id, array_column($recipes_array, 'id'));
    return $recipes_array[$index];
  }
  $recipes_json = file_get_contents("./data/recipes/recipes.json");
  $recipes_array = json_decode($recipes_json, true);
  $id = $_GET['id'];
  $recipe = getRecipe($id, $recipes_array);
  ?>
  <header>
    <h1><?= $recipe['name'] ?></h1>
  </header>
  <main>
    <article>
      <img src="<?= $recipe["image"]; ?>" />
      <p><?= $recipe['description'] ?></p>
      <p><?= $recipe['ingredients'] ?></p>
    </article>
    <section>
      <header>
        <h3>Mais Receitas</h3>
      </header>
      <article>
        <?php foreach ($recipes_array as $data) {
          if ($data['id'] != $id) {
        ?>
            <article>
              <a href="recipes.php?id=<?= $data['id']; ?>"><?= $data["name"]; ?></a>
            </article>
        <?php
          }
        }
        ?>
      </article>
    </section>
    <section>
      <a href="/mapa-pbe-1/">Voltar ao início</a>
    </section>
  </main>
  <footer>

  </footer>
</body>

</html>