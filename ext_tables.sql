#
# Table structure for table 'tx_mailmock_domain_model_mailmock'
#
CREATE TABLE tx_mailmock_domain_model_mailmock
(
	uid        int(11)           NOT NULL auto_increment,
	pid        int(11) DEFAULT 0 NOT NULL,
	tstamp     int(11) DEFAULT 0 NOT NULL,
	crdate     int(11) DEFAULT 0 NOT NULL,
	subject    text              NOT NULL,
	sender     text              NOT NULL,
	recipients text              NOT NULL,
	html       text              NOT NULL,
	text       text              NOT NULL,
	PRIMARY KEY (uid),
	KEY parent (pid)
);
