# Para se conectar via ssh deverá baixar a chave ssh

## Criando chave ssh

- Caso não tenha criado uma chave ssh antes de criar a aplicação só poderá usar a que é criado por padrão.
- Para atrlar uma chave ssh personalizada, ela deverá ser criada antes da aplicação e durante a criação da aplicação, especificar a chave ssh que irá utilizar.

## Se conectar via ssh

- Dentro do diretório em que a chave ssh esta.
* ssh -i nome_da_chave.extencao nome_usuario_instancia@endereco_ip

### Caso a autenticação seja recusada, deverá alerar as permisões de leitura do arquivo
* ls -l: Lista as permisões do arquivo.
* chmod 400 nome_da_chave.extencao: Altera as permisões do arquivo.

### Criar script pa conexão simplificada
* vi nome_do_script.sh

### Editar arquivo
#!/bin/bash
ssh -i nome_da_chave.extencao nome_usuario_instancia@endereco_ip

### Dar permições para esse arquivo
* chmod u+x nome_do_script.sh

### Executar script
* ./nome_do_script.sh