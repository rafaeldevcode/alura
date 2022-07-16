# Adicionando e configundo discos adicionais

## Comandos

* df -h: Mostra as opções de armazanamento que estão disponiveis na máquina.
* fdisk -l: Lista os discos e as partições.
* sudo fdisk /dev/nome_disco: Acessa os disco criado.
    * p: Printa as informações do disco.
    * n: Cria uma nova partiçao.
    * w: Sai do disco.
* sudo mkfs.ext4 /dev/nome_disco_particao: Formata o disco.
* sudo mkdir /storage-externo: Cria um diretório.
* sudo mount /dev/nome_disco_particao /storage-externo: Monta o disco no diretório storage-externo.
* sudo umount /storage-externo: Desmonta o disco.
* ls -l: Lista os diretorios com sua permiões.
* sudo chown usuario:usuario /storage-externo: Altera o dono do diretório para que o mesmo possa ser escrito.


## Depois de configurado o disco é necessário automatizar a montagem do disco, pois se amáquina for reiniciada, é necessário montar o disco manualmente

### O arquivo a ser editado a seguir é um arquivo crítico pois ele é lido na inicializção da máquina, então é melhor fazer um backup antes de editalo.

* cd /etc: Entrar no diretório.
* sudo cp fstab fstab.bkp: Fazer backup do arquivo
* sudo vi fstab: Abrir o arquivo para edição.

==== ARQUIVO A SER EDITADO ====
LABEL=cloudimg-rootfs       /                   ext4    defauts/discard     0 0
/dev/nome_disco_particao    /storage-externo    ext4    defauts             0 2
* :x - Grava o arquivo.

* cat /etc/fstab: Abrir o arquivo no terminal.
* sudo mount -a: Lê o arquivo fstab e executa o mesmo.
* sudo reboot: Reinicia a máquina.