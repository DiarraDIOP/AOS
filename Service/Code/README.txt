L'utilisation de cette application n�cessite l'installation de Wamp

1 - Ajouter ces 2 lignes dans le fichier php.ini de Wamp:

extension=php_openssl.dll
allow_url_fopen = On

2 - D�commenter la ligne suivante: extension=php_zip.dll

3 - R�demarrer Wamp

4 - Mettez vous dans votre dossier C:\wamp\www , puis cl�nez y le projet

5 - Lancez le projet depuis votre navigateur avec le lien suivant: http://localhost/AOS/Service/Code/