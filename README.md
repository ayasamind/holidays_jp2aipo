# holidays_jp2aipo

yamlファイルの祝日データ(https://raw.githubusercontent.com/k1LoW/holiday_jp/master/holidays.yml)
をaipoで利用するためにpropertiesファイルに変換するphpです。

curlで上記のyamlファイルを取り出し、同時にパイプでこのphpを実行することによって、変換された出力の表示とその出力のpropertiesファイルの作成、記入が実行されます。

curlからパイプでつなぐため、curlをインストールしていることが必要です。
実行環境のcurlのバージョンはcurl 7.37.0です。

