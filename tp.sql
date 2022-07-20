/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50725
 Source Host           : localhost:3306
 Source Schema         : tp

 Target Server Type    : MySQL
 Target Server Version : 50725
 File Encoding         : 65001

 Date: 20/07/2022 22:44:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tp_setting
-- ----------------------------
DROP TABLE IF EXISTS `tp_setting`;
CREATE TABLE `tp_setting` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_bin NOT NULL,
  `value` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `sex` int(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `headurl` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `identity` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stat` int(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for tp_userset
-- ----------------------------
DROP TABLE IF EXISTS `tp_userset`;
CREATE TABLE `tp_userset` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `blogurl` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '博客域名',
  `gonggao` longtext COLLATE utf8_bin COMMENT '公告',
  `apikey` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT 'key',
  `accessKey` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '七牛sk',
  `secretKey` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '七牛sk',
  `bucket` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '七牛云空间名',
  `setkey` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '系统key',
  `username` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '生成key',
  `tianapi` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '天行数据',
  `ym` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

SET FOREIGN_KEY_CHECKS = 1;
