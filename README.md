# holidays_jp2aipo


# Overview

オープンソースグループウェアaipoに2050年までの祝日を定義させるphpです。


# Description

yamlファイルの祝日データ(https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml)
をオープンソースのグループウェアであるaipoで利用するためにデータのフォーマットをするphpです。


curl -L https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml | php change.php

上記のようにcurlコマンドによってyamlファイルを取り出し、同時にパイプでこのphpを実行することによって、php側でyamlの標準入力を受け取り、properties形式に変換された出力の表示とその出力のpropertiesファイルの作成、記入が実行されます。

curlからパイプでつなぐため、curlをインストールしていることが必要です。
実行環境のcurlのバージョンはcurl 7.37.0です。

