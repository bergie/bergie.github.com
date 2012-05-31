fs = require 'fs'

regexp = ///
  (
    <\!--
  )
  ([A-Za-z0-9\s]+)
  (
    -->
  )
  ///

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
    console.log "\n\nReplacing", match[0]
    post['atom:content'] = post['atom:content'].replace match[0], '', 'g'
  newData.push post

console.log "Writing #{count} changes"
fs.writeFileSync 'blogdump2.json', JSON.stringify(newData), 'utf-8'
