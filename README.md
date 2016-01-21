paginacao-com-ajax-e-php
========================

Paginação com ajax e php

### Cria o banco de dados
```
CREATE DATABASE paginacao;

USE paginacao;
```

### Tabela do banco de dados
```
CREATE TABLE IF NOT EXISTS `produto` (
  id int(11) NOT NULL AUTO_INCREMENT,
  descricao varchar(100) NOT NULL,
  valor double(14,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

```
