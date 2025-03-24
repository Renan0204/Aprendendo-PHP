<?php
echo "echo não requer parênteses.";

// Strings podem ser passadas individualmente como múltiplos argumentos ou
// concatenadas e passadas como um único argumento
echo 'Esta ', 'string ', 'foi ', 'criada ', 'com múltiplos parâmetros.', "\n";
echo 'Esta ' . 'string ' . 'foi ' . 'criada ' . 'com concatenação.' . "\n";

// Nenhuma nova linha ou espaço são adicionados; o código abaixo mostra "olámundo" em apenas uma linha
echo "olá";
echo "mundo";

// O mesmo que o exemplo acima
echo "olá", "mundo";

echo "Esta string ocupa
múltiplas linhas. As novas linhas
também estarão na saída.";

echo "Esta string ocupa\nmúltiplas linhas. As novas linhas\ntambém estarão na saída.";

?>