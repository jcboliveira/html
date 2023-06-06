Exemplo básico

init_db.php: Cria tabela em sqlite3 e insere valores
ler_db.php: ler valores na dB criada por init_db.php com valores inseridos por index.php
index.php: inserir valores na Bd


Atualizar o SO
1 - sudo apt update
2 - sudo apt upgrade

Instalar o apache
1 - sudo apt install apache2

Instalar o sqlite3
1 - sudo apt install sqlite3

Instalar o PHP + PHP para apache + PHP para sqlite3
1 - sudo apt install php libapache2-mod-php php-sqlite3

Permitir corre o site fora do diretório usual /var/www/html
1 - sudo a2enmod userdir
2 - sudo vi /etc/apache2/mods-enabled/phpxx.conf em que xx é a versão do PHP (neste momento 8.1 Comentar as útimas 5 linhas 
# <IfModule mod_userdir.c>
#     <Directory /home/*/public_html>
#        php_admin_flag engine Off
#     </Directory>
# </IfModule>


reiniciar o apache 
1 - sudo service apache2 restart

Aceder ao site por:
http://localhost/~user/ em que user é o vosso utilizador

Mais informação no documento de apoio que está no moodle

NOTA: Nunca se deve realizar assim grande erro de permissões mas facilita o trabalho
Mudar as permissões dos diretórios
cd /var/www/
sudo chmod a+rwx html
cd /var/www/html
sudo chmod a+rw *