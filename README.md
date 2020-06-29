# Slack Api
Api para enviar msg automatico para o slack

Documentation


Modo de uso

```php
use GustavoSantarosa\slackApi;

    // Aqui voce vai iniciar o construtor com a chave passada pelo slack
    $slackApi = new slackApi("sua chave");
    // Aqui voce vai passar como parametro o canal sem o jogo da velha # e depois a mensagem que deseja.
    $slackApi->enviarMsg("teste", "teste2");
    // Caso haja algum problema, ou qualquer retorno do slack, voce pode utilizar o callback para ver.
    $fleshdesk->callback();
```

#### Settings

The default settings are pretty good, but you may wish to set up default behaviour for your client to be used for all messages sent. **All settings are optional and you don't need to provide any**. Where not provided, we'll fallback to what is configured on the webhook integration, which are [managed at Slack](https://my.slack.com/apps/manage/custom-integrations), or our sensible defaults.

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
