<?php
  if (isset($_SESSION['user']) && $_SESSION['user'] !== '') {
    echo '
      <h3 style="text-align: center; margin: 0 auto; width: 800px;">
        Приветствую тебя, о великий ' . $_SESSION['user'] . '
      </h3><br><br>
    ';

    echo '<a href="./exit.php">Выйти</a>';
  }