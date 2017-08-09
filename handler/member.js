var handler;

home = function(req, res){
	res.render('./member/home.html');
}

notif = function(req, res){
	res.render('./member/notifikasi.html');
}

handler = {
	home: home,
	notif: notif
};

module.exports = handler;