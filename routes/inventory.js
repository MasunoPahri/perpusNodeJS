var express = require('express'),
	r = express.Router(),
	h = require('../handler').inventory,
	router;

router = function (app){
	r.get('/books', h.books);
	r.get('/editBook/:id', h.editBook);
	r.post('/upBook/:id', h.upBook);
	r.post('/dltBook/:id', h.dltBook);

	app.use(r); 
};

module.exports = router;