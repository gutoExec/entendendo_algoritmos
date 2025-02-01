# Ordenação Por Seleção

Arrays aqui serão bastante abordados, porque são fundamentais em qualquer algortimo, eu uso bastante array na minha empresa no dia dia, é importante saber oq é e como usar.

## Arrays e Listas encadeadas

Arrays são ótimos para encontrar elementos ordenados, até porque temos noção de onde eles estão , em um array o indice sempre começa pelo 0 até o fim dele, sem contar que os objetos que você armazena nele são guardados lado a lado na mémoria, oque facilita a busca do endereço desse objeto na mémoria, mas a desvantagem é que em ordem sequencial de armazenamento, um espaço na mémoria ja pode estar preenchido, e é ai que entra a lista encadeada, você 'reserva lugares' na mémoria para cada objeto que você vai armazenar, isso é bom, mas a desantagem é que esse objetos são armazenados em slots aleatórios no sistema de mémoria, oq dificulta a busca dos objetos armazenados em uma lista encadeada.