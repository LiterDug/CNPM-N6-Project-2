module.exports = function(router){
    var bookController = require('../Controllers/book.controller')

    router.get('/', bookController.login)

    router.post('/create_user', bookController.create_user)

    router.post('/check_user', bookController.check_user)


    // router.get('/get_list', bookController.get_list)
    
    // router.get('/detail/:id', bookController.detail)

    // router.post('/add', bookController.add)

    // router.delete('/delete/:id', bookController.delete)

    // router.put('/update', bookController.update)
}