# Готовый шаблон модуля для Opencart 3 для Linux

### Как пользоваться?


##### Копируем данные к себе на сервер
```
git clone https://github.com/manwhocode/Mod_3.git
```

##### Переходим в папку с файлами
```
cd путь/module
```

##### Запускаем шелл - в конце добавляем имя модуля
```
./clone.sh имя_модуля
```


## Ошибки что делать? 
```
perl: warning: Setting locale failed. 
perl: warning: Please check that your 
locale settings: LANGUAGE = "en_US:en", 
LC_ALL = (unset), LC_CTYPE = "UTF-8", 
LANG = "en_US.UTF-8" are supported and installed on your system. 
perl: warning: Falling back to a fallback locale ("en_US.UTF-8").
```

## Выполняем следующий код
### Generating locales
Missing locales are generated with locale-gen: 
```
locale-gen en_US.UTF-8
```
Alternatively a locale file can be created manually with localedef:
```
localedef -i en_US -f UTF-8 en_US.UTF-8
```
### Setting Locale Settings
```
export LANGUAGE=en_US.UTF-8
export LANG=en_US.UTF-8
export LC_ALL=en_US.UTF-8
locale-gen en_US.UTF-8
dpkg-reconfigure locales
```

