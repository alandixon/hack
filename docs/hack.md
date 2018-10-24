# hack

## Versions
http://whatsmyos.com/

| Fn | win cmd | win ps | nix   |
| ---- |---|-------|-------|
| version    |  ver  | $PSVersionTable.PSVersion | cat /etc/os-release<br>lsb_release -a<br>hostnamectl     |
| kernel ver    |    |         | uname -r       |


| Fn | MS SQL | Oracle | MySql   |
| ---- |---|-------|-------|
| version    |  USE master SELECT @@version  | SELECT * FROM v$version; | SELECT VERSION();<br>SHOW VARIABLES LIKE "%version%";|
|  tables   |  SELECT TABLE_SCHEMA + ‘.’ + TABLE_NAME, * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = ‘BASE TABLE’ ORDER BY TABLE_SCHEMA + ‘.’ + TABLE_NAME  |  SELECT owner, table_name FROM dba_tables<br>SELECT owner, table_name   FROM all_tables<br>SELECT table_name<br>  FROM user_tables| show tables; |

