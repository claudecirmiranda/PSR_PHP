**PSR-12** expande as regras da PSR-1, fornecendo diretrizes mais detalhadas para garantir um estilo de codificação mais consistente.

#### **1\. Declarações Gerais**

*   **Linhas de Código:** Limite o comprimento das linhas a 120 caracteres. Linhas devem ser quebradas em múltiplas linhas com indentação, quando necessário.
*   **Indentação:** Utilize 4 espaços para indentação. O uso de tabulações é proibido.

#### **2\. Estrutura de Arquivo**

*   **Namespaces e Importações:**
    *   As declarações `namespace` devem ser seguidas por um espaço em branco.
    *   As declarações `use` devem ser agrupadas e separadas por um espaço em branco da declaração de namespace e de outras instruções.
*   **Blocos de Código:**
    *   Inicie e termine blocos de código (ex.: `if`, `for`, `while`) na mesma linha que a declaração, e utilize chaves `{}` mesmo para blocos de uma única linha.

#### **3\. Classes e Métodos**

*   **Declarações de Classe:**
    *   A declaração de classe deve ter a palavra-chave `class`, seguida por um espaço, o nome da classe, e em seguida as chaves `{}` na linha seguinte.
*   **Métodos:**
    *   Deve haver uma linha em branco entre a declaração da classe e a declaração do primeiro método.
    *   Métodos devem ser declarados com as palavras-chave `public`, `protected`, ou `private` seguidas de `function` e o nome do método.
*   **Visibilidade de Propriedades e Métodos:**
    *   Sempre defina a visibilidade (`public`, `protected`, `private`) explicitamente para todas as propriedades e métodos.

#### **4\. Controle de Fluxo**

*   **Estruturas Condicionais:** Utilize chaves `{}` para todas as estruturas condicionais, mesmo para blocos de uma linha.
*   **Switch Case:** O `case` deve ser indentado ao mesmo nível que o `switch`. Utilize `break` para encerrar cada bloco de `case`.

#### **5\. Espaçamento**

*   **Espaços em Branco:** Utilize um espaço em torno de operadores binários (ex.: `=`, `+`, `-`) e após vírgulas em listas de parâmetros.
*   **Linhas em Branco:** Separe blocos de código logicamente relacionados com uma linha em branco.

#### **6\. Comentários**

*   **Comentários em Bloco:** Devem ser iniciados com `/*` e terminados com `*/`.
*   **Comentários de Linha:** Devem começar com `//` ou `#`.
