# Item obrigatórios na criação de uma instância

- Definição da imagem: Especificar se irá criar somente com S.O, ou criará juntamente com um app.
    - Criando somente com S.O, optar pelo linux AWS, pois ficará mais fácil instalar alguma dependência futura.
    - Ou poderá criar juntamente com uma aplicaçao, EX: Wordpress, Node...

- Definir a região ds instância, por ser ligthsail, não tem servidar para américa do sul, Brasil.

# Caso seja inicado uma aaplicação wordpress

- Será necessário se conectar via ssh, pode ser pelo ssh web da aws, ou pelo seu próprio console.
- Digita o comando 'cat bitnami_credentials', para poder abrir o aquivo e copiar o usuário e senha.