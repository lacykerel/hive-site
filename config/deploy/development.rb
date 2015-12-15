server 'TBD', user: "ec2-user", roles: %w{app}

set :branch, "development"
set :deploy_to, "/var/www/development/greatbatch"

set :ssh_options, {
  forward_agent: true,
}
