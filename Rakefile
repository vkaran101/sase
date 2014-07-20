#!/usr/bin/ruby

require 'rake'

task :default => [:update, :build]

task :build => [:f5, :icons] do
  puts "[done]"
end

task :update do
  puts "[update] foundation5"

  Dir.chdir "foundation5"
  sh "foundation update"
  Dir.chdir ".."

  files = Rake::FileList["**/foundation/js/foundation.min.js",
                         "**/dist/jquery.min.js",
                         "**/modernizr/modernizr.js"]
  files.each do |js_file|
    public_file = "public/js/" + js_file.pathmap("%f")
    sh "cp #{js_file} #{public_file}"
  end
end

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

task :icons do
  puts "[build] font-awesome"

  Dir.chdir "font-awesome"
  sh "compass compile"
  Dir.chdir ".."

  icon_file = "font-awesome/css/font-awesome.css"
  public_file = "public/css/font-awesome.css"
  sh "cp #{icon_file} #{public_file}"
end

task :clean do
  sh "rm -rf foundation5/.sass-cache"
  sh "rm -rf font-awesome/.sass-cache"
end
