ALTER TABLE `runalyze_route` ADD `geohashes` longtext AFTER `lngs`, ADD `startpoint` varchar(12) AFTER `startpoint_lng`, ADD `endpoint` varchar(12) AFTER `endpoint_lng`,  ADD `min` varchar(12) AFTER `min_lng`, ADD `max` varchar(12) AFTER `max_lng`;
