# Php tutorial

PHP Programming Language Tutorial - Full Course

[https://youtu.be/OK_JCtrrv-c](https://youtu.be/OK_JCtrrv-c)

<br>

<hr>

macOS install php

```
brew install php
```

설치하고 나서 라이브 서버 같은 서버 활성화 해주기

```
brew services restart php



php -S 127.0.0.1:8080
```

index.php 만들어 주고

chrome 열어서
http://localhost:8080

index.php 예제 코드

```
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
            echo("Hello World");
        ?>
    </body>
</html>
```

작업 다 끝나고 서버 중지

```
brew services stop php

```

<br>

# data-structure-php-clanguage

[https://github.com/elarity/data-structure-php-clanguage](https://github.com/elarity/data-structure-php-clanguage)

<br>

# Php\_다른 방법으로 코드 보기

- node 와 비슷하게 한다.

hello.php

```
<?php
    echo("Hello World Php\n");
?>
```

terminal 창에서

```
$ php hello.php


Hello World Php

```

잘 나온다.

JavaScript 파일 node로 하는것과 비슷하다.
