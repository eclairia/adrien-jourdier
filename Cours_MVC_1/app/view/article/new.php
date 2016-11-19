<?php include("app/view/layout/header.inc.php") ?>

  <form id="form_post" method="post" action="?module=article&action=new">
    <table>
      <h2>Créer un article</h2><br>
        <tr>
          <td><label for="post_category">Catégorie</label></td>
          <td>
            <select name="post_category">

              <?php
                foreach($categories as $category)
                {
                ?>
                 
                  <option value='<?= $category["cat_id"] ?>'><?= $category["cat_descr"] ?></option>;

              <?php
                }
              ?>

            </select>
          </td>
        </tr>

        <tr>
          <td><label for="post_title"> Titre </label></td>
          <td><input name="post_title" type="text" maxLenght="200" required /></td>
        </tr>

        <tr>
          <td><label for="post_content"> contenu </label></td>
          <td><textarea name="post_content" rows="10" cols="100" required ></textarea></td>
        </tr>

        <tr>
          <td></td>
          <td><input value="Enregistrer" type="submit" /><input type="reset" value="effacer" /></td>
        </tr>
    </table>
  </form>

<?php include("app/view/layout/footer.inc.php") ?>