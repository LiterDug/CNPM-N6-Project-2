const Book = require('../Models/book.model')
const db = require('../Connection/mysql.js')


exports.login = (req, res) => {
    res.sendFile(__dirname.replace('Controllers','') + '/Public/index.html')
}

exports.create_user = function(req,res) {
    db.query('INSERT INTO user(name, password) VALUES (?,?)', [req.body.name, req.body.password], function(err, book){
        res.sendFile(__dirname.replace('Controllers','') + '/Public/index.html')
    })
}

exports.check_user = function(req,res) {

    console.log(req.body.name, req.body.password); 
  
    const query = `SELECT * FROM user WHERE name = ? AND password = ?`;
  
    db.query(query, [req.body.name, req.body.password], function(err, book) {
        if(err || book.length == 0) res.sendFile(__dirname.replace('Controllers','') + '/Public/index.html')

        else res.sendFile(__dirname.replace('Controllers','') + '/Public/home.html')
    });
}



// exports.get_list = function(req,res) {
//     Book.get_all(function (data){
//         res.send({result: data})
//     })
// }
// exports.detail = function(req,res) {
//     Book.getById(req.params.id, function (input){
//          res.send({result: input})
//     });

// }
// exports.add = function(req,res) {
//     var data = req.body;
//     Book.add(data, function(input){
//         res.send({result: input})
//     })

// }
// exports.delete = function(req,res) {
//     var id = req.params.id;
//     Book.remove(id, function(input){
//         res.send({result: input})
//     })

// }
// exports.update = function(req,res) {
//     var id = req.params.id;
//     Book.update_book(id, function(input){
//         res.send({result: input})
//     })

// }