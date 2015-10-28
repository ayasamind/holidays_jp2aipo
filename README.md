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


`curl -L https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml | php change.php`

上記のようにcurlコマンドによってyamlファイルを取り出し、同時にパイプでこのphpを実行することによって、php側でyamlの標準入力を受け取り、properties形式に変換された出力が表示されます。
それと同時にその出力がaipoのholidays_default.propertiesファイルに上書きされます。
holidays_default.propertiesの場所は/usr/local/aipo/tomcat/webapps/aipo/WEB-INF/conf/holidays_default.propertiesに設定してあります。
もしaipo上の祝日定義ファイルの場所を変更している場合は、スクリプトの

`$fp = fopen("/usr/local/aipo/tomcat/webapps/aipo/WEB-INF/conf/holidays_default.properties", 'w');`

を

`$fp = fopen("/任意のPATH/holidays_default.properties", 'w');`

に書き換えてご利用ください。


## Lisence

Copyright (c) [2015] [MasayaYoshino]
This software is released under the MIT License, please see LICENSE.txt.
