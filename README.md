# cacheStudy

Esse repo é de uma aula do TreinaWeb sobre cache com PHP,
Onde foi feita uma implementação genérica de cache

Criado um arquivo que já é processado, e de tempo em tempo ele é atualizado
Ao entrar na página, pega o conteúdo do buffer e armazena o html num arquivo 'cache.html'

Abre o outputbuffer
Escreve o conteúdo do buffer
Abre o arquivo
Escrevemos o conteúdo do buffer dentro do arquivo
Definimos o tempo que o cache será valido

Se o arquivo ainda estiver válido, faço um require do cacheFile e comento a última vez em cache do arquivo:
<img src="https://i.imgur.com/YVAzYCT.jpg"> </img>