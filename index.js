var bodyParser  = require('body-parser'),
	express 	= require('express'),
	connection = require('express-myconnection'),
	mysql		= require('mysql'),
	http 		= require('http'),
    app 		= express(),
	middleware 	= require('./middleware');

app.use(bodyParser.urlencoded({extended: true}));

app.use(
	connection(mysql, {
		host: 'localhost',
        user: 'Uno95',
        password : 'Uno_L241mo',
        port : 3306, //port mysql
        database:'perpus'
	}, 'request')
);    

middleware(app);

app.use('/', express.static(__dirname + '/public'));
app.set('port', process.env.PORT || 5000);
app.listen(app.get('port'), function(){
	console.log('Listening at ' + app.get('port'));
});
