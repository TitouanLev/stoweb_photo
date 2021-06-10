#
# Table structure for table 'tx_stowebphoto_domain_model_photo'
#
CREATE TABLE tx_stowebphoto_domain_model_photo (

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	file int(11) unsigned NOT NULL default '0',
	shooting_date int(11) DEFAULT '0' NOT NULL,
	author varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	subject text

);
