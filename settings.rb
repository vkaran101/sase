# Configuration settings used for deployment.
# This file is read by Rake when executing the deploy tasks.

# production server settings hash
$production = {
  env: "production", # the website mode
  url: "http://www.northeastern.edu/sase/", # full url path with trailing slash
  key: "", # encryption key
  log_level: 1, # the log threshold level
  log_path: "", # log directory with trailing slash
  db_username: "", # database username
  db_password: "", # database password
  db_name: "", # database name
  mailchimp_key: "", # mailchimp api key
  mailchimp_endpoint: "", # mailchimp api url without trailing slash

  user: "", # server username
  server: "", # server url
  path: "" # path to website
}
