# config valid only for Capistrano 3.1
lock '>=3.2.1'

set :application, 'greatbatch'
set :repo_url, 'git@github.com:sq1agency/greatbatch.git'

set :linked_dirs, %w{wp-content/uploads}
