# mvc_psr4
MVC com PSR4


* Nota 1: Alterar virtualhost da máquina para que funcione no apache com domínio:
Arquivo(ead.conf em /etc/apache2/sites-available/)
<VirtualHost *:80>
    ServerAdmin admin@ead.com
    ServerName ead.com
    ServerAlias www.ead.com 
    DocumentRoot /var/www/ead     
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

Em seguida ativar: sudo a2ensite ead.conf
Em seguida restart o apache: sudo systemctl reload apache2

* Nota 2: Criar domínio local
Editar arquivo: /etc/hosts inserindo:
127.0.0.1       ead.com
Em seguida restart o apache: sudo systemctl reload apache2

* Nota 3: Comandos de terminal para adicionar ao github após ser criado um repositorio vazio:
# git init
# git add .
# git commit -am"Primeiro commit"
# git remote add origin https://github.com/deusyvan/eadmvc.git
# git push -u origin master

* Nota





