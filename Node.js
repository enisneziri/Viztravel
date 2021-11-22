var mysql = require('mysql');

var con = mysql.createConnection({
  host: "mysql.db.mdbgo.com:8604",
  user: "username",
  password: "password"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});