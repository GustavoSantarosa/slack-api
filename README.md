# Slack Api
Api para enviar msg automatico para o slack

Documentação
Por hora só é possivel enviar mensagens para um canal especifico, em breve sera introduzido as demais funções.

Modo de uso

```php
use GustavoSantarosa\slackApi;

    // Aqui voce vai iniciar o construtor com a chave passada pelo slack
    $slackApi = new slackApi("sua chave");
    // Aqui voce vai passar como parametro o canal sem o jogo da velha # e depois a mensagem que deseja.
    $slackApi->enviarMsg("teste", "teste2");
    // Caso haja algum problema, ou qualquer retorno do slack, voce pode utilizar o callback para ver.
    $slackApi->callback();
```

#### Configurações

Em breve estas funções serão incluidas.

As configurações padrão são muito boas, mas você pode desejar configurar o comportamento padrão para o seu cliente a ser usado em todas as mensagens enviadas. Todas as configurações são opcionais e você não precisa fornecer nenhuma. Onde não for fornecido, recuaremos para o que está configurado na integração do webhook, que é gerenciado no Slack, ou nossos padrões sensíveis.
Field | Type | Description
----- | ---- | -----------
`channel` | string | The default channel that messages will be sent to
`username` | string | The default username for your bot
`icon` | string | The default icon that messages will be sent with, either `:emoji:` or a URL to an image
`link_names` | bool | Whether names like `@regan` or `#accounting` should be linked in the message (defaults to false)
`unfurl_links` | bool | Whether Slack should unfurl text-based URLs (defaults to false)
`unfurl_media` | bool | Whether Slack should unfurl media-based URLs, like tweets or Youtube videos (defaults to true)
`allow_markdown` | bool | Whether markdown should be parsed in messages, or left as plain text (defaults to true)
`markdown_in_attachments` | array | Which attachment fields should have markdown parsed (defaults to none)


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
