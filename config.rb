http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"

relative_assets = true

line_comments = false

output_style = :expanded
environment = :development

# Require any additional compass plugins installed on your system.
require 'compass'
require 'compass-normalize'
require 'breakpoint'
require 'sass-globbing'
require 'rgbapng'
require 'toolkit'
require 'susy'
require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
  end
end
