var express = require('express'),
	r = express.Router(),
	h = require('../handler').admin,
	router;

router = function (app){
	r.get('/peminjaman/:step', h.pinjam);
	r.post('/peminjaman/:step', h.pinjam);

	app.use(r); 
};

module.exports = router;