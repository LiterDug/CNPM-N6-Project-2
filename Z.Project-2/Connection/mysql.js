var mysql = require("mysql")

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    // port: 3306,
    password: null,
    database: 'app'
})



connection.connect(function(err){
  if(err){
    console.log(err.code);
    console.log(err.fatal);
  }
})


// connection.end(function(){
//   console.log("closed")
// })

module.exports = connection