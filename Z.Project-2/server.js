const express = require('express')
const app = express()
const port = 3000

var connection = require('./Connection/mysql.js')

var bodyParser = require('body-parser')
const urlencoded = require('body-parser/lib/types/urlencoded.js')
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

app.use(express.static('Public'))

// app.use(express.json())
// app.use(express.urlencoded({extends: true}))


app.use('/verify', function (req, res, next) {
  console.log("Authenticate and Redirect")
  res.redirect('/user');
  next();
});

////////////////////////////////////////////////
require('./Routers/book.router.js')(app)




app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})













