var member = require('./member'),
	admin = require('./admin'),
	invent = require('./inventory'),
	handler;

handler = {
	admin: admin,
	member: member,
	inventory: invent
};

module.exports = handler;