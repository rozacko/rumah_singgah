/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : rumah_singgah

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 28/03/2022 19:19:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for konten
-- ----------------------------
DROP TABLE IF EXISTS `konten`;
CREATE TABLE `konten`  (
  `konten_id` int(11) NOT NULL AUTO_INCREMENT,
  `konten_judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `konten_deskripsi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_date` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`konten_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of konten
-- ----------------------------
INSERT INTO `konten` VALUES (30, 'Kegiatan Adiwiyata paradigma baru', '<p style=\"text-align: justify;\">Bentuk penanaman pohon asam dan markisa jadi satu pot (yg biasanya markisa merambat,dibuat tetap pendek,karena yg diambil daunya .saja.&nbsp; (unt.sayur)Dan pohon asam yg biasanya tinggi,dibuat tetap pendek,Krn stiap waktu dipangkas secara rutin.agar rapi</p>', '8a3b38945589fef931c36d0d936c475c.jpeg', '2022-03-28 19:11:36');
INSERT INTO `konten` VALUES (32, '3. Contoh', '<p style=\"text-align: justify;\">Penghijauan tidak selalu pohon yg umum dilakukan dg pohon2 besar.Tetapi bisa dilakukan dg menanam biji belimbing wuluh secara bergerombol.Tetap dibuat pendek,tidak diambil buahnya ,tetapi daun yg dimanfaatkan.jadi jika sudah mulai tinggi,dipangkas.Sedang hasil pangkasan untuk pupuk/kompos.</p>', '96e7638bbd2de146347b1fcca3858e3a.jpeg', '2022-03-28 14:11:24');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pegawai_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '47bce5c74f589f4867dbd57e9ca9f808', 1);

SET FOREIGN_KEY_CHECKS = 1;
