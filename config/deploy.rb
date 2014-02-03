# config valid only for Capistrano 3.1
lock '3.1.0'

set :application, 'christoffer'
set :repo_url, 'git@github.com:Christoffer-Lindahl/christoffer_se.git'

set :branch, proc { `git rev-parse --abbrev-ref HEAD`.chomp }

set :deploy_to, '/var/www/christoffer_se'

set :log_level, :info

set :pty, true

set :linked_dirs, %w{media}

namespace :deploy do

  desc 'Restart application'
  task :restart do
    on roles(:app) do 
	execute :apache2ctl, :graceful
      end
  end

end
