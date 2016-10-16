<?php

$result = [];

for ($i = 0; $i <= 40; $i++) {
  if ($i > 0 && $i % 10 == 0) echo $i . PHP_EOL;
  $inner = new stdClass;
  $inner->a = $i % 25;
  $result[0][$inner->a][$i] = $inner;
  $result[1][] = $inner;
}

igbinary_unserialize(igbinary_serialize($result));

echo PHP_EOL;
