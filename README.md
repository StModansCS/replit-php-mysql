# MySQL reset

To reset the database, delete the 'mysql' folder and run the repl again.

# phpMyAdmin

To install phpmyadmin, use a one-liner like this in the shell:

```sh
curl -s https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.tar.gz | tar -xz && rm -rf www/phpmyadmin && mv -n phpMyAdmin-*-all-languages www/phpmyadmin
```
