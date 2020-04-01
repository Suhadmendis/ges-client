/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100131
 Source Host           : localhost:3306
 Source Schema         : ges

 Target Server Type    : MySQL
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 01/04/2020 13:11:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user_mast
-- ----------------------------
DROP TABLE IF EXISTS `user_mast`;
CREATE TABLE `user_mast`  (
  `user_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_type` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_depart` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `U_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `R_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_level` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `dev` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0'
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_mast
-- ----------------------------
INSERT INTO `user_mast` VALUES ('admin', '123', 'ADMIN', 'HR', NULL, NULL, '0', '0');

SET FOREIGN_KEY_CHECKS = 1;
