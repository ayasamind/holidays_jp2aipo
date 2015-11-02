# holidays_jp2aipo


## Overview

オープンソースグループウェアaipoに1970年から2050年までの祝日を定義させるphpです。


## Description


1970年~2050年の祝日を記述した[yamlファイル]
をオープンソースのグループウェアであるaipoで利用するためにaipoの祝日定義ファイルである、propertiesファイルに変換するphpです。

yamlファイルはaipoで使用するために(/usr/local/aipo/tomcat/webapps/aipo/WEB-INF/conf/holidays_default.properties)
にholidays_default.propertiesとしてデータが上書きされます。


[yamlファイル]: https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml "祝日データ"


## Requirement

curl 7.37.0


## Usage


`curl -L https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml | php change.php> /任意のPATH/holidays_default.properties`

`（任意のPATHにはあなたのaipo上のholidays_default.propertiesのPATHを入力してください)`


上記のようにcurlコマンドによってyamlファイルを取り出し、同時にパイプでこのphpを実行することによって、php側でyamlの標準入力を受け取り、出力がproperties形式に変換されます。
そしてリダイレクト(>)によってその出力があなたが入力したPATH上のholidays_default.propertiesに上書きされます。


## Lisence

Copyright (c) [2015] [MasayaYoshino]
This software is released under the MIT License, please see LICENSE.txt.
