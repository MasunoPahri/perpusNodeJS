var member = require('./member'),
	admin = require('./admin'),
	invent = require('./inventory');

var router = function(app){
	member(app),
	admin(app),
	invent(app);
};

module.exports = router;