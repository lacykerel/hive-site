server '165.227.94.190', user: "root", roles: %w{app}

set :branch, "master"
set :deploy_to, "/var/www/html"

set :ssh_options, {
  forward_agent: true,
}

namespace :deploy do
    task :config_file do
      on roles :all do
	    execute "rm -r #{release_path}/wp-config.php"
        execute "mv #{release_path}/wp-config_prod.php #{release_path}/wp-config.php"
      end
    end
end
