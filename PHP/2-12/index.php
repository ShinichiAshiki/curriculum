<form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  ご希望商品：
  <input type="radio" name="goods" value="A賞">A賞
  <input type="radio" name="goods" value="B賞">B賞
  <input type="radio" name="goods" value="C賞">C賞
  <br>
  <select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
    <br>
  <input type="submit" value="申込" />
</form>