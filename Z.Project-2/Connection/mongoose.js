const mongoose = require('mongoose')
mongoose.connect('mongodb+srv://ducmanh:1234@cluster0.us9pfrl.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0');


const Schema = mongoose.Schema;

const AccountSchema  = new Schema({
  username: String,
  password: String,
  _id: String
}, {
    collection: 'MyApp'
});

const AccountModel = mongoose.model('MyApp', AccountSchema)

AccountModel.updateMany({
    username: 'manh',
    password: '1234',
    _id:'1'
}, {
    password: '123'
})
.then( data => {
    console.log(data)
})
.catch( err => {
    console.log(err)
})


AccountModel.find({})
.then( data => {
    console.log(data)
})
.catch( err => {
    console.log(err)
})














