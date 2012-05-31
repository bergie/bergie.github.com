fs = require 'fs'

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

getNewPath = (path) ->
  pathParts = path.split '/'
  localName = pathParts.pop()
  "/files/#{localName}"

json = fs.readFileSync 'blogdump.json', 'utf-8'
data = JSON.parse json
json2 = json
newData = []
count = 0
for post in data
  loop
    match = regexp.exec post['atom:content']
    break unless match
    count++
    newPath = getNewPath match[3]
    oldPath = "#{match[2]}#{match[3]}" if match[2]
    oldPath = match[3] unless match[2]
    console.log "\n\nReplacing", oldPath, newPath
    post['atom:content'] = post['atom:content'].replace oldPath, newPath, 'g'
  newData.push post

console.log "Writing #{count} changes"
fs.writeFileSync 'blogdump2.json', JSON.stringify(newData), 'utf-8'
