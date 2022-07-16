# Criar um link simbólico para wordpress

## navegue até o diretório uploads em wp-content

* ls -l: Lista as informções do diretório atual.
* sudo ln -s /storage-externo media: Cria um diretório media e linka esse diretório com 'storage-externo.'

## Em seguida você presisa dar permisões para o seu 'storage-externo' com o usuário e grupo do wordpress
* sudo chown daemon:daemon /storage-externo.
