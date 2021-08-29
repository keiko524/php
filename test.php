<?php
$name=htmlspecialchars(filter_input(INPUT_GET, 'name1'), ENT_QUOTES);
print $name . 'さんご登録ありがとうございます';

