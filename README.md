# DataConverter
Api para enviar msg automatico para o slack

Documentation


Modo de uso

use GustavoSantarosa\slackApi;

//Aqui voce vai iniciar o construtor com a chave passada pelo slack
$slackApi = new slackApi("sua chave");
//Aqui voce vai passar como parametro o canal sem o jogo da velha # e depois a mensagem que deseja.
$slackApi->enviarMsg("teste", "teste2");
//Caso haja algum problema, ou qualquer retorno do slack, voce pode utilizar o callback para ver.
$fleshdesk->callback();

Contributing

Please see CONTRIBUTING for details.
Support
Se você descobrir algum problema relacionado à segurança, envie um e-mail para gustavo-computacao@hotmail.com em vez de usar o rastreador de problemas.

Thank you

Credits

    Luis Gustavo Santarosa Pinto (Developer)
    All Contributors (This Rock)

License

The MIT License (MIT). Please see License File for more information.
