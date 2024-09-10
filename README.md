# PSR_PHP
Padrões de Qualidade em PHP

Para garantir um código de qualidade em PHP utilizando o VS Code, criamos este guia que aborda a criação de um template e a configuração do EditorConfig:

### 1\. **Introdução aos Padrões de Qualidade em PHP**

*   **PSR (PHP Standards Recommendations):** Utilize as recomendações PSR, especialmente [PSR-1](https://github.com/claudecirmiranda/PSR_PHP/blob/main/PSR-1.md)) (Basic Coding Standard) e [PSR-12](https://github.com/claudecirmiranda/PSR_PHP/blob/main/PSR-12.md) (Extended Coding Style), para assegurar consistência e qualidade no código.
*   **Documentação:** Comentários claros e aderência ao PHPDoc para documentação inline.
*   **Testes:** Implementação de testes unitários utilizando PHPUnit para validar funcionalidades.

### 2\. **Configuração do EditorConfig**

O plugin EditorConfig for VS Code ajuda a manter estilos de codificação consistentes em diferentes editores e IDEs. A versão 0.16.4 é bastante utilizada.

#### **2.1. Instalação do EditorConfig no VS Code**

*   Abra o VS Code.
*   Vá para a seção de extensões (`Ctrl+Shift+X`).
*   Pesquise por "EditorConfig for VS Code" e instale a versão 0.16.4.

#### **2.2. Criando o Arquivo `.editorconfig`**

No diretório raiz do seu projeto, crie um arquivo chamado `.editorconfig` com o seguinte conteúdo básico:

```yaml
# EditorConfig é suportado por muitos editores e IDEs.
# Use este arquivo para definir e manter estilos de codificação consistentes.

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

*   **`charset`:** Define a codificação do arquivo.
*   **`indent_style`:** Define o estilo de indentação (espaços vs tabs).
*   **`indent_size`:** Define o tamanho da indentação.
*   **`end_of_line`:** Define o estilo de quebra de linha (LF no Linux/macOS e CRLF no Windows).
*   **`insert_final_newline`:** Assegura que há uma nova linha no final de cada arquivo.
*   **`trim_trailing_whitespace`:** Remove espaços em branco no final das linhas.
Este template pode ser adaptado conforme as necessidades do projeto.

### 3\. **Criação de um Template de Projeto PHP**

#### **3.1. Estrutura Básica de Diretórios**

*   **src/**: Código-fonte principal.
*   **tests/**: Testes unitários.
*   **config/**: Arquivos de configuração.
*   **public/**: Arquivos acessíveis ao público (ex.: index.php).
*   **vendor/**: Dependências gerenciadas pelo Composer.
*   **.editorconfig**: Configurações de estilo de código.
*   **.gitignore**: Arquivos a serem ignorados pelo Git.
*   **composer.json**: Arquivo de configuração do Composer.

#### **3.2. Arquivo `composer.json`**

Este arquivo é essencial para o gerenciamento de dependências. Aqui está um exemplo básico:

```json
{
  "name": "seu-namespace/seu-projeto",
  "description": "Descrição do seu projeto",
  "require": {
    "php": "^7.4 || ^8.0",
    "monolog/monolog": "^2.0"
  },
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  },
  "scripts": {
    "test": "phpunit --colors=always"
  }
}
```

*   **`require`:** Dependências do projeto.
*   **`autoload`:** Mapeamento de namespaces para diretórios.
*   **`scripts`:** Scripts customizados, como testes automatizados.

### 4\. **Boas Práticas**

*   **Linting:** Utilize ferramentas como PHP\_CodeSniffer para verificar o estilo de código.
*   **Static Analysis:** Ferramentas como PHPStan ou Psalm podem ser integradas para análise estática do código.
*   **Pre-commit Hooks:** Utilize hooks Git para rodar linter e testes antes de cada commit.

### 5\. **Conclusão**

A combinação de boas práticas de codificação, uma estrutura de projeto bem definida, e o uso de ferramentas como EditorConfig garantem a manutenção de um código de alta qualidade.
