<?php

$dir = glob('some_dir/another_dir/*/*/my_file.txt');
echo 'your file dir is at: '. $dir[0];
