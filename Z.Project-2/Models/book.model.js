const { query } = require('express');
var db = require('../Connection/mysql.js')

const Book = function(book){
    this.id = book.id;
    this.name = book.name;
    this .password = book.password;
}

Book.get_all = function(result) {
    db.query('SELECT * FROM user', function(err, book){
        if(err) result(null);

        else result(book);
    });
}

Book.getById = function(id, result) {
    db.query('SELECT * FROM user WHERE id = ?', id, function(err, book){
        if(err || book.length == 0) result(null);    

        else result(book[0]);
    });
    
}

Book.add = function(data, result) {
    db.query('INSERT INTO user SET ?', data, function(err, book){
        if(err) result(null);
        else result({id: book.insertId, ...data})
    })
}

  
    //     if(err || book.length == 0) result(null);    

    //     else result(book[0]);
    // });

Book.remove = function(id, result) {
    db.query('DELETE FROM user WHERE id = ?', id, function(err, book){
        if(err) result(null);
        else result('delete' + id + 'successfull')
    })
}

Book.update_book = function(input, result) {
    console.log(input)
    db.query('UPDATE user SET name=? address=? point=? id=?',[input.name, input.address, input.point, input.id] , function(err, book){
        if(err) result(null);
        else result(input)
    })
}

module.exports = Book;