# hack

## Locations
| Page| Link | Src |  Notes |
| --- |------|-------| -------|
| Hello world| https://alandixon.github.io/hack/html/HelloWorld.html |https://github.com/alandixon/hack/blob/master/html/HelloWorld.html | |
| Loggly test | https://alandixon.github.io/hack/html/log/loggly/logglytest.html | https://github.com/alandixon/hack/blob/master/html/log/loggly/logglytest.html |  |
| MinLoggly | https://alandixon.github.io/hack/html/log/loggly/minloggly.html | https://github.com/alandixon/hack/blob/master/html/log/loggly/minloggly.html |  |
| LongWhite| https://alandixon.github.io/hack/html/LongWhite.html | https://github.com/alandixon/hack/blob/master/html/LongWhite.html |  |
| LongWhiteExtra| https://alandixon.github.io/hack/html/LongWhiteExtra.html | https://github.com/alandixon/hack/blob/master/html/LongWhiteExtra.html |  |


## Versions
http://whatsmyos.com/

| Fn | win cmd | win ps | nix   |
| ---- |---|-------|-------|
| version    |  ver  | $PSVersionTable.PSVersion | cat /etc/os-release<br>lsb_release -a<br>hostnamectl     |
| kernel ver    |    |         | uname -r       |


| Fn | MS SQL | Oracle | MySql   |
| ---- |---|-------|-------|
| version    |  USE master SELECT @@version  | SELECT * FROM v$version; | SELECT VERSION();<br>SHOW VARIABLES LIKE "%version%";|
|  tables   |  SELECT TABLE_SCHEMA + '.' + TABLE_NAME, * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' ORDER BY TABLE_SCHEMA + '.' + TABLE_NAME  |  SELECT owner, table_name FROM dba_tables<br>SELECT owner, table_name   FROM all_tables<br>SELECT table_name<br>  FROM user_tables| show tables; |

