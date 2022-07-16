    ___ _ _                   _
    | _ |_) |_ _ _  __ _ _ __ (_)
    | _ \ |  _| ' \/ _` | '  \| |
    |___/_|\__|_|_|\__,_|_|_|_|_|

*** Welcome to the WordPress packaged by Bitnami 5.9.2-3         ***
*** Documentation:  https://docs.bitnami.com/aws/apps/wordpress/ ***
***                 https://docs.bitnami.com/aws/                ***
*** Bitnami Forums: https://community.bitnami.com/               ***

# O caminho da aplicação na instância fica em 

- /opt/bitnami/apps/

## Opções de comandos do bitnami

- O arquivo bnconfig é utilizado para configurar a instancia

### este comando desabilita a banner com a imagem qua aparesse quando acessa a istancia criada
- sudo ./bnconfig --disable_banner 1

### Mostrar opções do arquivo
- sudo ./bnconfig --help

### Mostrar status de serviço da aplicação
- sudo ./ctlconfig.sh status

### Reiniciar serviço
- sudo ./ctlconfig.sh restart nome_servico

### Alterar senha do wordpress
- sudo ./bnconfig --userpassword nova_senha
// Depois reiniciar o apache