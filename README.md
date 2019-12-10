## Yii2 Module Extension Template

### Settings

1. Set composer.json properties "name", "autoload/psr-4" (vendor//package//)
2. Set db connection properties tests/app/config/components/db.php (dbname, user, password)
3. Define testsClear method, this method invokes before tests runs.

##  Init

1. Execute

```bash
composer install
```

2. Execute

```bash
robo dev:init-project 
```

3. Rm or edit src/Module.php

4. Start development