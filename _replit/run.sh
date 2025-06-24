#! /bin/sh

MYSQL_HOME=$REPL_HOME/mysql

run_mysqld(){
  mysqld_safe --bind-address=127.0.0.1 \
              --datadir=$MYSQL_HOME \
              --general_log_file=general.log \
              --innodb-log-file-size=4194304 \
              --log-error=error.log \
              --pid-file=mysqld.pid \
              --user=runner &
  
  # Wait for db to load
  while ! mysqladmin ping &> /dev/null; do
    sleep 0.1
  done
}

# To reset the db, delete the mysql_data folder
if [ -d $MYSQL_HOME ]
then
  run_mysqld
else
  # Create a new mysql_data folder
  mkdir -p $MYSQL_HOME
  mysql_install_db --skip-test-db --datadir=$MYSQL_HOME

  run_mysqld
  
  # Setup users, databases, tables
  mysql < _replit/setup.sql
fi

php -S 0.0.0.0:8000 -t www &

sleep infinity
