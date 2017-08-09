var express = require('express'),
	r = express.Router(),
	h = require('../handler').member,
	router;

router = function (app){
	r.get('/', h.home);

	// r.get('/notifikasi/:user', h.notif);
    
	app.use(r); 
};

module.exports = router;