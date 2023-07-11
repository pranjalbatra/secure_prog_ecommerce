const mysql = require('mysql2');
const express = require('express');
const bodyparser = require('body-parser');
var app = express();
app.use(bodyparser.json());

var mysqlConnection = mysql.createConnection({
host: '127.0.0.1',
user: 'root',
password: 'Pan20110529@',
database: 'sche_1',
multipleStatements: true
});


mysqlConnection.connect((err)=> {
if(!err)
console.log('Connection Established Successfully');
else
console.log('Connection Failed!'+ JSON.stringify(err,undefined,2));
});

const port = process.env.PORT || 8000;
app.listen(port, () => console.log(`Listening on port ${port}..`));


app.get('/sche_1' , (req, res) => {
mysqlConnection.query('SELECT * FROM first_table', (err, rows, fields) => {
if (!err)
res.send(rows);
else
console.log(err);
})
} );






//Router to INSERT/POST a user's detail


app.post('/sche_1', (req, res) => {
    let users = req.body;
    var sql = "SET @user_id = ?;SET @user_name = ?;SET @user_email = ?; CALL AddOrEdit(@user_id,@user_name,@user_email);";
    mysqlConnection.query(sql, [users.user_id, users.user_name, users.user_email], (err, rows, fields) => {
        if (!err)
            rows.forEach(element => {
                if(element.constructor == Array)
                res.send('New User ID : '+ element[0].user_id);
            });
        else
            console.log(err);
            res.status(500).send('Server error');
    })
});


//Router to UPDATE a user's detail
app.put('/sche_1', (req, res) => {
    let users = req.body;
    var sql = "SET @user_id = ?;SET @user_name = ?;SET @user_email = ?;CALL AddOrEdit(@user_id,@user_name,@user_email);";
    mysqlConnection.query(sql, [users.user_id, users.user_name, users.user_email], (err, rows, fields) => {
        if (!err)
            res.send('User Details Updated Successfully');
        else {
            console.log(err);
            res.status(500).send(err.message); // send error response
        }
    });
});



//Router to DELETE a user's detail

app.delete('/sche_1/:id', (req, res) => {
    mysqlConnection.query('DELETE FROM first_table WHERE user_id = ?', [req.params.id], (err, rows, fields) => {
    if (!err)
        res.send('Record deleted successfully.');
    else
        console.log(err);
    })
    });