/*
MySQL Data Transfer
Source Host: localhost
Source Database: ct2_p2
Target Host: localhost
Target Database: ct2_p2
Date: 12/8/2009 14:51:30
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for xp_level_table
-- ----------------------------
DROP TABLE IF EXISTS `xp_level_table`;
CREATE TABLE `xp_level_table` (
  `xp` text NOT NULL,
  `level` int(2) NOT NULL default '0',
  `mask_level` text NOT NULL,
  PRIMARY KEY  (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `xp_level_table` VALUES ('1', '1', '1');
INSERT INTO `xp_level_table` VALUES ('683', '2', '2');
INSERT INTO `xp_level_table` VALUES ('364', '3', '3');
INSERT INTO `xp_level_table` VALUES ('1169', '4', '4');
INSERT INTO `xp_level_table` VALUES ('2885', '5', '5');
INSERT INTO `xp_level_table` VALUES ('6039', '6', '6');
INSERT INTO `xp_level_table` VALUES ('11288', '7', '7');
INSERT INTO `xp_level_table` VALUES ('19424', '8', '8');
INSERT INTO `xp_level_table` VALUES ('31379', '9', '9');
INSERT INTO `xp_level_table` VALUES ('48230', '10', '10');
INSERT INTO `xp_level_table` VALUES ('71202', '11', '11');
INSERT INTO `xp_level_table` VALUES ('101677', '12', '12');
INSERT INTO `xp_level_table` VALUES ('141193', '13', '13');
INSERT INTO `xp_level_table` VALUES ('191453', '14', '14');
INSERT INTO `xp_level_table` VALUES ('254328', '15', '15');
INSERT INTO `xp_level_table` VALUES ('331865', '16', '16');
INSERT INTO `xp_level_table` VALUES ('426285', '17', '17');
INSERT INTO `xp_level_table` VALUES ('539996', '18', '18');
INSERT INTO `xp_level_table` VALUES ('675591', '19', '19');
INSERT INTO `xp_level_table` VALUES ('835855', '20', '20');
INSERT INTO `xp_level_table` VALUES ('1023776', '21', '21');
INSERT INTO `xp_level_table` VALUES ('1242537', '22', '22');
INSERT INTO `xp_level_table` VALUES ('1495532', '23', '23');
INSERT INTO `xp_level_table` VALUES ('1786366', '24', '24');
INSERT INTO `xp_level_table` VALUES ('2118861', '25', '25');
INSERT INTO `xp_level_table` VALUES ('2497060', '26', '26');
INSERT INTO `xp_level_table` VALUES ('2925230', '27', '27');
INSERT INTO `xp_level_table` VALUES ('3407874', '28', '28');
INSERT INTO `xp_level_table` VALUES ('3949728', '29', '29');
INSERT INTO `xp_level_table` VALUES ('4555767', '30', '30');
INSERT INTO `xp_level_table` VALUES ('5231214', '31', '31');
INSERT INTO `xp_level_table` VALUES ('5981540', '32', '32');
INSERT INTO `xp_level_table` VALUES ('6812473', '33', '33');
INSERT INTO `xp_level_table` VALUES ('7730000', '34', '34');
INSERT INTO `xp_level_table` VALUES ('8740373', '35', '35');
INSERT INTO `xp_level_table` VALUES ('9850112', '36', '36');
INSERT INTO `xp_level_table` VALUES ('11066013', '37', '37');
INSERT INTO `xp_level_table` VALUES ('12395150', '38', '38');
INSERT INTO `xp_level_table` VALUES ('13844880', '39', '39');
INSERT INTO `xp_level_table` VALUES ('15422852', '40', '40');
INSERT INTO `xp_level_table` VALUES ('17137003', '41', '41');
INSERT INTO `xp_level_table` VALUES ('18995574', '42', '42');
INSERT INTO `xp_level_table` VALUES ('21007104', '43', '43');
INSERT INTO `xp_level_table` VALUES ('23180443', '44', '44');
INSERT INTO `xp_level_table` VALUES ('25524752', '45', '45');
INSERT INTO `xp_level_table` VALUES ('28049510', '46', '46');
INSERT INTO `xp_level_table` VALUES ('30764520', '47', '47');
INSERT INTO `xp_level_table` VALUES ('33679908', '48', '48');
INSERT INTO `xp_level_table` VALUES ('36806134', '49', '49');
INSERT INTO `xp_level_table` VALUES ('40153996', '50', '50');
INSERT INTO `xp_level_table` VALUES ('45524866', '51', '51');
INSERT INTO `xp_level_table` VALUES ('51262205', '52', '52');
INSERT INTO `xp_level_table` VALUES ('57383683', '53', '53');
INSERT INTO `xp_level_table` VALUES ('63907586', '54', '54');
INSERT INTO `xp_level_table` VALUES ('70852743', '55', '55');
INSERT INTO `xp_level_table` VALUES ('80700340', '56', '56');
INSERT INTO `xp_level_table` VALUES ('91162132', '57', '57');
INSERT INTO `xp_level_table` VALUES ('102265327', '58', '58');
INSERT INTO `xp_level_table` VALUES ('114038009', '59', '59');
INSERT INTO `xp_level_table` VALUES ('126509031', '60', '60');
INSERT INTO `xp_level_table` VALUES ('146307212', '61', '61');
INSERT INTO `xp_level_table` VALUES ('167243292', '62', '62');
INSERT INTO `xp_level_table` VALUES ('189363789', '63', '63');
INSERT INTO `xp_level_table` VALUES ('212716742', '64', '64');
INSERT INTO `xp_level_table` VALUES ('237351414', '65', '65');
INSERT INTO `xp_level_table` VALUES ('271973533', '66', '66');
INSERT INTO `xp_level_table` VALUES ('308441376', '67', '67');
INSERT INTO `xp_level_table` VALUES ('346825236', '68', '68');
INSERT INTO `xp_level_table` VALUES ('387197530', '69', '69');
INSERT INTO `xp_level_table` VALUES ('429632403', '70', '70');
INSERT INTO `xp_level_table` VALUES ('474205752', '71', '71');
INSERT INTO `xp_level_table` VALUES ('532692056', '72', '72');
INSERT INTO `xp_level_table` VALUES ('606319095', '73', '73');
INSERT INTO `xp_level_table` VALUES ('696376868', '74', '74');
INSERT INTO `xp_level_table` VALUES ('804219973', '75', '75');
INSERT INTO `xp_level_table` VALUES ('931275829', '76', '76');
INSERT INTO `xp_level_table` VALUES ('1151275835', '77', '77');
INSERT INTO `xp_level_table` VALUES ('1511275835', '78', '78');
INSERT INTO `xp_level_table` VALUES ('2099275835', '79', '79');
INSERT INTO `xp_level_table` VALUES ('4200000001', '80', '80');
INSERT INTO `xp_level_table` VALUES ('6300000001', '81', '81');
INSERT INTO `xp_level_table` VALUES ('8820000001', '82', '82');
INSERT INTO `xp_level_table` VALUES ('11844000001', '83', '83');
INSERT INTO `xp_level_table` VALUES ('15472800001', '84', '84');
INSERT INTO `xp_level_table` VALUES ('19827360001', '85', '85');
INSERT INTO `xp_level_table` VALUES ('25314000001', '86', 'Full 85');
