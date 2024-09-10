**PSR-1** estabelece padrões básicos para a codificação em PHP, visando a interoperabilidade e a consistência entre projetos. Abaixo estão os principais pontos da PSR-1:

#### **1\. Estrutura de Arquivo**

*   **PHP Tags:** Todos os arquivos PHP devem utilizar `<?php ?>` ou `<?= ?>` para indicar blocos de código PHP.
*   **Codificação de Arquivo:** Arquivos PHP devem ser codificados em UTF-8 sem BOM (Byte Order Mark).
*   **Side Effects:** Arquivos PHP devem declarar novas entidades (classes, funções, constantes, etc.) ou executar lógica (como gerar saída) – mas nunca ambos.

#### **2\. Declarações de Namespace e `use`**

*   **Namespace:** Cada arquivo deve conter apenas uma declaração de namespace no topo do arquivo.
*   **Importação de Classes:** As declarações `use` para importar classes, funções ou constantes devem ser feitas logo após a declaração do namespace.

#### **3\. Classes, Propriedades e Métodos**

*   **Nomes de Classes:** Os nomes de classes devem ser declarados em `StudlyCaps` (ex.: `MyClassName`).
*   **Nomes de Propriedades:** Propriedades de classes devem ser nomeadas em `camelCase` (ex.: `$myProperty`).
*   **Nomes de Métodos:** Os nomes dos métodos também devem seguir o estilo `camelCase` (ex.: `myMethodName()`).

#### **4\. Constantes de Classe**

*   **Nomes de Constantes:** As constantes de classe devem ser declaradas em `ALL_UPPER_CASE` com separadores de underscore (ex.: `CONST_NAME`).

#### **5\. Funções e Métodos**

*   **Nomes de Funções:** Os nomes das funções devem ser declarados em `camelCase`.
*   **Estilo de Parâmetros:** Parâmetros de função e método devem ser separados por um espaço após cada vírgula.
