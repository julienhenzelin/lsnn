set :application, "set your application name here"
set :domain,      "antistatique.alwaysdata.net"
set :deploy_to,   "/home/mfh/www/lsnn.ch/"
set :app_path,    "app"

set :user,        "mfh" # CHANGE ME
set :use_sudo,    false

set :repository,  "git@github.com:zufrieden/lsnn.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :use_composer, true
set :app_config_file,       "parameters.yml"


# directories that will be shared between all deployments
set :shared_children,     [app_path + "/logs", "web/uploads", "data"]

# share our database configuration
set :shared_files,      ["app/config/parameters.yml"]

set :update_assets_version, false
set :dump_assetic_assets, true

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Symfony2 migrations will run

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL