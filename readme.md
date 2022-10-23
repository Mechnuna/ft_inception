## ft_inception
###  Manual part 
По сути, основная цель проекта — запустить 3 контейнера с конкретным сервисом, таким как mariadb, wordpress и nginx. Затем соединить их для совместной работы.
### Bonus part
В качестве бонуса установлены такие сервисы как админка, бекап базы данных, кеширование через redis и ftp-сервис

### Запуск
Запуск производится командой ```make file``` 
Команда ```make down``` остановит ваши контейнеры, но также удалит остановленные контейнеры, а также все созданные сети
Команда ```make up``` выводит список контейнеров
Команда ```make fclean``` удаляет образы, контейнеры и сети. Также будут удалены все изображения, на которые не ссылается какой-либо контейнер
Команда ```make re``` создает или перестраивает сервисы
