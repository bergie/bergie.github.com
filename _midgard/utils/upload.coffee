apiKey = "d2f674ff306ab066dfe856f555b61ae5"
apiSecret = "63c57b46ea98e9d2"
apiToken = "72157631797743404-12a42ecfcf27ca1e"
apiTSecret = "80aac6b5c5bb4c6d"

{Flickr} = require 'flickr-with-uploads'
fs = require 'fs'
batches = require 'batches'

client = new Flickr apiKey, apiSecret, apiToken, apiTSecret
api = (method, payload, cb) ->
  req = client.createRequest method, payload, true, cb
  do req.send

data = fs.readFileSync "#{__dirname}/imgdump.json", 'utf-8'
images = JSON.parse data

#api 'flickr.photos.getInfo',
#  photo_id: '4992745376'
#, (err, response) ->

upload = (image, cb) ->
  location = "#{__dirname}/blobs/#{image.location}"
  stream = fs.createReadStream location,
    flags: 'r'

  imgData =
    title: image.title
    is_public: 1
    photo: stream

  if image.tags.length
    imgData.tags = image.tags.join ' '
 
  api 'upload', imgData, cb

b = batches.batch
  concurrent: 10
  exitOnError: false

images.forEach (image) ->
  b.add (next, index) ->
    upload image, next

b.when (errors, data) ->
  console.log "DONE"
  console.log errors
