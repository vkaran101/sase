#!/usr/bin/ruby

require 'rake'

desc "Update then build resources"
task :default => [:update, :build]

desc "Build Foundation 5 CSS and Font Awesome icons"
task :build => [:f5, :icons] do
  puts "[done]"
end

desc "Update Foundation 5 resources and copy to public dir"
task :update do
  puts "[update] foundation5"

  Dir.chdir "foundation5"
  sh "bundle update"
  sh "foundation update"
  Dir.chdir ".."

  files = Rake::FileList["**/foundation/js/foundation.min.js",
                         "**/dist/jquery.min.js",
                         "**/dist/jquery.min.map",
                         "**/modernizr/modernizr.js"]
  files.each do |js_file|
    public_file = "public/js/" + js_file.pathmap("%f")
    sh "cp #{js_file} #{public_file}"
  end
end

desc "Compile Foundation 5 SCSS to CSS"
task :f5 do
  puts "[build] foundation5"

  Dir.chdir "foundation5"
  sh "compass compile"
  Dir.chdir ".."

  f5_css = "foundation5/css/app.css"
  f5_js = "foundation5/js/app.js"
  public_css = "public/css/foundation5.css"
  public_js = "public/js/foundation5.js"

  sh "cp #{f5_css} #{public_css}"
  sh "cp #{f5_js} #{public_js}"
end

desc "Compile Font Awesome icons"
task :icons do
  puts "[build] font-awesome"

  Dir.chdir "font-awesome"
  sh "compass compile"
  Dir.chdir ".."

  icon_file = "font-awesome/css/font-awesome.css"
  public_file = "public/css/font-awesome.css"
  sh "cp #{icon_file} #{public_file}"
end

desc "Clean up sass cache"
task :clean do
  sh "rm -rf foundation5/.sass-cache"
  sh "rm -rf font-awesome/.sass-cache"
end

desc "Deploy to production server"
task :deploy do
  require './settings.rb'
  puts "[deploy] production"

  index_file = "index.php"
  config_file = "app/config/config.php"
  db_file = "app/config/database.php"
  mailchimp_file = "app/config/mailchimp.php"
  ignore_dirs = ["foundation5", "font-awesome"]

  # change website mode
  new_file = File.read(index_file)
  new_file.gsub!(/'ENVIRONMENT', '\w*'/,
                 "'ENVIRONMENT', '#{$production[:env]}'")
  File.open(index_file, "w") { |file| file.puts new_file }

  # change configuration
  new_file = File.read(config_file)
  new_file.gsub!(/\['base_url'\]\s*=\s*'.*'/,
                 "['base_url'] = '#{$production[:url]}'")
  new_file.gsub!(/\['encryption_key'\]\s*=\s*'.*'/,
                 "['encryption_key'] = '#{$production[:key]}'")
  new_file.gsub!(/\['log_threshold'\]\s*=\s*\d/,
                 "['log_threshold'] = #{$production[:log_level]}")
  new_file.gsub!(/\['log_path'\]\s*=\s*'.*'/,
                 "['log_path'] = '#{$production[:log_path]}'")
  File.open(config_file, "w") { |file| file.puts new_file }

  # change database configuration
  new_file = File.read(db_file)
  new_file.gsub!(/\['username'\]\s*=\s*'.*'/,
                 "['username'] = '#{$production[:db_username]}'")
  new_file.gsub!(/\['password'\]\s*=\s*'.*'/,
                 "['password'] = '#{$production[:db_password]}'")
  new_file.gsub!(/\['database'\]\s*=\s*'.*'/,
                 "['database'] = '#{$production[:db_name]}'")
  File.open(db_file, "w") { |file| file.puts new_file }

  # change mailchimp configuration
  new_file = File.read(mailchimp_file)
  new_file.gsub!(/\['api_key'\]\s*=\s*'.*'/,
                 "['api_key'] = '#{$production[:mailchimp_key]}'")
  new_file.gsub!(/\['api_endpoint'\]\s*=\s*'.*'/,
                 "['api_endpoint'] = '#{$production[:mailchimp_endpoint]}'")
  File.open(mailchimp_file, "w") { |file| file.puts new_file }

  # rsync files to server
  command = "sudo rsync -rv "
  ignore_dirs.each do |path|
    command << "--exclude=\"#{path}\" "
  end
  command << "./ #{$production[:user]}@#{$production[:server]}:#{$production[:path]}"
  sh command

  puts "[done]"
end
