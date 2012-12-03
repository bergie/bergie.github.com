request = require 'request'
fs = require 'fs'
path = require 'path'

imageRoot = path.resolve process.cwd(), '../files/'

downloadImage = (path) ->
  pathParts = path.split '/'
  localName = pathParts.pop()
  request("http://bergie.iki.fi#{path}").pipe fs.createWriteStream "#{imageRoot}/#{localName}"

regexp = ///
  (["\(])
  (
    http://bergie.iki.fi
  )
  ?
  (
    (   
        /static/\d/
      | /midcom-serveattachmentguid-
      | /midcom-serveattachment-
      | /attachment/
    )
    [A-Za-z0-9\.\/\-_]+
  )
  (["\)])
  ///g

fs = require 'fs'
json = JSON.parse fs.readFileSync 'blogdump.json', 'utf-8'
found = 0
for post in json
  shown = false
  loop
    match = regexp.exec post['atom:content']
    break unless match

    console.log "\n\n#{post['dc:title']}" unless shown
    shown = true
    found++

    console.log match[3] #match[0], match[1], match[2]
    downloadImage match[3]

console.log "In total, #{found} images found"
