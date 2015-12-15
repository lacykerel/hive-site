server 'TBD', user: "ec2-user", roles: %w{app}

set :branch, "master"
set :deploy_to, "/var/www/production/greatbatch"

set :ssh_options, {
  forward_agent: true,
}
