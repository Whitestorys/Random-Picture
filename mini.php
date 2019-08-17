<?php  $a=file("url.txt");$b=count($a);$c=$a[rand(0,$b)];header("Location:$c");
