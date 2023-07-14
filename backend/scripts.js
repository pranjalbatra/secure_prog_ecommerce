const mysql = require('mysql2');
const express = require('express');
const bodyparser = require('body-parser');

var app = express();
app.use(bodyparser.json());

const dbConfig = {
    host: '127.0.0.1',
    user: 'root',
    password: 'Pan20110529@',
    database: 'sche_1',
    multipleStatements: true
};

function handleDisconnect(dbConfig) {
    mysqlConnection = mysql.createConnection(dbConfig); 

    mysqlConnection.connect(function(err) {
        if(err) {
            console.log('error when connecting to db:', err);
            setTimeout(handleDisconnect, 2000); 
        }                                      
    });                                     

    mysqlConnection.on('error', function(err) {
        console.log('db error', err);
        if(err.code === 'PROTOCOL_CONNECTION_LOST') { 
            handleDisconnect(dbConfig);                        
        } else {                                      
            throw err;                                  
        }
    });
}

handleDisconnect(dbConfig);

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






//Router to add a user's detail


app.post('/sche_1', (req, res) => {
    let users = req.body;
    if (users.user_id === 0) {
        // For new user, insert a new record
        let sql = "INSERT INTO first_table(user_name,user_email) VALUES (?, ?)";
        mysqlConnection.query(sql, [users.user_name, users.user_email], (err, result) => {
            if (!err) {
                // Send back the ID of the new user
                res.send('New User ID : ' + result.insertId);
            } else {
                console.log(err);
                res.status(500).send('Server error');
            }
        });
    } else {
        // For existing user, update the record
        let sql = "UPDATE first_table SET user_name = ?, user_email = ? WHERE user_id = ?";
        mysqlConnection.query(sql, [users.user_name, users.user_email, users.user_id], (err, result) => {
            if (!err) {
                if (result.affectedRows === 0) {
                    // If no rows were affected, the user_id does not exist
                    res.status(400).send('No User Found with this ID');
                } else {
                    // Otherwise, send a success message
                    res.send('User Details Updated Successfully');
                }
            } else {
                console.log(err);
                res.status(500).send('Server error');
            }
        });
    }
});




//Router to UPDATE a user's detail
// PUT operation
app.put('/sche_1', (req, res) => {
    let users = req.body;
    console.log("Received user_id: ", users.user_id);  // Add this line
    var sql = "UPDATE first_table SET user_name = ?, user_email = ? WHERE user_id = ?";
    mysqlConnection.query(sql, [users.user_name, users.user_email, users.user_id], (err, results, fields) => {
        if (!err) {
            if(results.affectedRows > 0)
                res.send('User Details Updated Successfully');
            else
                res.status(404).send('No User Found with this ID. Result: ' + JSON.stringify(results));
        }
        else {
            console.log(err);
            res.status(500).send('Server error');
        }
    })
});


//nvc structure needed



//Router to DELETE a user's detail

app.delete('/sche_1/:id', (req, res) => {
    mysqlConnection.query('DELETE FROM first_table WHERE user_id = ?', [req.params.id], (err, rows, fields) => {
    if (!err)
        res.send('Record deleted successfully.');
    else
        console.log(err);
    })
    });