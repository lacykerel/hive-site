server '165.227.94.190', user: "root", roles: %w{app}

set :branch, "master"
set :deploy_to, "/var/www/html"

set :ssh_options, {
  forward_agent: true,
}

namespace :deploy do
    task :config_file do
      on roles :all do
	    execute "rm -r /var/www/html/current/wp-config.php"
        execute "mv /var/www/html/current/wp-config_prod.php /var/www/html/current/wp-config.php"
      end
    end
end
