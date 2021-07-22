# Gerador de senhas

Desenvolvi com a intenção de facilitar meu trabalho, muita das vezes o cliente não tem necessidade de cadastrar mais de um usuário, apenas o dele para gerenciar o painel, pensando nisso, construí o gerador de hash, apenas copio e colo no banco de dados.

## Contém:

- Arquivo PHP para requisição `Ajax` com retorno em `JSON`
- Um arquivo de classe:

```php
    <?php

    class Hash
    {
      public static function create($password)
      {
        return password_hash($password, PASSWORD_BCRYPT);
      }

      public static function validate($password, $dbPassword)
      {
        if (password_verify($password, $dbPassword)) {
          return true;
        } else {
          return false;
        }
      }
    }
```

### Exemplo:
[https://oguilherme.xyz/hash-generator/](https://oguilherme.xyz/hash-generator/)

![https://i.imgur.com/OmPEwI5.png](https://i.imgur.com/OmPEwI5.png)
