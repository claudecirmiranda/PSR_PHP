# PSR na Prática

Aqui está um exemplo de um pequeno projeto PHP que segue as recomendações PSR-1 e PSR-12, ccom a estrutura de pastas, códigos aplicados aos padrões, e arquivos de configuração `.editorconfig` e `composer.json`.

### **Estrutura de Pastas do Projeto**

```cmd
meu-projeto/
│
├── src/
│   ├── Controller/
│   │   └── HomeController.php
│   ├── Model/
│   │   └── User.php
│   └── View/
│       └── home.php
│
├── tests/
│   └── Controller/
│       └── HomeControllerTest.php
│
├── config/
│   └── config.php
│
├── public/
│   └── index.php
│
├── vendor/
│   └── (composer dependencies)
│
├── .editorconfig
├── .gitignore
└── composer.json

```

### **1\. Arquivo `.editorconfig`**

Este arquivo garante que o código esteja formatado de acordo com as convenções definidas.

```yml
root = true

[*]
charset = utf-8
indent_style = space
indent_size = 4
end_of_line = lf
insert_final_newline = true
trim_trailing_whitespace = true

[*.php]
indent_size = 4
```

### **2\. Arquivo `composer.json`**

Esse arquivo define as dependências e o autoloading do projeto.

```json
{
    "name": "meu-namespace/meu-projeto",
    "description": "Projeto de exemplo seguindo PSR-1 e PSR-12",
    "require": {
        "php": "^7.4 || ^8.0"
    },
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "scripts": {
        "test": "phpunit --colors=always"
    }
}
``` 

### **3\. Código de Exemplo**

#### **`src/Controller/HomeController.php`**

Este arquivo segue as convenções PSR-1 e PSR-12 para classes e métodos.

```php
<?php

namespace App\Controller;

use App\Model\User;

class HomeController
{
    public function index(): void
    {
        $user = new User();
        $user->setName('John Doe');
        require __DIR__ . '/../View/home.php';
    }
}

```

#### **`src/Model/User.php`**

Classe simples de modelo que define uma entidade de usuário.

```php
<?php

namespace App\Model;

class User
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

```

#### **`src/View/home.php`**

Arquivo de visualização simples.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?= htmlentities($user->getName()) ?></h1>
</body>
</html>
```

#### **`tests/Controller/HomeControllerTest.php`**

Arquivo de teste usando PHPUnit para testar a classe `HomeController`.

```php
<?php

namespace Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\HomeController;

class HomeControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $controller = new HomeController();
        $this->expectOutputRegex('/Welcome, John Doe/');
        $controller->index();
    }
}

```
Este código é um teste automatizado escrito em PHP usando o framework PHPUnit. Ele verifica o comportamento do método `index` da classe `HomeController`:

1.  **Namespace e Importações**:
    *   `namespace Tests\Controller;`: Define o namespace do arquivo, organizando o código em uma estrutura hierárquica.
    *   `use PHPUnit\Framework\TestCase;`: Importa a classe `TestCase` do PHPUnit, que fornece funcionalidades para criar testes.
    *   `use App\Controller\HomeController;`: Importa a classe `HomeController` que será testada.
2.  **Classe de Teste**:
    *   `class HomeControllerTest extends TestCase`: Define a classe `HomeControllerTest`, que estende `TestCase`, permitindo que ela utilize as funcionalidades de teste do PHPUnit.
3.  **Método de Teste**:
    *   `public function testIndex(): void`: Define um método de teste chamado `testIndex`. O sufixo "Test" é uma convenção que indica que este método é um teste.
    *   `$controller = new HomeController();`: Cria uma nova instância da classe `HomeController`.
    *   `$this->expectOutputRegex('/Welcome, John Doe/');`: Configura uma expectativa de que a saída do método `index` deve corresponder à expressão regular fornecida, que neste caso é "Welcome, John Doe".
    *   `$controller->index();`: Chama o método `index` do `HomeController`, que é o que está sendo testado.

Em resumo, este teste verifica se o método `index` da classe `HomeController` produz a saída correta, que deve incluir a mensagem "Welcome, John Doe". Se a saída não corresponder, o teste falhará.

#### **`config/config.php`**

Arquivo de configuração básica.

```php
<?php

return [
    'database' => [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'meu_banco'
    ]
];
```

#### **`public/index.php`**

Ponto de entrada do projeto, onde o controlador é chamado.

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controller\HomeController;

$controller = new HomeController();
$controller->index();
```

### **4\. Arquivo `.gitignore`**

Este arquivo define o que deve ser ignorado no repositório Git.

```
/vendor/
.env
/config/config.php
```

### **5\. Adicionando `phpunit`**

#### **1\. Adicionar PHPUnit como Dependência de Desenvolvimento**

Execute o seguinte comando na raiz do seu projeto para adicionar o PHPUnit como uma dependência de desenvolvimento:

```
composer require --dev phpunit/phpunit
```

Isso fará com que o Composer baixe a versão apropriada do PHPUnit para o seu projeto e a coloque na pasta `vendor/`.

#### **2\. Verificar a Estrutura da Pasta `vendor/`**

Após a instalação, você deve ver a pasta `vendor/bin/` contendo o arquivo `phpunit`. A estrutura do seu projeto deve agora incluir:

markdown

```cmd
vendor/
├── bin/
│   └── phpunit
└── composer/
└── ...
```

#### **3\. Executar os Testes**

Agora que o PHPUnit está instalado corretamente, você pode rodar os testes usando o comando:

`vendor/bin/phpunit tests/Controller/HomeControllerTest.php`

Ou, se você estiver usando Windows e não estiver em um ambiente Bash, pode ser necessário usar a barra invertida (`\`):

`vendor/bin/phpunit tests/Controller/HomeControllerTest.php`

### **Considerações Finais**

Depois de adicionar o PHPUnit como uma dependência de desenvolvimento e executá-lo, você estará pronto para rodar seus testes. Isso garante que os padrões PSR-1 e PSR-12 sejam seguidos e que seu código funcione conforme o esperado.
