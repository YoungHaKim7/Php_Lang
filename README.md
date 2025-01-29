# Php Homepage

_ A popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.

[PHP: Hypertext Preporcessor](https://www.php.net/)

# Free Programming Books Langs

https://github.com/EbookFoundation/free-programming-books/blob/main/books/free-programming-books-langs.md#php


# Php tutorial

PHP Programming Language Tutorial - Full Course

[https://youtu.be/OK_JCtrrv-c](https://youtu.be/OK_JCtrrv-c)

# Php Tutorial 2 _ w3schools

https://www.w3schools.com/php/default.asp

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


<hr />

# php최신뉴스

# **[GN⁺: PHP 8.4 릴리즈](<https://news.hada.io/topic?id=17888&utm_source=discord&utm_medium=bot&utm_campaign=1480>)**
- 속성 훅, 비대칭 가시성, 업데이트된 DOM API, 성능 향상, 버그 수정 및 일반적인 정리가 포함  
  - IDE와 정적 분석 도구가 네이티브로 이해할 수 있는 계산 속성을 지원하는 속성 훅 제공  
  - 속성의 읽기와 쓰기 범위를 독립적으로 제어할 수 있는 비대칭 가시성 도입.  
- **새로운 기능**  
  - `#[\Depre...
