set :stage, :staging

server '192.168.126.110', user: 'root', roles: %w{web app db}

set :ssh_options, { :forward_agent => true }

#set :ssh_options, {
#  keys: %w(~/vagrant.d/insecure_private_key)
#
#}

fetch(:default_env).merge!(wp_env: :staging)
