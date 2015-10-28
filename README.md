# holidays_jp2aipo


## Overview

オープンソースグループウェアaipoに1970年から2050年までの祝日を定義させるphpです。


## Description


1970年~2050年の祝日を記述した[yamlファイル]
をオープンソースのグループウェアであるaipoで利用するためにaipoの祝日定義ファイルである、propertiesファイルに変換するphpです。

yamlファイルはaipoで使用するために(/usr/local/aipo/tomcat/webapps/aipo/WEB-INF/conf/holidays_default.properties)
にholidays_default.propertiesとしてデータが上書きされます。


[yamlファイル]: https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml "祝日デー"


## Requirement

curl 7.37.0


## Usage


`curl -L https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml | php change.php`

上記のようにcurlコマンドによってyamlファイルを取り出し、同時にパイプでこのphpを実行することによって、php側でyamlの標準入力を受け取り、properties形式に変換された出力の表示とその出力のpropertiesファイルの作成、記入が実行されます。


## Licence

